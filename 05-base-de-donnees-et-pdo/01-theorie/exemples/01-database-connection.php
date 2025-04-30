<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = './database-01.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);
