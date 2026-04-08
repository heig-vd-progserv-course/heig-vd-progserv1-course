---
marp: true
theme: custom-marp-theme
size: 16:9
paginate: true
author: L. Delafontaine, avec l'aide de GitHub Copilot
description:
  Formulaires HTML et validation pour le cours ProgServ1 à la HEIG-VD, Suisse
url: https://heig-vd-progserv-course.github.io/heig-vd-progserv1-course/01-contenus-du-cours/05-formulaires-html-et-validation/presentation.html
header: "[**Formulaires HTML et validation**][contenu-complet-sur-github]"
footer:
  "[**HEIG-VD**](https://heig-vd.ch) - [ProgServ1 Course
  2025-2026](https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course)
  - [CC BY-SA 4.0][license]"
headingDivider: 6
math: mathjax
---

# Formulaires HTML et validation

<!--
_class: lead
_paginate: false
-->

<https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course>

Visualiser le contenu complet sur GitHub [à cette
adresse][contenu-complet-sur-github].

<small>L. Delafontaine, avec l'aide de
[GitHub Copilot](https://github.com/features/copilot).</small>

<small>Ce travail est sous licence [CC BY-SA 4.0][license].</small>

![bg brightness:2 opacity:0.05][illustration-principale]

## Retrouvez le contenu complet de cette présentation sur GitHub

<!-- _class: lead -->

_Cette présentation est un résumé du contenu complet disponible sur GitHub._

_Pour plus de détails, retrouvez le [contenu complet sur
GitHub][contenu-complet-sur-github] ou en cliquant sur l'en-tête de ce
document._

## Objectifs (1)

- Créer des formulaires HTML pour collecter des données utilisateur.
- Envoyer des données de formulaires au serveur à l'aide de PHP.
- Récupérer les données envoyées par le formulaire à l'aide de PHP.
- Expliquer la différence entre les méthodes `GET` et `POST`.

![bg right:40%][illustration-objectifs]

## Objectifs (2)

- Valider les données saisies par l'utilisateur côté serveur et côté client.
- Afficher des messages d'erreur clairs en cas de validation échouée.
- Pré-remplir les champs de formulaire avec les valeurs précédemment saisies.

![bg right:40%][illustration-objectifs]

## Formulaires HTML

- Permettent de collecter des données utilisateur.
- Sont composés de champs de saisie (input fields) et de boutons.
- Sont généralement utilisés pour des actions telles que l'inscription, la
  connexion, la recherche, etc.
- Rendent l'expérience utilisateur plus interactive et dynamique.

![bg right:40%][illustration-formulaires-html]

### Structure d'un formulaire (1)

- Définit à l'aide de la balise `<form>`.
- Contient des éléments de formulaire tels que des champs de saisie, des
  boutons, etc.
- Peut inclure des attributs pour spécifier l'URL d'action, la méthode d'envoi,
  etc.

![bg right:40%][illustration-formulaires-html]

### Structure d'un formulaire (2)

```html
<form action="register.php" method="POST">
	<label for="username">Pseudo :</label><br />
	<input type="text" id="username" name="username" />

	<label for="password">Mot de passe :</label><br />
	<input type="password" id="password" name="password" />

	<br />

	<button type="submit">Envoyer</button>
</form>
```

#### Champs `<input>` (1)

- Champs de saisie de texte, mot de passe, e-mail, etc.
- Définis à l'aide de la balise `<input>`.
- Plusieurs types disponibles (entre autres) :
  - **`text`** : champ texte
  - **`password`** : champ mot de passe
  - **`email`** : champ e-mail
  - **`number`** : champ numérique

![bg right:40%][illustration-formulaires-html]

#### Champs `<input>` (2)

```html
<!-- Champ de texte -->
<input type="text" name="name" />

<!-- Champ de email -->
<input type="email" name="email" />

<!-- Champ de mot de passe -->
<input type="password" name="password" />

<!-- Champ de case à cocher -->
<input type="checkbox" name="subscribe" value="yes" />
```

#### Champ `<select>` (1)

- Liste déroulante permettant de sélectionner une option parmi plusieurs.
- Défini à l'aide de la balise `<select>`.
- Les options sont définies à l'aide de la balise `<option>`.

![bg right:40%][illustration-formulaires-html]

#### Champ `<select>` (2)

```html
<select name="country">
	<option value="france">France</option>
	<option value="switzerland">Suisse</option>
	<option value="belgium">Belgique</option>
</select>
```

#### Champ `<textarea>` (1)

- Champ de saisie de texte multiligne.
- Utilisé pour des commentaires, des messages, etc.
- Défini à l'aide de la balise `<textarea>`.
- Peut inclure des attributs pour spécifier la taille, le nombre de lignes, etc.

![bg right:40%][illustration-formulaires-html]

#### Champ `<textarea>` (2)

```html
<textarea name="message" rows="4" cols="50">
    Écrivez votre message ici...
</textarea>
```

#### Champs `<button>` (1)

- Boutons pour soumettre ou réinitialiser le formulaire.
- Défini à l'aide de la balise `<button>`.
- Peut inclure des attributs pour spécifier le type de bouton (`submit`,
  `reset`, etc.).
- Peut contenir du texte ou des images.

![bg right:40%][illustration-formulaires-html]

#### Champ `<button>` (2)

```html
<!-- Ce bouton soumet le formulaire -->
<button type="submit">Envoyer</button>

<!-- Ce bouton réinitialise le formulaire -->
<button type="reset">Réinitialiser</button>
```

### Attributs

- Les attributs HTML permettent de personnaliser le comportement des éléments de
  formulaire.
- Des attributs courants sont :
  - **`name`** : nom du champ
  - **`id`** : identifiant unique
  - **`value`** : valeur par défaut
  - **`placeholder`** : aide à la saisie
  - **`required`** : champ obligatoire

![bg right:40%][illustration-formulaires-html]

## Envoyer les données des formulaires

- L'envoi des données au serveur se fait grâce au bouton de soumission.
- Composé de deux parties :
  - **URL d'action** : où les données sont envoyées
  - **Méthode** : comment les données sont envoyées

![bg right:40%][illustration-envoyer-les-donnees-des-formulaires]

### URL d'action

- Définit la destination des données du formulaire grâce à l'attribut `action`.
- Peut être une page PHP, un script, une API, etc.
- Exemple : `action="register.php"`.

![bg right:40%][illustration-url-daction]

### Méthodes `GET` et `POST` (1)

La méthode (`method`) du formulaire définit comment les données sont envoyées au
serveur. Il existe deux méthodes principales :

<div class="two-columns">
<div>

**`GET`** : envoie les données dans l'URL (visible dans la barre d'adresse)

