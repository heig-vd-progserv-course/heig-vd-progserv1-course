<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Formulaire de contact</title>
</head>

<body>
    <h1>Formulaire de contact</h1>
    <form action="exercice-01a.php" method="POST">
        <label for="firstName">Prénom :</label><br>
        <input type="text" id="firstName" name="firstName">

        <br>

        <label for="lastName">Nom :</label><br>
        <input type="text" id="lastName" name="lastName">

        <br>

        <label for="email">Adresse e-mail :</label><br>
        <input type="email" id="email" name="email">

        <br>

        <br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message"></textarea>

        <br>

        <label for="consent">
            <input type="checkbox" id="consent" name="consent">
            J'accepte le traitement de mes données personnelles
        </label>

        <br>
        <br>

        <button type="submit">Envoyer</button>
        <button type="reset">Réinitialiser</button>
    </form>
</body>

</html>
