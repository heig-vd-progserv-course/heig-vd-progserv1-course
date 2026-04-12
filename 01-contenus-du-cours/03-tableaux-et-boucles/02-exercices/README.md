# Tableaux et boucles - Exercices

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

Créez un tableau indexé `$fruits` contenant les éléments suivants :

- Pomme
- Poire
- Banane
- Cerise
- Fraise

Affichez le contenu du tableau avec la fonction `print_r` puis affichez le
troisième élément du tableau.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$fruits = ["Pomme", "Poire", "Banane", "Cerise", "Fraise"];

print_r($fruits);

echo "<br>";

echo $fruits[2];
```

```text
Array ( [0] => Pomme [1] => Poire [2] => Banane [3] => Cerise [4] => Fraise )
```

```text
Banane
```

</details>

### Exercice 2

Créez un tableau associatif `$person` contenant les éléments suivants :

- `firstName` : John
- `lastName` : Doe
- `age` : 30
- `city` : New York

Affichez le contenu du tableau avec la fonction `print_r` puis affichez la
valeur de la clé `age` du tableau `$person`.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$person = [
    "firstName" => "John",
    "lastName" => "Doe",
    "age" => 30,
    "city" => "New York"
];

print_r($person);

echo "<br>";

echo $person["age"];
```

```text
Array ( [firstName] => John [lastName] => Doe [age] => 30 [city] => New York )
```

```text
30
```

</details>

### Exercice 3

Créez un tableau multidimensionnel `$ticTacToe` (le tic-tac-toe est le nom
anglophone du jeu du morpion) composé de trois tableaux indexés contenant les
éléments suivants :

- Une première ligne avec les valeurs `X`, `O` et `X`
- Une deuxième ligne avec les valeurs `O`, `X` et `O`
- Une troisième ligne avec les valeurs `X`, `O` et `X`

Affichez le contenu du tableau avec la fonction `print_r` puis affichez la
valeur de la deuxième ligne et de la troisième colonne du tableau `$ticTacToe`.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$ticTacToe = [
    ["X", "O", "X"],
    ["O", "X", "O"],
    ["X", "O", "X"]
];

print_r($ticTacToe);

echo "<br>";

echo $ticTacToe[1][2];
```

```text
Array ( [0] => Array ( [0] => X [1] => O [2] => X ) [1] => Array ( [0] => O [1] => X [2] => O ) [2] => Array ( [0] => X [1] => O [2] => X ) )
```

```text
O
```

</details>

### Exercice 4

Créez un tableau `$people` composé de trois tableaux associatifs contenant les
éléments suivants :

- Un tableau avec les clés `name`, `age` et `city` et les valeurs `John Doe`,
  `30` et `New York`
- Un tableau avec les clés `name`, `age` et `city` et les valeurs `Jane Doe`,
  `25` et `Los Angeles`
- Un tableau avec les clés `name`, `age` et `city` et les valeurs `Alice Smith`,
  `35` et `Chicago`

Affichez le contenu du tableau avec la fonction `print_r` puis affichez la
valeur de la clé `name` du dernier tableau du tableau `$people`.

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

print_r($people);

echo "<br>";

echo $people[2]["name"];
```

```text
Array ( [0] => Array ( [name] => John Doe [age] => 30 [city] => New York ) [1] => Array ( [name] => Jane Doe [age] => 25 [city] => Los Angeles ) [2] => Array ( [name] => Alice Smith [age] => 35 [city] => Chicago ) )
```

```text
Alice Smith
```

</details>

### Exercice 5

Créez un tableau multidimensionnel associatif `$fruitsAndVegetables` composé de
deux tableaux indexés contenant les éléments suivants :

- Un tableau avec les valeurs `Pomme`, `Poire`, `Banane`, `Cerise` et `Fraise`
  qui a comme clé `fruits`
- Un tableau avec les valeurs `Carotte`, `Tomate`, `Salade`, `Concombre` et
  `Radis` qui a comme clé `vegetables`

