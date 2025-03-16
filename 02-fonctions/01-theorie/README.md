# Cours 02 - Fonctions

## Ressources

- Théorie : [Support de cours](../01-theorie/README.md) ·
  [Présentation (web)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/02-fonctions/01-theorie/index.html)
  ·
  [Présentation (PDF)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/02-fonctions/01-theorie/02-fonctions-presentation.pdf)
- Mini-projet : [Consignes](../02-mini-project/README.md) ·
  [Solution](../02-mini-project/solution/)
- Exercices : [Énoncés et solutions](../03-exercices/README.md)

## Tables des matières

- [Ressources](#ressources)
- [Tables des matières](#tables-des-matières)
- [Objectifs](#objectifs)
- [Qu'est-ce qu'une fonction ?](#quest-ce-quune-fonction-)
- [Déclarer une fonction en PHP](#déclarer-une-fonction-en-php)
- [Appeler une fonction en PHP](#appeler-une-fonction-en-php)
- [Passer des paramètres à une fonction](#passer-des-paramètres-à-une-fonction)
- [Retourner une valeur depuis une fonction](#retourner-une-valeur-depuis-une-fonction)
- [Paramètres optionnels](#paramètres-optionnels)
- [Passer plusieurs paramètres à une fonction](#passer-plusieurs-paramètres-à-une-fonction)
- [Portée des variables](#portée-des-variables)
- [Fonctions prédéfinies en PHP](#fonctions-prédéfinies-en-php)
  - [Fonctions mathématiques](#fonctions-mathématiques)
  - [Fonctions de chaînes de caractères](#fonctions-de-chaînes-de-caractères)
  - [Fonctions sur les variables](#fonctions-sur-les-variables)
- [Réutiliser du code avec des fonctions](#réutiliser-du-code-avec-des-fonctions)
  - [Différence entre `include` et `require`](#différence-entre-include-et-require)
  - [Différence entre `include_once` et `require_once`](#différence-entre-include_once-et-require_once)
- [Conclusion](#conclusion)
- [Support de cours](#mini-projet)
- [Support de cours](#exercices)

## Objectifs

Les fonctions sont un concept fondamental en programmation. Elles permettent de
découper un programme en morceaux plus petits, plus faciles à comprendre et à
maintenir. Les fonctions permettent également de réutiliser du code, en
l'encapsulant dans une fonction que l'on peut appeler à plusieurs endroits.

Dans ce cours, nous allons voir comment déclarer et appeler des fonctions en
PHP. Nous allons également voir comment passer des paramètres à une fonction et
comment retourner une valeur depuis une fonction.

De façon plus précise, les objectifs de ce cours sont les suivants :

- Comprendre ce qu'est une fonction en programmation
- Savoir déclarer une fonction en PHP
- Savoir appeler une fonction en PHP
- Savoir passer des paramètres à une fonction en PHP
- Savoir utiliser une valeur de retour
- Comprendre ce qu'est une portée de variable
- Lister des fonctions existantes en PHP

## Qu'est-ce qu'une fonction ?

Une fonction est un bloc de code qui effectue une tâche spécifique. Une fonction
peut prendre des paramètres en entrée et retourner une valeur en sortie.

Comme en mathématiques, une fonction en programmation prend des arguments en
entrée et retourne une valeur en sortie. Par exemple, la fonction $f(x) = x^2$
prend un argument $x$ en entrée et retourne $x^2$ en sortie. Si on appelle la
fonction $f(3)$, on obtient $9$.

En programmation, une fonction est définie par un nom, une liste de paramètres
(optionnelle) et un bloc de code. Une fois définie, une fonction peut être
appelée à partir d'un autre endroit du programme.

## Déclarer une fonction en PHP

En PHP, une fonction est déclarée avec le mot-clé `function`, suivi du nom de la
fonction, de parenthèses `()` et d'accolades `{}` contenant le code de la
fonction.

Voici un exemple de déclaration de fonction en PHP :

```php
<?php
function hello() {
    echo "Hello, world!";
}
```

Dans cet exemple, la fonction `hello` ne prend pas de paramètres et ne retourne
pas de valeur. Elle affiche simplement le message `Hello, world!` à l'écran.

## Appeler une fonction en PHP

Pour appeler une fonction en PHP, on utilise le nom de la fonction suivi de
parenthèses `()` :

```php
<?php
hello();
```

Dans cet exemple, la fonction `hello` est appelée, ce qui affiche le message
`Hello, world!` à l'écran.

Il est tout à fait possible d'appeler une fonction à plusieurs reprises dans un
programme :

```php
<?php
hello();
hello();
hello();
```

Dans cet exemple, la fonction `hello` est appelée trois fois, ce qui affiche le
message `Hello, world!` trois fois à l'écran.

## Passer des paramètres à une fonction

Une fonction peut également prendre des paramètres en entrée. Par exemple, la
fonction suivante prend un paramètre `$name` et affiche un message de salutation
personnalisé :

```php
<?php
function hello($name) {
    echo "Hello, $name!";
}
```

Pour appeler cette fonction, on passe un argument à la fonction :

```php
<?php
hello("Alice");
```

Dans cet exemple, la fonction `hello` est appelée avec l'argument `"Alice"`, ce
qui affiche le message `Hello, Alice!` à l'écran.

## Retourner une valeur depuis une fonction

Une fonction peut également retourner une valeur. Par exemple, la fonction
suivante prend un paramètre `$x` et retourne le carré de ce paramètre :

```php
<?php
function square($x) {
    return $x * $x;
}
```

Pour utiliser la valeur retournée par une fonction, on peut l'assigner à une
variable :

```php
<?php
$result = square(3);

echo $result; // Affiche 9
```

Dans cet exemple, la fonction `square` est appelée avec l'argument `3`, ce qui
retourne `9`. La valeur retournée est ensuite assignée à la variable `$result`,
qui est affichée à l'écran.

## Paramètres optionnels

En PHP, une fonction peut avoir des paramètres optionnels avec des valeurs par
défaut. Par exemple, la fonction suivante prend un paramètre `$name` avec une
valeur par défaut `"world"` :

```php
<?php
function hello($name = "world") {
    echo "Hello, $name!";
}
```

Si on appelle cette fonction sans argument, elle affichera `Hello, world!` :

```php
<?php
hello(); // Affiche "Hello, world!"
```

Si on appelle cette fonction avec un argument, elle affichera `Hello, Alice!` :

```php
<?php
hello("Alice"); // Affiche "Hello, Alice!"
```

Dans cet exemple, la fonction `hello` a un paramètre `$name` avec une valeur par
défaut `"world"`. Si on appelle la fonction sans argument, elle utilise la
valeur par défaut. Si on appelle la fonction avec un argument, elle utilise cet
argument.

## Passer plusieurs paramètres à une fonction

Une fonction peut avoir plusieurs paramètres. Par exemple, la fonction suivante
prend deux paramètres `$x` et `$y` et retourne la somme de ces deux paramètres :

```php
<?php
function add($x, $y) {
    return $x + $y;
}
```

Pour utiliser cette fonction, on passe deux arguments :

```php
<?php
$result = add(3, 5);

echo $result; // Affiche 8
```

Il est aussi possible de déclarer des paramètres optionnels après des paramètres
obligatoires. Par exemple, la fonction suivante prend un paramètre `$x`
obligatoire et un paramètre `$y` optionnel avec une valeur par défaut `0` :

```php
<?php
function add($x, $y = 0) {
    return $x + $y;
}
```

Dans cet exemple, si on appelle la fonction `add` avec un seul argument, le
deuxième argument prendra la valeur par défaut `0` :

```php
<?php
$result = add(3);

echo $result; // Affiche 3
```

## Portée des variables

Les variables déclarées à l'intérieur d'une fonction sont locales à cette
fonction. Cela signifie qu'elles ne sont accessibles que dans le contexte de la
fonction et ne peuvent pas être utilisées en dehors de celle-ci.

Par exemple, la variable `$x` déclarée dans la fonction `square` n'est pas
accessible en dehors de cette fonction :

```php
<?php
function square($x) {
    return $x * $x;
}

echo $x; // Erreur : variable $x non définie
```

Dans cet exemple, la variable `$x` est déclarée à l'intérieur de la fonction
`square` et n'est pas accessible en dehors de celle-ci. Si on essaie d'afficher
la variable `$x` en dehors de la fonction, on obtient une erreur.

## Fonctions prédéfinies en PHP

PHP dispose de nombreuses fonctions prédéfinies qui permettent d'effectuer
diverses tâches. Par exemple, la fonction `strlen` permet de calculer la
longueur d'une chaîne de caractères :

```php
<?php
$length = strlen("Hello, world!");

echo $length; // Affiche 13
```

Dans cet exemple, la fonction `strlen` est appelée avec l'argument
`"Hello, world!"`, ce qui retourne `13`. La valeur retournée est assignée à la
variable `$length`, qui est affichée à l'écran.

Toutes les fonctions prédéfinies en PHP sont documentées sur le site officiel de
PHP : <https://www.php.net/manual/fr/funcref.php> et sont classées par
catégories. Voici quelques catégories de fonctions prédéfinies en PHP (entre
autres) :

- [Fonctions mathématiques](https://www.php.net/manual/fr/ref.math.php)
- [Fonctions de chaînes de caractères](https://www.php.net/manual/fr/ref.strings.php)
- [Fonctions de gestion de variables](https://www.php.net/manual/fr/ref.var.php)
- [Fonctions de tableaux](https://www.php.net/manual/fr/ref.array.php)
- [Fonctions de date et heure](https://www.php.net/manual/fr/ref.datetime.php)
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

TODO

### Fonctions de chaînes de caractères

PHP dispose de nombreuses fonctions prédéfinies pour manipuler des chaînes de
caractères. Par exemple, la fonction `strtoupper` permet de convertir une chaîne
de caractères en majuscules :

```php
<?php
$result = strtoupper("hello, world!");

echo $result; // Affiche "HELLO, WORLD!"
```

TODO

### Fonctions sur les variables

PHP dispose de nombreuses fonctions prédéfinies pour manipuler des variables.
Par exemple, la fonction `isset` permet de vérifier si une variable est définie
:

```php
<?php
$var = 42;

if (isset($var)) {
    echo "La variable est définie.";
} else {
    echo "La variable n'est pas définie.";
}

if (isset($undefined)) {
    echo "La variable est définie.";
} else {
    echo "La variable n'est pas définie.";
}
```

Dans cet exemple, la variable `$var` est définie, donc le premier message est
affiché. La variable `$undefined` n'est pas définie, donc le deuxième message
est affiché.

TODO

## Réutiliser du code avec des fonctions

Il est possible de définir des fonctions dans un fichier séparé et de les
inclure dans un autre fichier pour réutiliser du code. Par exemple, on peut
définir une fonction `hello` dans un fichier `functions.php` :

```php
<?php
function hello($name) {
    echo "Hello, $name!";
}
```

Et l'inclure dans un autre fichier pour l'utiliser :

```php
<?php
include "functions.php";

hello("Alice");
```

Dans cet exemple, la fonction `hello` est définie dans le fichier
`functions.php` et incluse dans un autre fichier pour être utilisée.

Il existe des fonctions prédéfinies en PHP pour inclure des fichiers, comme
`include`, `require`, `include_once` et `require_once`. Ces fonctions permettent
d'inclure un fichier dans un autre fichier pour réutiliser du code.

### Différence entre `include` et `require`

Les fonctions `include` et `require` permettent d'inclure un fichier dans un
autre fichier. La principale différence entre ces deux fonctions est que
`include` génère une erreur si le fichier n'est pas trouvé mais le reste du
script continue à s'exécuter, tandis que `require` génère une erreur fatale et
arrête l'exécution du script.

Nous vous recommandons de toujours utiliser `require` pour inclure des fichiers
à votre application pour s'assurer que le script ne continue pas à s'exécuter si
un fichier est manquant.

### Différence entre `include_once` et `require_once`

Les fonctions `include_once` et `require_once` fonctionnent de la même manière
que `include` et `require`, mais elles vérifient si le fichier a déjà été inclus
et ne l'incluent qu'une seule fois. Cela permet d'éviter d'inclure plusieurs
fois le même fichier et de générer des erreurs.

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

[^example]: Example, [example.com](https://example.com/), 13 mars 2025
