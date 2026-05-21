# Bases de données et PDO - Exercices

L. Delafontaine, avec l'aide de
[GitHub Copilot](https://github.com/features/copilot).

Ce travail est sous licence [CC BY-SA 4.0][licence].

> [!TIP]
>
> Toutes les informations relatives à ce contenu sont décrites dans le
> [contenu principal](../README.md).

## Table des matières

- [Table des matières](#table-des-matières)
- [Utilisation avec Git/GitHub](#utilisation-avec-gitgithub)
- [Exercices](#exercices)
  - [Exercice 1a](#exercice-1a)
  - [Exercice 1b](#exercice-1b)
  - [Exercice 1c](#exercice-1c)
  - [Exercice 1d](#exercice-1d)
  - [Exercice 1e](#exercice-1e)

## Utilisation avec Git/GitHub

Il est recommandé d'utiliser Git et GitHub pour suivre votre progression dans
les exercices.

En utilisant le dépôt GitHub que vous avez mis en place depuis le début du
cours, réalisez les exercices suivants.

Utilisez le workflow Git présenté en cours pour commiter et pousser vos
modifications sur votre dépôt GitHub.

Nous ne recommandons pas de structures particulières pour organiser les
exercices. Vous êtes libre de les organiser comme vous le souhaitez.

> [!TIP]
>
> Une personne ayant déjà suivi le cours a réalisé un petit script pour
> automatiser la création de fichiers d'exercices et la mise à jour du fichier.
>
> Vous pouvez trouver ce script à l'adresse suivante :
> <https://github.com/Harpogma/progserv1/blob/main/scripts/auto_files_creation.sh>.
>
> Merci à [Harpogma](https://github.com/Harpogma) pour ce script ! N'hésitez pas
> à l'utiliser et à le modifier selon vos besoins.

Voici quelques suggestions d'organisation pour les exercices dans le dossier
`exercices` de votre projet :

- Vous pouvez créer un sous-dossier pour chaque séance du cours, par exemple
  `exercices/seance-1`, `exercices/seance-2`, etc., et y stocker les exercices
  correspondants à chaque séance.
- Vous pouvez créer un fichier pour chaque exercice, par exemple
  `exercices/exercice-1.php`, `exercices/exercice-2.php`, etc., et y stocker le
  code de chaque exercice.
- Vous pouvez également mettre à jour le fichier `exercices/index.php` avec des
  liens vers les différents exercices, pour faciliter l'accès à chacun d'eux
  depuis le navigateur web.

## Exercices

> [!NOTE]
>
> Bien que ces exercices puissent paraître simples et que leur solution est
> disponible dans ce même document, il est fortement recommandé de les réaliser
> sans consulter les solutions au préalable.
>
> Ils ont pour but de vous former et de pratiquer les concepts vus dans le
> contenu de cours.
>
> Il est donc important de les faire par vous-même avant de vérifier vos
> réponses avec les solutions fournies.

### Exercice 1a

Créer une base de données SQLite nommée `grades.db` à l'aide de PHP et PDO
contenant une table `courses` avec les colonnes suivantes :

- `id` : identifiant unique (clé primaire, auto-incrémentée).
- `name` : nom de la branche (texte, obligatoire).
- `acronym` : acronyme de branche (texte, optionnelle).
- `grade` : note de la branche (réel, obligatoire).

<details>
<summary>Afficher la réponse</summary>

```php
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
```

</details>

### Exercice 1b

En utilisant la base de données créée dans l'[exercice 1a](#exercice-1a),
insérer des données dans la table `courses` en utilisant d'une fonction
`addGrade`. Stocker chaque identifiant de cours dans une variable.

Par exemple, ajoutez le cours "Programmation serveur 1 (ProgServ1)" avec la note
`5.5` et l'acronyme "ProgServ1".

Ajoutez les autres cours que vous suivez dans la base de données.

**Note** : Comme l'acronyme est optionnel, il peut avoir la valeur `null`. La
fonction `addGrade` doit donc prendre trois paramètres : `name`, `grade`, et
`acronym`, qui a la valeur `null` par défaut.

> [!NOTE]
>
> Si vous souhaitez réinitialiser la base de données, vous pouvez supprimer le
> fichier `grades.db` et exécuter à nouveau le code de l'exercice pour recréer
> la base de données et la table.

<details>
<summary>Afficher la réponse</summary>

```php
// Le code précédent est supposé être présent ici...

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
```

</details>

### Exercice 1c

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
// Le code précédent est supposé être présent ici...

// Fonction pour récupérer un cours par son identifiant
function getGrade(int $id): ?array {
    global $pdo;

    // On définit la requête SQL pour récupérer un cours par son identifiant
    $sql = "SELECT * FROM courses WHERE id = :id";

    // On prépare la requête SQL pour éviter les injections SQL
    $stmt = $pdo->prepare($sql);

    // On lie le paramètre de la requête SQL à la variable correspondante
    $stmt->bindValue(':id', $id);

    // On exécute la requête
    $stmt->execute();

    // On transforme le résultat en un tableau associatif
    $course = $stmt->fetch();

    // On retourne le cours
    return $course;
}

$progServ1 = getGrade($progServ1Id);

if ($progServ1) {
    // On affiche le cours récupéré
    echo "<h1>Informations sur le cours</h1>";
    echo "<p><strong>Identifiant</strong> : " . htmlentities($progServ1['id']) . "</p>";
    echo "<p><strong>Nom</strong> : " . htmlentities($progServ1['name']) . "</p>";
    echo "<p><strong>Acronyme</strong> : " . htmlentities($progServ1['acronym']) . "</p>";
    echo "<p><strong>Note</strong> : " . htmlentities($progServ1['grade']) . "</p>";
}

// On essaie de récupérer un cours avec un identifiant qui n'existe pas
$courseNotFound = getGrade(9999);

if (!$courseNotFound) {
    echo "<p>Aucun cours trouvé avec cet identifiant.</p>";
} else {
    echo "<h1>Informations sur le cours</h1>";
    echo "<p><strong>Identifiant</strong> : " . htmlentities($courseNotFound['id']) . "</p>";
    echo "<p><strong>Nom</strong> : " . htmlentities($courseNotFound['name']) . "</p>";
    echo "<p><strong>Acronyme</strong> : " . htmlentities($courseNotFound['acronym']) . "</p>";
    echo "<p><strong>Note</strong> : " . htmlentities($courseNotFound['grade']) . "</p>";
}
```

Lorsque nous récupérons un cours avec un identifiant qui n'existe pas, la
fonction `getGrade` retourne `null`.

Cela signifie que la requête SQL n'a pas trouvé de résultat correspondant à
l'identifiant donné.

Nous pouvons en déduire que la base de données fonctionne correctement et que la
requête SQL a été exécutée avec succès, mais qu'il n'y a pas de cours
correspondant à l'identifiant fourni.

Cela nous permet de gérer les erreurs de manière appropriée dans notre
application.

</details>

### Exercice 1d

En utilisant la base de données créée dans l'[exercice 1c](#exercice-1c), créer
une fonction `getGrades` qui retourne tous les cours de la table `courses` et
stocker-les dans un tableau associatif nommé `$courses`.

Utiliser la variable `$courses` pour afficher tous les cours dans un tableau
HTML avec les colonnes suivantes :

- Identifiant.
- Nom.
- Acronyme.
- Note.

> [!NOTE]
>
> Si vous souhaitez réinitialiser la base de données, vous pouvez supprimer le
> fichier `grades.db` et exécuter à nouveau le code de l'exercice pour recréer
> la base de données et la table.

<details>
<summary>Afficher la réponse</summary>

```php
// Le code précédent est supposé être présent ici...

// Fonction pour récupérer tous les cours
function getGrades(): array {
    global $pdo;

    // On définit la requête SQL pour récupérer tous les cours
    $sql = "SELECT * FROM courses";

    // On prépare la requête SQL pour éviter les injections SQL
    $stmt = $pdo->prepare($sql);

    // On exécute la requête SQL pour récupérer tous les cours
    $stmt->execute();

    // On transforme le résultat en un tableau associatif
    $courses = $stmt->fetchAll();

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
            <td><?php echo htmlspecialchars($grade['id']); ?></td>
            <td><?php echo htmlspecialchars($grade['name']); ?></td>
            <td><?php echo htmlspecialchars($grade['acronym']); ?></td>
            <td><?php echo htmlspecialchars($grade['grade']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
```

Comme nous affichons des données provenant de la base de données, il est
important d'utiliser la fonction `htmlspecialchars` pour éviter les attaques de
type XSS (Cross-Site Scripting).

</details>

### Exercice 1e

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
// Le code précédent est supposé être présent ici...

<?php
// Fonction pour supprimer un cours par son identifiant
function removeGrade(int $id) {
    global $pdo;

    // On définit la requête SQL pour supprimer un cours par son identifiant
    $sql = "DELETE FROM courses WHERE id = :id";

    // On prépare la requête SQL pour éviter les injections SQL
    $stmt = $pdo->prepare($sql);

    // On lie le paramètre de la requête SQL à la variable correspondante
    $stmt->bindValue(':id', $id);

    // On exécute la requête SQL pour supprimer le cours
    return $stmt->execute();
}

// On supprime le cours avec l'identifiant `$progServ1Id`
$success = removeGrade($progServ1Id);

if ($success) {
    echo "<p>Le cours avec l'identifiant " . htmlspecialchars($progServ1Id) . " a été supprimé avec succès.</p>";
} else {
    echo "<p>Erreur lors de la suppression du cours avec l'identifiant " . htmlspecialchars($progServ1Id) . ".</p>";
}

// On essaie de supprimer un cours avec un identifiant qui n'existe pas
$success = removeGrade(9999);

if ($success) {
    echo "<p>Le cours avec l'identifiant 9999 a été supprimé avec succès.</p>";
} else {
    echo "<p>Aucun cours trouvé avec cet identifiant (9999).</p>";
}
```

Comme la méthode `execute` retourne un booléen indiquant si la requête a été
exécutée avec succès ou non, nous pouvons savoir si la suppression a réussi ou
non.

</details>

<!-- URLs -->

[licence]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md
