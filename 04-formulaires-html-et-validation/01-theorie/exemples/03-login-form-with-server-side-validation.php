<?php
// Gère la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Par défaut, il n'y a pas d'erreurs
    $errors = [];

    // Validation des données
    if (empty($username)) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "Le pseudo est obligatoire.");
    }

    if (strlen($username) < 2) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "Le pseudo doit contenir au moins 2 caractères.");
    }

    if (empty($password)) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "Le mot de passe est obligatoire.");
    }

    if (strlen($password) < 8) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "Le mot de passe doit contenir au moins 8 caractères.");
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
    <form action="03-login-form-with-server-side-validation.php" method="POST">
        <label for="username">Pseudo :</label><br>
        <input
            type="text"
            id="username"
            name="username"
            value="<?php echo isset($username) ? $username : ''; ?>" />

        <br>

        <label for="password">Mot de passe :</label><br>
        <input
            type="password"
            id="password"
            name="password" />

        <br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
    // On affiche les données si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
</body>

</html>
