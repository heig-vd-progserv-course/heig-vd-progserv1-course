<?php
// Gère la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $consent = isset($_POST["consent"]) ? true : false;

    echo "Prénom : " . $firstName . "<br>";
    echo "Nom : " . $lastName . "<br>";
    echo "Adresse e-mail : " . $email . "<br>";
    echo "Message : " . $message . "<br>";
    echo "Consentement : " . ($consent ? "Oui" : "Non") . "<br>";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Formulaire de contact</title>
</head>

<body>
    <h1>Formulaire de contact</h1>
    <form action="exercice-01c.php" method="POST">
        <label for="firstName">Prénom :</label><br>
        <input type="text" id="firstName" name="firstName" value="<?php echo isset($firstName) ? $firstName : ''; ?>">

        <br>

        <label for="lastName">Nom :</label><br>
        <input type="text" id="lastName" name="lastName" value="<?php echo isset($lastName) ? $lastName : ''; ?>">

        <br>

        <label for="email">Adresse e-mail :</label><br>
        <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">

        <br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message"><?php echo isset($message) ? $message : ''; ?></textarea>

        <br>

        <label for="consent">
            <input type="checkbox" id="consent" name="consent" <?php echo isset($consent) && $consent ? 'checked' : ''; ?>>
            J'accepte le traitement de mes données personnelles
        </label>

        <br>
        <br>

        <button type="submit">Envoyer</button>
        <button type="reset">Réinitialiser</button>
    </form>
</body>

</html>
