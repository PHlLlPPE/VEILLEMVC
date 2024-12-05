<?php
// Classe Task pour gérer les tâches dans une base de données
class Task {
    private $pdo; // Propriété pour stocker l'instance PDO (connexion à la base de données)

    // Constructeur de la classe Task
    public function __construct() {
        // Inclut la configuration de la base de données
        $config = include(__DIR__ . '/../../config/database.php');
        
        // Initialise une connexion PDO en utilisant les paramètres de configuration
        $this->pdo = new PDO(
            "mysql:host={$config['host']};dbname={$config['dbname']}",
            $config['user'],
            $config['password']
        );
    }

    // Méthode pour récupérer toutes les tâches
    public function getAllTasks() {
        // Exécute une requête SQL pour sélectionner toutes les tâches dans la table "tasks"
        $stmt = $this->pdo->query("SELECT * FROM tasks");
        
        // Retourne les résultats sous forme de tableau associatif
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Méthode pour ajouter une nouvelle tâche
    public function addTask($title) {
        // Prépare une requête SQL pour insérer une nouvelle tâche dans la table "tasks"
        $stmt = $this->pdo->prepare("INSERT INTO tasks (title) VALUES (:title)");
        
        // Exécute la requête avec le titre fourni en paramètre
        $stmt->execute(['title' => $title]);
    }

    // Méthode pour supprimer une tâche par son identifiant (id)
    public function deleteTask($id) {
        // Prépare une requête SQL pour supprimer une tâche de la table "tasks" selon son identifiant
        $stmt = $this->pdo->prepare("DELETE FROM tasks WHERE id = :id");
        
        // Exécute la requête avec l'identifiant fourni en paramètre
        $stmt->execute(['id' => $id]);
    }
}