- Limité en taille
- Utilisé pour des requêtes non sensibles

</div>
<div>

**`POST`** : envoie les données dans le corps de la requête (invisible)

- Pas de limite de taille
- Utilisé pour des données sensibles
- Recommandé en tout temps

</div>
</div>

### Méthodes `GET` et `POST` (2)

```html
<!-- La méthode peut être `GET` ou `POST` -->
<form action="login.php" method="">
	<label for="username">Pseudo : </label><br />
	<input type="text" id="username" name="username" value="xXBestOf1400Xx" />

	<label for="password">Mot de passe :</label><br />
	<input
		type="password"
		id="password"
		name="password"
		value="m0n-sup3r-m0t-de-p4asse"
	/>

	<button type="submit">Envoyer</button>
</form>
```

### Méthodes `GET` et `POST` (3)

**`GET`**

Les données sont ajoutées à l'URL de la requête, séparées par un `?` et des `&`
:

`http://localhost/login.php?username=xXBestOf1400Xx&password=m0n-sup3r-m0t-de-p4asse`

Problème de sécurité...

### Méthodes `GET` et `POST` (4)

**`POST`**

Les données sont envoyées dans le corps de la requête :

`http://localhost/login.php`

Les données ne sont plus visibles dans l'URL.

Problème de sécurité résolu !

## Réceptionner les données des formulaires

- Lorsque le formulaire est soumis, le serveur reçoit les données.
- Ces données peuvent être traitées de différentes manières selon la technologie
  utilisée.
- En PHP, les données sont accessibles via les superglobales `$_GET` et
  `$_POST`.

![bg right:40%][illustration-envoyer-les-donnees-des-formulaires]

### Traitement des données à l'aide des superglobales PHP (1)

- Les superglobales sont des tableaux associatifs prédéfinis en PHP.
- Elles contiennent les données envoyées par le formulaire :
  - `$_GET` : contient les données envoyées par la méthode `GET`.
  - `$_POST` : contient les données envoyées par la méthode `POST`.
- Les données sont accessibles par le nom du champ défini dans le formulaire
  grâce à l'attribut `name` des champs.

### Traitement des données à l'aide des superglobales PHP (2)

```php
<!-- Gère l'affichage du formulaire -->
<!DOCTYPE html>
<html>

<head>
    <title>Authentification</title>
</head>

<body>
    <h1>Se connecter</h1>

```

---

