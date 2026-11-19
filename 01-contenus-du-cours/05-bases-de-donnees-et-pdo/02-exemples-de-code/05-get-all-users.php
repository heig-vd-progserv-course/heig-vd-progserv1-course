<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// On définit la requête SQL pour récupérer l'utilisateur.trice `Jane Smith`
$sql = "SELECT * FROM users";

// On prépare la requête SQL pour récupérer l'utilisateur.trice spécifique
$stmt = $pdo->prepare($sql);

// Exécution de la requête SQL pour récupérer l'utilisateur.trice spécifique
$stmt->execute();

// Récupère tous les résultats de la requête
$users = $stmt->fetchAll();

// On affiche les utilisateur.trices
print_r($users);
