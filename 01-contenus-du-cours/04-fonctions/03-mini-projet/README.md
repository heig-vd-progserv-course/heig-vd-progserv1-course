# Fonctions - Mini-projet

L. Delafontaine, avec l'aide de
[GitHub Copilot](https://github.com/features/copilot).

Ce travail est sous licence [CC BY-SA 4.0][licence].

> [!TIP]
>
> Toutes les informations relatives à ce contenu sont décrites dans le
> [contenu principal](../README.md).

## Table des matières

- [Table des matières](#table-des-matières)
- [Objectifs](#objectifs)
- [Adapter la structure du mini-projet pour séparer les fichiers publics et les fichiers de code source](#adapter-la-structure-du-mini-projet-pour-séparer-les-fichiers-publics-et-les-fichiers-de-code-source)
- [Changer le lien pour accéder au mini-projet](#changer-le-lien-pour-accéder-au-mini-projet)
- [Déplacer les données des animaux de compagnie dans un fichier dédié](#déplacer-les-données-des-animaux-de-compagnie-dans-un-fichier-dédié)
- [Créer des fonctions pour accéder aux données des animaux de compagnie](#créer-des-fonctions-pour-accéder-aux-données-des-animaux-de-compagnie)
- [Utiliser la fonction `getPets` dans la page d'accueil](#utiliser-la-fonction-getpets-dans-la-page-daccueil)
- [Créer une page de visualisation pour un animal de compagnie](#créer-une-page-de-visualisation-pour-un-animal-de-compagnie)
  - [Ajouter le lien vers la page de visualisation dans la page d'accueil](#ajouter-le-lien-vers-la-page-de-visualisation-dans-la-page-daccueil)
  - [Créer la page de visualisation](#créer-la-page-de-visualisation)
  - [Récupérer l'identifiant de l'animal de compagnie depuis l'URL](#récupérer-lidentifiant-de-lanimal-de-compagnie-depuis-lurl)
  - [Utiliser la fonction `getPetById` dans la page de visualisation](#utiliser-la-fonction-getpetbyid-dans-la-page-de-visualisation)
  - [Afficher les détails de l'animal de compagnie](#afficher-les-détails-de-lanimal-de-compagnie)
  - [Gérer le cas où l'animal de compagnie n'est pas trouvé](#gérer-le-cas-où-lanimal-de-compagnie-nest-pas-trouvé)
  - [Tester la page de visualisation](#tester-la-page-de-visualisation)
  - [Sauvegarder et effectuer un commit Git](#sauvegarder-et-effectuer-un-commit-git)
- [Conclusion](#conclusion)
- [Solution](#solution)
- [Aller plus loin](#aller-plus-loin)

## Objectifs

Lors de la séance précédente, vous avez appris à créer des tableaux associatifs
en PHP pour représenter des animaux de compagnie et mis en place la page
d'accueil de votre projet à l'aide de Pico CSS.

Aujourd'hui, nous allons améliorer notre projet en créant des pages et des
fonctions pour visualiser tous les animaux de compagnie ou un animal de
compagnie en particulier.

À l'issue de cette session, les personnes qui étudient devraient avoir pu :

- Créer une page de visualisation pour un animal de compagnie.
- Utiliser des fonctions pour accéder aux données des animaux de compagnie.

## Adapter la structure du mini-projet pour séparer les fichiers publics et les fichiers de code source

Actuellement, le mini-projet devrait avoir la structure suivante :

```text
mini-projet/
├── css
│   └── styles.css
├── images
│   └── logo.svg
└── index.php
```

Cette structure est fonctionnelle, mais elle peut être améliorée pour mieux
organiser notre code et faciliter la maintenance de notre projet à mesure qu'il
grandit.

Nous allons donc adapter la structure du mini-projet de la manière suivante :

```text
mini-projet/
├── public/
│   ├── css/
│   │   └── styles.css
│   ├── images/
│   │   └── logo.svg
│   └── index.php
└── src/
```

Ici, nous avons créé deux dossiers à la racine de notre mini-projet :

1. `public`.
2. `src`.

Le dossier `public` contient tous les fichiers qui seront accessibles
publiquement, tels que les fichiers CSS, les images et les pages principales qui
constitueront l'interface utilisateur du mini-projet.

Ainsi, le fichier `index.php`, les styles CSS et les images se trouvent
désormais dans le dossier `public`, ce qui est une pratique courante pour les
projets web afin de séparer les fichiers accessibles au public du code source de
l'application.

Le dossier `src` est destiné à contenir le code source du mini-projet, notamment
les fonctions que vous allez créer pour manipuler les données des animaux de
compagnie.

Nous viendrons créer les différents fichiers liés à la logique de l'application
dans ce dossier `src`, ce qui permettra de garder une structure de projet propre
et organisée.

En organisant votre code de cette manière, vous facilitez la maintenance et la
réutilisation de votre code à mesure que votre projet évolue.

Sauvegardez tous les fichiers et effectuez un commit Git pour enregistrer cette
étape de développement dans l'historique Git de votre projet avec le message de
commit "Adaptation de la structure du mini-projet" et poussez ce commit sur le
dépôt distant.

## Changer le lien pour accéder au mini-projet

Depuis que nous avons déplacé le fichier `mini-projet/index.php` dans le dossier
`mini-projet/public`, le lien pour accéder à votre mini-projet depuis la page
`index.php` à la racine du projet (le fichier `index.php` située au même niveau
que les fichiers `exception.php` et `phpinfo.php`) a changé.

Il est donc nécessaire de mettre à jour le lien que vous utilisez pour accéder à
votre mini-projet dans votre navigateur dans le fichier `index.php` situé à la
racine de votre projet.

Mettez à jour le lien pour qu'il pointe vers le fichier `index.php` situé dans
le dossier `public` de votre projet.

Sauvegardez tous les fichiers et effectuez un commit Git pour enregistrer cette
étape de développement dans l'historique Git de votre projet avec le message de
commit "Mise à jour du lien pour accéder au mini-projet" et poussez ce commit
sur le dépôt distant.

## Déplacer les données des animaux de compagnie dans un fichier dédié

Actuellement, les données de vos animaux de compagnie sont définies directement
dans le fichier `public/index.php`.

Pour améliorer la structure du mini-projet, nous allons déplacer ces données
dans un fichier dédié dans le dossier `src`.

Voici comment vous pouvez procéder :

1. Créez un fichier `src/data.php` pour stocker les données de vos animaux de
   compagnie.
2. Déplacez les tableaux associatifs représentant les animaux de compagnie du
   fichier `public/index.php` vers le fichier `src/data.php`.
   - **Astuce** : vous pouvez déplacer le tableau associatif `$pets` que vous
     avez créé précédemment dans le fichier `public/index.php` vers le fichier
     `src/data.php`. Dans le fichier `public/index.php`, conservez la
     déclaration de la variable `$pets` mais sans les données (`$pets = [];`).
     Nous reviendrons plus tard pour remplir cette variable à l'aide des
     fonctions que nous allons créer dans le fichier `src/functions.php`.

La structure de votre projet devrait maintenant ressembler à ceci :

```text
mini-projet/
├── public/
│   ├── css/
│   │   └── styles.css
│   ├── images/
│   │   └── logo.svg
│   └── index.php
└── src/
    └── data.php
```

Vous aurez ainsi les données de vos animaux de compagnie organisées dans un
fichier séparé, ce qui rendra votre code plus propre et plus facile à maintenir.

Sauvegardez tous les fichiers et effectuez un commit Git pour enregistrer cette
étape de développement dans l'historique Git de votre projet avec le message de
commit "Déplacement des données dans un fichier dédié" et poussez ce commit sur
le dépôt distant.

Dans les prochaines étapes, nous verrons comment créer des fonctions dans le
dossier `src` pour accéder à ces données et les utiliser dans votre application.

## Créer des fonctions pour accéder aux données des animaux de compagnie

Maintenant que les données de vos animaux de compagnie sont organisées dans le
fichier `src/data.php`, nous allons créer des fonctions pour accéder à ces
données de manière plus structurée.

Voici comment vous pouvez procéder :

1. Créez un fichier `src/functions.php` pour définir les fonctions liées à la
   manipulation des données des animaux de compagnie.
2. Dans ce fichier `src/functions.php`, importez les données des animaux de
   compagnie depuis `src/data.php` en utilisant la directive `require_once` avec
   la construction `__DIR__` pour garantir que le chemin est correct.
3. Dans le fichier `src/functions.php`, créez deux fonctions principales :
   - `getPets()`: Cette fonction retourne le tableau contenant tous les animaux
     de compagnie.
   - `getPetById(int $id)`: Cette fonction prendra un identifiant d'animal de
     compagnie en paramètre et retournera les données de l'animal correspondant
     à cet identifiant. Si aucun animal de compagnie avec cet identifiant n'est
     trouvé, la fonction retournera `null`.
   - **Astuce** : vous devez utiliser le mot-clé `global` pour accéder à la
     variable contenant les données des animaux de compagnie définie dans
     `src/data.php` depuis vos fonctions.

Grâce à ces fonctions, vous pourrez accéder aux données de vos animaux de
compagnie de manière plus structurée et réutilisable dans votre application.

Sauvegardez tous les fichiers et effectuez un commit Git pour enregistrer cette
étape de développement dans l'historique Git de votre projet avec le message de
commit "Ajout des fonctions pour accéder aux données des animaux de compagnie"
et poussez ce commit sur le dépôt distant.

## Utiliser la fonction `getPets` dans la page d'accueil

Maintenant que vous avez créé les fonctions pour accéder aux données des animaux
de compagnie, vous pouvez les utiliser dans votre page d'accueil pour afficher
les informations de vos animaux de compagnie.

Voici comment vous pouvez procéder :

1. Importez le fichier `src/functions.php` dans votre fichier `public/index.php`
   en utilisant la directive `require_once` avec la construction `__DIR__` pour
   garantir que le chemin est correct.
2. Utilisez la fonction `getAllPets()` pour récupérer tous les animaux de
   compagnie et les afficher sur la page d'accueil. Pour cela, remplacez la
   variable `$pets` que vous avez définie précédemment dans `public/index.php`
   par l'appel à la fonction `getAllPets()` : `$pets = getAllPets();`.

Ainsi, les données de vos animaux de compagnie sont récupérées à l'aide de la
fonction que vous avez créée, ce qui rend votre code plus propre et plus facile
à maintenir.

Sauvegardez tous les fichiers et effectuez un commit Git pour enregistrer cette
étape de développement dans l'historique Git de votre projet avec le message de
commit "Utilisation des fonctions pour accéder aux données des animaux de
compagnie dans la page d'accueil" et poussez ce commit sur le dépôt distant.

Nous avons maintenant une page d'accueil fonctionnelle qui affiche les
informations de tous les animaux de compagnie en utilisant les fonctions que
nous avons créées pour accéder aux données.

## Créer une page de visualisation pour un animal de compagnie

Maintenant que vous avez une page d'accueil qui affiche tous les animaux de
compagnie, nous allons créer une page de visualisation pour afficher les détails
d'un animal de compagnie en particulier.

### Ajouter le lien vers la page de visualisation dans la page d'accueil

Dans votre page d'accueil (`public/index.php`), ajoutez un lien pour chaque
animal de compagnie qui redirige vers une page de visualisation dédiée à cet
animal.

Voici comment vous pouvez procéder :

1. Dans le tableau qui affiche les animaux de compagnie sur la page d'accueil,
   ajoutez une colonne "Actions". Cette colonne contiendra un lien pour chaque
   animal de compagnie qui redirige vers une page de visualisation dédiée à cet
   animal.
2. Lors de la génération de chaque ligne du tableau pour un animal de compagnie,
   ajoutez un bouton "Voir" qui redirige vers une page de visualisation dédiée à
   cet animal.
   - **Astuce** : vous pouvez créer un lien vers la page de visualisation en
     utilisant la syntaxe suivante :

     ```html
     <a href="./view.php?id=<?= $pet['id'] ?>">
     	<button>Voir</button>
     </a>
     ```

     où `<?= $pet['id'] ?>` est l'identifiant unique de l'animal de compagnie.

     La syntaxe `<?= ... ?>` est une syntaxe courte pour `<?php echo  ... ?>`.
     Cela permet d'afficher la valeur de l'identifiant de l'animal de compagnie
     dans le lien.

Sauvegardez tous les fichiers et effectuez un commit Git pour enregistrer cette
étape de développement dans l'historique Git de votre projet avec le message de
commit "Ajout du lien vers la page de visualisation dans la page d'accueil" et
poussez ce commit sur le dépôt distant.

Cette étape permettra aux utilisateurs de votre application de cliquer sur le
bouton "Voir" pour accéder à une page de visualisation dédiée à chaque animal de
compagnie, où ils pourront voir les détails de cet animal de compagnie en
particulier.

L'identifiant de l'animal de compagnie sera passé en paramètre dans l'URL, ce
qui nous permettra de récupérer les données de cet animal de compagnie dans la
page de visualisation.

Actuellement, le lien vers la page de visualisation redirige vers une page qui
n'existe pas encore. Nous allons créer cette page dans les prochaines étapes.

### Créer la page de visualisation

Créez un fichier `public/view.php` qui sera la page de visualisation pour un
animal de compagnie.

Utilisez la structure suivante pour votre page de visualisation :

```php
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="./css/styles.css">

    <title>Page de visualisation | ninetendogs</title>
    <meta name="description" content="ninetendogs - Gestionnaire d'animaux de compagnie - Visualisation d'un animal de compagnie">
</head>

<body class="container">
    <header>
        <nav>
            <ul>
                <li><strong>ninetendogs</strong></li>
            </ul>
            <ul>
                <li><a href="./index.php">Accueil</a></li>
            </ul>
        </nav>

        <nav aria-label="breadcrumb">
            <ul>
                <li><a href="./index.php">Accueil</a></li>
                <li><?= $pet['name'] ?></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- Contenu de la page de visualisation pour un animal de compagnie -->
    </main>
    <footer>
        <center>
            <small>
                Un projet réalisé dans le cadre du cours <a href="https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course">ProgServ1</a> enseigné à la <a href="https://heig-vd.ch">HEIG-VD</a>.
            </small>
        </center>
    </footer>
</body>

</html>
```

Prenez quelques minutes pour explorer cette structure de page de visualisation
et répondre aux questions suivantes :

- Quel est le but de la balise `<nav aria-label="breadcrumb">` dans cette page
  de visualisation ?
- Est-ce que la page de visualisation est fonctionnelle pour le moment ?
  Pourquoi ou pourquoi pas ?

### Récupérer l'identifiant de l'animal de compagnie depuis l'URL

Lors que votre navigateur redirige vers la page de visualisation d'un animal de
compagnie en cliquant sur le bouton "Voir" dans la page d'accueil, l'identifiant
de cet animal de compagnie est passé en paramètre dans l'URL.

Au travers de cette opération, votre navigateur effectue une requête HTTP GET
vers la page de visualisation en incluant l'identifiant de l'animal de compagnie
dans les paramètres de la requête.

Avec PHP, il est possible de récupérer les informations d'une requête GET, y
compris les paramètres passés dans l'URL, en utilisant la superglobale `$_GET`,
qui est un tableau associatif (comme étudié dans la séance précédente) contenant
les paramètres de la requête GET.

Dans votre page de visualisation (`public/view.php`), vous devez récupérer
l'identifiant de l'animal de compagnie depuis l'URL en utilisant la superglobale
`$_GET`.

Pour cela, vous pouvez utiliser la syntaxe suivante :

```php
$petId = $_GET['id'] ?? null;
```

La superglobale `$_GET` est un tableau associatif qui contient les paramètres de
la requête GET, où les clés sont les noms des paramètres et les valeurs sont les
valeurs correspondantes.

L'opérateur `??` est utilisé pour vérifier si le paramètre `id` existe et n'est
pas null. Si le paramètre `id` existe, sa valeur sera assignée à la variable
`$petId`. Si le paramètre `id` n'existe pas ou est null, la variable `$petId`
sera assignée à `null`.

Ainsi, en utilisant `$_GET['id']`, vous pouvez récupérer la valeur du paramètre
`id` qui a été passé dans l'URL lorsque l'utilisateur a cliqué sur le bouton
"Voir" dans la page d'accueil.

### Utiliser la fonction `getPetById` dans la page de visualisation

À présent que vous avez l'identifiant de l'animal de compagnie que vous
souhaitez afficher dans la page de visualisation, vous pouvez utiliser cet
identifiant pour récupérer les données de cet animal de compagnie à l'aide de la
fonction `getPetById` que vous avez créée précédemment.

Voici comment vous pouvez procéder :

1. Importez le fichier `src/functions.php` dans votre fichier `public/view.php`
   en utilisant la directive `require_once` avec la construction `__DIR__` pour
   garantir que le chemin est correct.
2. Utilisez la fonction `getPetById($petId)` en lui passant l'identifiant de
   l'animal de compagnie que vous avez récupéré depuis l'URL pour obtenir les
   données de cet animal de compagnie.
3. Stockez les données de l'animal de compagnie dans une variable `$pet` que
   vous pourrez ensuite utiliser pour afficher les détails de cet animal de
   compagnie dans la page de visualisation.

Ainsi, vous pourrez afficher les détails de l'animal de compagnie dans la page
de visualisation en utilisant les données récupérées à l'aide de la fonction
`getPetById`.

### Afficher les détails de l'animal de compagnie

Maintenant que vous avez récupéré les données de l'animal de compagnie dans la
variable `$pet`, vous pouvez les afficher dans la page de visualisation.

Pour cela, affichez les différentes propriétés de l'animal de compagnie de la
manière suivante :

- Un titre de niveau 1 (`<h1>`) avec le nom de l'animal de compagnie.
- Une liste non ordonnée (`<ul>`) avec les différentes propriétés de l'animal de
  compagnie, telles que :
  - L'espèce.
  - Le sexe.
  - L'âge.

Vous devriez obtenir une page de visualisation qui affiche les détails de
l'animal de compagnie de manière claire et structurée !

Ainsi, les utilisateur.trices de votre application pourront cliquer sur le
bouton "Voir" dans la page d'accueil pour accéder à une page de visualisation
dédiée à chaque animal de compagnie, où ils pourront voir les détails de cet
animal de compagnie en particulier.

Grâce au menu de navigation, les utilisateur.trices pourront facilement revenir
à la page d'accueil ou naviguer entre les différentes pages de votre
application.

### Gérer le cas où l'animal de compagnie n'est pas trouvé

Il est possible que l'utilisateur.trice accède à la page de visualisation avec
un identifiant d'animal de compagnie qui n'existe pas dans les données ou que le
paramètre `id` ne soit pas présent dans l'URL.

Dans ce cas, il est important de gérer ces cas de manières appropriées pour
éviter d'afficher une page vide ou une erreur.

Pour cela, vous pouvez vérifier si :

1. La variable `$petId` est `null` après avoir récupéré l'identifiant de
   l'animal de compagnie depuis l'URL.
2. La variable `$pet` est `null` après avoir appelé la fonction
   `getPetById($petId)` pour récupérer les données de l'animal de compagnie.

Si `$petId` ou `$pet` sont `null`, cela signifie que l'identifiant de l'animal
ou l'animal de compagnie avec l'identifiant spécifié n'a pas été trouvé dans les
données.

Dans ce cas, vous pouvez afficher un message d'erreur à l'utilisateur.trice pour
lui indiquer que l'animal de compagnie n'a pas été trouvé ou rediriger
l'utilisateur.trice vers une page d'erreur dédiée.

Nous allons utiliser la seconde approche pour gérer ce cas, en redirigeant
l'utilisateur.trice vers la page d'accueil si l'animal de compagnie n'est pas
trouvé.

Pour rediriger l'utilisateur.trice vers la page d'accueil, vous pouvez utiliser
la fonction `header()` (documentation officielle :
<https://www.php.net/manual/fr/function.header.php>) de PHP pour envoyer une
redirection HTTP vers la page d'accueil.

Pour cela, ajoutez le code suivant dans votre page de visualisation après avoir
vérifié si `$pet` est `null` :

```php
if ($petId === null) {
    header('Location: ./index.php');
    exit;
}

$pet = getPetById($petId);

if ($pet === null) {
    header('Location: ./index.php');
    exit;
}
```

Ici, la fonction `header('Location: ./index.php')` envoie une redirection HTTP
vers la page d'accueil (`index.php`), et la fonction `exit` est utilisée pour
arrêter l'exécution du script après avoir envoyé la redirection. Cela garantit
que le reste du code de la page de visualisation ne sera pas exécuté si l'animal
de compagnie n'est pas trouvé.

### Tester la page de visualisation

Ouvrez votre navigateur et accédez à la page d'accueil de votre mini-projet.
Cliquez sur le bouton "Voir" pour l'un des animaux de compagnie pour accéder à
la page de visualisation dédiée à cet animal.

Vérifiez que les détails de l'animal de compagnie sont affichés correctement
dans la page de visualisation, en utilisant les données récupérées à l'aide de
la fonction `getPetById`.

Testez également le cas où vous accédez à la page de visualisation avec un
identifiant d'animal de compagnie qui n'existe pas dans les données (par
exemple, en modifiant l'URL pour inclure un identifiant qui n'existe pas) et en
accédant à la page de visualisation sans inclure de paramètre `id` dans l'URL.

Vérifiez que vous êtes redirigé vers la page d'accueil dans ces deux cas.

Normalement, vous devriez maintenant avoir une page de visualisation
fonctionnelle, bravo !

### Sauvegarder et effectuer un commit Git

Sauvegardez tous les fichiers et effectuez un commit Git pour enregistrer cette
étape de développement dans l'historique Git de votre projet avec le message de
commit "Création de la page de visualisation" et poussez ce commit sur le dépôt
distant.

## Conclusion

Dans cette seconde session, vous avez appris à créer des fonctions en PHP pour
manipuler des animaux de compagnie de façon fictive.

Ces fonctions, dans un fichier `functions.php` séparé, ont été importées et
utilisées dans un fichier `index.php` afin de garder une structure de projet
propre.

Les données des animaux de compagnie ont été déplacées dans un fichier
`data.php` séparé, ce qui permet de mieux organiser les données et de les rendre
plus facilement accessibles à travers les fonctions que vous avez créées.

Cela nous permettra de réutiliser ces fonctions dans d'autres parties de notre
projet dans les prochaines séances.

Lors de la prochaine séance, nous allons continuer à développer notre projet en
créant des formulaires HTML pour ajouter de nouveaux animaux de compagnie et en
validant les données saisies par les utilisateur.trices.

## Solution

> [!NOTE]
>
> La solution est fournie à titre indicatif uniquement. Il est fortement
> recommandé de développer votre propre version du mini-projet avant de
> consulter la solution.

La solution du mini-projet est accessible dans un dépôt GitHub dédié à l'adresse
suivante :
<https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course-mini-project-solution/tree/session-3>.

Afin d'utiliser cette solution de manière efficace pour votre apprentissage,
nous vous recommandons de suivre les étapes suivantes :

1. Essayez de développer votre propre version du mini-projet en suivant les
   instructions et les étapes décrites dans ce contenu avant de consulter la
   solution. Cela vous permettra de mettre en pratique les concepts et les
   compétences que vous avez appris et de mieux comprendre les différentes
   étapes du développement d'une application PHP.
2. Clonez le dépôt GitHub de la solution localement sur votre ordinateur en
   utilisant la commande `git clone` avec l'URL du dépôt de la solution.
3. Récupérez la dernière version du dépôt de la solution en utilisant les
   commandes `git checkout main` et `git pull` pour vous assurer d'avoir la
   version la plus récente de la solution.
4. Accédez à la version spécifique de la solution correspondant à la séance en
   utilisant la commande `git checkout` avec le commit ou le tag correspondant à
   la séance (par exemple, `git checkout session-1`).
5. Explorez le code de la solution pour comprendre comment les différentes
   fonctionnalités ont été implémentées et comment les concepts appris ont été
   appliqués dans la solution.
6. Comparez votre propre version du mini-projet avec la solution pour identifier
   les différences et les similitudes, et pour comprendre les différentes
   approches possibles pour résoudre les problèmes rencontrés lors du
   développement de votre application PHP.

## Aller plus loin

> [!TIP]
>
> Cette section est optionnelle.
>
> Vous pouvez y revenir si vous avez du temps ou si vous souhaitez approfondir
> vos connaissances après avoir terminé les exercices et le mini-projet.

- Seriez-vous capable de trier les animaux de compagnie par ordre alphabétique
  de leur nom directement dans la fonction ?
- Seriez-vous capable de trier les animaux de compagnie par ordre
  croissant/décroissant de leur âge directement dans la fonction ?
- Seriez-vous capable de créer une page d'erreur dédiée pour le cas où un animal
  de compagnie n'est pas trouvé dans la page de visualisation, au lieu de
  rediriger vers la page d'accueil ?

<!-- URLs -->

[licence]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md
