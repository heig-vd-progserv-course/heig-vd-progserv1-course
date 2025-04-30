<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = './database-02.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// Création d'une table `users`
$sql = 'CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE
)';

// On exécute la requête SQL pour créer la table
$pdo->exec($sql);
