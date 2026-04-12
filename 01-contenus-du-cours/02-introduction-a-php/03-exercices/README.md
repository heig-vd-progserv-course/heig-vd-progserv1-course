# Introduction à PHP - Exercices

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
  - [Exercice 1](#exercice-1)
  - [Exercice 2](#exercice-2)
  - [Exercice 3](#exercice-3)
  - [Exercice 4](#exercice-4)
  - [Exercice 5](#exercice-5)
  - [Exercice 6](#exercice-6)
  - [Exercice 7](#exercice-7)
  - [Exercice 8](#exercice-8)
  - [Exercice 9](#exercice-9)
  - [Exercice 10](#exercice-10)
  - [Exercice 11](#exercice-11)
  - [Exercice 12](#exercice-12)
  - [Exercice 13](#exercice-13)
  - [Exercice 14](#exercice-14)
  - [Exercice 15](#exercice-15)
  - [Exercice 16](#exercice-16)
  - [Exercice 17](#exercice-17)
  - [Exercice 18](#exercice-18)
  - [Exercice 19](#exercice-19)
  - [Exercice 20](#exercice-20)
  - [Exercice 21](#exercice-21)

## Utilisation avec Git/GitHub

Il est recommandé d'utiliser Git et GitHub pour suivre votre progression dans
les exercices.

En utilisant le dépôt GitHub que vous avez mis en place depuis le début du
cours, réalisez les exercices suivants.

Utilisez le workflow Git présenté en cours pour commiter et pousser vos
modifications sur votre dépôt GitHub.

Nous ne recommandons pas de structures particulières pour organiser les
exercices. Vous êtes libre de les organiser comme vous le souhaitez.

> [!TIP]
>
> Une personne ayant déjà suivi le cours a réalisé un petit script pour
> automatiser la création de fichiers d'exercices et la mise à jour du fichier.
>
> Vous pouvez trouver ce script à l'adresse suivante :
> <https://github.com/Harpogma/progserv1/blob/main/scripts/auto_files_creation.sh>.
>
> Merci à [Harpogma](https://github.com/Harpogma) pour ce script ! N'hésitez pas
> à l'utiliser et à le modifier selon vos besoins.

Voici quelques suggestions d'organisation pour les exercices dans le dossier
`exercices` de votre projet :

- Vous pouvez créer un sous-dossier pour chaque séance du cours, par exemple
  `exercices/seance-1`, `exercices/seance-2`, etc., et y stocker les exercices
  correspondants à chaque séance.
- Vous pouvez créer un fichier pour chaque exercice, par exemple
  `exercices/exercice-1.php`, `exercices/exercice-2.php`, etc., et y stocker le
  code de chaque exercice.
- Vous pouvez également mettre à jour le fichier `exercices/index.php` avec des
  liens vers les différents exercices, pour faciliter l'accès à chacun d'eux
  depuis le navigateur web.

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

### Exercice 1

Que signifie une architecture client-serveur dans le contexte du développement
web, et comment le serveur de développement PHP s'inscrit-il dans cette
architecture ?

<details>
<summary>Afficher la réponse</summary>

Une architecture client-serveur est un modèle de communication dans lequel les
clients (généralement des navigateurs web) envoient des requêtes à un serveur,
qui traite ces requêtes et renvoie des réponses.

Le serveur de développement PHP s'inscrit dans cette architecture en agissant
comme un serveur web local qui reçoit les requêtes du navigateur, exécute le
code PHP correspondant et renvoie le résultat au navigateur pour affichage.

</details>

### Exercice 2

Soit la structure de fichiers fictive suivante dans un projet PHP avec le
serveur de développement PHP en cours d'exécution à la racine du projet :

```text
./
└── dossier1/
    ├── index.php
    └── dossier2/
        ├── fichier1.php
        └── dossier3/
            └── fichier2.php
```

- Si une personne essaie d'accéder à l'adresse `http://localhost:8080/dossier1`,
  que se passe-t-il ?
- Si une personne essaie d'accéder à l'adresse
  `http://localhost:8080/dossier1/dossier2/dossier3/fichier2.php`, que se
  passe-t-il ?
- Si une personne essaie d'accéder à l'adresse
  `http://localhost:8080/dossier1/dossier2/dossier3/index.php`, que se
  passe-t-il ?

<details>
<summary>Afficher la réponse</summary>

- Si une personne essaie d'accéder à l'adresse `http://localhost:8080/dossier1`,
  le serveur de développement PHP va essayer de trouver un fichier `index.php`
  ou `index.html` dans le dossier `dossier1` depuis la racine du projet. Si un
  fichier `index.php` ou `index.html` existe dans le dossier `dossier1`, le
  serveur de développement PHP va exécuter ce fichier et renvoyer le résultat de
  son exécution au navigateur web. Sinon, il génère une page d'erreur 404 (Not
  Found) et la renvoie au navigateur web.

  Comme c'est le cas dans la structure de fichiers fictive présentée ci-dessus,
  le serveur de développement PHP va trouver un fichier `index.php` dans le
  dossier `dossier1`, l'exécuter et renvoyer le résultat de son exécution au
  navigateur web.

- Si une personne essaie d'accéder à l'adresse
  `http://localhost:8080/dossier1/dossier2/dossier3/fichier2.php`, le serveur de
  développement PHP va essayer de trouver un fichier `fichier2.php` dans le
  dossier `dossier1/dossier2/dossier3` depuis la racine du projet. Si le fichier
  `fichier2.php` existe dans le dossier `dossier1/dossier2/dossier3`, le serveur
  de développement PHP va exécuter ce fichier et renvoyer le résultat de son
  exécution au navigateur web. Sinon, il génère une page d'erreur 404 (Not
  Found) et la renvoie au navigateur web.

  Comme c'est le cas dans la structure de fichiers fictive présentée ci-dessus,
  le serveur de développement PHP va trouver un fichier `fichier2.php` dans le
  dossier `dossier1/dossier2/dossier3`, l'exécuter et renvoyer le résultat de
  son exécution au navigateur web.

- Si une personne essaie d'accéder à l'adresse
  `http://localhost:8080/dossier1/dossier2/dossier3/index.php`, le serveur de
  développement PHP va essayer de trouver un fichier `index.php` dans le dossier
  `dossier1/dossier2/dossier3` depuis la racine du projet. Si le fichier
  `index.php` existe dans le dossier `dossier1/dossier2/dossier3`, le serveur de
  développement PHP va exécuter ce fichier et renvoyer le résultat de son
  exécution au navigateur web. Sinon, il génère une page d'erreur 404 (Not
  Found) et la renvoie au navigateur web.

  Comme il n'y a pas de fichier `index.php` dans le dossier
  `dossier1/dossier2/dossier3` dans la structure de fichiers fictive présentée
  ci-dessus, le serveur de développement PHP va générer une page d'erreur 404
  (Not Found) et la renvoyer au navigateur web.

</details>

### Exercice 3

Qu'affiche le code suivant ?

```php
<?php
echo "Hello, World!";
```

<details>
<summary>Afficher la réponse</summary>

```text
Hello, World!
```

</details>

### Exercice 4

Déclarez une variable `name` contenant votre prénom et affichez-la avec le
message _"Hello, [votre prénom] !"_.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$name = "Your name";

echo "Hello, $name !";
```

```text
Bonjour, Votre prénom !
```

</details>

### Exercice 5

Utilisez une structure de contrôle conditionnelle pour vérifier si une variable
`age` est supérieure ou égale à 18. Si c'est le cas, affichez _"You are over
18."_. Sinon, affichez _"You are under 18."_.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$age = 20;

if ($age >= 18) {
    echo "You are over 18.";
} else {
    echo "You are under 18.";
}
```

```text
You are over 18.
```

</details>

### Exercice 6

Déclarez une constante `PI` avec la valeur `3.14` et affichez-la.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
const PI = 3.14;

echo PI;
```

```text
3.14
```

</details>

### Exercice 7

Déclarez une variable `number` avec la valeur `10`. Calculez son double et
stockez-le dans une autre variable `double`. Affichez le résultat.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$number = 10;

$double = $number * 2;

echo $double;
```

```text
20
```

</details>

### Exercice 8

Expliquez la différence entre les guillemets simples (`'`) et les guillemets
doubles (`"`) en PHP. Donnez un exemple pour illustrer la différence.

<details>
<summary>Afficher la réponse</summary>

Les guillemets simples (`'`) ne permettent pas d'interpréter les variables,
tandis que les guillemets doubles (`"`) permettent d'interpréter les variables.

Exemple :

```php
<?php
$greetings = 'Hello';
$name = 'World';

// La ligne suivante affichera littéralement "$greetings, $name!"
echo '$greetings, $name!<br>';

// La ligne suivante affichera "Hello, World!"
echo "$greetings, $name!";
```

</details>

### Exercice 9

Déclarez une variable `text` avec la valeur `"PHP"` et affichez le message
_"J'apprends PHP dans ce nouveau cours ProgServ1."_ en utilisant la
concaténation (vous pouvez utiliser la méthode de concaténation de votre choix).

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$text = "PHP";

echo "J'apprends " . $text . " dans ce nouveau cours ProgServ1.";
```

```text
J'apprends PHP dans ce nouveau cours ProgServ1.
```

</details>

### Exercice 10

Déclarez une variable `hasABachelorDegree` avec la valeur `true` et une variable
`hasFinishedHeigVd` avec la valeur `true`. Utilisez une structure de contrôle
conditionnelle pour afficher _"You have finished the HEIG-VD, congratulations!"_
si `hasABachelorDegree` et `hasFinishedHeigVd` sont les deux vrais, _"You have
another Bachelor's degree."_ si `hasABachelorDegree` est vraie et
`hasFinishedHeigVd` est fausse, et _"You are still a student."_ sinon.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$hasABachelorDegree = true;
$hasFinishedHeigVd = true;

if ($hasABachelorDegree && $hasFinishedHeigVd) {
    echo "You have finished the HEIG-VD, congratulations!";
} elseif ($hasABachelorDegree) {
    echo "You have another Bachelor's degree.";
} else {
    echo "You are still a student.";
}
```

```text
You have finished the HEIG-VD, congratulations!
```

</details>

### Exercice 11

Comment est-ce que le serveur web et l'interpréteur PHP interagissent pour
afficher une page web ?

<details>
<summary>Afficher la réponse</summary>

Lorsqu'un utilisateur demande une page web, le serveur web reço it la requête et
transmet le fichier PHP correspondant à l'interpréteur PHP. L'interpréteur PHP
exécute le code PHP dans le fichier et génère du code HTML. Le serveur web
renvoie le code HTML généré par l'interpréteur PHP à l'utilisateur, qui voit la
page web dans son navigateur.

</details>

### Exercice 12

Déclarez une variable `day` avec la valeur `"Monday"` et utilisez une structure
de contrôle `switch` pour afficher un message _"Weekday"_ pour les jours de la
semaine et _"Weekend"_ pour le samedi et le dimanche.

La valeur de la variable `day` peut être `"Monday"`, `"Tuesday"`, `"Wednesday"`,
`"Thursday"`, `"Friday"`, `"Saturday"`, ou `"Sunday"`. Si la valeur n'est pas
dans cette liste, affichez _"Unknown day"_.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$day = "Monday";

switch ($day) {
    case "Monday":
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
    case "Friday":
        echo "Weekday";
        break;
    case "Saturday":
    case "Sunday":
        echo "Weekend";
        break;
    default:
        echo "Unknown day";
}
```

```text
Week-day
```

</details>

### Exercice 13

Déclarez une variable `temperature` avec la valeur `30` et utilisez une
structure de contrôle conditionnelle pour afficher _"It's hot"_ si la
température est supérieure à `20`, _"It's cool"_ si la température est entre
`15` et `20`, et _"It's cold"_ sinon.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$temperature = 30;

if ($temperature > 20) {
    echo "It's hot";
} elseif ($temperature >= 15) {
    echo "It's cool";
} else {
    echo "It's cold";
}
```

```text
It's hot
```

</details>

### Exercice 14

Déclarez une variable `grade` avec la valeur `5` et utilisez une structure de
contrôle `switch` pour afficher un message différent pour chaque note (`1`, `2`,
`3`, `4`, `5`, `6`).

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$grade = 5;

switch ($grade) {
    case 6:
        echo "Excellent";
        break;
    case 5:
        echo "Good";
        break;
    case 4:
        echo "Fair";
        break;
    case 3:
        echo "Needs improvement";
        break;
    case 2:
        echo "Poor";
        break;
    case 1:
        echo "Very poor";
        break;
    default:
        echo "Unknown grade";
}
```

```text
Good
```

</details>

### Exercice 15

Expliquez ce qu'est une structure de contrôle conditionnelle et donnez un
exemple en PHP.

<details>
<summary>Afficher la réponse</summary>

Une structure de contrôle conditionnelle permet d'exécuter du code en fonction
de certaines conditions. Elle utilise des opérateurs de comparaison et des
conditions booléennes (vrai ou faux).

Exemple en PHP :

```php
<?php
$a = 1;
$b = 2;

if ($a < $b) {
    echo "a is less than b";
} else {
    echo "a is greater than or equal to b";
}
```

</details>

### Exercice 16

Déclarez une constante `USERNAME` avec la valeur `"admin"` et une constante
`PASSWORD` avec la valeur `"1234"`. Utilisez une structure de contrôle
conditionnelle pour vérifier si les identifiants sont corrects. Affichez _"You
are logged in"_ si les identifiants sont corrects, et _"Login failed"_ sinon.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
const USERNAME = "admin";
const PASSWORD = "1234";

$username = "admin";
$password = "1234";

if ($username == USERNAME && $password == PASSWORD) {
    echo "You are logged in";
} else {
    echo "Login failed";
}
```

```text
You are logged in
```

</details>

### Exercice 17

Déclarez une variable `number` avec la valeur `9` et utilisez une structure de
contrôle conditionnelle pour vérifier si le nombre est un multiple de `3`.
Affichez _"Multiple of 3"_ ou _"Not a multiple of 3"_ en conséquence.

**Astuce** : Utilisez l'opérateur modulo `%`.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$number = 9;

if ($number % 3 == 0) {
    echo "Multiple of 3";
} else {
    echo "Not a multiple of 3";
}
```

```text
Multiple of 3
```

</details>

### Exercice 18

Déclarez une variable `number` avec la valeur `15` et utilisez une structure de
contrôle conditionnelle pour vérifier si le nombre est divisible par `3` et `5`.

Affichez _"Divisible by 3 and 5"_ si le nombre est divisible par `3` et `5`,
_"Divisible by 3"_ si le nombre est divisible par `3` mais pas par `5`,
_"Divisible by 5"_ si le nombre est divisible par `5` mais pas par `3`, et _"Not
divisible by 3 or 5"_ sinon.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$number = 15;

if ($number % 3 == 0 && $number % 5 == 0) {
    echo "Divisible by 3 and 5";
} elseif ($number % 3 == 0) {
    echo "Divisible by 3";
} elseif ($number % 5 == 0) {
    echo "Divisible by 5";
} else {
    echo "Not divisible by 3 or 5";
}
```

```text
Divisible by 3 and 5
```

</details>

### Exercice 19

Déclarez une variable `stRochStudent` avec la valeur `true`, une variable
`comemStudent` avec la valeur `true` et une variable `cheseauxStudent` avec la
valeur `true`. Utilisez une structure de contrôle conditionnelle pour vérifier
si `stRochStudent` et `comemStudent` sont vraies ou si `cheseauxStudent` est
vraie. Si c'est le cas, affichez _"You are an engineering student"_ ou _"You are
not an engineering student"_ sinon.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$stRochStudent = true;
$comemStudent = true;
$cheseauxStudent = true;

if ($stRochStudent && $comemStudent || $cheseauxStudent) {
    echo "You are an engineering student";
} else {
    echo "You are not an engineering student";
}
```

</details>

### Exercice 20

Déclarez une variable `number` avec la valeur `9` et utilisez une structure de
contrôle conditionnelle pour vérifier si le nombre est un multiple de `3`.
Affichez _"Multiple of 3"_ ou _"Not a multiple of 3"_ en conséquence.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$number = 9;

if ($number % 3 == 0) {
    echo "Multiple de 3";
} else {
    echo "Non multiple de 3";
}
```

```text
Multiple de 3
```

</details>

### Exercice 21

Quel est le but et le rôle d'outils tels que WampServer, MAMP, ou encore XAMPP ?

<details>
<summary>Afficher la réponse</summary>

WampServer, MAMP, et XAMPP sont des logiciels qui permettent de créer un
environnement de développement local pour les applications web. Ils sont
utilisés pour installer et configurer un serveur web, une base de données, et un
langage de script (PHP) sur un ordinateur local.

</details>

<!-- URLs -->

[licence]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md
