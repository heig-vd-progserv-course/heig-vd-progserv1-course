<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// On définit la requête SQL pour mettre à jour l'utilisateur.trice spécifique
$sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";

// On prépare la requête SQL pour mettre à jour l'utilisateur.trice
$stmt = $pdo->prepare($sql);

// On lie les paramètres de la requête SQL aux valeurs à insérer
$stmt->bindValue(':name', 'Jane Doe');
$stmt->bindValue(':email', 'jane.doe@heig-vd.ch');
$stmt->bindValue(':id', 2);

// On exécute la requête SQL pour mettre à jour l'utilisateur.trice
$stmt->execute();

// On récupère l'utilisateur.trice mis à jour
$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', 2);
$stmt->execute();
$user = $stmt->fetch();

// On affiche l'utilisateur.trice mis à jour
print_r($user);
