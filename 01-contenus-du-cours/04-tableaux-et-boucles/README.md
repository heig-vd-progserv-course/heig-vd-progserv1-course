# Tableaux et boucles

L. Delafontaine, avec l'aide de GitHub Copilot.

Ce travail est sous licence [CC BY-SA 4.0][license].

> [!TIP]
>
> Voici quelques informations relatives à ce contenu.
>
> **Ressources annexes**
>
> - Autres formats :
>   [Présentation (web)](https://heig-vd-progserv-course.github.io/heig-vd-progserv1-course/01-contenus-du-cours/04-tableaux-et-boucles/presentation.html)
>   ·
>   [Présentation (PDF)](https://heig-vd-progserv-course.github.io/heig-vd-progserv1-course/01-contenus-du-cours/04-tableaux-et-boucles/04-tableaux-et-boucles-presentation.pdf).
> - Exemples de code : [Code source](./01-exemples-de-code/README.md).
> - Exercices : [Énoncés et solutions](./02-exercices/README.md).
> - Mini-projet : [Consignes](./03-mini-projet/README.md).
>
> **Objectifs**
>
> À l'issue de ce contenu, les personnes devraient être capables de :
>
> - Décrire les tableaux et leurs caractéristiques.
> - Décrire la différence entre les tableaux indexés, les tableaux associatifs
>   et les tableaux multidimensionnels.
> - Utiliser et manipuler des tableaux (indexés, associatifs et
>   multidimensionnels).
> - Décrire les boucles et leurs caractéristiques.
> - Décrire la différence entre les boucles `for`, `while`, `do...while` et
>   `foreach`.
> - Utiliser les boucles pour parcourir des tableaux et des collections de
>   données.
> - Utiliser quelques fonctions utiles pour travailler avec les tableaux et les
>   boucles.
>
> **Méthodes d'enseignement et d'apprentissage**
>
> Les méthodes d'enseignement et d'apprentissage utilisées pour animer le
> contenu sont les suivantes :
>
> - Présentation.
> - Discussions collectives.
> - Travail en autonomie.
>
> **Méthodes d'évaluation**
>
> L'évaluation du contenu prend la forme d'un mini-projet et d'exercices à
> réaliser en autonomie en classe ou à la maison.
>
> L'évaluation se fait en utilisant les critères suivants :
>
> - Capacité à répondre avec justesse.
> - Capacité à argumenter.
>
> Les retours se font de la manière suivante :
>
> - Corrigé du mini-projet.
> - Corrigé des exercices.
>
> L'évaluation ne donne pas lieu à une note.

## Table des matières

- [Table des matières](#table-des-matières)
- [Objectifs](#objectifs)
- [Les tableaux](#les-tableaux)
  - [Tableaux indexés](#tableaux-indexés)
  - [Tableaux associatifs](#tableaux-associatifs)
  - [Tableaux multidimensionnels](#tableaux-multidimensionnels)
- [Les boucles](#les-boucles)
  - [Boucle `for`](#boucle-for)
  - [Boucle `while`](#boucle-while)
  - [Boucle `do...while`](#boucle-dowhile)
  - [Boucle `foreach`](#boucle-foreach)
- [Fonctions utiles pour les tableaux et les boucles](#fonctions-utiles-pour-les-tableaux-et-les-boucles)
  - [Fonctions `print()` et `print_r()`](#fonctions-print-et-print_r)
  - [Fonction `count()`](#fonction-count)
  - [Fonction `array_push()`](#fonction-array_push)
- [Conclusion](#conclusion)
- [Exemples de code](#exemples-de-code)
- [Exercices](#exercices)
- [Mini-projet](#mini-projet)
- [À faire pour la semaine suivante](#à-faire-pour-la-semaine-suivante)

## Objectifs

Les tableaux permettent de stocker plusieurs valeurs dans une seule variable.

En utilisant les tableaux, il nous est possible de stocker des collections de
données, comme une liste de noms, une liste de nombres, tout comme une liste de
tableaux.

Ces tableaux permettent de stocker des données structurées et d'y accéder de
manière plus intuitive.

Les boucles permettent de parcourir ces tableaux ou ces collections de données.

En utilisant les boucles, il nous est possible de parcourir un tableau et
d'afficher chaque élément du tableau et de les afficher.

Les tableaux et les boucles sont des concepts fondamentaux en programmation et
sont utilisés dans de nombreux programmes et applications, notamment pour
stocker et parcourir une collection d'animaux de compagnie.

De façon plus concise, les personnes qui étudient devraient être capables de :

- Décrire les tableaux et leurs caractéristiques.
- Décrire la différence entre les tableaux indexés, les tableaux associatifs et
  les tableaux multidimensionnels.
- Utiliser et manipuler des tableaux (indexés, associatifs et
  multidimensionnels).
- Décrire les boucles et leurs caractéristiques.
- Décrire la différence entre les boucles `for`, `while`, `do...while` et
  `foreach`.
- Utiliser les boucles pour parcourir des tableaux et des collections de
  données.
- Utiliser quelques fonctions utiles pour travailler avec les tableaux et les
  boucles.

## Les tableaux

Un tableau est une structure de données qui permet de stocker plusieurs valeurs
dans une seule variable. Les tableaux sont très utiles pour stocker des
collections de données, comme une liste de noms, une liste de nombres, etc.

Il existe plusieurs types de tableaux en PHP :

- Les tableaux indexés
- Les tableaux associatifs
- Les tableaux multidimensionnels

Chaque type de tableau a ses propres caractéristiques et peut être utilisé pour
différents types de données.

### Tableaux indexés

Un tableau indexé est un tableau qui stocke des valeurs dans un ordre séquentiel
et utilise des indices numériques pour accéder à ces valeurs. Voici un exemple
de tableau indexé :

```php
<?php
$fruits = ['apple', 'banana', 'orange', 'kiwi'];

echo $fruits[0] . "<br>"; // Affiche 'apple'
echo $fruits[1] . "<br>"; // Affiche 'banana'
echo $fruits[2] . "<br>"; // Affiche 'orange'
echo $fruits[3] . "<br>"; // Affiche 'kiwi'
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void main(String[] args) {
        String[] fruits = {"apple", "banana", "orange", "kiwi"};

        System.out.println(fruits[0]); // Affiche 'apple'
        System.out.println(fruits[1]); // Affiche 'banana'
        System.out.println(fruits[2]); // Affiche 'orange'
        System.out.println(fruits[3]); // Affiche 'kiwi'
    }
}
```

</details>

Dans cet exemple, nous avons un tableau `$fruits` qui contient plusieurs fruits.

Un tableau indexé est une structure de données qui stocke des valeurs dans un
ordre séquentiel. Chaque valeur est associée à un index numérique, qui permet
d'accéder à cette valeur.

Chaque fruit est stocké à un index numérique, qui commence à 0 pour le premier
élément du tableau.

Ce tableau indexé peut être représenté sous la forme d'une table, composée de
paires de clé-valeur :

| Index | Valeur     |
| ----- | ---------- |
| `0`   | `'apple'`  |
| `1`   | `'banana'` |
| `2`   | `'orange'` |
| `3`   | `'kiwi'`   |

Le tableau `$fruits` contient quatre éléments, chacun associé à un index
numérique. Pour accéder à un élément du tableau, nous utilisons son index entre
crochets (`[]`).

Par exemple, pour accéder au premier fruit du tableau, nous utilisons
`$fruits[0]`, qui renvoie la valeur `'apple'`.

Comme PHP est un langage de programmation dynamique, les tableaux peuvent
contenir des valeurs de différents types, comme des chaînes de caractères, des
nombres, des booléens, etc., comme le montre l'exemple suivant :

```php
<?php
$mixed = ['apple', 123, true, 3.14];

echo $mixed[0] . "<br>"; // Affiche 'apple'
echo $mixed[1] . "<br>"; // Affiche 123
echo $mixed[2] . "<br>"; // Affiche true
echo $mixed[3] . "<br>"; // Affiche 3.14
```

<details>
<summary>Afficher l'équivalent en Java</summary>

Il n'est pas possible de créer un tableau contenant des types différents en
Java.

</details>

Dans cet exemple, nous avons un tableau `$mixed` qui contient des valeurs de
différents types. Chaque valeur est stockée à un index numérique, comme dans le
précédent exemple.

Les tableaux indexés sont très utiles pour stocker des collections de données et
pour accéder à ces données de manière séquentielle.

> [!NOTE]
>
> Imaginons maintenant que nous souhaitons représenter une personne à l'aide
> d'un tableau indexé. Nous pourrions créer un tableau `$person` qui contient le
> nom, l'âge et la ville de la personne :
>
> ```php
> <?php
> $person = ['John Doe', 30, 'New York'];
>
> echo $person[0] . "<br>"; // Affiche le nom de la personne
> echo $person[1] . "<br>"; // Affiche l'âge de la personne
> echo $person[2] . "<br>"; // Affiche la ville de la personne
> ```
>
> Ce tableau indexé peut être représenté sous la forme d'une table, composée de
> paires d'index-valeur :
>
> | Index | Valeur       |
> | ----- | ------------ |
> | `0`   | `'John Doe'` |
> | `1`   | `30`         |
> | `2`   | `'New York'` |
>
> Bien que nous ayons utilisé un tableau indexé pour représenter une personne,
> il n'est pas très intuitif d'accéder à ses informations. Par exemple, pour
> accéder au nom de la personne, nous devrions utiliser `$person[0]`, ce qui
> n'est pas très significatif.
>
> Nous aurions peut-être le souhait de pouvoir accéder aux propriétés de la
> personne par des noms plus explicites, comme `$person['name']` ou
> `$person['age']`, où `'name'` et `'age'` sont des clés qui représentent les
> propriétés de la personne (le nom et l'âge de la personne, respectivement).
>
> Cependant, cela n'est pas possible avec un tableau indexé.
>
> Heureusement, PHP propose une solution pour cela : les tableaux associatifs.

### Tableaux associatifs

Un tableau associatif est un tableau qui stocke des valeurs en utilisant des
chaînes de caractères, appelées _clés_, pour accéder à ces valeurs. Voici un
exemple de tableau associatif :

```php
<?php
$person = [
    // Les caractères `=>` sont utilisés pour associer
    // une clé à une valeur
    'name' => 'John Doe',
    'age' => 30,
    'city' => 'New York',
];

echo $person['name'] . "<br>"; // Affiche 'John Doe'
echo $person['age'] . "<br>"; // Affiche 30
echo $person['city'] . "<br>"; // Affiche 'New York'
```

<details>
<summary>Afficher l'équivalent en Java</summary>

Il n'est pas possible de créer un tableau associatif en Java, mais nous pouvons
utiliser une `HashMap` pour obtenir un résultat similaire (non décrit ici).

</details>

Dans cet exemple, nous avons un tableau `$person` qui contient des informations
sur une personne.

Un tableau associatif est une structure de données qui stocke des valeurs en
utilisant des chaînes de caractères, appelées _clés_, pour accéder à ces
valeurs. Chaque valeur est associée à une clé, qui permet d'accéder à cette
valeur. Les clés sont des chaînes de caractères, qui peuvent être complètement
arbitraire, comme des mots, des phrases ou même des nombres.

Chaque information est stockée avec une clé qui permet d'accéder à cette
information. Les caractères `=>` sont utilisés pour associer une clé à une
valeur.

Ce tableau associatif peut être représenté sous la forme d'une table, composée
de paires de clé-valeur :

| Clé    | Valeur       |
| ------ | ------------ |
| `name` | `'John Doe'` |
| `age`  | `30`         |
| `city` | `'New York'` |

Le tableau `$person` contient trois éléments, chacun associé à une clé
arbitraire. Pour accéder à un élément du tableau, nous utilisons sa clé entre
crochets (`[]`).

Par exemple, pour accéder au nom de la personne, nous utilisons
`$person['name']`, qui renvoie la valeur `'John Doe'`.

Les tableaux associatifs sont très utiles pour stocker des données structurées
et pour accéder à ces données de manière plus intuitive.

D'autres langages de programmation utilisent des structures de données
similaires pour stocker des collections de données, comme les objets en
JavaScript, les dictionnaires en Python ou les maps en Java.

### Tableaux multidimensionnels

Un tableau multidimensionnel est un tableau qui contient d'autres tableaux à
l'intérieur. Ces tableaux peuvent être indexés, associatifs ou même
multidimensionnels. Voici un exemple de tableau multidimensionnel :

```php
<?php
// Un tableau multidimensionnel contenant des tableaux indexés
$matrix = [
    [1, 2, 3], // Un premier tableau indexé
    [4, 5, 6], // Un deuxième tableau indexé
    [7, 8, 9], // Un troisième tableau indexé
];

echo $matrix[0][0] . "<br>"; // Affiche 1
echo $matrix[1][1] . "<br>"; // Affiche 5
echo $matrix[2][2] . "<br>"; // Affiche 9
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void main(String[] args) {
        // Un tableau multidimensionnel contenant des tableaux indexés
        int[][] matrix = {
            {1, 2, 3}, // Un premier tableau indexé
            {4, 5, 6}, // Un deuxième tableau indexé
            {7, 8, 9} // Un troisième tableau indexé
        };

        System.out.println(matrix[0][0]); // Affiche 1
        System.out.println(matrix[1][1]); // Affiche 5
        System.out.println(matrix[2][2]); // Affiche 9
    }
}
```

</details>

Dans cet exemple, nous avons un tableau `$matrix` qui contient d'autres tableaux
à l'intérieur. Chaque tableau interne est un tableau indexé qui stocke des
nombres.

Pour accéder à un élément du tableau multidimensionnel, nous utilisons deux
indices : le premier pour accéder au tableau interne et le deuxième pour accéder
à l'élément du tableau interne.

Les tableaux multidimensionnels sont très utiles pour stocker des données
complexes, comme des matrices, des tableaux de bord, des arbres ou encore des
listes d'animaux (😉).

Un autre exemple de tableau multidimensionnel est un tableau associatif de
tableaux associatifs :

```php
<?php
// Un tableau multidimensionnel contenant des tableaux associatifs
$users = [
    // `'john'` est une clé complètement arbitraire
    // représentant un premier utilisateur
    'john' => [ // Un premier tableau associatif
        'name' => 'John Doe',
        'age' => 30,
        'city' => 'New York',
    ],
    // `'jane'` est une clé complètement arbitraire
    // représentant un second utilisateur
    'jane' => [ // Un deuxième tableau associatif
        'name' => 'Jane Doe',
        'age' => 25,
        'city' => 'Los Angeles',
    ],
];

echo $users['john']['name'] . "<br>"; // Affiche 'John Doe'
echo $users['jane']['age'] . "<br>"; // Affiche 25
echo $users['john']['city'] . "<br>"; // Affiche 'New York'

```

<details>
<summary>Afficher l'équivalent en Java</summary>

Il n'est pas possible de créer un tableau associatif en Java, mais nous pouvons
utiliser une `HashMap` pour obtenir un résultat similaire (non décrit ici).

</details>

Dans cet exemple, nous avons un tableau `$users` qui contient des informations
sur plusieurs utilisateurs. Chaque utilisateur est stocké dans un tableau
associatif avec une clé (ou un nom) qui permet d'accéder à ses informations.

## Les boucles

PHP propose plusieurs types de boucles pour parcourir des tableaux ou des
collections de données. Voici les principaux types de boucles que vous
rencontrerez :

- La boucle `for`
- La boucle `while`
- La boucle `do...while`
- La boucle `foreach`

### Boucle `for`

La boucle `for` est une boucle qui permet de parcourir un tableau ou une
collection de données en utilisant un compteur. Voici un exemple de boucle `for`
:

```php
<?php
// Affiche les nombres de 0 à 9
for ($i = 0; $i < 10; $i++) {
    echo "$i<br>";
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void main(String[] args) {
        for (int i = 0; i < 10; i++) {
            System.out.println(i);
        }
    }
}
```

</details>

Dans cet exemple, nous avons une boucle `for` qui affiche les nombres de 0 à 9.

La boucle `for` est composée de trois parties :

1. L'initialisation du compteur (`$i = 0`)
2. La condition d'arrêt (`$i < 10`)
3. L'incrémentation du compteur (`$i++`)

Si `$i` est inférieur à 10, la boucle continue. Sinon, la boucle s'arrête.

La condition d'arrêt est toujours une expression booléenne qui est évaluée à
chaque itération de la boucle. Elle utilise les mêmes opérateurs de comparaison
que les instructions `if` et `else`.

Si la condition est vraie, la boucle continue. Sinon, la boucle s'arrête.

### Boucle `while`

La boucle `while` est une boucle qui permet de parcourir un tableau ou une
collection de données en utilisant une condition. Voici un exemple de boucle
`while` :

```php
<?php
$i = 0;

// Affiche les nombres de 0 à 9
while ($i < 10) {
    echo "$i<br>";
    $i++;
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void main(String[] args) {
        int i = 0;

        while (i < 10) {
            System.out.println(i);
            i++;
        }
    }
}
```

</details>

Dans cet exemple, nous avons une boucle `while` qui affiche les nombres de 0
à 9. Dans ce cas, la boucle n'est pas très différente de la boucle `for`.

La principale différence est que la boucle `while` n'a pas de partie
d'initialisation ou d'incrémentation. Elle utilise uniquement une condition pour
déterminer si la boucle doit continuer ou s'arrêter.

Considérons un autre exemple de boucle `while` :

```php
<?php
$weather = "cloudy";

while ($weather == "cloudy") {
    echo "It's still cloudy...<br>";

    // Ici, on imagine un scénario où notre code va interagir avec un site web externe qui retourne la météo pour mettre à jour la variable `$weather`
    $weather = getWeather("Yverdon-les-Bains");
}

echo "The weather in Yverdon-les-Bains is *finally* different than cloudy! Yay!";
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void main(String[] args) {
        String weather = "cloudy";

        while (weather.equals("cloudy")) {
            System.out.println("It's still cloudy...");

            // Ici, on imagine un scénario où notre code va interagir avec un site web externe qui retourne la météo pour mettre à jour la variable `weather`
            weather = getWeather("Yverdon-les-Bains");
        }

        System.out.println("The weather in Yverdon-les-Bains is *finally* different than cloudy! Yay!");
    }
}
```

</details>

Dans cet exemple, nous avons une boucle `while` qui vérifie si le temps est
nuageux. Tant que le temps est nuageux, la boucle continue. Une fois que le
temps n'est plus nuageux, la boucle s'arrête.

### Boucle `do...while`

La boucle `do...while` est une boucle similaire à la boucle `while`, mais avec
une différence importante : la condition est vérifiée après l'exécution du code
à l'intérieur de la boucle, à l'inverse de la boucle `while` qui vérifie la
condition avant d'exécuter le code à l'intérieur de la boucle. Cela signifie que
le code à l'intérieur de la boucle est exécuté au moins une fois, même si la
condition est fausse. Voici unVoici un exemple de boucle `do...while` :

```php
<?php
$randomNumber = null;

do {
    // La fonction `rand()` génère un nombre aléatoire entre 1 et 10
    $randomNumber = rand(1, 10);
    echo "The random number is $randomNumber<br>";
} while ($randomNumber < 8);
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void main(String[] args) {
        int randomNumber = null;

        do {
            // La fonction `Math.random()` génère un nombre aléatoire
            // entre 1 et 10
            randomNumber = (int) (Math.random() * 10) + 1;
            System.out.println("The random number is " + randomNumber);
        } while (randomNumber < 5);
    }
}
```

</details>

Dans cet exemple, nous avons une boucle `do...while` qui génère un nombre
aléatoire entre 1 et 10. La boucle continue tant que le nombre aléatoire est
inférieur à 5. La boucle s'arrête dès que le nombre aléatoire est supérieur ou
égal à 5.

La boucle `do...while` est utile lorsque vous souhaitez exécuter le code à
l'intérieur de la boucle au moins une fois, même si la condition est fausse.

### Boucle `foreach`

La boucle `foreach` est une boucle spécialement conçue pour parcourir des
tableaux ou des collections de données. Voici un exemple de boucle `foreach` :

```php
<?php
$fruits = ['apple', 'banana', 'orange', 'kiwi'];

// L'ordre des champs ici est inversé par rapport à Java !
foreach ($fruits as $fruit) {
    echo "$fruit<br>";
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
import java.util.Arrays;
import java.util.List;

public class Main {
    public static void main(String[] args) {
        List<String> fruits = Arrays.asList("apple", "banana", "orange");

        // L'ordre des champs ici est inversé par rapport à PHP !
        for (String fruit : fruits) {
            System.out.println(fruit);
        }
    }
}
```

</details>

Avec des tableaux associatifs multidimensionnels, vous pouvez également utiliser
deux variables pour parcourir les clés et les valeurs du tableau :

```php
<?php
$users = [
    'john' => [
        'name' => 'John Doe',
        'age' => 30,
        'city' => 'New York',
    ],
    'jane' => [
        'name' => 'Jane Doe',
        'age' => 25,
        'city' => 'Los Angeles',
    ],
];

// `$user` contient la valeur de l'élément du tableau
foreach ($users as $user) {
    echo "Name: {$user['name']}<br>";
    echo "Age: {$user['age']}<br>";
    echo "City: {$user['city']}<br>";
    echo "<br>";
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

Il n'est pas possible de créer un tableau associatif en Java, mais nous pouvons
utiliser une `HashMap` pour obtenir un résultat similaire (non décrit ici).

</details>

Dans cet exemple, nous avons un tableau `$users` qui contient des informations
sur plusieurs utilisateurs. Nous utilisons une boucle `foreach` pour parcourir
le tableau et afficher les informations de chaque utilisateur.

La boucle `foreach` est très utile pour parcourir des tableaux ou des
collections de données sans avoir à se soucier des indices ou des clés.

La variable `$username` contient la clé de l'élément du tableau, et la variable
`$user` contient la valeur de l'élément du tableau, qui peut être un tableau
associatif.

## Fonctions utiles pour les tableaux et les boucles

PHP propose plusieurs fonctions pour travailler avec des tableaux. La
documentation officielle de PHP contient une liste complète de ces
fonctions[^php-fonctions-sur-les-tableaux] mais voici quelques-unes des plus
utiles.

### Fonctions `print()` et `print_r()`

La fonction `print()` affiche une chaîne de caractères à l'écran. Il s'agit
d'une alternative à la fonction `echo`.

La fonction `print_r()` affiche des informations sur une variable, y compris sa
structure et son contenu. Elle est très utile pour afficher des tableaux.

```php
<?php
$fruits = ['apple', 'banana', 'orange', 'kiwi'];

print_r($fruits);
```

```text
Array ( [0] => apple [1] => banana [2] => orange [3] => kiwi )
```

La fonction `print_r()` affiche le tableau `$fruits` avec ses indices et ses
valeurs.

La fonction `print_r()` est très utile pour déboguer du code et afficher des
informations sur les tableaux ou toute autre variable.

### Fonction `count()`

La fonction `count()` permet de compter le nombre d'éléments dans un tableau.

En utilisant la fonction `count()`, nous pouvons facilement déterminer la taille
d'un tableau pour l'utiliser avec une boucle `for` :

```php
<?php
$fruits = ['apple', 'banana', 'orange', 'kiwi'];

for ($i = 0; $i < count($fruits); $i++) {
    echo "$fruits[$i]<br>";
}
```

Dans cet exemple, nous avons un tableau `$fruits` qui contient plusieurs fruits.
Nous utilisons une boucle `for` pour parcourir le tableau et afficher chaque
élément du tableau en utilisant son index.

Si `$i` est inférieur à la taille du tableau `$fruits`, la boucle continue.
Sinon, la boucle s'arrête.

### Fonction `array_push()`

La fonction `array_push()` permet d'ajouter un ou plusieurs éléments à la fin
d'un tableau. Elle modifie le tableau d'origine et retourne le nombre d'éléments
dans le tableau après l'ajout. Voici un exemple d'utilisation de la fonction
`array_push()` :

```php
<?php
$fruits = ['apple', 'banana', 'orange'];

array_push($fruits, 'kiwi', 'pear');

print_r($fruits);
```

```text
Array ( [0] => apple [1] => banana [2] => orange [3] => kiwi [4] => pear )
```

Dans cet exemple, nous avons un tableau `$fruits` qui contient trois fruits.
Nous utilisons la fonction `array_push()` pour ajouter deux nouveaux fruits à la
fin du tableau.

## Conclusion

Dans cette session, nous avons vu comment utiliser les tableaux et les boucles
pour stocker et parcourir des collections de données.

Nous avons également vu comment utiliser les fonctions de base pour travailler
avec des tableaux.

Grâce aux tableaux et aux boucles, nous pouvons stocker des données structurées
et y accéder de manière plus intuitive.

Nous avons également vu comment utiliser les fonctions `print()` et `print_r()`
pour afficher des informations sur les tableaux ainsi que d'autres fonctions
utiles comme `count()` et `array_push()`.

Nous allons maintenant pouvoir utiliser ces concepts pour créer des applications
plus complexes et plus puissantes.

## Exemples de code

Nous vous invitons maintenant à consulter les exemples de code de la séance afin
de mieux comprendre les concepts abordés.

Vous trouverez les exemples de code ici :
[Exemples de code](./01-exemples-de-code/README.md).

## Exercices

Nous vous invitons maintenant à réaliser les exercices de la séance afin de
mettre en pratique les concepts abordés.

Vous trouverez les exercices et leur corrigé ici :
[Exercices](./02-exercices/README.md).

## Mini-projet

Nous vous invitons maintenant à réaliser le mini-projet de la séance afin de
mettre en pratique les concepts abordés.

Vous trouverez les détails du mini-projet ici :
[Mini-projet](./03-mini-projet/README.md).

## À faire pour la semaine suivante

Chaque personne est libre de gérer son temps comme elle le souhaite. Cependant,
il est recommandé pour la séance suivante de :

- Relire le support de cours si nécessaire.
- Finaliser la partie du mini-projet qui n'a pas été terminée en classe.
- Finaliser la compréhension des exemples de code vus qui n'ont pas été compris
  en classe.
- Finaliser les exercices qui n'ont pas été terminés en classe.

<!-- URLs -->

[license]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md

<!-- Footnotes -->

[^php-fonctions-sur-les-tableaux]:
    Fonctions sur les tableaux,
    [php.net](https://www.php.net/manual/fr/ref.array.php), 20 mars 2025
