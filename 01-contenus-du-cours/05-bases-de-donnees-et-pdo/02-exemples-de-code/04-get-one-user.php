<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// On définit la requête SQL pour récupérer l'utilisateur.trice spécifique
$sql = "SELECT * FROM users WHERE name = :name";

// On prépare la requête SQL pour récupérer l'utilisateur.trice spécifique
$stmt = $pdo->prepare($sql);

// On lie les paramètres de la requête SQL aux valeurs à insérer
$stmt->bindValue(':name', 'John Doe');

// Exécution de la requête SQL pour récupérer l'utilisateur.trice spécifique
$stmt->execute();

// Récupère le résultat de la requête
$user = $stmt->fetch();

// On affiche l'utilisateur.trice
print_r($user);
