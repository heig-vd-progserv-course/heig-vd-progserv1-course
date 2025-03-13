# Cours 01 - Modalités de l'unité d'enseignement et introduction à PHP - Exercices

Cette série d'exercices est conçue pour vous permettre de valider les concepts
théoriques et pratiques vus dans le cours
_[Modalités de l'unité d'enseignement et introduction à PHP](../01-theorie/README.md)_.

## Ressources

- Théorie : [Support de cours](./README.md) ·
  [Présentation (web)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/01-modalites-de-lunite-denseignement-et-introduction-a-php/01-theorie/index.html)
  ·
  [Présentation (PDF)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/01-modalites-de-lunite-denseignement-et-introduction-a-php/01-theorie/01-modalites-de-lunite-denseignement-et-introduction-a-php-presentation.pdf)
- Mini-projet : [Mini-projet cours 01](../02-mini-project/README.md)
- Exercices : [Exercices cours 01](../03-exercices/README.md)

## Tables des matières

- [Ressources](#ressources)
- [Tables des matières](#tables-des-matières)
- [Exercice 1](#exercice-1)
- [Exercice 2](#exercice-2)
- [Exercice 3](#exercice-3)
- [Exercice 4](#exercice-4)
- [Exercice 5](#exercice-5)
- [Exercice 7](#exercice-7)
- [Exercice 8](#exercice-8)
- [Exercice 9](#exercice-9)
- [Exercice 10](#exercice-10)
- [Exercice 11](#exercice-11)
- [Exercice 12](#exercice-12)
- [Exercice 14](#exercice-14)
- [Exercice 15](#exercice-15)
- [Exercice 16](#exercice-16)

## Exercice 1

Qu'affiche le code suivant ?

```php
<?php
echo "Hello, World!";
?>
```

<details>
<summary>Afficher la réponse</summary>

```text
Hello, World!
```

</details>

## Exercice 2

Déclarez une variable `name` contenant votre prénom et affichez-la avec le
message _"Bonjour, [votre prénom] !"_.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$name = "Votre prénom";
echo "Bonjour, $name !";
?>
```

```text
Bonjour, Votre prénom !
```

</details>

## Exercice 3

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
?>
```

```text
You are over 18.
```

</details>

## Exercice 4

Déclarez une constante `PI` avec la valeur `3.14` et affichez-la.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
const PI = 3.14;

echo PI;
?>
```

```text
3.14
```

</details>

## Exercice 5

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

## Exercice 7

Déclarez une variable `text` avec la valeur `PHP` et affichez le message
_"J'apprends PHP dans ce nouveau cours ProgServ1."_ en utilisant la
concaténation (vous pouvez utiliser la méthode de concaténation de votre choix).

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$text = "PHP";

echo "J'apprends " . $text . " dans ce nouveau cours ProgServ1.";
?>
```

```text
J'apprends PHP dans ce nouveau cours ProgServ1.
```

</details>

## Exercice 8

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

## Exercice 9

Déclarez une variable `score` avec la valeur `85` et utilisez une structure de
contrôle conditionnelle pour afficher _"Excellent"_ si le score est supérieur ou
égal à `90`, _"Bien"_ si le score est entre `70` et `89`, et _"Peut mieux
faire"_ sinon.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$score = 85;

if ($score >= 90) {
    echo "Excellent";
} elseif ($score >= 70) {
    echo "Bien";
} else {
    echo "Peut mieux faire";
}
?>
```

```text
Bien
```

</details>

## Exercice 10

Déclarez une variable `day` avec la valeur `"Monday"` et utilisez une structure
de contrôle `switch` pour afficher un message _"Week-day"_ pour les jours de la
semaine et _"Week-end"_ pour le samedi et le dimanche.

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
        echo "Week-day";
        break;
    case "Saturday":
    case "Sunday":
        echo "Week-end";
        break;
    default:
        echo "Unknown day";
}
?>
```

```text
Week-day
```

</details>

## Exercice 11

Déclarez une variable `temperature` avec la valeur `30` et utilisez une
structure de contrôle conditionnelle pour afficher _"Il fait chaud"_ si la
température est supérieure à `25`, _"Il fait frais"_ si la température est entre
`15` et `25`, et _"Il fait froid"_ sinon.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$temperature = 30;

if ($temperature > 25) {
    echo "Il fait chaud";
} elseif ($temperature >= 15) {
    echo "Il fait frais";
} else {
    echo "Il fait froid";
}
?>
```

```text
Il fait chaud
```

</details>

## Exercice 12

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
        echo "Passable";
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
?>
```

```text
Good
```

</details>

## Exercice 14

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
?>
```

```text
You are logged in
```

</details>

## Exercice 15

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
    echo "Multiple de 3";
} else {
    echo "Non multiple de 3";
}
?>
```

```text
Multiple de 3
```

</details>

## Exercice 16

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
?>
```

```text
Divisible by 3 and 5
```

</details>
