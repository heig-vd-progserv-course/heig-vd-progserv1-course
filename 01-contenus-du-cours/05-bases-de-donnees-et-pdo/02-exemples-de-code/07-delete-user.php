<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// On définit la requête SQL pour supprimer l'utilisateur.trice spécifique
$sql = "DELETE FROM users WHERE email = :email";

// On prépare la requête SQL pour supprimer l'utilisateur.trice
$stmt = $pdo->prepare($sql);

// On lie les paramètres de la requête SQL aux valeurs à insérer
$stmt->bindValue(':email', 'jane.doe@heig-vd.ch');

// On exécute la requête SQL pour supprimer l'utilisateur.trice
$stmt->execute();

// On récupère tous les utilisateurs
$sql = "SELECT * FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();

// On affiche les utilisateurs restants
print_r($users);
