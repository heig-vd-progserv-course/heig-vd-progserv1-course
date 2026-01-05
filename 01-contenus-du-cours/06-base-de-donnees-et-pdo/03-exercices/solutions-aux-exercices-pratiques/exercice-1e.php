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

// Fonction pour récupérer un cours par son identifiant
function getGrade($id) {
    global $pdo;

    // On définit la requête SQL pour récupérer un cours par son identifiant
    $sql = "SELECT * FROM courses WHERE id = $id";

    // On récupère le cours correspondant à l'identifiant
    $course = $pdo->query($sql);

    // On transforme le résultat en un tableau associatif
    $course = $course->fetch();

    // On retourne le cours
    return $course;
}

$progServ1 = getGrade($progServ1Id);

if ($progServ1) {
    // On affiche le cours récupéré
    echo "<h1>Informations sur le cours</h1>";
    echo "<p><strong>Identifiant</strong> : " . $progServ1['id'] . "</p>";
    echo "<p><strong>Nom</strong> : " . $progServ1['name'] . "</p>";
    echo "<p><strong>Acronyme</strong> : " . $progServ1['acronym'] . "</p>";
    echo "<p><strong>Note</strong> : " . $progServ1['grade'] . "</p>";
}

// On essaie de récupérer un cours avec un identifiant qui n'existe pas
$courseNotFound = getGrade(9999);

if (!$courseNotFound) {
    echo "<p>Aucun cours trouvé avec cet identifiant (9999).</p>";
} else {
    echo "<h1>Informations sur le cours</h1>";
    echo "<p><strong>Identifiant</strong> : " . $courseNotFound['id'] . "</p>";
    echo "<p><strong>Nom</strong> : " . $courseNotFound['name'] . "</p>";
    echo "<p><strong>Acronyme</strong> : " . $courseNotFound['acronym'] . "</p>";
    echo "<p><strong>Note</strong> : " . $courseNotFound['grade'] . "</p>";
}

function getGrades() {
    global $pdo;

    // On définit la requête SQL pour récupérer tous les cours
    $sql = "SELECT * FROM courses";

    // On récupère tous les cours
    $courses = $pdo->query($sql);

    // On transforme le résultat en un tableau associatif
    $courses = $courses->fetchAll();

    // On retourne les cours
    return $courses;
}

$grades = getGrades();

// On affiche tous les cours dans un tableau HTML
?>

<h1>Liste des cours</h1>
<table>
    <tr>
        <th>Identifiant</th>
        <th>Nom</th>
        <th>Acronyme</th>
        <th>Note</th>
    </tr>

    <?php foreach ($grades as $grade): ?>
        <tr>
            <td><?php echo $grade['id']; ?></td>
            <td><?php echo $grade['name']; ?></td>
            <td><?php echo $grade['acronym']; ?></td>
            <td><?php echo $grade['grade']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
// Fonction pour supprimer un cours par son identifiant
function removeGrade($id) {
    global $pdo;

    // On définit la requête SQL pour supprimer un cours par son identifiant
    $sql = "DELETE FROM courses WHERE id = '$id'";

    // On exécute la requête SQL pour supprimer le cours
    return $pdo->exec($sql);
}

// On supprime le cours avec l'identifiant `$baseProg2Id`
$numberOfAffectedRows = removeGrade($baseProg2Id);

if ($numberOfAffectedRows == 1) {
    echo "<p>Le cours avec l'identifiant $baseProg2Id a été supprimé avec succès.</p>";
} else {
    echo "<p>Erreur lors de la suppression du cours avec l'identifiant $baseProg2Id.</p>";
}

// On essaie de supprimer un cours avec un identifiant qui n'existe pas
$numberOfAffectedRows = removeGrade(9999);

if ($numberOfAffectedRows == 1) {
    echo "<p>Le cours avec l'identifiant 9999 a été supprimé avec succès.</p>";
} else {
    echo "<p>Aucun cours trouvé avec cet identifiant (9999).</p>";
}
