# Cours 07 - Programmation orientée objet

## Ressources

- Théorie : [Support de cours](../01-theorie/README.md) ·
  [Présentation (web)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/07-programmation-orientee-objet/01-theorie/index.html)
  ·
  [Présentation (PDF)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/07-programmation-orientee-objet/01-theorie/07-programmation-orientee-objet-presentation.pdf)
- Mini-projet : [Consignes](../02-mini-project/README.md) ·
  [Solution](../02-mini-project/solution/)
- Exercices : [Énoncés et solutions](../03-exercices/README.md)

## Table des matières

- [Ressources](#ressources)
- [Table des matières](#table-des-matières)
- [Objectifs](#objectifs)
- [Buts de la programmation orientée objet (POO)](#buts-de-la-programmation-orientée-objet-poo)
- [Concepts clés de la POO](#concepts-clés-de-la-poo)
- [Avantages de la POO](#avantages-de-la-poo)
- [Désavantages de la POO](#désavantages-de-la-poo)
- [La POO en PHP](#la-poo-en-php)
  - [Classes](#classes)
  - [Instanciation d'objets](#instanciation-dobjets)
  - [Attributs](#attributs)
  - [Méthodes](#méthodes)
  - [Encapsulation](#encapsulation)
  - [Constructeurs et destructeurs](#constructeurs-et-destructeurs)
  - [Constantes](#constantes)
- [Conclusion](#conclusion)
- [Mini-projet](#mini-projet)
- [Exercices](#exercices)

## Objectifs

Dans ce dernier cours, nous allons aborder la programmation orientée objet (POO)
en PHP. Nous allons voir les concepts clés de la POO, tels que les classes, les
objets, les attributs, les méthodes, l'encapsulation, les constructeurs et les
destructeurs, ainsi que les constantes. Nous allons également discuter des
avantages et des désavantages de la POO, ainsi que de son utilisation en PHP.

De façon plus concise, les personnes qui étudient devraient être capables de :

- Lister les concepts clés de la POO.
- Expliquer les avantages et les désavantages de la POO.
- Créer des classes et des objets en PHP.
- Définir des attributs et des méthodes dans une classe.
- Utiliser l'encapsulation pour protéger les données des objets.
- Définir des constructeurs et des destructeurs pour initialiser et nettoyer les
  objets.
- Utiliser des constantes dans les classes.

## Buts de la programmation orientée objet (POO)

La programmation orientée objet (POO) est un paradigme de programmation (= une
façon de penser/représenter l'information) qui permet de structurer le code en
regroupant les données et les comportements dans des entités appelées classes.
Les classes sont des modèles qui définissent les propriétés et les méthodes des
objets. Les objets sont des instances de ces classes et représentent des entités
concrètes de l'application.

## Concepts clés de la POO

- **Classes** : Modèles qui définissent les propriétés et les méthodes des
  objets.
- **Objets** : Instances des classes qui représentent des entités concrètes.
- **Attributs** : Propriétés des objets, définies dans les classes.
- **Méthodes** : Comportements des objets, définies dans les classes.
- **Encapsulation** : Pratique consistant à regrouper les données et les
  comportements dans des classes, en limitant l'accès direct aux attributs pour
  protéger l'intégrité des données.

Il existe d'autres concepts clés de la POO, tels que l'héritage et le
polymorphisme, qui permettent de créer des relations entre les classes et de
réutiliser le code. Cependant, ces concepts ne seront pas abordés dans ce cours.

## Avantages de la POO

- **Lisibilité** : Le code est plus facile à lire et à comprendre, car les
  classes regroupent les données et les comportements liés.
- **Réutilisabilité** : Les classes peuvent être réutilisées dans d'autres
  parties de l'application ou dans d'autres applications, ce qui réduit la
  duplication du code.
- **Maintenabilité** : Le code est plus facile à maintenir, car les classes
  permettent de structurer le code de manière logique et cohérente.

## Désavantages de la POO

- **Complexité** : La POO peut introduire une certaine complexité, surtout pour
  les petites applications où une approche procédurale pourrait être plus
  simple.
- **Performance** : La POO peut être moins performante que la programmation
  procédurale, car elle nécessite une gestion supplémentaire des objets et des
  classes. Cependant, cette différence de performance est souvent négligeable
  dans la plupart des applications modernes.

## La POO en PHP

La POO est prise en charge par PHP depuis la version 5. Elle permet de créer des
classes et des objets, d'utiliser l'encapsulation, et de définir des attributs
et des méthodes. PHP offre également des fonctionnalités avancées comme
l'héritage, le polymorphisme et les interfaces.

### Classes

Les classes en PHP sont définies à l'aide du mot-clé `class`. Elles peuvent
avoir des attributs (propriétés) et des méthodes (comportements). Voici un
exemple simple de classe en PHP :

```php
<?php
class Person {
    public $name;
    public $age;
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Person {
    public String name;
    public int age;
}
```

</details>

Dans cet exemple, nous avons défini une classe `Person` avec le mot-clé `class`.
Par convention, les noms de classes sont écrits en Pascal case (c'est-à-dire que
chaque mot commence par une majuscule).

### Instanciation d'objets

Pour créer des objets à partir d'une classe, on utilise le mot-clé `new` suivi
du nom de la classe. Voici comment instancier un objet de la classe `Person` :

```php
$person = new Person();
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
Person person = new Person();
```

</details>

Ici, `$person` est un objet de la classe `Person`. On peut créer plusieurs
objets à partir de la même classe, chacun ayant ses propres valeurs pour les
attributs définis dans la classe.

```php
$person1 = new Person();
$person2 = new Person();
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
Person person1 = new Person();
Person person2 = new Person();
```

</details>

### Attributs

Les attributs d'une classe sont des variables qui stockent les données de
l'objet. Ils sont définis dans la classe et peuvent être accédées selon leur
visibilité (`public`, `protected` ou `private`). Les attributs sont déclarés à
l'intérieur de la classe, et ils peuvent être de n'importe quel type de données,
y compris d'autres objets.

Les attributs d'un objet sont accessibles via l'opérateur `->`.

Dans la classe `Person`, nous avons défini deux attributs :

1. `$name`
2. `$age`

Ils sont déclarés comme `public`, ce qui signifie qu'ils peuvent être accédés
directement depuis l'extérieur de la classe. Voici comment on peut utiliser ces
attributs :

```php
$person = new Person();

$person->name = "Alice";
$person->age = 30;
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
Person person = new Person();

person.name = "Alice";
person.age = 30;
```

</details>

L'opérateur `->` permet d'accéder aux attributs d'un objet. Dans cet exemple,
nous avons créé un objet `$person` de la classe `Person`, puis nous avons
assigné des valeurs aux attributs `name` et `age` de cet objet. On peut
également accéder aux attributs d'un objet pour les lire :

```php
echo $person->name; // Affiche "Alice"

echo "<br>";

echo $person->age;  // Affiche 30
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
System.out.println(person.name); // Affiche "Alice"
System.out.println(person.age);  // Affiche 30
```

</details>

### Méthodes

Les méthodes d'une classe sont des fonctions qui définissent les comportements
de l'objet. Elles sont définies à l'intérieur de la classe et peuvent être
appelées sur les objets de cette classe. Voici un exemple de classe avec une
méthode :

```php
<?php
class Person {
    public $name;
    public $age;

    public function greet() {
        return "Hi, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Person {
    public String name;
    public int age;

    public String greet() {
        return "Hi, my name is " + this.name + " and I am " + this.age + " years old.";
    }
}
```

</details>

Dans cet exemple, la classe `Person` a une méthode `greet()` qui retourne une
chaîne de caractères contenant le nom et l'âge de la personne. On peut appeler
cette méthode sur un objet de la classe `Person` :

```php
$person = new Person();

$person->name = "Alice";
$person->age = 30;

echo $person->greet(); // Affiche "Hi, my name is Alice and I am 30 years old."
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
Person person = new Person();

person.name = "Alice";
person.age = 30;

System.out.println(person.greet()); // Affiche "Hi, my name is Alice and I am 30 years old."
```

</details>

Le mot-clé `$this` est utilisé à l'intérieur des méthodes pour faire référence à
l'objet courant. Il permet d'accéder aux attributs et aux autres méthodes de
l'objet depuis l'intérieur de la méthode.

Dans la classe `Person`, la méthode `greet()` utilise `$this->name` et
`$this->age` pour accéder aux attributs de l'objet courant.

### Encapsulation

L'encapsulation est une pratique importante en POO qui consiste à protéger les
données d'un objet en limitant l'accès direct à ses attributs.

Ce mécanisme permet de contrôler comment les données sont modifiées et lues, en
fournissant des méthodes d'accès (appelées _"getters"_) et de modification
(appelées _"setters"_) avec des validations des données si nécessaire.

En PHP, on peut utiliser les modificateurs d'accès `public`, `protected` et
`private` pour contrôler la visibilité des attributs et des méthodes. Voici un
exemple :

```php
<?php

class Person {
    private $name; // Attribut privé
    private $age; // Attribut privé

    public function setName($name) {
        if (strlen($name) < 3) {
            return "Name must be at least 3 characters long.";
        }

        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        if ($age < 0) {
            return "Age cannot be negative.";
        }

        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Person {
    private String name; // Attribut privé
    private int age; // Attribut privé

    public String setName(String name) {
        if (name.length() < 3) {
            return "Name must be at least 3 characters long.";
        }
        this.name = name;
        return null;
    }

    public String getName() {
        return this.name;
    }

    public String setAge(int age) {
        if (age < 0) {
            return "Age cannot be negative.";
        }
        this.age = age;
        return null;
    }

    public int getAge() {
        return this.age;
    }
}
```

</details>

Dans cet exemple, les attributs `$name` et `$age` sont déclarés comme `private`,
ce qui signifie qu'ils ne peuvent pas être accédés directement depuis
l'extérieur de la classe. Au lieu de cela, on utilise des méthodes `setName()`,
`getName()`, et `setAge()`, `getAge()` pour modifier et lire les valeurs de ces
attributs.

Grâce aux getters, on peut lire les valeurs des attributs, et grâce aux setters,
on peut les modifier. Les setters peuvent également inclure des validations pour
s'assurer que les valeurs assignées sont valides, comme présenté dans l'exemple
ci-dessus. Cela permet de garantir que les données de l'objet sont toujours dans
un état cohérent et valide.

> [!TIP]
>
> Dans une application réelle, il serait plus judicieux de gérer les validations
> des données à l'aide d'exceptions ou d'autres mécanismes pour éviter de
> retourner des chaînes de caractères depuis les setters.
>
> Dans le contexte de ce cours, ce mécanisme est suffisant pour illustrer le
> concept d'encapsulation et de validation des données.

Voici comment on peut utiliser cette classe :

```php
$person = new Person();

$error = $person->setName("Alice");

if (!empty($error)) {
    echo $error;
}

$error = $person->setAge(30);

if (!empty($error)) {
    echo $error;
}

echo $person->getName(); // Affiche "Alice"
echo "<br>";
echo $person->getAge();  // Affiche 30
echo "<br>";

$error = $person->setName("AS");

if (!empty($error)) {
    echo $error . "<br>";
}

$error = $person->setAge(-1);

if (!empty($error)) {
    echo $error . "<br>";
}

$person->name = "Bob"; // Erreur : l'attribut est privé
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
Person person = new Person();

String error = person.setName("Alice");

if (error != null) {
    System.out.println(error);
}

error = person.setAge(30);

if (error != null) {
    System.out.println(error);
}

System.out.println(person.getName()); // Affiche "Alice"
System.out.println(person.getAge());  // Affiche 30

error = person.setName("AS");

if (error != null) {
    System.out.println(error);
}

error = person.setAge(-1);

if (error != null) {
    System.out.println(error);
}

person.name = "Bob"; // Erreur : l'attribut est privé
```

</details>

### Constructeurs et destructeurs

Les constructeurs et destructeurs sont des méthodes spéciales qui sont appelées
automatiquement lors de la création et de la destruction d'un objet.

Un constructeur est défini avec le mot-clé `__construct()` et est utilisé pour
initialiser les attributs d'un objet lors de sa création.

Un destructeur est défini avec le mot-clé `__destruct()` et est utilisé pour
effectuer des nettoyages ou des opérations finales avant que l'objet ne soit
détruit si besoin.

Un objet est détruit automatiquement à la fin du script ou lorsque l'objet n'est
plus référencé (= que sa valeur est assignée à `null` ou qu'il n'est plus
utilisé dans le code, par exemple en sortant de la portée d'un bloc de code ou
en assignant une nouvelle valeur à la variable qui référait à l'objet).

```php
<?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct() {
        echo $this->name . " is being destroyed.<br>";
    }

    public function greet() {
        return "Hi, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

_En Java, il n'y a pas de destructeur explicite comme en PHP. Il est possible
d'utiliser certains mécanismes pour nettoyer les ressources, mais ils ne sont
pas recommandés pour des raisons de performance et de gestion de la mémoire. Ils
ne seront donc pas abordés ici._

```java
public class Person {
    private String name;
    private int age;

    public Person(String name, int age) {
        this.name = name;
        this.age = age;
    }

    public String greet() {
        return "Hi, my name is " + this.name + " and I am " + this.age + " years old.";
    }
}
```

</details>

Dans cet exemple, le constructeur `__construct()` est utilisé pour initialiser
les attributs `$name` et `$age` de l'objet lors de sa création.

Le destructeur `__destruct()` est appelé automatiquement lorsque l'objet est
détruit, par exemple à la fin du script ou lorsque l'objet n'est plus référencé.

Voici comment on peut utiliser cette classe :

```php
$alice = new Person("Alice", 30);

echo $alice->greet() . "<br>"; // Affiche "Hi, my name is Alice and I am 30 years old."

$bob = new Person("Bob", 25);

echo $bob->greet() . "<br>"; // Affiche "Hi, my name is Bob and I am 25 years old."

$evelyn = new Person("Evelyn", 40);

echo $evelyn->greet() . "<br>"; // Affiche "Hi, my name is Evelyn and I am 40 years old."

$bob = null; // Détruit l'objet $bob, le destructeur est appelé

$evelyn = $alice; // $evelyn référence maintenant le même objet que $alice, $evelyn n'est plus utilisé et est donc détruit.

// L'objet $alice sera automatiquement détruit à la fin du script, et le destructeur sera appelé.
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
Person alice = new Person("Alice", 30);

System.out.println(alice.greet()); // Affiche "Hi, my name is Alice and I am 30 years old."

Person bob = new Person("Bob", 25);

System.out.println(bob.greet()); // Affiche "Hi, my name is Bob and I am 25 years old."

Person evelyn = new Person("Evelyn", 40);

System.out.println(evelyn.greet()); // Affiche "Hi, my name is Evelyn and I am 40 years old."

bob = null; // En Java, il n'y a pas de destructeur explicite, mais l'objet bob sera éligible pour le garbage collector.

evelyn = alice; // evelyn référence maintenant le même objet que alice, evelyn n'est plus utilisé et sera éligible pour le garbage collector.

// L'objet alice sera éligible pour le garbage collector à la fin du programme.
```

</details>

### Constantes

En PHP, on peut également définir des constantes au sein d'une classe. Les
constantes sont des valeurs qui ne changent pas et qui sont définies avec le
mot-clé `const`. Elles sont accessibles via l'opérateur `::` (opérateur de
résolution de portée).

Voici un exemple de classe avec des constantes :

```php
<?php
class Person {
    const ROLE_MANAGER = 'Manager';
    const ROLE_DEVELOPER = 'Developer';
    const ROLE_DESIGNER = 'Designer';
    const ROLE_EMPLOYEE = 'Employee';

    private $name;
    private $role;

    public function __construct($name, $role) {
        $this->name = $name;
        $this->role = $role;
    }

    public function greet() {
        return "Hi, my name is " . $this->name . ". I work as a " . $this->role . " at my company.";
    }
}
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
public class Person {
    public static final String ROLE_MANAGER = "Manager";
    public static final String ROLE_DEVELOPER = "Developer";
    public static final String ROLE_DESIGNER = "Designer";
    public static final String ROLE_EMPLOYEE = "Employee";

    private String name;
    private String role;

    public Person(String name, String role) {
        this.name = name;
        this.role = role;
    }

    public String greet() {
        return "Hi, my name is " + this.name + ". I work as a " + this.role + " at my company.";
    }
}
```

</details>

Dans cet exemple, nous avons défini des constantes pour les rôles des employés
dans la classe `Person`. Ces constantes sont utilisées pour initialiser le rôle
de chaque personne lors de la création de l'objet.

Voici comment on peut utiliser cette classe :

```php
$alice = new Person("Alice", Person::ROLE_DEVELOPER);
$bob = new Person("Bob", Person::ROLE_MANAGER);
$evelyn = new Person("Evelyn", Person::ROLE_DESIGNER);

echo $alice->greet(); // Affiche "Hi, my name is Alice. I work as a Developer at my company."
echo "<br>";

echo $bob->greet(); // Affiche "Hi, my name is Bob. I work as a Manager at my company."
echo "<br>";

echo $evelyn->greet(); // Affiche "Hi, my name is Evelyn. I work as a Designer at my company."
```

<details>
<summary>Afficher l'équivalent en Java</summary>

```java
Person alice = new Person("Alice", Person.ROLE_DEVELOPER);
Person bob = new Person("Bob", Person.ROLE_MANAGER);
Person evelyn = new Person("Evelyn", Person.ROLE_DESIGNER);

System.out.println(alice.greet()); // Affiche "Hi, my name is Alice. I work as a Developer at my company."

System.out.println(bob.greet()); // Affiche "Hi, my name is Bob. I work as a Manager at my company."

System.out.println(evelyn.greet()); // Affiche "Hi, my name is Evelyn. I work as a Designer at my company."
```

</details>

Les constantes sont accessibles via la syntaxe `NomDeLaClasse::NOM_CONSTANTE`,
ce qui permet de utiliser des valeurs fixes et lisibles dans le code, tout en
évitant les erreurs de frappe ou de modification accidentelle des valeurs.

Par défaut, les constantes sont `public`, ce qui signifie qu'elles peuvent être
accédées depuis l'extérieur de la classe sans avoir besoin de méthodes d'accès.
Cependant, elles ne peuvent pas être modifiées une fois définies.

## Conclusion

La programmation orientée objet (POO) est un paradigme de programmation qui
permet de structurer le code en regroupant les données et les comportements dans
des entités appelées classes.

Elle offre de nombreux avantages, tels que la lisibilité, la réutilisabilité et
la maintenabilité du code. PHP prend en charge la POO depuis la version 5,
permettant de créer des classes et des objets, d'utiliser l'encapsulation, et de
définir des attributs et des méthodes.

La POO est un outil puissant pour structurer le code et faciliter le
développement d'applications complexes. Cependant, elle peut introduire une
certaine complexité. Il faut savoir l'utiliser judicieusement en fonction des
besoins de l'application.

Au travers de ce dernier cours, nous avons vu les concepts clés de la POO, tels
que les classes, les objets, les attributs, les méthodes, l'encapsulation, les
constructeurs et destructeurs, ainsi que les constantes. Nous avons également
abordé les avantages et les désavantages de la POO, ainsi que son utilisation en
PHP.

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
