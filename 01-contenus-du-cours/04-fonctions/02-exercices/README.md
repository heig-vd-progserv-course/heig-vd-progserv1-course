# Fonctions - Exercices

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
  - [Exercice 22](#exercice-22)
  - [Exercice 23](#exercice-23)
  - [Exercice 24](#exercice-24)
  - [Exercice 25](#exercice-25)
  - [Exercice 26 - Exercice bonus](#exercice-26---exercice-bonus)

## Utilisation avec Git/GitHub

Il est recommandé d'utiliser Git et GitHub pour suivre votre progression dans
les exercices.

En utilisant le dépôt GitHub que vous avez mis en place depuis le début du
cours, réalisez les exercices suivants.

Utilisez le workflow Git présenté en cours pour commiter et pousser vos
modifications sur votre dépôt GitHub.

Nous ne recommandons pas de structures particulières pour organiser les
exercices. Vous êtes libre de les organiser comme vous le souhaitez.

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

Déclarez une fonction `greet` qui prend un paramètre `$name` et affiche le
message _"Hello, [name]!"_. Appelez cette fonction avec votre prénom comme
argument.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
function greet(string $name): void {
    echo "Hello, $name!<br>";
}

greet("Alice");
```

```text
Hello, Alice!
```

</details>

### Exercice 2

Déclarez une fonction square qui prend un paramètre `$number` et retourne le
carré de ce nombre. Appelez cette fonction avec le nombre `4` et affichez le
résultat.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
function square(int|float $number): int|float {
    return $number * $number;
}

$result = square(4);

echo $result;
```

```text
16
```

</details>

### Exercice 3

Déclarez une fonction multiply qui prend deux paramètres `$a` et `$b` et
retourne leur produit. Appelez cette fonction avec les nombres 6 et 7, puis
affichez le résultat.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
function multiply(int|float $a, int|float $b): int|float {
    return $a * $b;
}

$result = multiply(6, 7);

echo $result;
```

```text
42
```

</details>

### Exercice 4

Déclarez une fonction divide qui prend deux paramètres `$a` et `$b` et retourne
le résultat de la division de `$a` par `$b`. Si `$b` est égal à 0, la fonction
doit retourner le message _"Division by zero is not allowed."_.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
function divide(int|float $a, int|float $b): string|int|float {
    if ($b == 0) {
        return "Division by zero is not allowed.";
    } else {
        return $a / $b;
    }
}

$result = divide(6, 3);

echo $result . "<br>";
```

```text
2
```

</details>

### Exercice 5

Déclarez une fonction `absoluteValue` qui prend un paramètre `$number` et
retourne sa valeur absolue. Utilisez cette fonction pour afficher la valeur
absolue de `-15`.

Pour rappel, la valeur absolue d'un nombre est sa valeur numérique considérée
sans tenir compte de son signe ou encore sa distance à zéro .[^valeur-absolue]
Par exemple, la valeur absolue de `-15` est `15`.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
function absoluteValue(int|float $number): int|float {
    if ($number < 0) {
        return -$number;
    } else {
        return $number;
    }
}

$result = absoluteValue(-15);

echo $result;
```

```text
15
```

</details>

### Exercice 6

Déclarez une fonction `maxOfTwo` qui prend deux paramètres `$a` et `$b` et
retourne le plus grand des deux. Appelez cette fonction avec les nombres `12` et
`8`.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
function maxOfTwo(int|float $a, int|float $b): int|float {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$result = maxOfTwo(12, 8);

echo $result;
```

```text
12
```

</details>

### Exercice 7

Déclarez une fonction isEven qui prend un paramètre `$number` et retourne `true`
si le nombre est pair, ou `false` sinon. Utilisez cette fonction pour vérifier
si le nombre `10` est pair, puis affichez _"Even"_ ou _"Odd"_ en conséquence.

**Astuce** : un nombre est pair s'il est divisible par 2 sans reste (modulo
`%`).

<details>
<summary>Afficher la réponse</summary>

```php
<?php
function isEven(int $number): bool {
    return $number % 2 == 0;
}

$result = isEven(10);

if ($result) {
    echo "Even<br>";
} else {
    echo "Odd<br>";
}
```

```text
Even
```

</details>

### Exercice 8

Déclarez une fonction `grade` qui calcule la note finale d'un.e étudiant.e en
fonction du barème fédéral suisse (voir ci-dessous). La fonction prend deux
paramètres : le nombre de points obtenus et le nombre de points maximum. La
fonction doit retourner la note finale.

Pour rappel, le barème fédéral suisse est le suivant :

$$
\text{note finale} = \frac{\text{nombre de points obtenus}}{\text{nombre de points maximum}} * 5.0 + 1.0
$$

Appelez cette fonction avec les points obtenus `47` et les points maximum `66`,
puis affichez le résultat.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
function grade(int|float $points, int|float $maxPoints): float {
    return $points / $maxPoints * 5.0 + 1.0;
}

$result = grade(47, 66);

echo $result;
```

```text
4.5606060606061
```

</details>

### Exercice 9

Déclarez une fonction `isPassing` qui prend un paramètre `$grade` et retourne
`true` si la note est supérieure ou égale à 4.0, ou `false` sinon. Utilisez
cette fonction pour vérifier si la note précédente est suffisante pour passer
l'examen, puis affichez _"Passing"_ ou _"Failing"_ en conséquence.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
function isPassing(float $grade): bool {
    return $grade >= 4.0;
}

$result = isPassing(4.5606060606061);

if ($result) {
    echo "Passing<br>";
} else {
    echo "Failing<br>";
}
```

```text
Passing
```

</details>

### Exercice 10

Déclarez une fonction `isLeapYear` qui prend un paramètre `$year` et retourne
`true` si l'année est bissextile (voir ci-dessous), ou `false` sinon.

Une année est bissextile si elle est divisible par 4 mais pas par 100, ou si
elle est divisible par 400[^annee-bissextile].

Utilisez cette fonction pour vérifier si les années 1900, 2000, 2024 et 2025
sont bissextiles. Affichez _"Bissextile"_ ou _"Non bissextile"_ en conséquence.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
function isLeapYear(int $year): bool {
    return ($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0;
}

if (isLeapYear(1900)) {
    echo "Bissextile<br>";
} else {
    echo "Non bissextile<br>";
}

if (isLeapYear(2000)) {
    echo "Bissextile<br>";
} else {
    echo "Non bissextile<br>";
}

if (isLeapYear(2024)) {
    echo "Bissextile<br>";
} else {
    echo "Non bissextile<br>";
}

if (isLeapYear(2025)) {
    echo "Bissextile<br>";
} else {
    echo "Non bissextile<br>";
}
```

```text
Non bissextile
Bissextile
Bissextile
Non bissextile
```

</details>

### Exercice 11

En utilisant la documentation officielle de PHP sur la fonction `round` :
<https://www.php.net/manual/fr/function.round.php>, utilisez cette fonction pour
arrondir le nombre `4.5606060606061` à une décimale.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$number = 4.5606060606061;
$roundedNumber = round($number, 1);

echo $roundedNumber;
```

```text
4.6
```

</details>

### Exercice 12

En utilisant la documentation officielle de PHP sur la fonction `ceil` :
<https://www.php.net/manual/fr/function.ceil.php>, utilisez cette fonction pour
arrondir le nombre `4.5606060606061` à l'entier supérieur.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$number = 4.5606060606061;
$roundedNumber = ceil($number);

echo $roundedNumber;
```

```text
5
```

</details>

### Exercice 13

En utilisant la documentation officielle de PHP sur la fonction `floor` :
<https://www.php.net/manual/fr/function.floor.php>, utilisez cette fonction pour
arrondir le nombre `4.5606060606061` à l'entier inférieur.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$number = 4.5606060606061;
$roundedNumber = floor($number);

echo $roundedNumber;
```

```text
4
```

</details>

### Exercice 14

En reprenant l'[exercice 5](#exercice-5) et la documentation officielle de PHP
sur la fonction `abs` : <https://www.php.net/manual/fr/function.abs.php>,
déclarez une fonction `absoluteValue` qui calcule la valeur absolue d'un nombre
en utilisant la fonction `abs` de PHP.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
function absoluteValue(int|float $number): int|float {
    return abs($number);
}

$result = absoluteValue(-15);

echo $result;
```

```text
15
```

</details>

### Exercice 15

En utilisant la documentation officielle de PHP sur la fonction `pow` :
<https://www.php.net/manual/fr/function.pow.php>, déclarez une fonction `power`
qui prend deux paramètres `$base` et `$exponent` et retourne la puissance de
`$base` à la puissance `$exponent`.

Utilisez cette fonction pour calculer la puissance de `2` à la puissance `8`.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
function power(int|float $base, int|float $exponent): int|float {
    return pow($base, $exponent);
}

$result = power(2, 8);

echo $result;
```

```text
256
```

</details>

### Exercice 16

En utilisant la documentation officielle de PHP sur la fonction `str_replace` :
<https://www.php.net/manual/fr/function.str-replace.php>, utilisez cette
fonction pour remplacer le mot _"world"_ par _"PHP"_ dans la chaîne de
caractères _"Hello, world!"_.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$string = "Hello, world!";
$newString = str_replace("world", "PHP", $string);

echo $newString;
```

```text
Hello, PHP!
```

</details>

### Exercice 17

En utilisant la documentation officielle de PHP sur la fonction `str_word_count`
: <https://www.php.net/manual/fr/function.str-word-count.php>, utilisez cette
fonction pour compter le nombre de mots dans la chaîne de caractères _"Hello,
world!"_.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$string = "Hello, world!";
$wordCount = str_word_count($string);

echo $wordCount;
```

```text
2
```

</details>

### Exercice 18

En utilisant la documentation officielle de PHP sur la fonction
`str_starts_with` :
<https://www.php.net/manual/fr/function.str-starts-with.php>, utilisez cette
fonction pour vérifier si la chaîne de caractères _"Hello, world!"_ commence par
_"Hello"_.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$string = "Hello, world!";
$result = str_starts_with($string, "Hello");

if ($result) {
    echo "'$string' starts with 'Hello'<br>";
} else {
    echo "'$string' does not start with 'Hello'<br>";
}
```

```text
'Hello, world!' starts with 'Hello'
```

</details>

### Exercice 19

En utilisant la documentation officielle de PHP sur la fonction `str_repeat` :
<https://www.php.net/manual/fr/function.str-repeat.php>, utilisez cette fonction
pour répéter la chaîne de caractères _"Hello, world!"_ trois fois.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$string = "Hello, world!<br>";
$repeatedString = str_repeat($string, 3);

echo $repeatedString;
```

```text
Hello, world!
Hello, world!
Hello, world!
```

</details>

### Exercice 20

En utilisant la documentation officielle de PHP sur la fonction `strpos` :
<https://www.php.net/manual/fr/function.strpos.php>, utilisez cette fonction
pour trouver la position de début du mot _"world"_ dans la chaîne de caractères
_"Hello, world!"_.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$string = "Hello, world!";
$position = strpos($string, "world");

echo $position;
```

```text
7
```

</details>

### Exercice 21

En utilisant la documentation officielle de PHP sur les fonctions `is_string` :
<https://www.php.net/manual/fr/function.is-string.php> et `is_int` :
<https://www.php.net/manual/fr/function.is-int.php>, déclarez une fonction
`isStringOrInteger` qui prend un paramètre `$variable` et retourne _"String"_ si
la variable est une chaîne de caractères, _"Integer"_ si la variable est un
entier ou _"Unknown"_ sinon.

Faites des tests avec les variables suivantes :

```php
<?php
$variable1 = "Hello, world!";
$variable2 = 42;
$variable3 = 3.14;
$variable4 = true;
```

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$variable1 = "Hello, world!";
$variable2 = 42;
$variable3 = 3.14;
$variable4 = true;

function isStringOrInteger(mixed $variable): string {
    if (is_string($variable)) {
        return "String";
    } elseif (is_int($variable)) {
        return "Integer";
    } else {
        return "Unknown";
    }
}

echo isStringOrInteger($variable1) . "<br>";
echo isStringOrInteger($variable2) . "<br>";
echo isStringOrInteger($variable3) . "<br>";
echo isStringOrInteger($variable4) . "<br>";
```

```text
String
Integer
Unknown
Unknown
```

</details>

### Exercice 22

En utilisant la documentation officielle de PHP sur les fonctions `isset` :
<https://www.php.net/manual/fr/function.isset.php> et `empty` :
<https://www.php.net/manual/fr/function.empty.php>, déclarez une fonction
`isSetAndNotEmpty` qui prend un paramètre `$variable` et retourne _"Set and not
empty"_ si la variable est définie et non vide, _"Set and empty"_ si la variable
est définie et vide, _"Not set"_ si la variable n'est pas définie.

Faites des tests avec les variables suivantes :

```php
<?php
$variable1 = "Hello, world!";
$variable2 = "";
$variable3 = 42;
$variable4 = null;
```

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$variable1 = "Hello, world!";
$variable2 = "";
$variable3 = 42;
$variable4 = null;

function isSetAndNotEmpty(mixed $variable): string {
    if (isset($variable) && !empty($variable)) {
        return "Set and not empty";
    } elseif (isset($variable) && empty($variable)) {
        return "Set and empty";
    } else {
        return "Not set";
    }
}

echo isSetAndNotEmpty($variable1) . "<br>";
echo isSetAndNotEmpty($variable2) . "<br>";
echo isSetAndNotEmpty($variable3) . "<br>";
echo isSetAndNotEmpty($variable4) . "<br>";
```

```text
Set and not empty
Set and empty
Set and not empty
Not set
```

</details>

### Exercice 23

En utilisant la documentation officielle de PHP sur les fonctions `strlen` :
<https://www.php.net/manual/fr/function.strlen.php> et `substr` :
<https://www.php.net/manual/fr/function.substr.php>, déclarez une fonction
`truncate` qui prend un paramètre `$string` et un paramètre `$length` et
retourne une sous-chaîne de `$string` de longueur `$length` suivie de _"..."_ si
la chaîne est plus longue que `$length`.

Faites des tests avec la chaîne suivante :

```php
<?php
$string = "Hello, world!";
$length = 5;
```

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$string = "Hello, world!";
$length = 5;

function truncate(string $string, int $length): string {
    if (strlen($string) > $length) {
        return substr($string, 0, $length) . "...";
    } else {
        return $string;
    }
}

echo truncate($string, $length);
```

```text
Hello...
```

</details>

### Exercice 24

En utilisant la documentation officielle de PHP sur la fonction `var_dump` :
<https://www.php.net/manual/fr/function.var-dump.php>, déclarez une fonction
`debug` qui prend un paramètre `$variable` et affiche le type et la valeur de la
variable.

Faites des tests avec les variables suivantes :

```php
<?php
$variable1 = "Hello, world!";
$variable2 = 42;
$variable3 = 3.14;
$variable4 = true;
```

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$variable1 = "Hello, world!";
$variable2 = 42;
$variable3 = 3.14;
$variable4 = true;

function debug(mixed $variable): void {
    var_dump($variable);
}

debug($variable1);
echo "<br>";
debug($variable2);
echo "<br>";
debug($variable3);
echo "<br>";
debug($variable4);
echo "<br>";
```

```text
string(13) "Hello, world!"
int(42)
float(3.14)
bool(true)
```

</details>

### Exercice 25

Déclarez une fonction `isDivisibleBy` qui prend deux paramètres `$a` et `$b` et
retourne `true` si `$a` est divisible par `$b`, ou `false` sinon. Utilisez cette
fonction pour vérifier si `10` est divisible par `2` et si `10` est divisible
par `3`.

**Attention**: la fonction doit vérifier de ne pas diviser par zéro !

<details>
<summary>Afficher la réponse</summary>

```php
<?php
function isDivisibleBy(int $a, int $b): bool {
    return $b != 0 && $a % $b == 0;
}

if (isDivisibleBy(10, 2)) {
    echo "10 is divisible by 2<br>";
} else {
    echo "10 is not divisible by 2<br>";
}

if (isDivisibleBy(10, 3)) {
    echo "10 is divisible by 3<br>";
} else {
    echo "10 is not divisible by 3<br>";
}
```

```text
10 is divisible by 2
10 is not divisible by 3
```

</details>

### Exercice 26 - Exercice bonus

> [!NOTE]
>
> Cet exercice est un exercice bonus. Il est totalement optionnel.

Déclarez une fonction `factorial` qui prend un paramètre `$number` et retourne
la factorielle de ce nombre. Utilisez cette fonction pour calculer `5!`.

Pour rappel, la factorielle d'un nombre est le produit de tous les entiers
positifs inférieurs ou égaux à ce nombre[^factorielle] :

- $n! = n \times (n - 1)!$
- $0! = 1$

Par exemple, $5! = 5 * 4 * 3 * 2 * 1 = 120$.

Il est donc possible de définir la fonction `factorial` de manière récursive (la
fonction s'appelle elle-même) en utilisant ces propriétés.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
function factorial(int $number): int {
    if ($number == 0) {
        return 1;
    }

    return $number * factorial($number - 1);
}

$result = factorial(5);

echo $result;
```

```text
120
```

</details>

### Exercice 10

Ce bout de code contient différentes erreurs. Saurez-vous les identifier ? Pour
chaque erreur, expliquez pourquoi elle est incorrecte et proposez une
correction.

Il y a un total de 5 erreurs.

```php
<?php
function printArray($numberOfElementsToDisplay = 1, $array) {
    for ($i = 0; $i <= $numberOfElementsToDisplay; $i++) {
        // Affichage de l'élément ligne par ligne
        echo $array[$i];
    }
}

$fruits = ["Pomme", "Poire", "Banane", "Cerise", "Fraise"];

$printArray(3, fruits);
```

<details>
<summary>Afficher la réponse</summary>

```php
<?php
// Erreur 1 : il faut déclarer les paramètres optionnels après les
// paramètres obligatoires
function printArray($array, $numberOfElementsToDisplay = 1) {
    // Erreur 2 : il faut utiliser < au lieu de <=
    for ($i = 0; $i < $numberOfElementsToDisplay; $i++) {
        // Erreur 3 : il manque le `<br>` pour passer à la ligne
        echo $array[$i] . "<br>";
    }
}

$fruits = ["Pomme", "Poire", "Banane", "Cerise", "Fraise"];

// Erreur 4 : pour appeler une fonction, il ne faut pas la préfixer avec `$`
// Erreur 5 : il faut invertir l'ordre des paramètres
printArray($fruits, 3);
```

```text
Pomme
Poire
Banane
```

</details>

### Exercice 11

En utilisant la documentation officielle de PHP sur les fonctions `range` :
<https://www.php.net/manual/fr/function.range.php> et `shuffle` :
<https://www.php.net/manual/fr/function.shuffle.php>, déclarez une fonction
`shuffleRange` qui prend deux paramètres `$start` et `$end` et retourne un
tableau contenant les nombres de `$start` à `$end` inclus, mélangés.

Faites des tests avec les valeurs suivantes :

```php
<?php
$start = 1;
$end = 10;
```

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$start = 1;
$end = 10;

function shuffleRange($start, $end) {
    $range = range($start, $end);
    shuffle($range);
    return $range;
}

print_r(shuffleRange($start, $end));
```

```text
// Ceci est un exemple de résultat, le vôtre sera différent
Array ( [0] => 3 [1] => 6 [2] => 7 [3] => 9 [4] => 1 [5] => 10 [6] => 8 [7] => 5 [8] => 2 [9] => 4 )
```

</details>

### Exercice 12

En utilisant la documentation officielle de PHP sur la fonction `sort` :
<https://www.php.net/manual/fr/function.sort.php>, utilisez la fonction `sort`
pour trier le tableau `$fruits` de l'[exercice 1](#exercice-1) par ordre
alphabétique.

Affichez le contenu du tableau avec la fonction `print_r`.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$fruits = ["Pomme", "Poire", "Banane", "Cerise", "Fraise"];
sort($fruits);

print_r($fruits);
```

```text
Array ( [0] => Banane [1] => Cerise [2] => Fraise [3] => Poire [4] => Pomme )
```

</details>

### Exercice 13 - Bonus

En utilisant la documentation officielle de PHP sur la fonction `usort` :
<https://www.php.net/manual/fr/function.usort.php>, utilisez la fonction `usort`
pour trier le tableau `$people` de l'[exercice 4](#exercice-4) par ordre
croissant de l'âge.

**Indice** : vous allez devoir déclarer une fonction de comparaison pour trier
le tableau selon l'age. Cette fonction prend deux paramètres `$a` et `$b` et
retourne un entier négatif si `$a` est plus petit que `$b`, un entier positif si
`$a` est plus grand que `$b` et zéro si les deux sont égaux.

Affichez le contenu du tableau avec la fonction `print_r`.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$people = [
    [
        "name" => "John Doe",
        "age" => 30,
        "city" => "New York"
    ],
    [
        "name" => "Jane Doe",
        "age" => 25,
        "city" => "Los Angeles"
    ],
    [
        "name" => "Alice Smith",
        "age" => 35,
        "city" => "Chicago"
    ]
];

function compareAge($a, $b) {
    if ($a["age"] > $b["age"]) {
        return 1;
    } else if ($a["age"] < $b["age"]) {
        return -1;
    } else {
        return 0;
    }
}

usort($people, "compareAge");

print_r($people);
```

</details>

### Exercice 14 - Bonus

En utilisant la documentation officielle de PHP sur les fonctions `usort` :
<https://www.php.net/manual/fr/function.usort.php> et `strcmp` :
<https://www.php.net/manual/fr/function.strcmp.php>, utilisez la fonction
`usort` pour trier le tableau `$people` de l'[exercice 4](#exercice-4) par ordre
alphabétique du nom.

**Indice** : vous allez devoir déclarer une fonction de comparaison pour trier
le tableau selon le nom. Cette fonction prend deux paramètres `$a` et `$b` et
utilise la fonction `strcmp` pour comparer les noms. La fonction `strcmp`
retourne un entier négatif si `$a` est plus petit que `$b`, un entier positif si
`$a` est plus grand que `$b` et zéro si les deux sont égaux.

Affichez le contenu du tableau avec la fonction `print_r`.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$people = [
    [
        "name" => "John Doe",
        "age" => 30,
        "city" => "New York"
    ],
    [
        "name" => "Jane Doe",
        "age" => 25,
        "city" => "Los Angeles"
    ],
    [
        "name" => "Alice Smith",
        "age" => 35,
        "city" => "Chicago"
    ]
];

function compareName($a, $b) {
    return strcmp($a["name"], $b["name"]);
}

usort($people, "compareName");

print_r($people);
```

```text
Array ( [0] => Array ( [name] => Alice Smith [age] => 35 [city] => Chicago ) [1] => Array ( [name] => Jane Doe [age] => 25 [city] => Los Angeles ) [2] => Array ( [name] => John Doe [age] => 30 [city] => New York ) )
```

</details>

### Exercice 15 - Bonus

En utilisant la documentation officielle de PHP sur les fonctions `range` :
<https://www.php.net/manual/fr/function.range.php> et `array_sum` :
<https://www.php.net/manual/fr/function.array-sum.php>, déclarez une fonction
`sumRange` qui prend deux paramètres `$start` et `$end` et retourne la somme des
nombres de `$start` à `$end` inclus.

Faites des tests avec les valeurs suivantes :

```php
<?php
$start = 15;
$end = 30;
```

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$start = 15;
$end = 30;

function sumRange($start, $end) {
    $range = range($start, $end);
    return array_sum($range);
}

echo sumRange($start, $end);
```

```text
360
```

</details>

### Exercice 16 - Bonus

En utilisant la documentation officielle de PHP sur les fonctions `explode` :
<https://www.php.net/manual/fr/function.explode.php>, `array_reverse` :
<https://www.php.net/manual/fr/function.array-reverse.php> et `implode` :
<https://www.php.net/manual/fr/function.implode.php>, déclarez une fonction
`reverseWords` qui prend un paramètre `$string` et retourne la chaîne de
caractères `$string` avec les mots dans l'ordre inverse.

Faites des tests avec la chaîne suivante :

```php
<?php
$string = "Hello, world!";
```

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$string = "Hello, world!";
$words = explode(" ", $string);
$reversedWords = array_reverse($words);
$result = implode(" ", $reversedWords);

echo $result;
```

```text
world! Hello,
```

</details>

### Exercice 17 - Bonus

En utilisant la documentation officielle de PHP sur les fonctions `array_map` :
<https://www.php.net/manual/fr/function.array-map.php> et `strrev` :
<https://www.php.net/manual/fr/function.strrev.php>, déclarez une fonction
`reverseWords` qui prend un paramètre `$string` et retourne la chaîne de
caractères `$string` avec les mots dans l'ordre inverse.

Faites des tests avec la chaîne suivante :

```php
<?php
$string = "Hello, world!";
```

Le résultat sera le suivant : _"olleh, world!"_.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$string = "Hello, world!";
$words = explode(" ", $string);
$reversedWords = array_map('strrev', $words);

$result = implode(" ", $reversedWords);

echo $result;
```

```text
,olleH !dlrow
```

</details>

[^annee-bissextile]:
    Année bissextile
    [fr.wikipedia.org](https://fr.wikipedia.org/wiki/Ann%C3%A9e_bissextile), 23
    mars 2025

[^factorielle]:
    Factorielle [fr.wikipedia.org](https://fr.wikipedia.org/wiki/Factorielle),
    23 mars 2025

[^valeur-absolue]:
    Valeur absolue
    [fr.wikipedia.org](https://fr.wikipedia.org/wiki/Valeur_absolue), 23 mars
    2025

<!-- URLs -->

[licence]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md
