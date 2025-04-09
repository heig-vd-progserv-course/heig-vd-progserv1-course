<?php
// Gère la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $consent = isset($_POST["consent"]) ? true : false;

    // Par défaut, il n'y a pas d'erreurs
    $errors = [];

    // Validation des champs
    if (empty($firstName)) {
        array_push($errors, "Le prénom est obligatoire.");
    }

    if (strlen($firstName) < 2) {
        array_push($errors, "Le prénom doit contenir au moins 2 caractères.");
    }

    if (empty($lastName)) {
        array_push($errors, "Le nom est obligatoire.");
    }

    if (strlen($lastName) < 2) {
        array_push($errors, "Le nom doit contenir au moins 2 caractères.");
    }

    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "L'adresse e-mail est invalide.");
    }

    if (empty($message)) {
        array_push($errors, "Le message est obligatoire.");
    }

    if (strlen($message) < 2 || strlen($message) > 500) {
        array_push($errors, "Le message doit contenir entre 2 et 500 caractères.");
    }

    if (!$consent) {
        array_push($errors, "Vous devez accepter le traitement de vos données personnelles.");
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Formulaire de contact</title>
</head>

<body>
    <h1>Formulaire de contact</h1>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        <?php if (empty($errors)) { ?>
            <p style="color: green;">Le formulaire a été soumis avec succès !</p>
        <?php } else { ?>
            <p style="color: red;">Le formulaire contient des erreurs :</p>
            <ul>
                <?php foreach ($errors as $error) { ?>
                    <li><?php echo $error; ?></li>
                <?php } ?>
            </ul>
        <?php } ?>
    <?php } ?>

    <form action="exercice-01e.php" method="POST">
        <label for="firstName">Prénom :</label><br>
        <input type="text" id="firstName" name="firstName" value="<?php echo isset($firstName) ? $firstName : ''; ?>" required>

        <br>

        <label for="lastName">Nom :</label><br>
        <input type="text" id="lastName" name="lastName" value="<?php echo isset($lastName) ? $lastName : ''; ?>" required>

        <br>

        <label for="email">Adresse e-mail :</label><br>
        <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">

        <br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message" required><?php echo isset($message) ? $message : ''; ?></textarea>

        <br>

        <label for="consent">
            <input type="checkbox" id="consent" name="consent" <?php echo isset($consent) && $consent ? 'checked' : ''; ?> required>
            J'accepte le traitement de mes données personnelles
        </label>

        <br>
        <br>

        <button type="submit">Envoyer</button>
        <button type="reset">Réinitialiser</button>
    </form>
</body>

</html>
