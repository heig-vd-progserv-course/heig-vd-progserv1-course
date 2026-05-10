<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// On définit la requête SQL pour ajouter un.e utilisateur.trice
$sql = "INSERT INTO users (name, email) VALUES (:username, :email)";

// Préparation de la requête SQL pour ajouter un.e utilisateur.trice
$stmt = $pdo->prepare($sql);

// On lie les paramètres de la requête SQL aux valeurs à insérer
$stmt->bindValue(':username', 'John Doe');
$stmt->bindValue(':email', 'john.doe@heig-vd.ch');

// Exécution de la requête SQL pour ajouter un.e utilisateur.trice
$stmt->execute();

// On lie les paramètres de la requête SQL aux valeurs à insérer
$stmt->bindValue(':username', 'Jane Smith');
$stmt->bindValue(':email', 'jane.smith@heig-vd.ch');

// Exécution de la requête SQL pour ajouter un.e utilisateur.trice
$stmt->execute();

// On récupère l'identifiant de l'utilisateur.e inséré.e
$lastId = $pdo->lastInsertId();

// On affiche l'identifiant du dernier élément inséré
echo "L'identifiant du dernier élément inséré est : $lastId";
