# Formulaires HTML et validation - Exercices

L. Delafontaine, avec l'aide de
[GitHub Copilot](https://github.com/features/copilot).

Ce travail est sous licence [CC BY-SA 4.0][licence].

> [!TIP]
>
> Toutes les informations relatives à ce contenu sont décrites dans le
> [contenu principal](../README.md).

## Table des matières

- [Table des matières](#table-des-matières)
- [Utilisation avec Git/GitHub](#utilisation-avec-gitgithub)
- [Exercices](#exercices)
  - [Exercice 1a](#exercice-1a)
  - [Exercice 1b](#exercice-1b)
  - [Exercice 1c](#exercice-1c)
  - [Exercice 1d](#exercice-1d)
  - [Exercice 1e](#exercice-1e)

## Utilisation avec Git/GitHub

Il est recommandé d'utiliser Git et GitHub pour suivre votre progression dans
les exercices.

En utilisant le dépôt GitHub que vous avez mis en place depuis le début du
cours, réalisez les exercices suivants.

Utilisez le workflow Git présenté en cours pour commiter et pousser vos
modifications sur votre dépôt GitHub.

## Exercices

> [!NOTE]
>
> Bien que ces exercices puissent paraître simples et que leur solution est
> disponible dans ce même document, il est fortement recommandé de les réaliser
> sans consulter les solutions au préalable.
>
> Ils ont pour but de vous former et de pratiquer les concepts vus dans le
> contenu de cours.
>
> Il est donc important de les faire par vous-même avant de vérifier vos
> réponses avec les solutions fournies.

### Exercice 1a

Réalisez un formulaire de contact en HTML avec les champs suivants :

- Nom (champ texte)
- Prénom (champ texte)
- Adresse e-mail (champ email)
- Message (champ textarea)
- Consentement pour le traitement des données personnelles (champ case à cocher)
- Bouton d'envoi (submit)
- Bouton de réinitialisation (reset)

Le formulaire doit être structuré de manière à ce que chaque champ soit
accompagné d'une étiquette (label). Le formulaire doit être envoyé à une page de
traitement (`contact.php`) en méthode POST.

Il n'est pas nécessaire de valider les données saisies par l'utilisateur ou de
mettre de contraintes sur les champs en dehors des types (text, email) pour le
moment.

<details>
<summary>Afficher la réponse</summary>

```php
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Formulaire de contact</title>
</head>

<body>
    <h1>Formulaire de contact</h1>
    <form action="contact.php" method="POST">
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
```

</details>

### Exercice 1b

En utilisant le formulaire de contact réalisé dans
l'[exercice 1a](#exercice-1a), récupérez les données saisies par l'utilisateur
et affichez les simplement dans la page.

Il n'est pas nécessaire de conserver les données saisies par l'utilisateur dans
le formulaire après l'envoi pour le moment.

<details>
<summary>Afficher la réponse</summary>

```php
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
    <form action="contact.php" method="POST">
        <label for="firstName">Prénom :</label><br>
        <input type="text" id="firstName" name="firstName">

        <br>

        <label for="lastName">Nom :</label><br>
        <input type="text" id="lastName" name="lastName">

        <br>

        <label for="email">Adresse e-mail :</label><br>
        <input type="email" id="email" name="email">

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
```

</details>

### Exercice 1c

En utilisant le formulaire de contact réalisé dans
l'[exercice 1b](#exercice-1b), conservez et réutilisez les données saisies par
l'utilisateur pour que la personne puisse les réutiliser après l'envoi du
formulaire si besoin (en cas d'erreur par exemple).

<details>
<summary>Afficher la réponse</summary>

```php
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
    <form action="contact.php" method="POST">
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
```

</details>

### Exercice 1d

En utilisant le formulaire de contact réalisé dans
l'[exercice 1c](#exercice-1c), validez les données saisies par l'utilisateur
côté server (lors de leur réception). Vous pouvez utiliser les règles de
validation suivantes :

- Le nom et le prénom sont obligatoires et doivent avoir au moins 2 caractères.
- L'adresse e-mail n'est pas obligatoire. Si elle est fournie, elle doit être
  valide. Pour cela, vous pouvez utiliser la fonction
  [`filter_var()`](https://www.php.net/manual/fr/function.filter-var.php) de PHP
  avec le filtre `FILTER_VALIDATE_EMAIL`. Pour tester si cela fonctionne, vous
  pouvez changer le type du champ `email` en `text` dans le formulaire et
  essayer de soumettre une adresse e-mail invalide.
- Le message est obligatoire et doit être compris entre 2 et 500 caractères.
- Le consentement pour le traitement des données personnelles est obligatoire.

Si les données sont valides, affichez un message de confirmation ou les messages
d'erreur correspondants sinon.

<details>
<summary>Afficher la réponse</summary>

```php
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

    <form action="contact.php" method="POST">
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
```

</details>

### Exercice 1e

En utilisant le formulaire de contact réalisé dans
l'[exercice 1c](#exercice-1d), validez les données saisies par l'utilisateur
côté client (avant l'envoi du formulaire).

<details>
<summary>Afficher la réponse</summary>

```php
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

    <form action="contact.php" method="POST">
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
```

</details>

<!-- URLs -->

[licence]:
	https://github.com/heig-vd-devprodmed-course/heig-vd-devprodmed-course/blob/main/LICENSE.md
