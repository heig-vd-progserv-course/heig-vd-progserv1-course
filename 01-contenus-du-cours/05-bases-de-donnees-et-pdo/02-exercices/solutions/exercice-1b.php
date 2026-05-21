<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/grades.db';

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
$stmt = $pdo->prepare($sql);

$stmt->execute();

// Fonction pour ajouter une note dans la table `courses`
// Comme l'acronyme est facultatif, on lui donne une valeur par défaut `null`.
function addGrade(string $name, float $grade, ?string $acronym): int {
    global $pdo;

    // On définit la requête SQL pour ajouter un cours
    $sql = "INSERT INTO courses (
        name,
        acronym,
        grade
    ) VALUES (
        :name,
        :acronym,
        :grade
    )";

    // On prépare la requête SQL pour éviter les injections SQL
    $stmt = $pdo->prepare($sql);

    // On lie les paramètres de la requête SQL aux variables correspondantes
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':acronym', $acronym);
    $stmt->bindValue(':grade', $grade);

    // On exécute la requête SQL pour ajouter un cours
    $stmt->execute();

    // On récupère l'identifiant du cours ajouté
    $courseId = $pdo->lastInsertId();

    // On retourne l'identifiant du cours ajouté.
    return $courseId;
}

$progServ1Id = addGrade('Programmation serveur 1', 5.5, 'ProgServ1');
