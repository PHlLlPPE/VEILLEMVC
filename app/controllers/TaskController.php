<?php

class TaskController
{
    private $pdo;

    // Constructeur pour initialiser la connexion à la base de données
    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=mvc_project', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    // Afficher la liste des tâches
    public function index()
    {
        $stmt = $this->pdo->query('SELECT * FROM tasks');
        $tasks = $stmt->fetchAll();

        // Inclure une vue pour afficher les tâches
        require_once __DIR__ . '/../views/tasks/index.php';
    }

    // Ajouter une tâche
    public function addTask()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'])) {
            $title = htmlspecialchars($_POST['title']);

            try {
                $stmt = $this->pdo->prepare('INSERT INTO tasks (title) VALUES (:title)');
                $stmt->bindParam(':title', $title);

                if ($stmt->execute()) {
                    header("Location: index.php?controller=task&action=index"); // Rediriger après succès
                    exit();
                }
            } catch (PDOException $e) {
                echo "Erreur lors de l'ajout de la tâche : " . $e->getMessage();
            }
        } else {
            // Inclure une vue pour afficher le formulaire d'ajout
            require_once __DIR__ . '/../views/tasks/add.php';
        }
    }
}
