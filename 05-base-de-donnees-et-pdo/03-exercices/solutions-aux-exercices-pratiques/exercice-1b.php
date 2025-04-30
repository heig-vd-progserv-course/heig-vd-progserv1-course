
<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = './grades.db';

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
$pdo->exec($sql);

// Fonction pour ajouter une note dans la table `courses`
// Comme l'acronyme est facultatif, on lui donne une valeur par défaut `null`.
function addGrade($name, $grade, $acronym = null) {
    global $pdo;

    // On définit la requête SQL pour ajouter un cours
    $sql = "INSERT INTO courses (
        name,
        acronym,
        grade
    ) VALUES (
        '$name',
        '$acronym',
        '$grade'
    )";

    // On exécute la requête SQL pour ajouter un cours
    $pdo->exec($sql);

    // On récupère l'identifiant du cours ajouté
    $courseId = $pdo->lastInsertId();

    // On retourne l'identifiant du cours ajouté.
    return $courseId;
}

$analysMarId = addGrade('Analyse de marché', 4.5, 'AnalysMar');
$comVisuelId = addGrade('Communication visuelle et sémiologie graphique', 4.8, 'ComVisuel');
$ecrireWebId = addGrade('Ecriture pour le digital', 4.2, 'EcrireWeb');
$baseProg2Id = addGrade('Bases de la programmation 2', 4.9, 'BaseProg2');
$evolMétMédId = addGrade('Evolution et métiers des médias', 4.7, 'EvolMétMéd');
$droit1Id = addGrade('Droit des médias 1', 4.0, 'Droit1');
$introDuraId = addGrade('Introduction à la durabilité', 4.4, 'IntroDura');
$progServ1Id = addGrade('Programmation serveur 1', 5.5, 'ProgServ1');
