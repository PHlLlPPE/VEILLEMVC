<!DOCTYPE html>
<html>
<head>
    <!-- Lien vers la feuille de styles CSS -->
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <!-- Titre principal de la page -->
    <h1>Liste des tâches</h1>

    <!-- Lien pour accéder à la page d'ajout d'une nouvelle tâche -->
    <a href="/?action=create">Ajouter une tâche</a>

    <!-- Liste non ordonnée pour afficher les tâches -->
    <ul>
        <?php foreach ($tasks as $task): ?>
            <!-- Boucle PHP pour parcourir toutes les tâches et les afficher -->
            <li>
                <!-- Affiche le titre de la tâche en échappant les caractères spéciaux pour éviter les failles XSS -->
                <?= htmlspecialchars($task['title']) ?>
                
                <!-- Lien pour supprimer une tâche spécifique grâce à son ID -->
                <a href="/?action=delete&id=<?= $task['id'] ?>">Supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
