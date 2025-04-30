# Cours 05 - Base de données et PDO - Exercices

Cette série d'exercices est conçue pour vous permettre de valider les concepts
théoriques et pratiques vus dans le cours
_[Cours 05 - Base de données et PDO](../01-theorie/README.md)_.

## Ressources

- Théorie : [Support de cours](../01-theorie/README.md) ·
  [Présentation (web)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/05-base-de-donnees-et-pdo/01-theorie/index.html)
  ·
  [Présentation (PDF)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/05-base-de-donnees-et-pdo/01-theorie/05-base-de-donnees-et-pdo-presentation.pdf)
- Mini-projet : [Consignes](../02-mini-project/README.md) ·
  [Solution](../02-mini-project/solution/)
- Exercices : [Énoncés et solutions](../03-exercices/README.md)

## Table des matières

- [Ressources](#ressources)
- [Table des matières](#table-des-matières)
- [Exercice 1a](#exercice-1a)
- [Exercice 1b](#exercice-1b)
- [Exercice 1c](#exercice-1c)
- [Exercice 1d](#exercice-1d)
- [Exercice 1e](#exercice-1e)

## Exercice 1a

Créer une base de données SQLite nommée `grades.db` à l'aide de PHP et PDO
contenant une table `courses` avec les colonnes suivantes :

- `id` : identifiant unique (clé primaire, auto-incrémentée)
- `name` : nom de la branche (texte, obligatoire)
- `acronym` : acronyme de branche (texte, optionnelle)
- `grade` : note de la branche (réel, obligatoire)

<details>
<summary>Afficher la réponse</summary>

```php
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
```

</details>

## Exercice 1b

En utilisant la base de données créée dans l'[exercice 1a](#exercice-1a),
insérer les données suivantes dans la table `courses` en utilisant d'une
fonction `addGrade`. Stocker chaque identifiant de cours dans une variable.

**Note** : Comme l'acronyme est optionnel, il peut avoir la valeur `null`. La
fonction `addGrade` doit donc prendre trois paramètres : `name`, `grade`, et
`acronym`, qui a la valeur `null` par défaut.

| `id` | `name`                                         | `acronym`  | `grade` |
| ---- | ---------------------------------------------- | ---------- | ------- |
| 1    | Analyse de marché                              | AnalysMar  | 4.5     |
| 2    | Communication visuelle et sémiologie graphique | ComVisuel  | 4.8     |
| 3    | Ecriture pour le digital                       | EcrireWeb  | 4.2     |
| 4    | Bases de la programmation 2                    | BaseProg2  | 4.9     |
| 5    | Evolution et métiers des médias                | EvolMétMéd | 4.7     |
| 6    | Droit des médias 1                             | Droit1     | 4.0     |
| 7    | Introduction à la durabilité                   | IntroDura  | 4.4     |
| 8    | Programmation serveur 1                        | ProgServ1  | 5.5     |

> [!NOTE]
>
> Si vous souhaitez réinitialiser la base de données, vous pouvez supprimer le
> fichier `grades.db` et exécuter à nouveau le code de l'exercice pour recréer
> la base de données et la table.

<details>
<summary>Afficher la réponse</summary>

```php
<?php

<?php

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
```

</details>

## Exercice 1c

En utilisant la base de données créée dans l'[exercice 1b](#exercice-1b), créer
une fonction `getGrade` qui retourne le cours correspondant à un identifiant
donné.

La fonction doit prendre un paramètre `id` et retourner un tableau associatif
contenant les informations du cours (`id`, `name`, `grade`, `acronym`).

Utiliser la fonction pour afficher les informations du cours avec l'identifiant
`$progServ1Id` (défini dans l'[exercice 1b](#exercice-1b)) s'il existe.

Essayer ensuite de récupérer le cours avec un identifiant qui n'existe pas dans
la base de données (par exemple, `9999`). Que se passe-t-il ? Que pouvez-vous en
conclure ?

> [!NOTE]
>
> Si vous souhaitez réinitialiser la base de données, vous pouvez supprimer le
> fichier `grades.db` et exécuter à nouveau le code de l'exercice pour recréer
> la base de données et la table.

<details>
<summary>Afficher la réponse</summary>

```php
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
  echo "<p>Aucun cours trouvé avec cet identifiant.</p>";
} else {
  echo "<h1>Informations sur le cours</h1>";
  echo "<p><strong>Identifiant</strong> : " . $courseNotFound['id'] . "</p>";
  echo "<p><strong>Nom</strong> : " . $courseNotFound['name'] . "</p>";
  echo "<p><strong>Acronyme</strong> : " . $courseNotFound['acronym'] . "</p>";
  echo "<p><strong>Note</strong> : " . $courseNotFound['grade'] . "</p>";
}
```

Lorsque nous récupérons un cours avec un identifiant qui n'existe pas, la
fonction `getGrade` retourne `false`.

Cela signifie que la requête SQL n'a pas trouvé de résultat correspondant à
l'identifiant donné.

Nous pouvons en déduire que la base de données fonctionne correctement et que la
requête SQL a été exécutée avec succès, mais qu'il n'y a pas de cours
correspondant à l'identifiant fourni.

Cela nous permet de gérer les erreurs de manière appropriée dans notre
application.

</details>

## Exercice 1d

En utilisant la base de données créée dans l'[exercice 1c](#exercice-1c), créer
une fonction `getGrades` qui retourne tous les cours de la table `courses` et
stocker-les dans un tableau associatif nommé `$courses`.

Utiliser la variable `$courses` pour afficher tous les cours dans un tableau
HTML avec les colonnes suivantes :

- Identifiant
- Nom
- Acronyme
- Note

> [!NOTE]
>
> Si vous souhaitez réinitialiser la base de données, vous pouvez supprimer le
> fichier `grades.db` et exécuter à nouveau le code de l'exercice pour recréer
> la base de données et la table.

<details>
<summary>Afficher la réponse</summary>

```php
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
```

</details>

## Exercice 1e

En utilisant la base de données créée dans l'[exercice 1d](#exercice-1d), créer
une fonction `removeGrade` qui supprime un cours de la table `courses` en
prenant un paramètre `id` (identifiant du cours à supprimer).

Utiliser la fonction pour supprimer le cours avec l'identifiant `$baseProg2Id`
(défini dans l'[exercice 1b](#exercice-1b)).

Essayer ensuite de récupérer le cours avec un identifiant qui n'existe pas dans
la base de données (par exemple, `9999`). Que se passe-t-il ? Que pouvez-vous en
conclure ?

> [!NOTE]
>
> Si vous souhaitez réinitialiser la base de données, vous pouvez supprimer le
> fichier `grades.db` et exécuter à nouveau le code de l'exercice pour recréer
> la base de données et la table.

<details>
<summary>Afficher la réponse</summary>

```php
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
```

Comme la méthode `exec` retourne le nombre de lignes affectées par la requête
SQL, nous pouvons savoir si la suppression a réussi ou non.

Si l'identifiant n'existe pas, la fonction retourne 0, car aucun enregistrement
n'a été supprimé (la méthode `exec` retourne le nombre de lignes affectées).

Si l'identifiant existe, la fonction retourne le nombre de lignes supprimées (en
l’occurrence, 1 enregistrement).

Cela nous permet de savoir si la suppression a réussi ou non.

</details>
