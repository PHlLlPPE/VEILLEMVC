-- Crée la base de données 'mvc_project' si elle n'existe pas déjà
CREATE DATABASE IF NOT EXISTS mvc_project;

-- Sélectionne la base de données 'mvc_project' pour exécuter les commandes suivantes
USE mvc_project;

-- Crée la table 'tasks' si elle n'existe pas déjà
CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Colonne 'id' : clé primaire, incrémentation automatique
    title VARCHAR(255) NOT NULL         -- Colonne 'title' : chaîne de caractères, ne peut pas être vide
);