Affichez le contenu du tableau avec la fonction `print_r` puis affichez la
valeur de la clé `vegetables` du tableau `$fruitsAndVegetables`.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$fruitsAndVegetables = [
    "fruits" => ["Pomme", "Poire", "Banane", "Cerise", "Fraise"],
    "vegetables" => ["Carotte", "Tomate", "Salade", "Concombre", "Radis"]
];

print_r($fruitsAndVegetables);

echo "<br>";

print_r($fruitsAndVegetables["vegetables"]);
```

```text
Array ( [fruits] => Array ( [0] => Pomme [1] => Poire [2] => Banane [3] => Cerise [4] => Fraise ) [vegetables] => Array ( [0] => Carotte [1] => Tomate [2] => Salade [3] => Concombre [4] => Radis ) )
```

```text
Array ( [0] => Carotte [1] => Tomate [2] => Salade [3] => Concombre [4] => Radis )
```

</details>

### Exercice 6

Créez un tableau multidimensionnel associatif `$people` composé de trois
tableaux associatifs contenant les éléments suivants :

- Une clé `johnDoe` contenant un tableau associatif avec les clés `name`, `age`
  et `city` et les valeurs `John Doe`, `30` et `New York`
- Une clé `janeDoe` contenant un tableau associatif avec les clés `name`, `age`
  et `city` et les valeurs `Jane Doe`, `25` et `Los Angeles`
- Une clé `aliceSmith` contenant un tableau associatif avec les clés `name`,
  `age` et `city` et les valeurs `Alice Smith`, `35` et `Chicago`

Affichez le contenu du tableau avec la fonction `print_r` puis affichez la
valeur de la clé `name` du tableau `$people` qui a pour clé `janeDoe`.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$people = [
    "johnDoe" => [
        "name" => "John Doe",
        "age" => 30,
        "city" => "New York"
    ],
    "janeDoe" => [
        "name" => "Jane Doe",
        "age" => 25,
        "city" => "Los Angeles"
    ],
    "aliceSmith" => [
        "name" => "Alice Smith",
        "age" => 35,
        "city" => "Chicago"
    ]
];

print_r($people);

echo "<br>";

echo $people["janeDoe"]["name"];
```

```text
Array ( [johnDoe] => Array ( [name] => John Doe [age] => 30 [city] => New York ) [janeDoe] => Array ( [name] => Jane Doe [age] => 25 [city] => Los Angeles ) [aliceSmith] => Array ( [name] => Alice Smith [age] => 35 [city] => Chicago ) )
```

```text
Jane Doe
```

</details>

### Exercice 7

En utilisant une boucle `for`, affichez les éléments du tableau `$fruits` de
l'[exercice 1](#exercice-1) un par un.

**Bonus** : faites de même avec les boucles `while`, `do...while` et `foreach`.

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$fruits = ["Pomme", "Poire", "Banane", "Cerise", "Fraise"];

for ($i = 0; $i < count($fruits); $i++) {
    echo "$fruits[$i]<br>";
}

echo "<br>";

$i = 0;
while ($i < count($fruits)) {
    echo "$fruits[$i]<br>";
    $i++;
}

echo "<br>";

$i = 0;
do {
    echo "$fruits[$i]<br>";
    $i++;
} while ($i < count($fruits));

echo "<br>";

foreach ($fruits as $fruit) {
    echo "$fruit<br>";
}
```

```text
Pomme
Poire
Banane
Cerise
Fraise
(3x)
```

</details>

### Exercice 8

En utilisant des boucles `for`, affichez les éléments du tableau `$ticTacToe` de
l'[exercice 3](#exercice-3) avec à chaque fois le numéro de la ligne et le
numéro de la colonne avec le format `Ligne x, colonne y : valeur`.

**Bonus** : faites de même avec les boucles `while`, `do...while` et `foreach`.

<details>
<summary>Afficher la réponse</summary>

```php
<?php

<?php
$ticTacToe = [
    ["X", "O", "X"],
    ["O", "X", "O"],
    ["X", "O", "X"]
];

