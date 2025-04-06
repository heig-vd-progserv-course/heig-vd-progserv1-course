# Cours 04 - Formulaires HTML et validation

## Ressources

- Théorie : [Support de cours](../01-theorie/README.md) ·
  [Présentation (web)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/04-formulaires-html-et-validation/01-theorie/index.html)
  ·
  [Présentation (PDF)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/04-formulaires-html-et-validation/01-theorie/04-formulaires-html-et-validation-presentation.pdf)
- Mini-projet : [Consignes](../02-mini-project/README.md) ·
  [Solution](../02-mini-project/solution/)
- Exercices : [Énoncés et solutions](../03-exercices/README.md)

## Table des matières

- [Ressources](#ressources)
- [Table des matières](#table-des-matières)
- [Objectifs](#objectifs)
- [Formulaires HTML](#formulaires-html)
  - [Structure d'un formulaire](#structure-dun-formulaire)
  - [Attributs](#attributs)
- [Envoyer des données des formulaires](#envoyer-des-données-des-formulaires)
  - [URL d'action](#url-daction)
  - [Méthodes `GET` et `POST`](#méthodes-get-et-post)
- [Réception des données des formulaires](#réception-des-données-des-formulaires)
  - [Traitement des données à l'aide des superglobales PHP](#traitement-des-données-à-laide-des-superglobales-php)
- [Validation des formulaires](#validation-des-formulaires)
  - [Côté serveur](#côté-serveur)
  - [Côté client](#côté-client)
  - [Gestion des erreurs](#gestion-des-erreurs)
- [Contenus optionnels](#contenus-optionnels)
- [Conclusion](#conclusion)
- [Mini-projet](#mini-projet)
- [Exercices](#exercices)

## Objectifs

TODO

De façon plus précise, les personnes qui étudient devraient être capables de :

- TODO

## Formulaires HTML

Les formulaires HTML sont des éléments essentiels pour interagir avec les
utilisateurs sur le web.

Ils permettent de collecter des données, d'envoyer des informations à un serveur
et de créer des interfaces utilisateur dynamiques.

Un formulaire HTML est constitué de divers éléments tels que des champs de
texte, des boutons, des cases à cocher, des listes déroulantes, etc. Ces
éléments permettent aux utilisateurs de saisir des informations et d'interagir
avec l'application web.

### Structure d'un formulaire

Un formulaire HTML est défini à l'aide de la balise `<form>`. Cette balise
permet de regrouper les différents éléments du formulaire et de spécifier
comment les données doivent être envoyées au serveur.

Au sein du formulaire, il est possible d'inclure divers éléments tels que des
champs de texte, des boutons, des cases à cocher, des listes déroulantes, etc.
Chaque élément est défini à l'aide de balises HTML spécifiques, telles que
[`<input>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/input),
[`<select>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/select),
etc.

Voici un exemple de structure de formulaire HTML :

```html
<form action="register.php" method="POST">
	<label for="username">Pseudo :</label>
	<input type="text" name="username" />

	<label for="password">Mot de passe :</label>
	<input type="password" name="password" />

	<button type="submit">Envoyer</button>
</form>
```

Dans cet exemple, le formulaire contient deux champs de texte (email et mot de
passe) et un bouton de soumission. L'attribut `action` spécifie l'URL à laquelle
les données du formulaire seront envoyées lorsque l'utilisateur cliquera sur le
bouton "Envoyer". L'attribut `method` spécifie la méthode HTTP à utiliser pour
envoyer les données (dans ce cas, `POST`).

Tous les champs de formulaire sont documentés dans la
[documentation de MDN](https://developer.mozilla.org/fr/). Voici quelques champs
de formulaire courants :

- [Champs `<input>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/input)
- [Champ `<select>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/select)
- [Champ `<textarea>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/textarea)
- [Champ `<button>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/button)
- [Champ `<label>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/label)
- [Champ `<fieldset>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/fieldset)

Nous allons en explorer quelques-uns dans cette section.

#### Champs `<input>`

Les champs `<input>` sont utilisés pour créer divers types de champs de saisie,
tels que des champs de texte, des cases à cocher, des boutons radio, des champs
de mot de passe, etc. Le type de champ est spécifié à l'aide de l'attribut
`type`.

Voici quelques types de champs `<input>` courants :

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

#### Champ `<select>`

Le champ `<select>` est utilisé pour créer une liste déroulante. Il permet à
l'utilisateur de choisir une option parmi plusieurs. Les options sont définies à
l'aide de la balise `<option>`. Voici un exemple de champ `<select>` :

```html
<select name="country">
	<option value="france">France</option>
	<option value="switzerland">Suisse</option>
	<option value="belgium">Belgique</option>
</select>
```

### Attributs

Les éléments de formulaire HTML peuvent avoir divers attributs qui permettent de
personnaliser leur comportement et leur apparence. Voici quelques attributs
courants que l'on peut utiliser avec les éléments de formulaire (entre autres) :

- `name` : spécifie le nom du champ de formulaire. Ce nom est utilisé pour
  identifier le champ lors de l'envoi des données au serveur.
- `id` : spécifie un identifiant unique pour l'élément. Cela permet de lier une
  étiquette (`<label>`) à un champ de formulaire et d'appliquer des styles CSS.
- `value` : spécifie la valeur par défaut du champ. Pour les champs de type
  `checkbox` et `radio`, il spécifie la valeur qui sera envoyée au serveur si le
  champ est sélectionné.
- `placeholder` : spécifie un texte d'indice qui s'affiche dans le champ avant
  que l'utilisateur ne saisisse une valeur. Cela permet de donner des
  indications sur le format attendu.
- `required` : indique que le champ est obligatoire et doit être rempli avant la
  soumission du formulaire. Si le champ est vide, le navigateur affichera un
  message d'erreur.

La documentation MDN fournit des informations détaillées sur les attributs des
éléments de formulaire HTML :

- [Champs `<input>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/input)
- [Champ `<select>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/select)
- [Champ `<textarea>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/textarea)
- [Champ `<button>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/button)
- [Champ `<label>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/label)
- [Champ `<fieldset>`](https://developer.mozilla.org/fr/docs/Web/HTML/Element/fieldset)

## Envoyer des données des formulaires

Lorsqu'un utilisateur remplit un formulaire et clique sur le bouton de
soumission, les données saisies sont envoyées à un serveur pour traitement. Cela
permet de collecter des informations, d'enregistrer des données dans une base de
données ou d'effectuer d'autres actions en fonction des données saisies.

### URL d'action

L'URL d'action est l'URL à laquelle les données du formulaire seront envoyées
lorsque le formulaire sera soumis. Cette URL peut être un script PHP, un
endpoint d'API ou toute autre ressource capable de traiter les données du
formulaire. L'URL d'action est spécifiée dans l'attribut `action` de la balise
`<form>`.

### Méthodes `GET` et `POST`

Les formulaires HTML peuvent envoyer des données à un serveur en utilisant
différentes méthodes reposants sur le protocole HTTP. Les deux méthodes les plus
courantes sont `GET` et `POST`.

Illustrons la différence entre ces deux méthodes à l'aide du formulaire suivant
:

```html
<!-- La méthode peut être `GET` ou `POST` -->
<form action="form.php" method="">
	<label for="username">Pseudo : </label>
	<input type="text" name="username" value="xXBestOf1400Xx" />

	<label for="password">Mot de passe :</label>
	<input type="password" name="password" value="m0n-sup3r-m0t-de-p4asse" />

	<button type="submit">Envoyer</button>
</form>
```

- La méthode `GET` envoie les données du formulaire dans l'URL de la requête
  HTTP.

  Par exemple, si une personne soumet un formulaire avec la méthode `GET`, les
  données seront envoyées à l'URL `form.php` avec les paramètres `username` et
  `password` :
  `http://localhost/form.php?username=xXBestOf1400Xx&password=m0n-sup3r-m0t-de-p4asse`.

  Les données sont ajoutées à l'URL après le point d'interrogation (`?`) et sont
  séparées par des esperluettes (`&`) si plusieurs champs sont présents.

  Cette méthode est déconseillée car cela signifie que les données sont visibles
  dans la barre d'adresse du navigateur et peuvent être enregistrées dans
  l'historique du navigateur. Dans cet exemple, le nom d'utilisateur et le mot
  de passe pourraient facilement être retrouvés par un tiers et les utiliser à
  des fins malveillantes.

  De plus, la méthode `GET` a une limite de taille pour les données envoyées
  dans l'URL. La plupart des navigateurs limitent la longueur de l'URL à environ
  2000 caractères, ce qui peut poser problème si vous devez envoyer de grandes
  quantités de données.

- La méthode `POST` envoie les données du formulaire dans le corps de la requête
  HTTP.

  En reprenant l'exemple précédent, si une personne soumet un formulaire avec la
  méthode `POST`, les données ne seront pas visibles dans l'URL. Au lieu de
  cela, elles seront envoyées dans le corps de la requête HTTP : l'URL de la
  requête ressemblera à ceci : `http://localhost/form.php`, et les données
  seront envoyées dans le corps de la requête.

  Cela signifie que les données sont envoyées de manière plus sécurisée, car
  elles ne sont pas visibles dans l'URL et ne peuvent pas être facilement
  interceptées par des tiers. De plus, la méthode `POST` permet d'envoyer des
  données plus volumineuses que la méthode `GET`, car il n'y a pas de limite de
  taille pour le corps de la requête.

  Cette méthode est généralement utilisée pour des requêtes plus complexes,
  telles que l'envoi de données sensibles (comme des mots de passe) ou la
  soumission de formulaires contenant de grandes quantités de données.

## Réception des données des formulaires

Lorsque le formulaire est soumis, le serveur reçoit les données envoyées par
l'utilisateur. Ces données peuvent être traitées de différentes manières selon
la technologie utilisée côté serveur.

### Traitement des données à l'aide des superglobales PHP

Avec PHP par exemple, vous pouvez accéder aux données du formulaire en utilisant
les superglobales `$_GET` ou `$_POST`, selon la méthode utilisée pour envoyer
les données (`GET` ou `POST`).

Ces superglobales contiennent des tableaux associatifs qui associent les noms
des champs du formulaire aux valeurs soumises.

Vous pouvez ensuite utiliser ces données pour effectuer des opérations telles
que l'insertion dans une base de données, l'envoi d'e-mails ou la génération de
réponses dynamiques.

Voici un exemple de traitement des données d'un formulaire en PHP en utilisant
la page `login.php` :

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
        <label for="username">Pseudo :</label>
        <input type="text" name="username" />

        <br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" />

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
```

Ici, nous avons un code PHP séparé en deux parties : la première partie génère
le formulaire HTML en lui-même et la deuxième partie traite les données soumises
lorsque le formulaire est envoyé.

Lorsque l'utilisateur accède à la page `register.php`, il voit le formulaire
HTML. Ce formulaire contient deux champs de texte pour le prénom et le nom,
ainsi qu'un bouton "Envoyer". Le formulaire est configuré pour envoyer les
données à la même page (`register.php`) lorsque l'utilisateur clique sur le
bouton "Envoyer".

Lorsque l'utilisateur remplit le formulaire et clique sur le bouton
**"Envoyer"**, les données sont envoyées à la même page (`register.php`) en
utilisant la méthode `POST`. Le code PHP vérifie si la méthode de la requête est
`POST` et récupère les valeurs des champs `firstName` et `lastName` à l'aide de
la superglobale `$_POST`.

Ensuite, il affiche un message de bienvenue avec le prénom et le nom de
l'utilisateur qui aura été saisi dans le formulaire.

## Validation des formulaires

Lorsque l'utilisateur soumet un formulaire, il est important de valider les
données saisies pour s'assurer qu'elles sont correctes et conformes aux
attentes. La validation des formulaires peut être effectuée à la fois côté
server et côté client.

### Côté serveur

La validation côté serveur est essentielle pour garantir la sécurité et
l'intégrité des données.

La validation des formulaires peut inclure des vérifications telles que :

- Vérifier que les champs obligatoires sont remplis.
- Vérifier que les données saisies respectent un format spécifique (par exemple,
  une adresse e-mail valide).
- Vérifier que les valeurs saisies sont dans une plage acceptable (par exemple,
  un âge compris entre 0 et 120).
- Vérifier que les mots de passe respectent des critères de sécurité (par
  exemple, longueur minimale, présence de caractères spéciaux, etc.).
- Vérifier que les données saisies ne contiennent pas de caractères dangereux ou
  malveillants (par exemple, éviter les balises HTML ou les scripts).

Voici un exemple de validation côté serveur en PHP :

```php
<?php
// Gère la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];

    // Validation des données
    if (empty($firstName) || empty($lastName)) {
        echo "Tous les champs sont obligatoires.";
    } elseif (!preg_match("/[a-zA-Z- ]*/", $firstName)) {
        echo "Le prénom ne doit contenir que des lettres et des espaces.";
    } elseif (!preg_match("/[a-zA-Z- ]*/", $lastName)) {
        echo "Le nom ne doit contenir que des lettres et des espaces.";
    } else {
        echo "Bonjour, " . htmlspecialchars($firstName) . " " . htmlspecialchars($lastName) . " !";
    }
}
?>
```

Dans cet exemple, nous vérifions si les champs `firstName` et `lastName` sont
vides. Si l'un des champs est vide, un message d'erreur est affiché. Ensuite,
nous vérifions si les valeurs saisies ne contiennent que des lettres et des
espaces à l'aide de la fonction
[`preg_match()`](https://www.php.net/manual/fr/function.preg-match.php) et d'une
expression régulière. Si les valeurs ne respectent pas ce format, un message
d'erreur est affiché. Sinon, un message de bienvenue est affiché avec le prénom
et le nom de l'utilisateur.

> [!NOTE]
>
> Une expression régulière est une séquence de caractères qui forme un modèle de
> recherche. Elle est utilisée pour effectuer des correspondances de motifs dans
> des chaînes de caractères.
>
> Les expressions régulières sont souvent utilisées pour valider des formats de
> données, rechercher des motifs spécifiques ou effectuer des remplacements dans
> des chaînes de caractères.
>
> Dans l'exemple ci-dessus, l'expression régulière `/^[a-zA-Z\- ]*$/` est
> utilisée pour vérifier que la chaîne ne contient que des lettres (minuscules
> et majuscules), des tirets et des espaces. Voici une explication de chaque
> partie de l'expression :
>
> - `/` : délimiteurs de l'expression régulière.
> - `[a-zA-Z- ]` : définit une classe de caractères qui inclut les lettres
>   miniscules (`a-z`), les lettres majuscules (`A-Z`), le tiret (`-`) et
>   l'espace (` `).
> - `*` : indique que la classe de caractères peut apparaître zéro ou plusieurs
>   fois.

La fonction
[`htmlspecialchars()`](https://www.php.net/manual/fr/function.htmlspecialchars.php)
est utilisée pour échapper les caractères spéciaux afin d'éviter les attaques
XSS (Cross-Site Scripting). Cela garantit que les valeurs saisies par
l'utilisateur sont affichées correctement dans notre page sans exécuter de code
malveillant (comme du code JavaScript par exemple).

> [!CAUTION]
>
> Même si la validation côté client est effectuée, il est important de valider à
> nouveau les données côté serveur avant de les traiter ou de les stocker. Cela
> permet de s'assurer que les données sont valables et conformes aux attentes,
> même si l'utilisateur a contourné la validation côté client.

### Côté client

La validation côté client permet de fournir une validation et un retour immédiat
à l'utilisateur avant que les données ne soient envoyées au serveur. Cela peut
réduire le nombre de requêtes envoyées au serveur et améliorer l'expérience
utilisateur.

Pour cela, les champs de formulaire HTML peuvent être configurés avec des
attributs pour effectuer une validation de base.

Par exemple, l'attribut `required` peut être utilisé pour indiquer qu'un champ
est obligatoire, et l'attribut `type` peut être utilisé pour spécifier le type
de données attendu (par exemple, `type="email"` pour un champ d'adresse e-mail).

Il existe plusieurs attributs HTML qui peuvent être utilisés pour valider les
données côté client, certaines spécifiques selon le type de champ. Ces attributs
sont décrits dans la documentation MDN présentée ci-dessus (section
[Attributs](#attributs)).

Voici un exemple de validation côté client à l'aide d'attributs HTML :

```html
<form action="register.php" method="POST">
	<label for="firstName">Prénom :</label>
	<input type="text" name="firstName" required minlength="2" maxlength="50" />

	<label for="lastName">Nom :</label>
	<input type="text" name="lastName" required minlength="2" maxlength="50" />

	<button type="submit">Envoyer</button>
</form>
```

Dans cet exemple, nous avons ajouté les attributs `required`, `minlength` et
`maxlength` aux champs `firstName` et `lastName`. Cela signifie que ces champs
sont obligatoires, et que la longueur minimale et maximale des valeurs saisies
doit être respectée. Si l'utilisateur essaie de soumettre le formulaire sans
remplir ces champs ou en saisissant des valeurs qui ne respectent pas les
contraintes de longueur, le navigateur affichera un message d'erreur et
empêchera la soumission du formulaire.

L'exemple complet de validation côté client pourrait ressembler à ceci :

```php
<?php
// Gère la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];

    echo "Bonjour, $firstName $lastName !";
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
            name="firstName"
            required
            minlength="2"
            maxlength="50"
        />

        <label for="lastName">Nom :</label>
        <input
            type="text"
            name="lastName"
            required
            minlength="2"
            maxlength="50"
        />

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
```

### Gestion des erreurs

Lorsque des erreurs de validation se produisent, il est important de fournir des
messages d'erreur clairs et utiles à l'utilisateur. Cela lui permet de
comprendre ce qui ne va pas et de corriger les erreurs.

De plus, il est important de conserver les données saisies par l'utilisateur
dans le formulaire afin qu'il n'ait pas à les ressaisir. Cela peut être fait en
récupérant les valeurs des champs de formulaire et en les réaffichant dans le
formulaire en cas d'erreur.

Voici un exemple de gestion des erreurs dans le formulaire :

```php
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
        echo "Bonjour, " . htmlspecialchars($firstName) . " " . htmlspecialchars($lastName) . " !";
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
            value="<?= isset($firstName) ? htmlspecialchars($firstName) : ''; ?>"
        />

        <label for="lastName">Nom :</label>
        <input
            type="text"
            id="lastName"
            name="lastName"
            required
            minlength="2"
            maxlength="50"
            value="<?= isset($lastName) ? htmlspecialchars($lastName) : ''; ?>"
        />

        <?php if (isset($error)) { ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php } ?>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
```

Dans cet exemple, nous avons ajouté une variable `$error` pour stocker le
message d'erreur en cas de validation échouée. Si une erreur se produit, la
variable `$error` est définie avec le message d'erreur approprié. Ensuite, nous
affichons le message d'erreur dans le formulaire à l'aide d'une condition `if`.
Si la variable `$error` est définie, le message d'erreur est affiché en rouge.

Nous avons également ajouté l'attribut `value` aux champs de formulaire pour
conserver les valeurs saisies par l'utilisateur en cas d'erreur.

Cela permet à l'utilisateur de voir ce qu'il a déjà saisi et de corriger
facilement les erreurs sans avoir à ressaisir toutes les données.

## Contenus optionnels

_Ces contenus sont optionnels et ne sont pas obligatoires pour la compréhension
des concepts de la session. Ils sont fournis à titre d'information et peuvent
être consultés si vous souhaitez approfondir vos connaissances sur le sujet._

## Conclusion

TODO

## Mini-projet

Nous vous invitons maintenant à réaliser le mini-projet de cette session pour
mettre en pratique les concepts vus en classe.

Vous trouverez les détails du mini-projet ici :
[Consignes](../02-mini-project/README.md).

## Exercices

Nous vous invitons également à réaliser les exercices de cette session pour
renforcer votre compréhension des concepts vus en classe.

Vous trouverez les détails des exercices ici :
[Énoncés et solutions](../03-exercices/README.md).
