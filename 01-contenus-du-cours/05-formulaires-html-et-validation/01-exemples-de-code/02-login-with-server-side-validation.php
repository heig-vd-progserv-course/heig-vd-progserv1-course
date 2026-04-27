<?php
// Gère la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Par défaut, il n'y a pas d'erreurs
    $errors = [];

    // Validation des données
    if (empty($username)) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "Le pseudo est obligatoire.");
    } else if (strlen($username) < 2) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "Le pseudo doit contenir au minimum 2 caractères.");
    } else if (strlen($username) > 50) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "Le pseudo doit contenir au maximum 50 caractères.");
    }

    if (empty($password)) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "Le mot de passe est obligatoire.");
    } else if (strlen($password) < 12) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "Le mot de passe doit contenir au minimum 12 caractères.");
    }
}
?>

<!-- Gère l'affichage du formulaire -->
<!DOCTYPE html>
<html>

<head>
    <title>Authentification</title>
</head>

<body>
    <h1>Se connecter</h1>

    <?php
    // On affiche les données si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // S'il n'y a pas d'erreurs, on affiche les données
        if (empty($errors)) {
            echo "<p style='color: green;'>Le nom d'utilisateur est : $username</p>";
            echo "<p style='color: green;'>Le mot de passe est : $password</p>";
        } else {
            // S'il y a des erreurs, on les affiche
            foreach ($errors as $error) {
                echo "<p style='color: red;'>$error<p>";
            }
        }
    }
    ?>

    <form action="./02-login-with-server-side-validation.php" method="POST">
        <label for="username">Pseudo</label>
        <input
            type="text"
            id="username"
            name="username" />

        <br>

        <label for="password">Mot de passe</label>
        <input
            type="password"
            id="password"
            name="password" />

        <br>

        <button type="submit">Envoyer</button>
    </form>
</body>

</html>
