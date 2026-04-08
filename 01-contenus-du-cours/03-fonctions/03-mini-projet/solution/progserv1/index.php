<?php
const PAGE_TITLE = "Page d'accueil du cours Programmation serveur 1";
const WELCOME_MESSAGE = "Bienvenue sur la page d'accueil du cours de Programmation serveur 1 !";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo PAGE_TITLE; ?></title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <h1><?php echo PAGE_TITLE; ?></h1>
    <p><?php echo WELCOME_MESSAGE; ?></p>
    <p>Accéder aux <a href="./exercices/index.php">exercices</a>.</p>
    <p>Accéder au <a href="./mini-projet/index.php">mini-projet</a>.</p>
</body>

</html>
