<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = './database-05.db';

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

// On définit la requête SQL pour ajouter un utilisateur
$sql = "INSERT INTO users (
    name,
    email
) VALUES (
    'John Doe',
    'john.doe@heig-vd.ch'
)";

// On exécute la requête SQL pour ajouter l'utilisateur
$pdo->exec($sql);

// On définit la requête SQL pour ajouter un utilisateur
$sql = "INSERT INTO users (
    name,
    email
) VALUES (
    'Jane Doe',
    'jane.doe@heig-vd.ch'
)";

// On exécute la requête SQL pour ajouter l'utilisateur
$pdo->exec($sql);

// On récupère l'identifiant de l'utilisateur inséré
$janeDoeId = $pdo->lastInsertId();

// On affiche l'identifiant de l'utilisateur inséré
echo "L'identifiant de l'utilisateur inséré est : $janeDoeId<br>";

// On définit la requête SQL pour récupérer l'utilisateur `Jane Smith`
$sql = "SELECT * FROM users WHERE id = '$janeDoeId'";

// On récupère l'utilisateur spécifique
$user = $pdo->query($sql);

// On transforme le résultat en tableau associatif
$user = $user->fetch();

// On affiche l'utilisateur
print_r($user);
