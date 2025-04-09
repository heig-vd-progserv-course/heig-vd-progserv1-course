<!-- Gère l'affichage du formulaire -->
<!DOCTYPE html>
<html>

<head>
    <title>Authentification</title>
</head>

<body>
    <h1>Se connecter</h1>
    <form action="01-login-form.php" method="POST">
        <label for="username">Pseudo :</label><br>
        <input type="text" id="username" name="username" />

        <br>

        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" />

        <br>

        <button type="submit">Envoyer</button>
    </form>

</body>

</html>

<?php
// Gère la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "Le nom d'utilisateur est : " . $username . "<br>";
    echo "Le mot de passe est : " . $password . "<br>";
}
?>
