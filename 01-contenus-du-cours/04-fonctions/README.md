# Fonctions

L. Delafontaine, avec l'aide de GitHub Copilot.

Ce travail est sous licence [CC BY-SA 4.0][license].

> [!TIP]
>
> Voici quelques informations relatives à ce contenu.
>
> **Ressources annexes**
>
> - Autres formats :
>   [Présentation (web)](https://heig-vd-progserv-course.github.io/heig-vd-progserv1-course/01-contenus-du-cours/04-fonctions/presentation.html)
>   ·
>   [Présentation (PDF)](https://heig-vd-progserv-course.github.io/heig-vd-progserv1-course/01-contenus-du-cours/04-fonctions/04-fonctions-presentation.pdf).
> - Exemples de code : [Code source](./01-exemples-de-code/README.md).
> - Exercices : [Énoncés et solutions](./02-exercices/README.md).
> - Mini-projet : [Consignes](./03-mini-projet/README.md).
>
> **Objectifs**
>
> À l'issue de ce contenu, les personnes devraient être capables de :
>
> - Décrire ce qu'est une fonction en programmation.
> - Déclarer une fonction en PHP.
> - Appeler une fonction en PHP.
> - Passer des paramètres à une fonction en PHP.
> - Utiliser une valeur de retour.
> - Expliquer ce qu'est une portée de variable.
> - Utiliser des variables globales.
> - Savoir où trouver la documentation sur les fonctions prédéfinies en PHP.
> - Utiliser des fonctions prédéfinies en PHP.
> - Réutiliser du code avec des fonctions.
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
- [Qu'est-ce qu'une fonction ?](#quest-ce-quune-fonction-)
- [Déclarer une fonction en PHP](#déclarer-une-fonction-en-php)
- [Appeler une fonction en PHP](#appeler-une-fonction-en-php)
- [Passer des paramètres à une fonction](#passer-des-paramètres-à-une-fonction)
- [Retourner une valeur depuis une fonction](#retourner-une-valeur-depuis-une-fonction)
- [Paramètres optionnels](#paramètres-optionnels)
- [Passer plusieurs paramètres à une fonction](#passer-plusieurs-paramètres-à-une-fonction)
- [Typer les paramètres et la valeur de retour d'une fonction](#typer-les-paramètres-et-la-valeur-de-retour-dune-fonction)
- [Portée des variables](#portée-des-variables)
- [Variables globales](#variables-globales)
- [Fonctions prédéfinies en PHP](#fonctions-prédéfinies-en-php)
  - [Fonctions mathématiques](#fonctions-mathématiques)
  - [Fonctions sur les chaînes de caractères](#fonctions-sur-les-chaînes-de-caractères)
  - [Fonctions sur les variables](#fonctions-sur-les-variables)
- [Réutiliser du code avec des fonctions](#réutiliser-du-code-avec-des-fonctions)
  - [Différence entre `include_once` et `require_once`](#différence-entre-include_once-et-require_once)
  - [Différence entre `require_once` et `require`](#différence-entre-require_once-et-require)
- [Conclusion](#conclusion)
- [Exemples de code](#exemples-de-code)
- [Exercices](#exercices)
- [Mini-projet](#mini-projet)
- [Questions d'évaluation](#questions-dévaluation)
- [À faire pour la semaine suivante](#à-faire-pour-la-semaine-suivante)

## Objectifs

Les fonctions sont un concept fondamental en programmation. Elles permettent de
découper un programme en morceaux plus petits, plus faciles à comprendre et à
maintenir. Les fonctions permettent également de réutiliser du code, en
l'encapsulant dans une fonction que l'on peut appeler à plusieurs endroits.

Dans ce cours, nous allons voir comment déclarer et appeler des fonctions en
PHP. Nous allons également voir comment passer des paramètres à une fonction et
comment retourner une valeur depuis une fonction.

La liste complète des objectifs est disponible dans la section _"Objectifs"_ du
bloc d'information en haut de ce contenu.

## Qu'est-ce qu'une fonction ?

Une fonction est un ensemble d'instructions qui effectue une tâche spécifique.
Une fonction peut prendre des paramètres en entrée et peut retourner une valeur
en sortie.

Comme en mathématiques, une fonction en programmation prend des arguments en
entrée et retourne une valeur en sortie. Par exemple, la fonction $f(x) = x^2$
prend un argument $x$ en entrée et retourne $x^2$ en sortie. Si on appelle la
fonction $f(3)$, on obtient $9$.

En programmation, une fonction est définie par un nom, une liste de paramètres
(optionnelle) et un bloc de code. Une fois définie, une fonction peut être
appelée à partir d'un autre endroit du programme et permet de structurer le code
en le découpant en morceaux plus petits et plus faciles à comprendre.

## Déclarer une fonction en PHP

En PHP, une fonction est déclarée avec le mot-clé `function`, suivi du nom de la
fonction, de parenthèses `()` et d'accolades `{}` contenant le code de la
fonction.

Voici un exemple de déclaration de fonction en PHP :

```php
<?php
function hello() {
    echo "Hello, world!<br>";
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void hello() {
        System.out.println("Hello, world!");
    }
}
```

</details>

Dans cet exemple, la fonction `hello` ne prend pas de paramètres et ne retourne
pas de valeur. Elle affiche simplement le message `Hello, world!` à l'écran.

## Appeler une fonction en PHP

Pour appeler une fonction en PHP, on utilise le nom de la fonction suivi de
parenthèses `()`. Les parenthèses peuvent contenir des paramètres à passer à la
fonction, si elle en prend.

Un exemple d'appel de fonction en PHP sans paramètres :

```php
<?php
function hello() {
    echo "Hello, world!<br>";
}

hello(); // Affiche "Hello, world!"
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void hello() {
        System.out.println("Hello, world!");
    }

    public static void main(String[] args) {
        hello(); // Affiche "Hello, world!"
    }
}
```

</details>

Dans cet exemple, la fonction `hello` est appelée, ce qui affiche le message
`Hello, world!` à l'écran.

Il est tout à fait possible d'appeler une fonction à plusieurs reprises dans un
programme :

```php
<?php
function hello() {
    echo "Hello, world!<br>";
}

hello(); // Affiche "Hello, world!"
hello(); // Affiche "Hello, world!"
hello(); // Affiche "Hello, world!"
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void hello() {
        System.out.println("Hello, world!");
    }

    public static void main(String[] args) {
        hello(); // Affiche "Hello, world!"
        hello(); // Affiche "Hello, world!"
        hello(); // Affiche "Hello, world!"
    }
}
```

</details>

Dans cet exemple, la fonction `hello` est appelée trois fois, ce qui affiche le
message `Hello, world!` trois fois à l'écran.

## Passer des paramètres à une fonction

Une fonction peut également prendre des paramètres en entrée. Par exemple, la
fonction suivante prend un paramètre `$name` et affiche un message de salutation
personnalisé :

```php
<?php
function hello($name) {
    echo "Hello, $name!<br>";
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void hello(String name) {
        System.out.println("Hello, " + name + "!");
    }
}
```

</details>

Pour appeler cette fonction, on passe un argument à la fonction :

```php
<?php
function hello($name) {
    echo "Hello, $name!<br>";
}

hello("Alice"); // Affiche "Hello, Alice!"
hello("Bob"); // Affiche "Hello, Bob!"
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void hello(String name) {
        System.out.println("Hello, " + name + "!");
    }

    public static void main(String[] args) {
        hello("Alice"); // Affiche "Hello, Alice!"
        hello("Bob"); // Affiche "Hello, Bob!"
    }
}
```

</details>

Dans cet exemple, la fonction `hello` est appelée avec l'argument `"Alice"`, ce
qui affiche le message `Hello, Alice!` à l'écran. La fonction est ensuite
appelée avec l'argument `"Bob"`, ce qui affiche le message `Hello, Bob!` à
l'écran.

## Retourner une valeur depuis une fonction

Une fonction peut également retourner une valeur. La valeur peut ensuite être
utilisée dans le code appelant (= le code qui appelle la fonction).

Pour retourner une valeur depuis une fonction, on utilise le mot-clé `return`.
Une fonction ne peut retourner qu'une seule valeur.

Par exemple, la fonction suivante prend un paramètre `$x` et retourne le carré
de ce paramètre :

```php
<?php
function square($x) {
    return $x * $x;
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static int square(int x) {
        return x * x;
    }
}
```

</details>

Pour utiliser la valeur retournée par une fonction, on peut l'assigner à une
variable :

```php
<?php
function square($x) {
    return $x * $x;
}

$result = square(3);

echo $result; // Affiche 9
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static int square(int x) {
        return x * x;
    }

    public static void main(String[] args) {
        int result = square(3);

        System.out.println(result); // Affiche 9
    }
}
```

</details>

Dans cet exemple, la fonction `square` est appelée avec l'argument `3`, ce qui
retourne `9`. La valeur retournée est ensuite assignée à la variable `$result`,
qui est affichée à l'écran.

## Paramètres optionnels

En PHP, une fonction peut avoir des paramètres optionnels avec des valeurs par
défaut. Ces paramètres optionnels doivent être définis après les paramètres
obligatoires.

Par exemple, la fonction suivante prend un paramètre `$name` avec une valeur par
défaut `"world"` :

```php
<?php
function hello($name = "world") {
    echo "Hello, $name!<br>";
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

Il n'est pas possible de définir des paramètres optionnels en Java. Ceci est
spécifique à PHP.

</details>

Si on appelle cette fonction sans argument, elle affichera `Hello, world!` :

```php
<?php
function hello($name = "world") {
    echo "Hello, $name!<br>";
}

hello(); // Affiche "Hello, world!"
```

<details>
<summary>Afficher l'équivalent en Java</summary>

Il n'est pas possible de définir des paramètres optionnels en Java. Ceci est
spécifique à PHP.

</details>

Si on appelle cette fonction avec un argument, elle affichera `Hello, Alice!` :

```php
<?php
function hello($name = "world") {
    echo "Hello, $name!<br>";
}

hello("Alice"); // Affiche "Hello, Alice!"
```

<details>
<summary>Afficher l'équivalent en Java</summary>

Il n'est pas possible de définir des paramètres optionnels en Java. Ceci est
spécifique à PHP.

</details>

Dans cet exemple, la fonction `hello` a un paramètre `$name` avec une valeur par
défaut `"world"`. Si on appelle la fonction sans argument, elle utilise la
valeur par défaut. Si on appelle la fonction avec un argument, elle utilise cet
argument.

## Passer plusieurs paramètres à une fonction

Une fonction peut avoir plusieurs paramètres. Les paramètres sont séparés par
des virgules (`,`) et sont passés dans le même ordre que leur déclaration.

Par exemple, la fonction suivante prend deux paramètres `$x` et `$y` et retourne
la somme de ces deux paramètres :

```php
<?php
function add($x, $y) {
    return $x + $y;
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static int add(int x, int y) {
        return x + y;
    }
}
```

</details>

Pour utiliser cette fonction, on passe deux arguments :

```php
<?php
$result = add(3, 5);

echo $result; // Affiche 8
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static int add(int x, int y) {
        return x + y;
    }

    public static void main(String[] args) {
        int result = add(3, 5);

        System.out.println(result); // Affiche 8
    }
}
```

</details>

Il est aussi possible de déclarer des paramètres optionnels après des paramètres
obligatoires. Par exemple, la fonction suivante prend un paramètre `$x`
obligatoire et un paramètre `$y` optionnel avec une valeur par défaut `0` :

```php
<?php
function add($x, $y = 0) {
    return $x + $y;
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

Il n'est pas possible de définir des paramètres optionnels en Java. Ceci est
spécifique à PHP.

</details>

Dans cet exemple, si on appelle la fonction `add` avec un seul argument, le
deuxième argument prendra la valeur par défaut `0` :

```php
<?php
$result = add(3);

echo "$result<br>"; // Affiche 3
```

<details>
<summary>Afficher l'équivalent en Java</summary>

Il n'est pas possible de définir des paramètres optionnels en Java. Ceci est
spécifique à PHP.

</details>

Mais si l'on appelle la fonction `add` avec deux arguments, le deuxième argument
prendra la valeur passée en argument :

```php
<?php
$result = add(3, 5);

echo "$result<br>"; // Affiche 8
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static int add(int x, int y) {
        return x + y;
    }

    public static void main(String[] args) {
        int result = add(3, 5);

        System.out.println(result); // Affiche 8
    }
}
```

</details>

Si nous souhaitons dire qu'un paramètre est optionnel, mais que nous ne voulons
pas lui donner de valeur par défaut, nous pouvons lui donner la valeur `null`
par défaut :

```php
<?php
function add($x, $y = null) {
    if ($y === null) {
        return $x;
    }

    return $x + $y;
}
```

## Typer les paramètres et la valeur de retour d'une fonction

Depuis la version 7 de PHP, il est possible de typer les paramètres et la valeur
de retour d'une fonction. Cela permet de spécifier le type de données attendu
pour les paramètres et la valeur de retour, ce qui peut aider à éviter des
erreurs et à rendre le code plus lisible.

Par exemple, la fonction `add` étudiée précédemment peut être modifiée pour
prendre deux paramètres de type `float` et retourner un `float` :

```php
<?php
function add(float $x, float $y): float {
    return $x + $y;
}
```

De cette manière, si on essaie d'appeler la fonction `add` avec des arguments
qui ne sont pas des nombres à virgule flottante, ou si on essaie de retourner
une valeur qui n'est pas un nombre à virgule flottante, PHP générera une erreur.

```php
<?php
$result = add(3, "Hello"); // Uncaught TypeError: add(): Argument #2 ($y) must be of type float, string given
```

En effet, dans ce cas, le deuxième argument passé à la fonction `add` est une
chaîne de caractères, alors que la fonction attend un nombre à virgule flottante
(`float`).

Les types de données que l'on peut utiliser pour typer les paramètres et la
valeur de retour d'une fonction sont les suivants (entre autres) (source :
<https://www.php.net/manual/fr/language.types.declarations.php>) :

- `int` : pour les nombres entiers.
- `float` : pour les nombres à virgule flottante.
- `string` : pour les chaînes de caractères.
- `bool` : pour les valeurs booléennes (`true` ou `false`).
- `array` : pour les tableaux.
- `mixed` : pour indiquer que le paramètre ou la valeur de retour peut être de
  n'importe quel type.
- `null` : pour indiquer que le paramètre ou la valeur de retour peut être
  `null`.
- `void` : pour indiquer que la fonction ne retourne aucune valeur.

Il est possible de combiner plusieurs types en utilisant le symbole `|` pour
indiquer que le paramètre ou la valeur de retour peut être de l'un des types
spécifiés. Par exemple, la fonction suivante peut prendre un paramètre qui peut
être soit un `int` soit un `float` et retourne un `float` :

```php
<?php
function add(int|float $x, int|float $y): float {
    return $x + $y;
}
```

Cela signifie que les paramètres `$x` et `$y` peuvent être soit des nombres
entiers (`int`) soit des nombres à virgule flottante (`float`), et que la
fonction retournera un nombre à virgule flottante (`float`).

Si nous souhaitons indiquer qu'un paramètre ou une valeur de retour peut être de
type `float` ou `null`, nous pouvons utiliser le symbole `|` pour combiner les
types, ou encore utiliser le symbole `?` pour indiquer que le type peut être du
type donné ou `null` :

```php
<?php
function add(int $x, ?int $y): int {
    if ($y === null) {
        return $x;
    }

    return $x + $y;
}

add(3, null); // Retourne 3
add(3, 5); // Retourne 8
```

Ici, le paramètre `$y` peut être soit un `int` soit `null`, et la fonction peut
retourner soit un `int` soit `null`.

Un autre exemple d'utilisation de types combinés est la fonction suivante, qui
peut retourner soit un `int` soit `null` :

```php
<?php
function find(array $numbers, int $id): ?int { // ou : int|null
    foreach ($numbers as $number) {
        if ($number === $id) {
            return $id;
        }
    }

    return null;
}

$numbers = [1, 2, 3];

find($numbers, 2); // Retourne 2
find($numbers, 4); // Retourne null car 4 n'est pas dans le tableau $numbers
find([2, 4, 6], 4); // Retourne 4
find([2, 4, 6], 5); // Retourne null car 5 n'est pas dans le tableau [2, 4, 6]
```

Si une fonction est censée ne rien retourner, il est recommandé de typer la
valeur de retour avec `void`.

Nous recommandons de toujours typer les paramètres et la valeur de retour d'une
fonction lorsque cela est possible, afin de rendre le code plus robuste et plus
facile à comprendre.

A l'avenir, nous allons systématiquement typer les paramètres et la valeur de
retour de nos fonctions.

## Portée des variables

Les variables déclarées à l'intérieur d'une fonction sont locales à cette
fonction. Cela signifie qu'elles ne sont accessibles que dans le contexte de la
fonction et ne peuvent pas être utilisées en dehors de celle-ci.

Par exemple, la variable `$x` déclarée dans la fonction `square` n'est pas
accessible en dehors de cette fonction :

```php
<?php
function square(float $x): float {
    return $x * $x;
}

echo $x; // Erreur : variable $x non définie
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static double square(double x) {
        return x * x;
    }

    public static void main(String[] args) {
        double x = 42;
        System.out.println(square(x)); // Affiche 1764
    }
}
```

</details>

Dans cet exemple, la variable `$x` est déclarée à l'intérieur de la fonction
`square` et n'est pas accessible en dehors de celle-ci. Si on essaie d'afficher
la variable `$x` en dehors de la fonction, on obtient une erreur.

## Variables globales

Il est possible de déclarer des variables globales en PHP, c'est-à-dire des
variables qui sont accessibles dans tout le script. Pour déclarer une variable
globale, on utilise le mot-clé `global` suivi du nom de la variable :

```php
<?php
$x = 42;

function square() {
    global $x;

    $x = $x * $x;
}

square();

echo $x; // Affiche 1764
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static int x = 42;

    public static void square() {
        x = x * x;
    }

    public static void main(String[] args) {
        square();

        System.out.println(x); // Affiche 1764
    }
}
```

</details>

Dans cet exemple, la variable `$x` est déclarée en dehors de la fonction
`square` et est rendue accessible à l'intérieur de la fonction en utilisant le
mot-clé `global`.

Sans le mot-clé `global`, la variable `$x` n'est pas accessible à l'intérieur de
la fonction `square`.

Il est généralement déconseillé d'utiliser des variables globales, car elles
rendent le code moins lisible et plus difficile à maintenir. Il est préférable
de passer des paramètres à une fonction plutôt que d'utiliser des variables
globales.

## Fonctions prédéfinies en PHP

PHP dispose de nombreuses fonctions prédéfinies qui permettent d'effectuer
diverses tâches. Par exemple, la fonction `strlen` permet de calculer la
longueur d'une chaîne de caractères :

```php
<?php
$length = strlen("Hello, world!");

echo $length; // Affiche 13
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void main(String[] args) {
        String s = "Hello, world!";
        int length = s.length();

        System.out.println(length); // Affiche 13
    }
}
```

</details>

Dans cet exemple, la fonction `strlen` est appelée avec l'argument
`"Hello, world!"`, ce qui retourne `13`. La valeur retournée est assignée à la
variable `$length`, qui est affichée à l'écran.

Toutes les fonctions prédéfinies en PHP sont documentées sur le site officiel de
PHP : <https://www.php.net/manual/fr/funcref.php> et sont classées par
catégories. Voici quelques catégories de fonctions prédéfinies en PHP (entre
autres) :

- [Fonctions mathématiques](https://www.php.net/manual/fr/ref.math.php)
- [Fonctions sur les chaînes de caractères](https://www.php.net/manual/fr/ref.strings.php)
- [Fonctions de gestion de variables](https://www.php.net/manual/fr/ref.var.php)
- [Fonctions de tableaux](https://www.php.net/manual/fr/ref.array.php)
- [Fonctions de dates et heures](https://www.php.net/manual/fr/ref.datetime.php)
- [Fonctions de fichiers](https://www.php.net/manual/fr/ref.filesystem.php)
- [Fonctions de génération de nombres aléatoires](https://www.php.net/manual/fr/book.random.php)
- [Fonctions de gestion des sessions](https://www.php.net/manual/fr/ref.session.php)

Nous allons en explorer quelques-unes dans les sections suivantes.

### Fonctions mathématiques

PHP dispose de nombreuses fonctions mathématiques prédéfinies pour effectuer des
opérations mathématiques courantes. Par exemple, la fonction `sqrt` permet de
calculer la racine carrée d'un nombre :

```php
<?php
$result = sqrt(16);

echo $result; // Affiche 4
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void main(String[] args) {
        double result = Math.sqrt(16);
        System.out.println(result); // Affiche 4.0
    }
}
```

</details>

Il existe évidemment d'autres fonctions mathématiques prédéfinies en PHP, comme
`abs`, `round`, `min`, `max`, `rand`, etc.

Vous allez les explorer dans le mini-projet et dans les exercices.

### Fonctions sur les chaînes de caractères

PHP dispose de nombreuses fonctions prédéfinies pour manipuler des chaînes de
caractères. Par exemple, la fonction `strtoupper` permet de convertir une chaîne
de caractères en majuscules :

```php
<?php
$result = strtoupper("hello, world!");

echo $result; // Affiche "HELLO, WORLD!"
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void main(String[] args) {
        String result = "hello, world!".toUpperCase();

        System.out.println(result); // Affiche "HELLO, WORLD!"
    }
}
```

</details>

Il existe évidemment d'autres fonctions de chaînes de caractères prédéfinies en
PHP, comme `strtolower`, `strlen`, `substr`, `str_replace`, etc.

Vous allez les explorer dans le mini-projet et dans les exercices.

### Fonctions sur les variables

PHP dispose de nombreuses fonctions prédéfinies pour manipuler des variables.
Par exemple, la fonction `isset` permet de vérifier si une variable est définie
:

```php
<?php
$var = 42;

if (isset($var)) {
    echo "The variable is defined.";
} else {
    echo "The variable is not defined.";
}

echo "<br>"; // Retour à la ligne HTML

if (isset($undefined)) {
    echo "The variable is defined.";
} else {
    echo "The variable is not defined.";
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Main {
    public static void main(String[] args) {
        int var = 42;

        if (var != null) {
            System.out.println("The variable is defined.");
        } else {
            System.out.println("The variable is not defined.");
        }

        System.out.println(); // Retour à la ligne

        int undefined;

        if (undefined != null) {
            System.out.println("The variable is defined.");
        } else {
            System.out.println("The variable is not defined.");
        }
    }
}
```

</details>

Dans cet exemple, la variable `$var` est définie, donc le premier message est
affiché. La variable `$undefined` n'est pas définie, donc le deuxième message
est affiché.

Il existe évidemment d'autres fonctions sur les variables prédéfinies en PHP,
comme `empty`, `is_null`, `is_array`, `is_string`, `is_numeric`, etc.

Vous allez les explorer dans le mini-projet et dans les exercices.

## Réutiliser du code avec des fonctions

Il est possible de définir des fonctions dans un fichier séparé et de les
inclure dans un autre fichier pour réutiliser du code. Par exemple, on peut
définir une fonction `hello` dans un fichier `functions.php` :

```php
<?php
// Fichier `functions.php`
function hello(string $name): string {
    return "Hello, $name!<br>";
}
```

Et l'inclure dans un autre fichier pour l'utiliser :

```php
<?php
// Fichier `index.php`
require_once __DIR__ . "/functions.php"; // On inclut le fichier

// La fonction `hello` est définie dans le fichier importé et peut être utilisée
// ici
echo hello("Alice");
```

Dans cet exemple, la fonction `hello` est définie dans le fichier
`functions.php` et incluse dans un autre fichier pour être utilisée.

La construction `__DIR__` est une constante magique en PHP qui représente le
répertoire du fichier actuel. En utilisant `__DIR__`, on s'assure que le chemin
vers le fichier `functions.php` est correct, même si le script est exécuté à
partir d'un autre répertoire.

Il existe des fonctions prédéfinies en PHP pour inclure des fichiers, comme
`include`, `require`, `include_once` et `require_once`. Ces fonctions permettent
d'inclure un fichier dans un autre fichier pour réutiliser du code.

### Différence entre `include_once` et `require_once`

Les fonctions `include_once` et `require_once` permettent d'inclure un fichier
dans un autre fichier. La principale différence entre ces deux fonctions est que
`include_once` génère une erreur si le fichier n'est pas trouvé mais le reste du
script continue à s'exécuter, tandis que `require_once` génère une erreur fatale
et arrête l'exécution du script.

Nous vous recommandons de toujours utiliser `require_once` pour inclure des
fichiers à votre application pour s'assurer que le script ne continue pas à
s'exécuter si un fichier est manquant.

### Différence entre `require_once` et `require`

La fonction `require_once` vérifie si le fichier a déjà été inclus auparavant et
ne l'inclut pas à nouveau si c'est le cas. La fonction `require`, quant à elle,
inclut le fichier à chaque fois qu'elle est appelée, même si le fichier a déjà
été inclus auparavant.

Si un même fichier est inclus plusieurs fois avec `require`, cela peut entraîner
des erreurs, notamment des erreurs de redéclaration de fonctions ou de classes.
En utilisant `require_once`, on évite ce problème en s'assurant que le fichier
n'est inclus qu'une seule fois.

Nous vous recommandons de toujours utiliser `require_once` pour inclure des
fichiers dans votre application afin d'éviter les erreurs de redéclaration et de
garantir que chaque fichier n'est inclus qu'une seule fois.

## Conclusion

Les fonctions sont un concept fondamental en programmation. Elles permettent de
découper un programme en morceaux plus petits, plus faciles à comprendre et à
maintenir. Les fonctions permettent également de réutiliser du code, en
l'encapsulant dans une fonction que l'on peut appeler à plusieurs endroits.

PHP dispose de nombreuses fonctions prédéfinies qui permettent d'effectuer
diverses tâches. Ces fonctions sont classées par catégories et sont documentées
sur le site officiel de PHP.

Dans les prochains cours, nous verrons comment utiliser certaines fonctions plus
en détails pour résoudre des problèmes concrets.

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

## Questions d'évaluation

> [!NOTE]
>
> Les questions d'évaluation sont destinées à vous aider à vérifier votre
> compréhension des concepts abordés dans le cours. Elles ne sont pas destinées
> à être utilisées comme une liste de contrôle exhaustive des compétences à
> maîtriser.
>
> Il est recommandé de les utiliser comme un guide pour vous aider à identifier
> les domaines dans lesquels vous pourriez avoir besoin de renforcer vos
> connaissances ou de pratiquer davantage.

- Qu'est-ce qu'une fonction en programmation ?
- Comment déclarer une fonction en PHP ?
- Comment appeler une fonction en PHP ?
- Comment passer des paramètres à une fonction en PHP ?
- Comment utiliser une valeur de retour dans une fonction en PHP ?
- Qu'est-ce que la portée d'une variable ?
- Comment utiliser des variables globales en PHP ?
- Où trouver la documentation sur les fonctions prédéfinies en PHP ?
- Comment utiliser des fonctions prédéfinies en PHP ?
- Comment réutiliser du code avec des fonctions en PHP ?
- Quelle est la différence entre `include_once` et `require_once` en PHP ?
- Quelle est la différence entre `require_once` et `require` en PHP ?

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