```php
    <form action="login.php" method="POST">
        <label for="username">Pseudo :</label><br>
        <input type="text" id="username" name="username" />

        <br>

        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" />

        <br>

        <button type="submit">Envoyer</button>
    </form>

```

---

```php
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
```

### Traitement des données à l'aide des superglobales PHP (3)

<!-- _class: lead -->

<!-- TODO : À l'avenir, mettre un GIF ou une vidéo ? -->

Démonstration

### Sauvegarde des données saisies (1)

- Lors de la soumission du formulaire, les données sont perdues.
- Il est possible de sauver les valeurs précédemment saisies pour les réutiliser
  en cas d'erreurs.
- Cela permet de ne pas perdre les informations utiles à l'utilisateur.

![bg right:40%][illustration-sauvegarde-des-donnees-saisies]

### Sauvegarde des données saisies (2)

```php
<?php
// Gère la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
}
?>

<!-- Gère l'affichage du formulaire -->
<!DOCTYPE html>
<html>
```

---

```php
<head>
    <title>Authentification</title>
</head>

<body>
    <h1>Se connecter</h1>
    <form action="login.php" method="POST">
        <label for="username">Pseudo :</label><br>
        <input
            type="text"
            id="username"
            name="username"
            value="<?php echo isset($username) ? $username : ''; ?>" />

        <br>
```

---

```php
        <label for="password">Mot de passe :</label><br>
        <input
            type="password"
            id="password"
            name="password" />

        <br>

        <button type="submit">Envoyer</button>
    </form>
```

---

```php
    <?php
    // Gère la soumission du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        echo "Le nom d'utilisateur est : " . $username . "<br>";
        echo "Le mot de passe est : " . $password . "<br>";
    }
    ?>
</body>

</html>
```

### Sauvegarde des données saisies (3)

<!-- _class: lead -->

<!-- TODO : À l'avenir, mettre un GIF ou une vidéo ? -->

Démonstration

## Validation des formulaires

- Valider les données saisies permet de s'assurer qu'elles sont correctes et
  conformes aux attentes.
- La validation peut se faire à deux endroits :
  1. Côté serveur
  2. Côté client

![bg][illustration-cote-serveur]
![bg right:40% vertical][illustration-cote-client]

### Côté serveur (1)

La validation des formulaires peut inclure des vérifications telles que :

- Vérifier que les champs obligatoires sont remplis.
- Vérifier que les données saisies respectent un format spécifique (par exemple,
  une adresse e-mail valide ou longueur minimale, etc.).
- Etc.

![bg right:40%][illustration-cote-serveur]

### Côté serveur (2)

```php
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
```

---

```php
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
```

---

```php
<!-- Gère l'affichage du formulaire -->
<!DOCTYPE html>
<html>

<head>
    <title>Authentification</title>
</head>

<body>
    <h1>Se connecter</h1>

    <form action="login.php" method="POST">
        <label for="username">Pseudo :</label><br>
```

---

```php
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
```

---

```php

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
```

### Côté serveur (3)

<!-- _class: lead -->

<!-- TODO : À l'avenir, mettre un GIF ou une vidéo ? -->

Démonstration

### Côté client (1)

- L'expérience utilisateur peut être améliorée en faisant une validation côté
  client également.
- Le navigateur va directement nous indiquer si un champ n'est pas conforme.
- 🚨 **Elle ne remplace pas la validation côté serveur**, car la validation
  cliente peut être contournée. 🚨

![bg right:40%][illustration-cote-client]

### Côté client (2)

```php
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
```

---

```php
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
```

---

```php
<!-- Gère l'affichage du formulaire -->
<!DOCTYPE html>
<html>

<head>
    <title>Authentification</title>
</head>

<body>
    <h1>Se connecter</h1>

    <form action="login.php" method="POST">
        <label for="username">Pseudo :</label><br>
```

---

```php
        <input
            type="text"
            id="username"
            name="username"
            value="<?php echo isset($username) ? $username : ''; ?>"
            required
            minlength="2" />

        <br>

        <label for="password">Mot de passe :</label><br>
        <input
            type="password"
            id="password"
            name="password"
            required
            minlength="8" />

        <br>
```

---

```php
        <button type="submit">Envoyer</button>
    </form>

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
</body>

</html>
```

### Côté client (3)

<!-- _class: lead -->

<!-- TODO : À l'avenir, mettre un GIF ou une vidéo ? -->

Démonstration

## Conclusion

- Les formulaires permettent la saisie des données de l'utilisateur.
- Ils envoient les données au serveur qui est en charge de les traiter.
- La validation peut se faire du côté serveur ou du côté client (🚨).
- Les messages d'erreur et la sauvegarde des saisies améliorent l'expérience
  utilisateur.

