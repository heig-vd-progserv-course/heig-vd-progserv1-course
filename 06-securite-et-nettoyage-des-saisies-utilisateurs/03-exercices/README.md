# Cours 06 - Sécurité et nettoyage des saisies utilisateurs - Exercices

Cette série d'exercices est conçue pour vous permettre de valider les concepts
théoriques et pratiques vus dans le cours
_[Cours 06 - Sécurité et nettoyage des saisies utilisateurs](../01-theorie/README.md)_.

## Ressources

- Théorie : [Support de cours](../01-theorie/README.md) ·
  [Présentation (web)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/06-securite-et-nettoyage-des-saisies-utilisateurs/01-theorie/index.html)
  ·
  [Présentation (PDF)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/06-securite-et-nettoyage-des-saisies-utilisateurs/01-theorie/06-securite-et-nettoyage-des-saisies-utilisateurs-presentation.pdf)
- Mini-projet : [Consignes](../02-mini-project/README.md) ·
  [Solution](../02-mini-project/solution/)
- Exercices : [Énoncés et solutions](../03-exercices/README.md)

## Table des matières

- [Ressources](#ressources)
- [Table des matières](#table-des-matières)
- [Exercice 1](#exercice-1)
- [Exercice 2](#exercice-2)
- [Exercice 3](#exercice-3)

## Exercice 1

Quels sont les principaux problèmes de sécurité que l'on peut rencontrer lorsque
l'on utilise des formulaires HTML ?

Quelles sont les solutions pour les éviter ?

<details>
<summary>Afficher la réponse</summary>

Il existe deux types de problèmes de sécurité principaux :

1. **Injection SQL** : Cela se produit lorsque des données non filtrées sont
   insérées directement dans une requête SQL. Cela peut permettre à un attaquant
   d'exécuter des commandes SQL arbitraires sur la base de données.

   **Solution** : Utiliser des requêtes préparées et des instructions
   paramétrées pour éviter l'injection SQL.

2. **Cross-Site Scripting (XSS)** : Cela se produit lorsque des données non
   filtrées sont affichées sur une page web. Cela peut permettre à un attaquant
   d'injecter du code JavaScript malveillant dans la page, qui sera exécuté par
   le navigateur de l'utilisateur.

   **Solution** : Échapper les données avant de les afficher sur la page web.

</details>

## Exercice 2

En quoi consiste le fait d'utiliser des requêtes préparées ? Pourquoi est-ce
important ? Donnez un exemple de code PHP qui illustre la différence entre une
requête préparée et une requête non préparée.

<details>
<summary>Afficher la réponse</summary>

Les requêtes préparées est une technique utilisée pour éviter les injections
SQL.

Elles permettent de séparer la logique SQL de la donnée.

Voici un exemple de code PHP qui illustre la différence entre une requête
préparée et une requête non préparée :

```php
// Requête non préparée
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = $pdo->query($sql);
$result = $result->fetch();

// Requête préparée
$sql = "SELECT * FROM users WHERE username = :username AND password = :password";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);

$stmt->execute();
$result = $stmt->fetch();
```

</details>

## Exercice 3

Une connaissance passionnée de musique a écrit une petite application PHP qui
lui permet de sauver ses artistes favori.tes.

Elle a remarqué que l'application fonctionne très bien, mais que l'application a
un comportement inattendu pour certain.es artistes.

Elle vous a partagé une liste d'artistes qu'elle a essayé d'ajouter à sa liste
d'artistes favori.tes, mais dont certain.es n'ont pas fonctionné comme prévu :

- **`2Pac`**
- **`The Notorious B.I.G.`**
- **`Eminem`**
- **`<script>alert('I <3 JavaScript')</script>`**
- **`'); DROP TABLE favorite_artists; --`**

Elle vous a demandé de l'aide pour corriger le problème.

Que pouvez-vous dire de son code ? Proposez une version corrigée du code PHP
qu'elle vous a partagé :

```php
<?php
// Constante pour le fichier de base de données SQLite
const DATABASE_FILE = "./favorite-artists.db";

// Connexion à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// On définit la requête SQL pour créer une table `favorite_artists`
$sql = "CREATE TABLE IF NOT EXISTS favorite_artists (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    band_name TEXT NOT NULL
)";

// On exécute la requête SQL pour créer la table
$pdo->exec($sql);

// Gère la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // On récupère les données du formulaire
    $bandName = $_POST["band-name"];

    // On définit la requête SQL pour ajouter un.e artiste favori.te
    $sql = "INSERT INTO favorite_artists (band_name) VALUES ('$bandName')";

    // On exécute la requête SQL pour ajouter l'artiste favori.te
    $pdo->exec($sql);
}

// On définit la requête SQL pour récupérer tous les artistes favori.tes
$sql = "SELECT * FROM favorite_artists";

// On exécute la requête SQL pour récupérer les artistes favori.tes
$favoriteArtists = $pdo->query($sql);

// On transforme le résultat en tableau
$favoriteArtists = $favoriteArtists->fetchAll();
?>

<!-- Gère l'affichage du formulaire -->
<!DOCTYPE html>
<html>

<head>
    <title>Mes artistes favori.tes</title>
</head>

<body>
    <h1>Mes artistes favori.tes</h1>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        <p>L'artiste favori.te a été rajouté.</p>
    <?php } ?>

    <ul>
        <?php foreach ($favoriteArtists as $favoriteArtist) : ?>
            <li><?= $favoriteArtist["band_name"] ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Ajouter un.e artiste favori.te</h2>

    <form action="exercice-01-with-vulnerabilities.php" method="POST">
        <label for="band-name">Artiste</label><br>
        <input
            type="text"
            id="band-name"
            name="band-name" />

        <br>

        <button type="submit">Envoyer</button>
    </form>
</body>

</html>
```

<details>
<summary>Afficher la réponse</summary>

Le code présente plusieurs problèmes de sécurité :

1. **Injection SQL** : La requête SQL pour ajouter un.e artiste favori.te
   utilise directement la variable `$bandName` sans la filtrer ou la préparer.
   Cela permet à un attaquant d'injecter du code SQL malveillant.
2. **Cross-Site Scripting (XSS)** : Les données affichées sur la page ne sont
   pas échappées, ce qui permet à un attaquant d'injecter du code JavaScript
   malveillant dans la page.
3. **Aucune validation des données** : Le code ne valide pas les données saisies
   par l'utilisateur, ce qui peut entraîner des erreurs ou des comportements
   inattendus.

**Code corrigé**

```php
<?php
// Constante pour le fichier de base de données SQLite
const DATABASE_FILE = "./favorite-artists.db";

// Connexion à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// Création d'une table `favorite_artists`
$sql = "CREATE TABLE IF NOT EXISTS favorite_artists (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    band_name TEXT NOT NULL
)";

// On exécute la requête SQL pour créer la table
$pdo->exec($sql);

// Gère la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // On récupère les données du formulaire
    $bandName = $_POST["band-name"];

    // On prépare la requête SQL pour ajouter un.e artiste favori.te
    $sql = "INSERT INTO favorite_artists (band_name) VALUES (:bandName)";

    // On prépare la requête
    $stmt = $pdo->prepare($sql);

    // On lie les paramètres
    $stmt->bindParam(':bandName', $bandName);

    // On exécute la requête SQL pour ajouter l'artiste favori.te
    $stmt->execute();
}

// On prépare la requête SQL pour récupérer tous les artistes favori.tes
$sql = "SELECT * FROM favorite_artists";

// On exécute la requête SQL pour récupérer les artistes favori.tes
$favoriteArtists = $pdo->query($sql);

// On transforme le résultat en tableau
$favoriteArtists = $favoriteArtists->fetchAll();
?>

<!-- Gère l'affichage du formulaire -->
<!DOCTYPE html>
<html>

<head>
    <title>Mes artistes favori.tes</title>
</head>

<body>
    <h1>Mes artistes favori.tes</h1>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        <p>L'artiste favori.te a été rajouté.</p>
    <?php } ?>

    <ul>
        <?php foreach ($favoriteArtists as $favoriteArtist) : ?>
            <li><?= htmlspecialchars($favoriteArtist["band_name"]) ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Ajouter un.e artiste favori.te</h2>

    <form action="exercice-01-without-vulnerabilities.php" method="POST">
        <label for="band-name">Artiste</label><br>
        <input
            type="text"
            id="band-name"
            name="band-name" />

        <br>

        <button type="submit">Envoyer</button>
    </form>
</body>

</html>
```

</details>
