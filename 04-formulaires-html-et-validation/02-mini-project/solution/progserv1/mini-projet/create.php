<?php
// Gère la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $species = $_POST["species"];
    $surname = $_POST["surname"];
    $sex = $_POST["sex"];
    $age = $_POST["age"];
    $color = $_POST["color"];
    $personalities = isset($_POST["personalities"]) ? $_POST["personalities"] : [];
    $size = $_POST["size"];
    $notes = $_POST["notes"];

    // Par défaut, il n'y a pas d'erreurs
    $errors = [];

    // Validation des données
    if (empty($name)) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "Le nom est obligatoire.");
    }

    if (strlen($name) < 2) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "Le nom doit contenir au moins 2 caractères.");
    }

    if (empty($species)) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "L'espèce est obligatoire.");
    }

    if (empty($sex)) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "Le sexe est obligatoire.");
    }

    if (empty($age)) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "L'âge est obligatoire.");
    }

    if ($age < 0) {
        // On ajoute un message d'erreur au tableau
        array_push($errors, "L'âge doit être supérieur ou égal à 0.");
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Crée un nouvel animal de compagnie | Gestionnaire d'animaux de compagnie</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #444;
        }

        p {
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="color"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="radio"]+label,
        input[type="checkbox"]+label {
            display: inline-block;
            margin-right: 15px;
        }

        fieldset div {
            display: inline-block;
            margin-right: 10px;
        }

        fieldset {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        legend {
            font-weight: bold;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4cae4c;
        }

        a {
            color: #5cb85c;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>Crée un nouvel animal de compagnie</h1>
    <p><a href="index.php">Retour à l'accueil</a></p>
    <p>Utilise cette page pour créer un nouvel animal de compagnie.</p>

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

    <form action="create.php" method="POST">
        <label for="name">Nom :</label>
        <input
            type="text"
            id="name"
            name="name"
            value="<?php echo isset($name) ? $name : ''; ?>"
            required
            minlength="2" />

        <br>

        <label for="species">Espèce :</label>
        <select id="species" name="species" required>
            <option value="dog">Chien</option>
            <option value="cat">Chat</option>
            <option value="bird">Oiseau</option>
            <option value="lizard">Lézard</option>
        </select>

        <br>

        <label for="surname">Surnom :</label>
        <input
            type="text"
            id="surname"
            name="surname"
            value="<?php echo isset($surname) ? $surname : ''; ?>" />

        <br>

        <fieldset>
            <legend>Sexe</legend>

            <input
                type="radio"
                id="male"
                name="sex"
                value="male"
                <?php echo (isset($sex) && $sex === 'male') ? 'checked' : ''; ?>
                required />
            <label for="male">Mâle</label><br />

            <input
                type="radio"
                id="female"
                name="sex"
                value="female"
                <?php echo (isset($sex) && $sex === 'female') ? 'checked' : ''; ?>
                required />
            <label for="female">Femelle</label><br />
        </fieldset>

        <label for="age">Âge :</label>
        <input
            type="number"
            id="age"
            name="age"
            value="<?php echo isset($age) ? $age : ''; ?>"
            required
            min="0" />

        <br>

        <label for="color">Couleur :</label>
        <input
            type="color"
            id="color"
            name="color"
            value="<?php echo isset($color) ? $color : '#000000'; ?>" />

        <br>

        <fieldset>
            <legend>Personnalité : </legend>

            <div>
                <input
                    type="checkbox"
                    id="playful"
                    name="personalities[]"
                    value="playful"
                    <?php echo (isset($personalities) && in_array('playful', $personalities)) ? 'checked' : ''; ?> />
                <label for="playful">Joueur</label>
            </div>

            <div>
                <input
                    type="checkbox"
                    id="curious"
                    name="personalities[]"
                    value="curious"
                    <?php echo (isset($personalities) && in_array('curious', $personalities)) ? 'checked' : ''; ?> />
                <label for="curious">Curieux</label>
            </div>

            <div>
                <input
                    type="checkbox"
                    id="lazy"
                    name="personalities[]"
                    value="lazy"
                    <?php echo (isset($personalities) && in_array('lazy', $personalities)) ? 'checked' : ''; ?> />
                <label for="lazy">Paresseux</label>
            </div>

            <div>
                <input
                    type="checkbox"
                    id="friendly"
                    name="personalities[]"
                    value="friendly"
                    <?php echo (isset($personalities) && in_array('friendly', $personalities)) ? 'checked' : ''; ?> />
                <label for="friendly">Amical</label>
            </div>

            <div>
                <input
                    type="checkbox"
                    id="aggressive"
                    name="personalities[]"
                    value="aggressive"
                    <?php echo (isset($personalities) && in_array('aggressive', $personalities)) ? 'checked' : ''; ?> />
                <label for="aggressive">Agressif</label>
            </div>
        </fieldset>

        <br>

        <label for="size">Taille :</label>
        <input
            type="number"
            id="size"
            name="size"
            value="<?php echo isset($size) ? $size : ''; ?>"
            min="0"
            step="0.1" />

        <br>

        <label for="notes">Notes :</label>
        <textarea id="notes" name="notes" rows="5" cols="33"><?php echo isset($notes) ? $notes : ''; ?></textarea>

        <br>

        <button type="submit">Créer</button>
    </form>
</body>

</html>
