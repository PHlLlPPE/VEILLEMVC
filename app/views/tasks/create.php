<!DOCTYPE html>
<html>
<head>
    <!-- Lien vers la feuille de styles CSS -->
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <!-- Titre principal de la page -->
    <h1>Ajouter une tâche</h1>

    <!-- Formulaire pour ajouter une nouvelle tâche -->
    <form method="POST" action="/?action=create">
        <!-- Champ de texte pour saisir le titre de la tâche -->
        <input type="text" name="title" placeholder="Titre de la tâche" required>
        
        <!-- Bouton pour soumettre le formulaire -->
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