// On itère sur les lignes
for ($i = 0; $i < count($ticTacToe); $i++) {
    // On itère sur les colonnes
    for ($j = 0; $j < count($ticTacToe[$i]); $j++) {
        // On affiche le contenu de la case - ici, nous sommes obligés de passer
        // par une concaténation à l'aide du point (.) pour afficher le contenu
        // de la case, car PHP ne permet pas d'afficher directement le contenu
        // d'une case d'un tableau à deux dimensions à l'aide de l'interpolation
        echo "Ligne $i, colonne $j : " . $ticTacToe[$i][$j] . "<br>";
    }
}

echo "<br>";

$i = 0;
while ($i < count($ticTacToe)) {
    $j = 0;
    while ($j < count($ticTacToe[$i])) {
        // On affiche le contenu de la case - ici, nous sommes obligés de passer
        // par une concaténation à l'aide du point (.) pour afficher le contenu
        // de la case, car PHP ne permet pas d'afficher directement le contenu
        // d'une case d'un tableau à deux dimensions à l'aide de l'interpolation
        echo "Ligne $i, colonne $j : " . $ticTacToe[$i][$j] . "<br>";
        $j++;
    }
    $i++;
}

echo "<br>";

$i = 0;
do {
    $j = 0;
    do {

        // On affiche le contenu de la case - ici, nous sommes obligés de passer
        // par une concaténation à l'aide du point (.) pour afficher le contenu
        // de la case, car PHP ne permet pas d'afficher directement le contenu
        // d'une case d'un tableau à deux dimensions à l'aide de l'interpolation
        echo "Ligne $i, colonne $j : " . $ticTacToe[$i][$j] . "<br>";
        $j++;
    } while ($j < count($ticTacToe[$i]));
    $i++;
} while ($i < count($ticTacToe));

echo "<br>";

foreach ($ticTacToe as $i => $line) {
    foreach ($line as $j => $value) {
        // Ici, nous pouvons afficher directement le contenu de la case, car la
        // conversion du tableau à l'aide du `foreach` permet de récupérer
        // directement la valeur de la case
        echo "Ligne $i, colonne $j : $value<br>";
    }
}
```

```text
Ligne 0, colonne 0 : X
Ligne 0, colonne 1 : O
Ligne 0, colonne 2 : X
Ligne 1, colonne 0 : O
Ligne 1, colonne 1 : X
Ligne 1, colonne 2 : O
Ligne 2, colonne 0 : X
Ligne 2, colonne 1 : O
Ligne 2, colonne 2 : X
(3x)
```

</details>

### Exercice 9

En utilisant une boucle `foreach`, affichez les éléments du tableau `$people` de
l'[exercice 4](#exercice-4) un par un.

**Bonus** : faites de même avec les boucles `for`, `while` et `do...while`.

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

foreach ($people as $person) {
    echo "Nom : " . $person["name"] . "<br>";
    echo "Âge : " . $person["age"] . "<br>";
    echo "Ville : " . $person["city"] . "<br>";
    echo "<br>";
}

echo "<br>";

for ($i = 0; $i < count($people); $i++) {
    echo "Nom : " . $people[$i]["name"] . "<br>";
    echo "Âge : " . $people[$i]["age"] . "<br>";
    echo "Ville : " . $people[$i]["city"] . "<br>";
    echo "<br>";
}

echo "<br>";

$i = 0;
while ($i < count($people)) {
    echo "Nom : " . $people[$i]["name"] . "<br>";
    echo "Âge : " . $people[$i]["age"] . "<br>";
    echo "Ville : " . $people[$i]["city"] . "<br>";
    echo "<br>";
    $i++;
}

echo "<br>";

$i = 0;
do {
    echo "Nom : " . $people[$i]["name"] . "<br>";
    echo "Âge : " . $people[$i]["age"] . "<br>";
    echo "Ville : " . $people[$i]["city"] . "<br>";
    echo "<br>";
    $i++;
} while ($i < count($people));
```

```text
Nom : John Doe
Âge : 30
Ville : New York

Nom : Jane Doe
Âge : 25
Ville : Los Angeles

Nom : Alice Smith
Âge : 35
Ville : Chicago
(3x)
```

</details>

<!-- URLs -->

[licence]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md
