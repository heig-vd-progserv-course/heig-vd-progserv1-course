<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// Insère des données d'exemple dans la table `users`
$sql = "INSERT INTO users (name, email) VALUES (:username, :email)";

$stmt = $pdo->prepare($sql);

// Les données contiennent une tentative d'injection de code malveillant
$stmt->bindValue(':username', 'John Doe');
$stmt->bindValue(':email', '<script>alert("Oh no")</script>');

$stmt->execute();

// On définit la requête SQL pour récupérer tous les utilisateur.trices
$sql = "SELECT * FROM users";

// On prépare la requête SQL pour récupérer tous les utilisateur.trices
$stmt = $pdo->prepare($sql);

// On exécute la requête SQL pour récupérer tous les utilisateur.trices
$stmt->execute();

// Récupère tous les résultats de la requête
$users = $stmt->fetchAll();

// On affiche les utilisateur.trices de manière non-sécurisée
foreach ($users as $user) {
    echo "Nom : " . $user['name'] . "<br>";
    echo "Email : " . $user['email'] . "<br>";
}

echo "<hr>";

// On affiche les utilisateur.trices de manière sécurisée
foreach ($users as $user) {
    echo "Nom : " . htmlspecialchars($user['name']) . "<br>";
    echo "Email : " . htmlspecialchars($user['email']) . "<br>";
}
