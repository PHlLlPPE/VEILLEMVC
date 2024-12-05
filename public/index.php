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
        <?php if (!empty($tasks)): ?>
            <!-- Vérifie si le tableau $tasks contient des données -->
            <?php foreach ($tasks as $task): ?>
                <!-- Parcours de chaque tâche dans le tableau $tasks -->
                <li>
                    <!-- Affiche le titre de la tâche en sécurisant les caractères spéciaux -->
                    <?= htmlspecialchars($task['title']) ?>
                    
                    <!-- Lien pour supprimer la tâche avec son ID unique -->
                    <a href="/?action=delete&id=<?= $task['id'] ?>">Supprimer</a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <!-- Affiche un message si aucune tâche n'est disponible -->
            <li>Aucune tâche disponible</li>
        <?php endif; ?>
    </ul>
</body>

</html>
