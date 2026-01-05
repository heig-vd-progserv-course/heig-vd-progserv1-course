
<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = './grades.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// On définit la requête SQL pour créer la table `courses` si elle n'existe pas déjà
$sql = "CREATE TABLE IF NOT EXISTS courses (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    acronym TEXT,
    grade FLOAT NOT NULL
);";

// On exécute la requête SQL pour créer la table
$pdo->exec($sql);
