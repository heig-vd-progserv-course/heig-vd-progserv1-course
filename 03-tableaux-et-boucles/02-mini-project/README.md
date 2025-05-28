# Cours 03 - Tableaux et boucles - Mini-projet

Ce mini-projet est conçu pour vous permettre de mettre en pratique les concepts
théoriques vus dans le cours
_[Cours 03 - Tableaux et boucles](../01-theorie/README.md)_.

## Ressources

- Théorie : [Support de cours](../01-theorie/README.md) ·
  [Présentation (web)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/03-tableaux-et-boucles/01-theorie/index.html)
  ·
  [Présentation (PDF)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/03-tableaux-et-boucles/01-theorie/03-tableaux-et-boucles-presentation.pdf)
- Mini-projet : [Consignes](../02-mini-project/README.md) ·
  [Solution](../02-mini-project/solution/)
- Exercices : [Énoncés et solutions](../03-exercices/README.md)

## Table des matières

- [Ressources](#ressources)
- [Table des matières](#table-des-matières)
- [Objectifs de la session](#objectifs-de-la-session)
- [Création d'un tableau associatif pour contenir des animaux de compagnie](#création-dun-tableau-associatif-pour-contenir-des-animaux-de-compagnie)
  - [Création du tableau dans le fichier `functions.php`](#création-du-tableau-dans-le-fichier-functionsphp)
  - [Récupération des animaux de compagnie dans le fichier `functions.php`](#récupération-des-animaux-de-compagnie-dans-le-fichier-functionsphp)
  - [Récupération des animaux de compagnie dans le fichier `index.php`](#récupération-des-animaux-de-compagnie-dans-le-fichier-indexphp)
  - [Affichage des animaux de compagnie dans le fichier `index.php`](#affichage-des-animaux-de-compagnie-dans-le-fichier-indexphp)
  - [Amélioration de l'affichage du tableau](#amélioration-de-laffichage-du-tableau)
- [Interactions avec le tableau des animaux de compagnie](#interactions-avec-le-tableau-des-animaux-de-compagnie)
  - [Repartir sur un tableau vide](#repartir-sur-un-tableau-vide)
  - [Ajout d'un animal de compagnie](#ajout-dun-animal-de-compagnie)
  - [Récupération d'un animal de compagnie](#récupération-dun-animal-de-compagnie)
  - [Mise à jour d'un animal de compagnie](#mise-à-jour-dun-animal-de-compagnie)
  - [Suppression d'un animal de compagnie](#suppression-dun-animal-de-compagnie)
- [Validation du fonctionnement de l'application](#validation-du-fonctionnement-de-lapplication)
- [Solution](#solution)
- [Conclusion](#conclusion)
- [Aller plus loin](#aller-plus-loin)

## Objectifs de la session

À l'issue de cette session, les personnes qui étudient devraient avoir pu :

- Gérer des animaux de compagnie à l'aide de tableaux associatifs
- Utiliser des boucles pour parcourir un tableau
- Utiliser des tables HTML pour afficher des données
- Mettre à jour les fonctions pour manipuler le tableau associatif
- Utiliser des styles CSS pour améliorer l'apparence de la page

## Création d'un tableau associatif pour contenir des animaux de compagnie

Dans cette section, vous allez créer un tableau associatif pour stocker des
informations sur vos animaux de compagnie. Chaque animal doit avoir un nom et un
âge. Dans de futures sessions, vous pourrez ajouter d'autres informations, comme
le type d'animal ou la couleur.

Vous pouvez vous aider de la théorie (voir le
[support de cours](../01-theorie/README.md)) pour vous aider à comprendre
comment créer le tableau associatif contenant les animaux de compagnie.

### Création du tableau dans le fichier `functions.php`

Dans le fichier `functions.php`, vous allez créer un tableau associatif `$pets`
pour stocker les informations sur vos animaux de compagnie. Ce tableau sera
ensuite accessible depuis n'importe quelle fonction de votre projet.

Ce tableau aura la structure suivante :

- Une clé pour chaque animal (par exemple, `Caramel`, `Rex`, etc.)
- Une valeur pour chaque animal, qui sera un tableau associatif contenant les
  informations suivantes :
  - `nom` : le nom de l'animal
  - `age` : l'âge de l'animal

Vous pouvez reprendre les noms et âges des animaux suivants, issus du cours
précédent :

- Caramel : 3 ans
- Rex : 8 ans
- Tweety : 1 an
- Godzilla : 4 ans

Essayez de le faire sans regarder la solution !

<details>
<summary>Afficher la réponse</summary>

```php
$pets = [
    'Caramel' => [
        'name' => 'Caramel',
        'age' => 3
    ],
    'Rex' => [
        'name' => 'Rex',
        'age' => 8
    ],
    'Tweety' => [
        'name' => 'Tweety',
        'age' => 1
    ],
    'Godzilla' => [
        'name' => 'Godzilla',
        'age' => 4
    ]
];
```

Votre fichier `functions.php` devrait ressembler à ceci :

```php
<?php
// On crée un tableau pour stocker les animaux
// Il s'agit d'une variable globale - n'importe qui peut y accéder
// Même si c'est une mauvaise pratique, c'est nécessaire ici
$pets = [
    'Caramel' => [
        'name' => 'Caramel',
        'age' => 3
    ],
    'Rex' => [
        'name' => 'Rex',
        'age' => 8
    ],
    'Tweety' => [
        'name' => 'Tweety',
        'age' => 1
    ],
    'Godzilla' => [
        'name' => 'Godzilla',
        'age' => 4
    ]
];

function getPets() {
    echo "Getting pets.<br>";
}

function getPet($name) {
    echo "Getting pet with name '$name'.<br>";
}

function addPet($name, $age) {
    echo "Adding $name, who is $age years old.<br>";
}

function updatePet($name, $age) {
    echo "Updating pet with name '$name' to be $age years old.<br>";
}

function removePet($name) {
    echo "Removing pet with name '$name'.<br>";
}
```

</details>

Vous remarquerez que nous avons utilisé des clés pour chaque animal (par
exemple, `Caramel`, `Rex`, etc.). Ces clés sont utilisées pour identifier chaque
animal dans le tableau associatif. Vous pouvez utiliser n'importe quel nom pour
les clés. Dans le futur, ces clés seront remplacées par des identifiants uniques
pour chaque animal.

### Récupération des animaux de compagnie dans le fichier `functions.php`

Maintenant que nous avons un tableau associatif pour stocker les animaux de
compagnie, nous allons pouvoir mettre à jour la fonction `getPets()` pour
récupérer les animaux de compagnie.

Cette fonction a un seul but : retourner le tableau associatif contenant les
animaux de compagnie.

Vous devez donc modifier la fonction `getPets()` pour qu'elle retourne le
tableau `$pets` que vous avez créé précédemment.

**Astuce** : vous aurez besoin d'utiliser le mot-clé `global` pour accéder à la
variable `$pets` () dans la fonction `getPets()`. Cela vous permettra d'accéder
à la variable `$pets` définie en dehors de la fonction `getPets()`.

Essayez de le faire sans regarder la solution !

<details>
<summary>Afficher la réponse</summary>

```php
function getPets() {
    global $pets;

    return $pets;
}
```

Votre fichier `functions.php` devrait ressembler à ceci :

```php
<?php
// On crée un tableau pour stocker les animaux.
// Il s'agit d'une variable globale - n'importe qui peut y accéder.
// Même si c'est une mauvaise pratique, c'est nécessaire ici.
$pets = [
    'Caramel' => [
        'name' => 'Caramel',
        'age' => 3
    ],
    'Rex' => [
        'name' => 'Rex',
        'age' => 8
    ],
    'Tweety' => [
        'name' => 'Tweety',
        'age' => 1
    ],
    'Godzilla' => [
        'name' => 'Godzilla',
        'age' => 4
    ]
];

function getPets() {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On retourne tous les animaux.
    return $pets;
}

function getPet($name) {
    echo "Getting pet with name '$name'.<br>";
}

function addPet($name, $age) {
    echo "Adding $name, who is $age years old.<br>";
}

function updatePet($name, $age) {
    echo "Updating pet with name '$name' to be $age years old.<br>";
}

function removePet($name) {
    echo "Removing pet with name '$name'.<br>";
}
```

Vous remarquerez que nous avons utilisé le mot-clé `global` pour accéder à la
variable `$pets`. Cela permet d'accéder à la variable `$pets` définie en dehors
de la fonction `getPets()`. Bien que ce ne soit pas une bonne pratique de
programmer, c'est nécessaire ici pour accéder à la variable `$pets` dans la
fonction `getPets()`.

</details>

### Récupération des animaux de compagnie dans le fichier `index.php`

Maintenant que nous avons une fonction pour récupérer les animaux de compagnie,
nous allons pouvoir l'utiliser dans le fichier `index.php`.

Dans le fichier `index.php`, vous devriez déjà appeler la fonction `getPets()`
pour récupérer les animaux de compagnie. Modifiez le code pour que le résultat
de la fonction `getPets()` soit stocké dans une variable `$pets`.

Ensuite, vous pouvez utiliser la fonction `print_r()` pour afficher le tableau
associatif contenant les animaux de compagnie.

Essayez de le faire sans regarder la solution !

<details>
<summary>Afficher la réponse</summary>

```php
// Récupère tous les animaux
$pets = getPets();

// Affiche tous les animaux
print_r($pets);
```

Votre fichier `index.php` devrait ressembler à ceci :

```php
<?php
require 'functions.php';

// Crée Caramel, un chat de 3 ans
addPet("Caramel", 3);

// Crée Rex, un chien de 8 ans
addPet("Rex", 8);

// Crée Tweety, un oiseau de 1 an
addPet("Tweety", 1);

// Crée Godzilla, un lézard de 4 ans
addPet("Godzilla", 4);

// Récupère tous les animaux
$pets = getPets();

// Affiche tous les animaux
print_r($pets);

// Récupère l'animal nommé Rex
getPet("Rex");

// Met à jour l'âge de Rex à 9 ans
updatePet("Rex", 9);

// Supprime Tweety... :(
removePet("Tweety");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Page d'accueil | Gestionnaire d'animaux de compagnie</title>
</head>

<body>
    <h1>Page d'accueil du gestionnaire d'animaux de compagnie</h1>
    <p>Bienvenue sur la page d'accueil du gestionnaire d'animaux de compagnie !</p>
    <p>Utilise cette page pour visualiser et gérer tous les animaux de compagnie.</p>
</body>

</html>
```

</details>

Si vous accédez à la page d'accueil de votre projet dans votre navigateur
(<http://localhost/progserv1/mini-projet/index.php>), vous devriez voir le
tableau associatif contenant les animaux de compagnie affiché à l'écran parmi le
restant des informations.

### Affichage des animaux de compagnie dans le fichier `index.php`

Maintenant que nous avons un tableau associatif pour stocker les animaux de
compagnie et une fonction pour les récupérer, nous allons pouvoir afficher les
animaux de compagnie dans un tableau HTML.

Pour cela, vous allez devoir créer un tableau HTML dans le fichier `index.php`
et y afficher les informations sur les animaux de compagnie.

Vous devez créer un tableau HTML avec les colonnes suivantes :

- Nom
- Âge

Ensuite, vous devez parcourir le tableau associatif contenant les animaux de
compagnie à l'aide d'une boucle et afficher les informations sur chaque animal
dans une ligne du tableau HTML.

Vous pouvez vous référez aux ressources disponibles sur MDN pour créer un
tableau HTML : <https://developer.mozilla.org/fr/docs/Web/HTML/Element/table>.

Essayez de le faire sans regarder la solution !

<details>
<summary>Afficher la réponse</summary>

```php
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Âge</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pets as $pet) { ?>
                <tr>
                    <td><?= $pet['name'] ?></td>
                    <td><?= $pet['age'] ?> an(s)</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
```

Vous remarquerez peut-être l'utilisation de la syntaxe `<?= ?>` pour afficher
les valeurs des animaux de compagnie. Cette syntaxe est équivalente à
`<?php echo ?>` et permet d'afficher une valeur directement dans le code HTML.

Il s'agit simplement d'une syntaxe plus courte pour afficher une valeur. Vous
pouvez en apprendre plus sur cette syntaxe ici :
<https://www.php.net/manual/fr/function.echo.php#language.basic.short-tags>.

Votre fichier `index.php` devrait ressembler à ceci :

```php
<?php
require 'functions.php';

// Crée Caramel, un chat de 3 ans
addPet("Caramel", 3);

// Crée Rex, un chien de 8 ans
addPet("Rex", 8);

// Crée Tweety, un oiseau de 1 an
addPet("Tweety", 1);

// Crée Godzilla, un lézard de 4 ans
addPet("Godzilla", 4);

// Récupère tous les animaux
$pets = getPets();

// Affiche tous les animaux
print_r($pets);

// Récupère l'animal nommé Rex
getPet("Rex");

// Met à jour l'âge de Rex à 9 ans
updatePet("Rex", 9);

// Supprime Tweety... :(
removePet("Tweety");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Page d'accueil | Gestionnaire d'animaux de compagnie</title>
</head>

<body>
    <h1>Page d'accueil du gestionnaire d'animaux de compagnie</h1>
    <p>Bienvenue sur la page d'accueil du gestionnaire d'animaux de compagnie !</p>
    <p>Utilise cette page pour visualiser et gérer tous les animaux de compagnie.</p>

    <h2>Liste des animaux</h2>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Âge</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pets as $pet) { ?>
                <tr>
                    <td><?= $pet['name'] ?></td>
                    <td><?= $pet['age'] ?> an(s)</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>
```

</details>

Si vous accédez à la page d'accueil de votre projet dans votre navigateur
(<http://localhost/progserv1/mini-projet/index.php>), vous devriez voir un
tableau HTML contenant les informations sur les animaux de compagnie.

### Amélioration de l'affichage du tableau

Actuellement, le tableau HTML n'a pas de styles CSS appliqués et rend sa lecture
difficile. Vous pouvez améliorer l'affichage du tableau en ajoutant des styles
CSS pour le rendre plus agréable à lire.

Vous pouvez ajouter les styles CSS suivants dans la balise `<head>` de votre
fichier `index.php` :

```php
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
```

Votre fichier `index.php` devrait ressembler à ceci :

```php
<?php
require 'functions.php';

// Crée Caramel, un chat de 3 ans
addPet("Caramel", 3);

// Crée Rex, un chien de 8 ans
addPet("Rex", 8);

// Crée Tweety, un oiseau de 1 an
addPet("Tweety", 1);

// Crée Godzilla, un lézard de 4 ans
addPet("Godzilla", 4);

// Récupère tous les animaux
$pets = getPets();

// Affiche tous les animaux
print_r($pets);

// Récupère l'animal nommé Rex
getPet("Rex");

// Met à jour l'âge de Rex à 9 ans
updatePet("Rex", 9);

// Supprime Tweety... :(
removePet("Tweety");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Page d'accueil | Gestionnaire d'animaux de compagnie</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h1>Page d'accueil du gestionnaire d'animaux de compagnie</h1>
    <p>Bienvenue sur la page d'accueil du gestionnaire d'animaux de compagnie !</p>
    <p>Utilise cette page pour visualiser et gérer tous les animaux de compagnie.</p>

    <h2>Liste des animaux</h2>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Âge</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pets as $pet) { ?>
                <tr>
                    <td><?= $pet['name'] ?></td>
                    <td><?= $pet['age'] ?> an(s)</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>
```

Il est également possible d'ajouter d'autres styles CSS pour améliorer
l'apparence du tableau (ou de l'application dans son ensemble). Dans le contexte
de ce mini-projet, nous allons rester sur ces styles CSS de base.

Si vous souhaitez aller plus loin, vous pouvez vous inspirer de la documentation
de CSS pour ajouter d'autres styles CSS :
<https://developer.mozilla.org/fr/docs/Web/CSS>.

## Interactions avec le tableau des animaux de compagnie

Dans cette section, vous allez modifier les fonctions `addPet()`, `getPet()`,
`updatePet()` et `removePet()` pour qu'elles interagissent avec le tableau
associatif contenant les animaux de compagnie.

N'oubliez que vous pouvez utiliser la théorie vue dans le support de cours (voir
le [support de cours](../01-theorie/README.md)) pour vous aider à comprendre
comment modifier le tableau associatif contenant les animaux de compagnie.

### Repartir sur un tableau vide

Avant de commencer, il est préférable de repartir sur un tableau vide pour
éviter d'avoir des animaux de compagnie déjà créés. Pour cela, vous pouvez
partir d'un tableau vide dans le fichier `functions.php` :

```php
$pets = [];
```

Vous pouvez également supprimer les appels à la fonction `print_r()` dans le
fichier `index.php` pour éviter d'afficher le tableau associatif contenant les
animaux de compagnie.

### Ajout d'un animal de compagnie

Dans la fonction `addPet()`, vous devez ajouter un nouvel animal de compagnie au
tableau associatif contenant les animaux de compagnie.

Vous devez utiliser la clé du tableau associatif pour ajouter un nouvel animal
de compagnie. La clé doit être le nom de l'animal et la valeur doit être un
tableau associatif contenant les informations sur l'animal.

Une fois l'animal ajouté, vous devez également le retourner pour que les
personnes utilisant la fonction puissent directement utiliser l'animal ajouté.

Essayez de le faire sans regarder la solution !

<details>
<summary>Afficher la réponse</summary>

```php
function addPet($name, $age) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On ajoute l'animal au tableau `$pets`.
    // On utilise le nom de l'animal comme clé
    // et un tableau associatif comme valeur
    // contenant le nom et l'âge de l'animal.
    $pets[$name] = [
        'name' => $name,
        'age' => $age
    ];

    // On retourne l'animal ajouté.
    return $pets[$name];
}
```

Votre fichier `functions.php` devrait ressembler à ceci :

```php
<?php
// On crée un tableau pour stocker les animaux.
// Il s'agit d'une variable globale - n'importe qui peut y accéder.
// Même si c'est une mauvaise pratique, c'est nécessaire ici.
$pets = [];

function getPets() {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On retourne tous les animaux.
    return $pets;
}

function getPet($name) {
    echo "Getting pet with name '$name'.<br>";
}

function addPet($name, $age) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On ajoute l'animal au tableau `$pets`.
    // On utilise le nom de l'animal comme clé
    // et un tableau associatif comme valeur
    // contenant le nom et l'âge de l'animal.
    $pets[$name] = [
        'name' => $name,
        'age' => $age
    ];

    // On retourne l'animal ajouté.
    return $pets[$name];
}

function updatePet($name, $age) {
    echo "Updating pet with name '$name' to be $age years old.<br>";
}

function removePet($name) {
    echo "Removing pet with name '$name'.<br>";
}
```

Et votre fichier `index.php` devrait ressembler à ceci :

```php
<?php
require 'functions.php';

// Crée Caramel, un chat de 3 ans
addPet("Caramel", 3);

// Crée Rex, un chien de 8 ans
addPet("Rex", 8);

// Crée Tweety, un oiseau de 1 an
addPet("Tweety", 1);

// Crée Godzilla, un lézard de 4 ans
addPet("Godzilla", 4);

// Récupère tous les animaux
$pets = getPets();

// Récupère l'animal nommé Rex
getPet("Rex");

// Met à jour l'âge de Rex à 9 ans
updatePet("Rex", 9);

// Supprime Tweety... :(
removePet("Tweety");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Page d'accueil | Gestionnaire d'animaux de compagnie</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h1>Page d'accueil du gestionnaire d'animaux de compagnie</h1>
    <p>Bienvenue sur la page d'accueil du gestionnaire d'animaux de compagnie !</p>
    <p>Utilise cette page pour visualiser et gérer tous les animaux de compagnie.</p>

    <h2>Liste des animaux</h2>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Âge</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pets as $pet) { ?>
                <tr>
                    <td><?= $pet['name'] ?></td>
                    <td><?= $pet['age'] ?> an(s)</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>
```

</details>

Si vous accédez à la page d'accueil de votre projet dans votre navigateur
(<http://localhost/progserv1/mini-projet/index.php>), vous devriez voir que les
messages de création de vos animaux de compagnie ne sont plus affichés mais que
qu'ils ont bien été créés et sont affichés dans le tableau HTML.

### Récupération d'un animal de compagnie

Dans la fonction `getPet()`, vous devez récupérer un animal de compagnie à
l'aide de son nom. Pour cela, vous devez utiliser la clé du tableau associatif
pour récupérer l'animal de compagnie.

Vous devez également retourner l'animal de compagnie récupéré pour que les
personnes utilisant la fonction puissent directement utiliser l'animal récupéré.

Il est nécessaire de vérifier si l'animal de compagnie existe dans le tableau
associatif avant de le récupérer. Si l'animal de compagnie n'existe pas, vous
devez retourner un booléen `false`. Pour vérifier si l'animal de compagnie
existe, vous pouvez utiliser la fonction `array_key_exists()` :
<https://www.php.net/manual/fr/function.array-key-exists.php>.

Essayez de le faire sans regarder la solution !

<details>
<summary>Afficher la réponse</summary>

```php
function getPet($name) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On vérifie si l'animal existe bien...
    if (array_key_exists($name, $pets)) {
        // ...si l'animal existe, on le retourne.
        return $pets[$name];
    } else {
        // ...si l'animal n'existe pas, on retourne `false`.
        return false;
    }
}
```

Votre fichier `functions.php` devrait ressembler à ceci :

```php
<?php
// On crée un tableau pour stocker les animaux.
// Il s'agit d'une variable globale - n'importe qui peut y accéder.
// Même si c'est une mauvaise pratique, c'est nécessaire ici.
$pets = [];

function getPets() {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On retourne tous les animaux.
    return $pets;
}

function getPet($name) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On vérifie si l'animal existe bien...
    if (array_key_exists($name, $pets)) {
        // ...si l'animal existe, on le retourne.
        return $pets[$name];
    } else {
        // ...si l'animal n'existe pas, on retourne `false`.
        return false;
    }
}

function addPet($name, $age) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On ajoute l'animal au tableau `$pets`.
    // On utilise le nom de l'animal comme clé
    // et un tableau associatif comme valeur
    // contenant le nom et l'âge de l'animal.
    $pets[$name] = [
        'name' => $name,
        'age' => $age
    ];

    // On retourne l'animal ajouté.
    return $pets[$name];
}

function updatePet($name, $age) {
    echo "Updating pet with name '$name' to be $age years old.<br>";
}

function removePet($name) {
    echo "Removing pet with name '$name'.<br>";
}
```

</details>

### Mise à jour d'un animal de compagnie

Dans la fonction `updatePet()`, vous devez mettre à jour l'âge d'un animal de
compagnie à l'aide de son nom. Pour cela, vous devez utiliser la clé du tableau
associatif pour mettre à jour l'animal de compagnie.

Vous devez également retourner l'animal de compagnie mis à jour pour que les
personnes utilisant la fonction puissent directement utiliser l'animal mis à
jour.

À nouveau, il est nécessaire de vérifier si l'animal de compagnie existe dans le
tableau associatif avant de le mettre à jour. Si l'animal de compagnie n'existe
pas, vous devez retourner un booléen `false`.

Essayez de le faire sans regarder la solution !

<details>
<summary>Afficher la réponse</summary>

```php
function updatePet($name, $age) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On vérifie si l'animal existe bien...
    if (array_key_exists($name, $pets)) {
        // ...si l'animal existe, on le récupère.
        $pet = $pets[$name];

        // On met à jour l'âge de l'animal.
        $pet['age'] = $age;

        // On met à jour l'animal dans le tableau `$pets`.
        $pets[$name] = $pet;

        // On retourne l'animal mis à jour.
        return $pet;
    } else {
        // ...si l'animal n'existe pas, on retourne `false`.
        return false;
    }
}
```

Votre fichier `functions.php` devrait ressembler à ceci :

```php
<?php
// On crée un tableau pour stocker les animaux.
// Il s'agit d'une variable globale - n'importe qui peut y accéder.
// Même si c'est une mauvaise pratique, c'est nécessaire ici.
$pets = [];

function getPets() {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On retourne tous les animaux.
    return $pets;
}

function getPet($name) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On vérifie si l'animal existe bien...
    if (array_key_exists($name, $pets)) {
        // ...si l'animal existe, on le retourne.
        return $pets[$name];
    } else {
        // ...si l'animal n'existe pas, on retourne `false`.
        return false;
    }
}

function addPet($name, $age) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On ajoute l'animal au tableau `$pets`.
    // On utilise le nom de l'animal comme clé
    // et un tableau associatif comme valeur
    // contenant le nom et l'âge de l'animal.
    $pets[$name] = [
        'name' => $name,
        'age' => $age
    ];

    // On retourne l'animal ajouté.
    return $pets[$name];
}

function updatePet($name, $age) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On vérifie si l'animal existe bien...
    if (array_key_exists($name, $pets)) {
        // ...si l'animal existe, on le récupère.
        $pet = $pets[$name];

        // On met à jour l'âge de l'animal.
        $pet['age'] = $age;

        // On met à jour l'animal dans le tableau `$pets`.
        $pets[$name] = $pet;

        // On retourne l'animal mis à jour.
        return $pet;
    } else {
        // ...si l'animal n'existe pas, on retourne `false`.
        return false;
    }
}

function removePet($name) {
    echo "Removing pet with name '$name'.<br>";
}
```

</details>

### Suppression d'un animal de compagnie

Similairement à la fonction `updatePet()`, vous devez supprimer un animal de
compagnie à l'aide de son nom. Pour cela, vous devez utiliser la clé du tableau
associatif pour supprimer l'animal de compagnie.

À nouveau, il est nécessaire de vérifier si l'animal de compagnie existe dans le
tableau associatif avant de le supprimer. Si l'animal de compagnie n'existe pas,
vous devez retourner un booléen `false`. Si la suppression a réussi (☹️), vous
devez retourner un booléen `true`.

Pour supprimer un animal de compagnie, vous pouvez utiliser la fonction
`unset()` : <https://www.php.net/manual/fr/function.unset.php>. Cette fonction
supprime une variable ou un élément d'un tableau.

Essayez de le faire sans regarder la solution !

<details>
<summary>Afficher la réponse</summary>

```php
function removePet($name) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On vérifie si l'animal existe bien...
    if (array_key_exists($name, $pets)) {
        // ...si l'animal existe, on le supprime du tableau `$pets`.
        unset($pets[$name]);

        // On retourne `true` pour indiquer que la suppression a réussi.
        return true;
    } else {
        // ...si l'animal n'existe pas, on retourne `false`.
        return false;
    }
}
```

Votre fichier `functions.php` devrait ressembler à ceci :

```php
<?php
// On crée un tableau pour stocker les animaux.
// Il s'agit d'une variable globale - n'importe qui peut y accéder.
// Même si c'est une mauvaise pratique, c'est nécessaire ici.
$pets = [];

function getPets() {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On retourne tous les animaux.
    return $pets;
}

function getPet($name) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On vérifie si l'animal existe bien...
    if (array_key_exists($name, $pets)) {
        // ...si l'animal existe, on le retourne.
        return $pets[$name];
    } else {
        // ...si l'animal n'existe pas, on retourne `false`.
        return false;
    }
}

function addPet($name, $age) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On ajoute l'animal au tableau `$pets`.
    // On utilise le nom de l'animal comme clé
    // et un tableau associatif comme valeur
    // contenant le nom et l'âge de l'animal.
    $pets[$name] = [
        'name' => $name,
        'age' => $age
    ];

    // On retourne l'animal ajouté.
    return $pets[$name];
}

function updatePet($name, $age) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On vérifie si l'animal existe bien...
    if (array_key_exists($name, $pets)) {
        // ...si l'animal existe, on le récupère.
        $pet = $pets[$name];

        // On met à jour l'âge de l'animal.
        $pet['age'] = $age;

        // On met à jour l'animal dans le tableau `$pets`.
        $pets[$name] = $pet;

        // On retourne l'animal mis à jour.
        return $pet;
    } else {
        // ...si l'animal n'existe pas, on retourne `false`.
        return false;
    }
}

function removePet($name) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pets;

    // On vérifie si l'animal existe bien...
    if (array_key_exists($name, $pets)) {
        // ...si l'animal existe, on le supprime du tableau `$pets`.
        unset($pets[$name]);

        // On retourne `true` pour indiquer que la suppression a réussi.
        return true;
    } else {
        // ...si l'animal n'existe pas, on retourne `false`.
        return false;
    }
}
```

</details>

## Validation du fonctionnement de l'application

Maintenant que toutes les fonctions sont implémentées, vous pouvez valider le
fonctionnement de l'application en accédant à la page d'accueil de votre projet
dans votre navigateur (<http://localhost/progserv1/mini-projet/index.php>).

Vous devriez voir le tableau HTML contenant les informations sur les animaux de
compagnie. Les messages ficttifs de création, de récupération, de mise à jour et
de suppression d'animaux de compagnie ne devraient plus s'afficher.

Vous pouvez également tester les fonctions en ajoutant, récupérant, mettant à
jour et supprimant des animaux de compagnie dans le fichier `index.php`.

Afin de valider que tout fonctionne correctement, vous pouvez utilisez le code
suivant dans votre fichier `index.php` :

```php
<?php
require 'functions.php';

// Crée Caramel, un chat de 3 ans
addPet("Caramel", 3);

// Crée Rex, un chien de 8 ans
addPet("Rex", 8);

// Crée Tweety, un oiseau de 1 an
addPet("Tweety", 1);

// Crée Godzilla, un lézard de 4 ans
addPet("Godzilla", 4);

// Récupère l'animal nommé Rex
$rex = getPet("Rex");

// Affiche les propriétés de Rex
print_r($rex);
echo "<br>";

// Met à jour l'âge de Rex à 9 ans
$rex = updatePet("Rex", 9);

// Affiche les propriétés de Rex
print_r($rex);
echo "<br>";

// Supprime Tweety... :(
$success = removePet("Tweety");

// Affiche si la suppression a réussi
var_dump($success);
echo "<br>";

// On essaie de récupérer Tweety
$tweety = getPet("Tweety");

// Affiche si Tweety a été trouvé
var_dump($tweety);
echo "<br>";

// Récupère tous les animaux
$pets = getPets();
?>
```

Votre fichier `index.php` devrait ressembler à ceci :

```php
<?php
require 'functions.php';

// Crée Caramel, un chat de 3 ans
addPet("Caramel", 3);

// Crée Rex, un chien de 8 ans
addPet("Rex", 8);

// Crée Tweety, un oiseau de 1 an
addPet("Tweety", 1);

// Crée Godzilla, un lézard de 4 ans
addPet("Godzilla", 4);

// Récupère l'animal nommé Rex
$rex = getPet("Rex");

// Affiche les propriétés de Rex
print_r($rex);
echo "<br>";

// Met à jour l'âge de Rex à 9 ans
$rex = updatePet("Rex", 9);

// Affiche les propriétés de Rex
print_r($rex);
echo "<br>";

// Supprime Tweety... :(
$success = removePet("Tweety");

// Affiche si la suppression a réussi
var_dump($success);
echo "<br>";

// On essaie de récupérer Tweety
$tweety = getPet("Tweety");

// Affiche si Tweety a été trouvé
var_dump($tweety);
echo "<br>";

// Récupère tous les animaux
$pets = getPets();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Page d'accueil | Gestionnaire d'animaux de compagnie</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h1>Page d'accueil du gestionnaire d'animaux de compagnie</h1>
    <p>Bienvenue sur la page d'accueil du gestionnaire d'animaux de compagnie !</p>
    <p>Utilise cette page pour visualiser et gérer tous les animaux de compagnie.</p>

    <h2>Liste des animaux</h2>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Âge</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pets as $pet) { ?>
                <tr>
                    <td><?= $pet['name'] ?></td>
                    <td><?= $pet['age'] ?> an(s)</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>
```

Si vous accédez à la page d'accueil de votre projet dans votre navigateur
(<http://localhost/progserv1/mini-projet/index.php>), vous devriez voir les
informations sur les animaux de compagnie affichées à l'écran.

## Solution

Vous pouvez trouver la solution du mini-projet PHP à l'adresse suivante :
[`solution`](./solution/).

## Conclusion

Dans cette troisième session, vous avez appris à manipuler des tableaux
associatifs en PHP. Vous avez également modifié le code de l'application pour
ajouter, récupérer, mettre à jour et supprimer des animaux de compagnie dans le
tableau associatif.

Ces fonctions permettent de gérer les animaux de compagnie dans l'application et
de les afficher dans un tableau HTML et définissent la base de notre application
de gestion d'animaux de compagnie, mettant en avant la force de PHP pour
mélanger le code PHP et HTML.

Dans de futures sessions, vous apprendrez à utiliser ces fonctions avec des
formulaires HTML et à interagir avec une base de données pour stocker les
informations sur les animaux de compagnie, notamment dans les pages `create.php`
et `view.php`.

## Aller plus loin

_Ceci est une section optionnelle pour les personnes qui souhaitent aller plus
loin. Vous pouvez la sauter si vous n'avez pas de temps._

- Êtes-vous capable d'améliorer l'affichage de l'application en ajoutant des
  styles CSS supplémentaires ?
- Êtes-vous capable d'ajouter une fonctionnalité pour trier les animaux de
  compagnie par âge ou par nom ?