![bg right:40%][illustration-principale]

## Questions

<!-- _class: lead -->

Est-ce que vous avez des questions ?

## À vous de jouer !

- (Re)lire le [support de cours][contenu-complet-sur-github].
- Explorer les [exemples de code][exemples-de-code].
- Faire les [exercices][exercices].
- Réaliser le [mini-projet][mini-projet].
- Poser des questions si nécessaire.

**N'hésitez pas à vous entraidez si vous avez des difficultés !**

![bg right:40%][illustration-a-vous-de-jouer]

## Sources (1)

- [Illustration principale][illustration-principale] par
  [Richard Jacobs](https://unsplash.com/@rj2747) sur
  [Unsplash](https://unsplash.com/photos/grayscale-photo-of-elephants-drinking-water-8oenpCXktqQ)
- [Illustration][illustration-objectifs] par
  [Aline de Nadai](https://unsplash.com/@alinedenadai) sur
  [Unsplash](https://unsplash.com/photos/j6brni7fpvs)
- [Illustration][illustration-formulaires-html] par
  [Kelly Sikkema](https://unsplash.com/@kellysikkema) sur
  [Unsplash](https://unsplash.com/photos/stack-of-papers-flat-lay-photography-tQQ4BwN_UFs)
- [Illustration][illustration-envoyer-les-donnees-des-formulaires] par
  [Anastasiia Nelen](https://unsplash.com/@mnelen) sur
  [Unsplash](https://unsplash.com/photos/a-blue-and-white-box-SAHWzVB3bcc)
- [Illustration][illustration-url-daction] par
  [Shavr IK](https://unsplash.com/@shavr) sur
  [Unsplash](https://unsplash.com/photos/a-close-up-of-a-control-panel-with-buttons-r6fBLCriUgg)
- [Illustration][illustration-sauvegarde-des-donnees-saisies] par
  [Kelly Sikkema](https://unsplash.com/@kellysikkema) sur
  [Unsplash](https://unsplash.com/photos/white-and-black-board-SkFdmKGxQ44)
- [Illustration][illustration-cote-client] par
  [Blake Wisz](https://unsplash.com/@blakewisz) sur
  [Unsplash](https://unsplash.com/photos/turned-on-monitor-tE6th1h6Bfk)
- [Illustration][illustration-cote-serveur] par
  [Taylor Vick](https://unsplash.com/@tvick) sur
  [Unsplash](https://unsplash.com/photos/cable-network-M5tzZtFCOfs)

## Sources (2)

- [Illustration][illustration-a-vous-de-jouer] par
  [Nikita Kachanovsky](https://unsplash.com/@nkachanovskyyy) sur
  [Unsplash](https://unsplash.com/photos/white-sony-ps4-dualshock-controller-over-persons-palm-FJFPuE1MAOM)

<!-- URLs -->

[license]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md
[contenu-complet-sur-github]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/05-formulaires-html-et-validation/README.md
[exemples-de-code]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/05-formulaires-html-et-validation/01-exemples-de-code/README.md
[exercices]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/05-formulaires-html-et-validation/02-exercices/README.md
[mini-projet]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/05-formulaires-html-et-validation/03-mini-projet/README.md

<!-- Illustrations -->

[illustration-principale]:
	https://images.unsplash.com/photo-1517486430290-35657bdcef51?fit=crop&h=720
[illustration-objectifs]:
	https://images.unsplash.com/photo-1516389573391-5620a0263801?fit=crop&h=720
[illustration-formulaires-html]:
	https://images.unsplash.com/photo-1554224155-1696413565d3?fit=crop&h=720
[illustration-envoyer-les-donnees-des-formulaires]:
	https://images.unsplash.com/photo-1659896975336-3f3f989d3396?fit=crop&h=720
[illustration-url-daction]:
	https://images.unsplash.com/photo-1720036237584-7fd0f37db499?fit=crop&h=720
[illustration-sauvegarde-des-donnees-saisies]:
	https://images.unsplash.com/photo-1554252116-ed7971ea7623?fit=crop&h=720
[illustration-cote-client]:
	https://images.unsplash.com/photo-1556740738-b6a63e27c4df?fit=crop&h=720
[illustration-cote-serveur]:
	https://images.unsplash.com/photo-1558494949-ef010cbdcc31?fit=crop&h=720
[illustration-a-vous-de-jouer]:
	https://images.unsplash.com/photo-1509198397868-475647b2a1e5?fit=crop&h=720
