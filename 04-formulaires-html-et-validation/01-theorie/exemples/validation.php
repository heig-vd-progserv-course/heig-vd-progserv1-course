<?php
// Gère la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];

    // Validation des données
    if (empty($firstName) || empty($lastName)) {
        $error = "Tous les champs sont obligatoires.";
    } elseif (!preg_match("/[a-zA-Z- ]*/", $firstName)) {
        $error = "Le prénom ne doit contenir que des lettres et des espaces.";
    } elseif (!preg_match("/[a-zA-Z- ]*/", $lastName)) {
        $error = "Le nom ne doit contenir que des lettres et des espaces.";
    } else {
        echo "Bonjour, $firstName $lastName !";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Créer son compte</title>
</head>

<body>
    <h1>Créer son compte</h1>
    <form action="register.php" method="POST">
        <label for="firstName">Prénom :</label>
        <input
            type="text"
            id="firstName"
            name="firstName"
            required
            minlength="2"
            maxlength="50"
            value="<?= isset($firstName) ? htmlspecialchars($firstName) : ''; ?>" />

        <label for="lastName">Nom :</label>
        <input
            type="text"
            id="lastName"
            name="lastName"
            required
            minlength="2"
            maxlength="50"
            value="<?= isset($lastName) ? htmlspecialchars($lastName) : ''; ?>" />

        <?php if (isset($error)) { ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php } ?>

        <button type="submit">Envoyer</button>
    </form>
</body>

</html>
