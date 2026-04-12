# Tableaux et boucles - Mini-projet

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
- [Préparer son environnement de développement](#préparer-son-environnement-de-développement)
- [Créer la page d'accueil](#créer-la-page-daccueil)
  - [Créer le fichier `index.php`](#créer-le-fichier-indexphp)
  - [Définir la structure du fichier `index.php`](#définir-la-structure-du-fichier-indexphp)
  - [Créer la collection d'animaux de compagnie](#créer-la-collection-danimaux-de-compagnie)
  - [Afficher les en-têtes du tableau des animaux de compagnie](#afficher-les-en-têtes-du-tableau-des-animaux-de-compagnie)
  - [Afficher les lignes du tableau des animaux de compagnie](#afficher-les-lignes-du-tableau-des-animaux-de-compagnie)
  - [Visualiser le résultat dans le navigateur](#visualiser-le-résultat-dans-le-navigateur)
- [Améliorer la page d'accueil](#améliorer-la-page-daccueil)
  - [Ajouter PicoCSS](#ajouter-picocss)
  - [Ajouter un menu de navigation dans la page d'accueil](#ajouter-un-menu-de-navigation-dans-la-page-daccueil)
  - [Ajouter un pied de page dans la page d'accueil](#ajouter-un-pied-de-page-dans-la-page-daccueil)
  - [Ajouter un logo à la page d'accueil](#ajouter-un-logo-à-la-page-daccueil)
- [Tester la page d'accueil](#tester-la-page-daccueil)
- [Conclusion](#conclusion)
- [Solution](#solution)
- [Aller plus loin](#aller-plus-loin)

## Objectifs

Lors de la séance précédente, vous avez mis en place un environnement de
développement pour PHP.

Dans cette séance, nous allons commencer à développer une application web pour
gérer une collection d'animaux de compagnie.

À terme, cette application vous permettra de créer, lire, mettre à jour et
supprimer des animaux de compagnie, et d'afficher la liste de tous les animaux
de compagnie dans un tableau HTML.

Aujourd'hui, nous allons nous concentrer sur la création d'un tableau associatif
pour stocker les animaux de compagnie, et sur l'affichage de ce tableau dans un
tableau HTML dans la page d'accueil de l'application.

Nous allons profiter d'utiliser Git pour suivre les différentes étapes de
développement de l'application.

À l'issue de cette séance, les personnes qui étudient devraient avoir pu :

- Créer une page d'accueil pour l'application de gestion d'animaux de compagnie.
- Utiliser des styles CSS pour améliorer l'apparence de la page d'accueil.
- Définir des animaux de compagnie à l'aide d'un tableau associatif.
- Utiliser des tables HTML pour afficher des données des animaux de compagnie.
- Utiliser des boucles pour parcourir un tableau associatif et afficher les
  informations sur chaque animal de compagnie.

## Préparer son environnement de développement

Avant de commencer le mini-projet, assurez-vous d'avoir votre projet ouvert dans
votre éditeur de code, et d'avoir votre terminal ouvert à la racine de votre
projet.

Lancez ensuite le serveur de développement pour pouvoir accéder à votre
application dans votre navigateur.

Si vous ne vous souvenez plus de comment faire, vous pouvez vous référer au
fichier `README.md` de votre projet afin de retrouver les instructions pour
lancer le serveur de développement.

Une fois que le serveur de développement est lancé, vous devriez pouvoir accéder
à votre application dans votre navigateur à l'adresse suivante :
<http://localhost:8080>. La page d'accueil de votre application devrait
s'afficher.

Ouvrez un second terminal (en plus du premier ou à côté du premier) et
assurez-vous d'être à la racine de votre projet. Ce second terminal nous servira
à utiliser Git pour suivre les différentes étapes de développement de
l'application.

Cette configuration de votre environnement de développement vous permettra de
développer votre application tout en ayant un suivi clair de vos différentes
étapes de développement grâce à Git.

## Créer la page d'accueil

Dans cette section, nous allons créer la première version de la page d'accueil
de l'application de gestion d'animaux de compagnie.

### Créer le fichier `index.php`

Actuellement, vous devriez avoir la structure de fichiers suivante dans votre
projet :

```text
./
├── exercices/
│   └── index.php
├── exception.php
├── index.php
└── phpinfo.php
```

Afin d'initialiser le mini-projet, nous allons créer un nouveau dossier
`mini-projet/` à la racine de notre projet, et y créer un fichier `index.php`
qui servira de page d'accueil pour notre application de gestion d'animaux de
compagnie.

Votre structure de fichiers devrait ressembler à ceci :

```text
./
├── exercices/
│   └── index.php
├── mini-projet/
│   └── index.php
├── exception.php
├── index.php
└── phpinfo.php
```

### Définir la structure du fichier `index.php`

Dans le fichier `index.php`, nous allons définir la structure de base d'une page
HTML avec une section `<head>` pour les métadonnées et une section `<body>` pour
le contenu de la page.

Le nom de l'application que nous allons créer s'appellera "ninetendogs" (en
référence à un célèbre jeux vidéo produit par une célèbre entreprise japonaise
en 2005), qui réveillera peut-être quelques souvenirs pour les plus nostalgiques
d'entre nous.

Nous allons donc utiliser ce nom pour le titre de la page et dans la description
de la page.

```php
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Page d'accueil | ninetendogs</title>
    <meta name="description" content="ninetendogs - Gestionnaire d'animaux de compagnie">
</head>

<body>
    <h1>ninetendogs</h1>

    <p>Bienvenue sur ninetendogs, le gestionnaire d'animaux de compagnie !</p>

    <p>Cette application te permet de gérer facilement tes animaux de compagnie.</p>
</body>

</html>
```

Sauvegardez ensuite le fichier `index.php` et accédez à la page d'accueil de
votre application dans votre navigateur à l'adresse suivante :
<http://localhost:8080/mini-projet/index.php>. Vous devriez voir la page
d'accueil de votre application s'afficher.

Une simple page HTML est maintenant créée pour votre application de gestion
d'animaux de compagnie.

Afin de sauvegarder cette première étape, effectuons un commit Git pour
enregistrer cette première itération de la page d'accueil :

Visualisez les fichiers modifiés à l'aide de la commande `git status` :

```bash
git status
```

Le résultat devrait être similaire à ceci :

```text
On branch main
Your branch is up to date with 'origin/main'.

Untracked files:
  (use "git add <file>..." to include in what will be committed)
        mini-projet/

nothing added to commit but untracked files present (use "git add" to track)
```

En effet, le dossier `mini-projet/` et le fichier `index.php` à l'intérieur de
ce dossier sont considérés comme des fichiers non suivis par Git, car ils n'ont
pas encore été ajoutés à l'index Git.

Ajoutez ces fichiers modifiés à l'index Git :

```bash
git add mini-projet/
```

Vérifiez que les fichiers modifiés sont bien ajoutés à l'index Git :

```bash
git status
```

Le résultat devrait être similaire à ceci :

```text
On branch main
Your branch is up to date with 'origin/main'.

Changes to be committed:
  (use "git restore --staged <file>..." to unstage)
        new file:   mini-projet/index.php
```

Le fichier `index.php` dans le dossier `mini-projet/` est maintenant prêt à être
commité.

Effectuez un commit Git pour enregistrer cette première itération de la page
d'accueil :

```bash
git commit -m "Création de la page d'accueil"
```

Le résultat devrait être similaire à ceci :

```text
[main aaea34b] Page d'accueil créée
 1 file changed, 18 insertions(+)
 create mode 100644 mini-projet/index.php
```

Le fichier `index.php` dans le dossier `mini-projet/` est maintenant commité
dans l'historique Git de votre projet.

Poussez ensuite ce commit sur le dépôt distant pour sauvegarder cette première
itération de la page d'accueil sur le dépôt distant :

```bash
git push
```

Le résultat devrait être similaire à ceci :

```text
Enumerating objects: 5, done.
Counting objects: 100% (5/5), done.
Delta compression using up to 16 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (4/4), 816 bytes | 816.00 KiB/s, done.
Total 4 (delta 1), reused 0 (delta 0), pack-reused 0 (from 0)
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
To github.com:heig-vd-progserv-course-classroom/progserv1-2025-2026-mini-projet-et-exercices-ludelafo.git
   001dff7..aaea34b  main -> main
```

Actualisez ensuite la page de votre dépôt distant sur GitHub pour vérifier que
le commit a bien été poussé et que le fichier `index.php` dans le dossier
`mini-projet/` est bien présent dans l'historique Git de votre projet.

Bravo ! Vous avez créé la première version de la page d'accueil de votre
application de gestion d'animaux de compagnie, et vous avez utilisé Git pour
suivre cette première étape de développement.

Nous allons pouvoir commencer à ajouter du contenu dynamique à cette page dans
les prochaines sections.

### Créer la collection d'animaux de compagnie

Dans cette première version de la page d'accueil, nous allons créer une
collection d'animaux de compagnie à l'aide d'un tableau associatif avec les
propriétés suivantes :

- Identifiant unique.
- Nom.
- Espèce.
- Genre.
- Année de naissance.

Pour cela, nous allons créer un tableau associatif en début du fichier
`mini-projet/index.php` pour stocker les informations sur les animaux de
compagnie. Ce tableau associatif contiendra des informations sur cinq animaux de
compagnie différents :

- Rex, un chien mâle né le 18 janvier 2015 (ID 1).
- Caramel, un chat femelle né le 28 avril 2020 (ID 2).
- Tweety, un oiseau femelle né le 15 juillet 2023 (ID 3).
- Nemo, un poisson mâle né le 12 mai 2025 (ID 4).
- Godzilla, un lézard mâle né le 30 novembre 2018 (ID 5).

Aidez-vous du code de départ suivant pour créer ce tableau associatif dans le
fichier `mini-projet/index.php` :

```php
<?php
$pets = [
    // Les animaux de compagnie sont à définir ici
];

?>

<!DOCTYPE html>
<html lang="fr">

<!-- Le reste du code HTML de la page d'accueil -->
```

Vous devriez maintenant avoir un tableau associatif `$pets` défini dans le
fichier `mini-projet/index.php` pour stocker les informations sur les animaux de
compagnie.

En suivant les mêmes étapes que précédemment, sauvegardez tous les fichiers et
effectuez un commit Git pour enregistrer cette étape de développement dans
l'historique Git de votre projet avec le message de commit "Création de la
collection d'animaux de compagnie".

Vous devriez maintenant avoir un tableau associatif `$pets` défini dans le
fichier `mini-projet/index.php` pour stocker les informations sur les animaux de
compagnie.

### Afficher les en-têtes du tableau des animaux de compagnie

Maintenant que nous avons créé un tableau associatif pour stocker les
informations sur les animaux de compagnie, nous allons pouvoir afficher les
informations sur ces animaux de compagnie dans la page d'accueil.

Pour cela, nous allons utiliser un tableau HTML pour afficher les informations
sur les animaux de compagnie.

En vous aidant de la documentation disponible sur MDN pour créer un tableau HTML
: <https://developer.mozilla.org/fr/docs/Web/HTML/Element/table>, créez un
tableau HTML dans la section `<body>` de votre fichier `index.php` pour afficher
les informations sur les animaux de compagnie.

Nous allons créer un tableau HTML avec les colonnes suivantes :

- Nom.
- Espèce.
- Genre.
- Année de naissance.

Commencez par créer la structure de base du tableau HTML avec les en-têtes de
colonnes en utilisant le code de départ suivant :

```php
    <!-- Le reste du code HTML de la page d'accueil -->

    <p>Cette application te permet de gérer facilement tes animaux de compagnie.</p>

    <h2>Liste des animaux de compagnie</h2>

    <table>
        <!-- Les en-têtes de colonnes et corps du tableau sont à définir ici -->
    </table>
```

Nous utiliserons ensuite les données des animaux de compagnie dans les
prochaines sections pour remplir les lignes du tableau HTML.

En suivant les mêmes étapes que précédemment, sauvegardez tous les fichiers et
effectuez un commit Git pour enregistrer cette étape de développement dans
l'historique Git de votre projet avec le message de commit "Création de la
table".

Vous devriez maintenant voir un tableau HTML avec les en-têtes de colonnes
affichées dans la page d'accueil de votre application.

### Afficher les lignes du tableau des animaux de compagnie

Maintenant que nous avons créé la structure de base du tableau HTML avec les
en-têtes de colonnes, nous allons pouvoir remplir les lignes du tableau HTML
avec les informations sur les animaux de compagnie.

Pour cela, nous allons utiliser une boucle pour parcourir le tableau associatif
`$pets` et afficher les informations sur chaque animal de compagnie dans une
ligne du tableau HTML.

En vous aidant de la documentation disponible sur MDN pour créer un tableau HTML
: <https://developer.mozilla.org/fr/docs/Web/HTML/Element/table>, utilisez une
boucle pour parcourir le tableau associatif `$pets` et afficher les informations
sur chaque animal de compagnie dans une ligne du tableau HTML.

Nous recommandons d'utiliser une boucle `foreach` pour parcourir le tableau
associatif `$pets` et afficher les informations sur chaque animal de compagnie
dans une ligne du tableau HTML.

En suivant les mêmes étapes que précédemment, sauvegardez tous les fichiers et
effectuez un commit Git pour enregistrer cette étape de développement dans
l'historique Git de votre projet avec le message de commit "Ajout des lignes au
tableau".

Vous devriez maintenant voir un tableau HTML avec les informations sur les
animaux de compagnie affichées dans la page d'accueil de votre application.

### Visualiser le résultat dans le navigateur

Afin de visualiser le résultat dans le navigateur, accédez à la page d'accueil
de votre application à l'adresse suivante :
<http://localhost:8080/mini-projet/index.php>.

Vous devriez voir un tableau HTML avec les informations sur les animaux de
compagnie affichées dans la page d'accueil de votre application.

Afin de faciliter l'accès à la page d'accueil de votre application, vous pouvez
ajouter un lien vers cette page dans le fichier `index.php` à la racine de votre
projet :

```php
    <ul>
        <li>Accéder aux <a href="./exercices/index.php">exercices</a>.</li>
       <!-- Le lien vers la page d'accueil de l'application de gestion d'animaux de compagnie est ajouté ici -->
        <li>Accéder à la page de <a href="./phpinfo.php">configuration de PHP</a>.</li>
        <li>Tester la gestion des exceptions avec le fichier <a href="./exception.php">exception.php</a>.</li>
    </ul>
```

En suivant les mêmes étapes que précédemment, sauvegardez tous les fichiers et
effectuez un commit Git pour enregistrer cette étape de développement dans
l'historique Git de votre projet avec le message de commit "Ajout du lien vers
la page d'accueil de l'application".

## Améliorer la page d'accueil

Dans l'état actuel, la page d'accueil de votre application de gestion d'animaux
de compagnie affiche un tableau HTML avec les informations sur les animaux de
compagnie, mais cette page n'a pas de styles CSS appliqués et rend sa lecture
difficile.

Dans cette section, nous allons améliorer l'affichage de la page en ajoutant des
styles CSS pour le rendre plus agréable à lire.

### Ajouter PicoCSS

Vous pourriez personnaliser l'apparence de votre page web en utilisant les
styles la balise `<head>` ou en incluant un fichier CSS externe à l'aide de la
balise `<link>`.

Cependant, cela peut être fastidieux et prendre du temps, surtout si vous n'êtes
pas familier.e avec le CSS.

Comme les styles CSS ne sont pas le cœur de ce cours, nous n'allons pas réaliser
d'interfaces complètes avec du CSS personnalisé.

A la place, nous allons utiliser un framework CSS léger - appelé
[PicoCSS](https://picocss.com/) - pour ajouter des styles de base à nos pages
web sans avoir à écrire beaucoup de CSS personnalisé.

Pour utiliser PicoCSS dans votre projet PHP, nous allons mettre à jour le
fichier `mini-projet/index.php` avec le contenu suivant :

```php
<?php
$pets = [
    // Les animaux de compagnie sont à définir ici
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

    <title>Page d'accueil | ninetendogs</title>
    <meta name="description" content="ninetendogs - Gestionnaire d'animaux de compagnie">
</head>

<body class="container">
    <main>
        <h1>ninetendogs</h1>

        <p>Bienvenue sur ninetendogs, le gestionnaire d'animaux de compagnie !</p>

        <p>Cette application te permet de gérer facilement tes animaux de compagnie.</p>

        <h2>Liste des animaux de compagnie</h2>

        <div class="overflow-auto">
            <table class="striped">
                <!-- Les en-têtes de colonnes et corps du tableau sont à définir ici -->
            </table>
        </div>
    </main>
</body>

</html>
```

Ici, nous avons ajouté une balise `<link>` dans la section `<head>` pour inclure
les styles CSS de PicoCSS.

Nous avons ensuite ajouté la classe `container` à la balise `<body>` pour
appliquer les styles de conteneur de PicoCSS (source :
<https://picocss.com/docs/container>).

Ces instructions (issues de la documentation officielle
<https://picocss.com/docs>) permettent d'ajouter rapidement des styles de base à
votre page d'accueil sans avoir à écrire beaucoup de CSS personnalisé.

De plus, nous avons ajouté les classes `overflow-auto` et `striped` pour
appliquer des styles spécifiques au tableau HTML que nous avons créé
précédemment. La première classe permet d'ajouter une barre de défilement
horizontale au tableau si son contenu dépasse la largeur de la page
(responsive). La seconde classe ajoute un style rayé aux lignes du tableau pour
améliorer la lisibilité.

Grâce à PicoCSS, nous avons pu (grandement) améliorer l'apparence de la page
d'accueil de notre application de gestion d'animaux de compagnie sans avoir à
écrire beaucoup de CSS personnalisé. Pour les futures pages de notre
application, nous pourrons nous concentrer sur le contenu et la logique métier
sans nous soucier de l'apparence, car les styles de base seront déjà appliqués
grâce à PicoCSS.

En suivant les mêmes étapes que précédemment, sauvegardez tous les fichiers et
effectuez un commit Git pour enregistrer cette étape de développement dans
l'historique Git de votre projet avec le message de commit "Ajout de PicoCSS".

Vous devriez maintenant voir une page d'accueil avec des styles de base
appliqués grâce à PicoCSS, ce qui rend la lecture de la page plus agréable.

### Ajouter un menu de navigation dans la page d'accueil

Grâce à PicoCSS, nous pouvons facilement ajouter un menu de navigation à notre
page d'accueil pour faciliter la navigation entre les différentes (futures)
pages de notre application.

Pour cela, nous allons ajouter une balise `<nav>` dans la section `<main>` de
notre fichier `index.php` pour créer un menu de navigation.

Voici un exemple de code pour ajouter un menu de navigation dans la page
d'accueil :

```php
<?php
$pets = [
    // Les animaux de compagnie sont à définir ici
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

    <title>Page d'accueil | ninetendogs</title>
    <meta name="description" content="ninetendogs - Gestionnaire d'animaux de compagnie">
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
    </header>
    <main>
        <h1>ninetendogs</h1>

        <p>Bienvenue sur ninetendogs, le gestionnaire d'animaux de compagnie !</p>

        <p>Cette application te permet de gérer facilement tes animaux de compagnie.</p>

        <h2>Liste des animaux de compagnie</h2>

        <div class="overflow-auto">
            <table class="striped">
                <!-- Les en-têtes de colonnes et corps du tableau sont à définir ici -->
            </table>
        </div>
    </main>
</body>

</html>
```

En suivant les mêmes étapes que précédemment, sauvegardez tous les fichiers et
effectuez un commit Git pour enregistrer cette étape de développement dans
l'historique Git de votre projet avec le message de commit "Ajout du menu de
navigation".

Vous devriez maintenant voir un menu de navigation dans la page d'accueil de
votre application, ce qui facilitera la navigation entre les différentes
(futures) pages de votre application.

### Ajouter un pied de page dans la page d'accueil

Pour ajouter un pied de page à la page d'accueil de votre application de gestion
d'animaux de compagnie, vous pouvez utiliser la balise `<footer>` dans la
section `<body>` de votre fichier `index.php` pour créer un pied de page.

Voici un exemple de code pour ajouter un pied de page dans la page d'accueil :

```php
<?php
$pets = [
    // Les animaux de compagnie sont à définir ici
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

    <title>Page d'accueil | ninetendogs</title>
    <meta name="description" content="ninetendogs - Gestionnaire d'animaux de compagnie">
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
    </header>
    <main>
        <h1>ninetendogs</h1>

        <p>Bienvenue sur ninetendogs, le gestionnaire d'animaux de compagnie !</p>

        <p>Cette application te permet de gérer facilement tes animaux de compagnie.</p>

        <h2>Liste des animaux de compagnie</h2>

        <div class="overflow-auto">
            <table class="striped">
                <!-- Les en-têtes de colonnes et corps du tableau sont à définir ici -->
            </table>
        </div>
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

### Ajouter un logo à la page d'accueil

Pour rendre la page d'accueil de votre application de gestion d'animaux de
compagnie plus attrayante, vous pouvez ajouter un logo à la page d'accueil.

Pour cela, cette étape doit être réalisée en trois parties :

1. Trouver et ajouter une image de logo dans la structure de votre application.
2. Inclure cette image dans la page d'accueil.
3. Ajouter des styles CSS personnalisés pour améliorer l'affichage du logo.

#### Trouver et ajouter une image de logo dans la structure de votre application

Vous pouvez trouver une image de logo pour votre application de gestion
d'animaux de compagnie en effectuant une recherche d'images sur Internet, ou en
créant votre propre logo à l'aide d'un outil de création graphique.

Nous vous proposons d'utiliser le logo suivant pour votre application de gestion
d'animaux de compagnie :
<https://unsplash.com/illustrations/a-cartoon-orange-cat-with-a-long-tail-Mgi4xVhDZAQ>.

Ce logo peut être utilisé librement dans votre projet. La personne qui a créé ce
logo est
[Public domain vectors](https://unsplash.com/@publicdomainvectors/illustrations)
sur [Unsplash](https://unsplash.com/).

Téléchargez ce logo au format SVG et ajoutez-le dans un dossier `images/` à la
racine de votre mini-projet (dans le dossier `mini-projet/`), de manière à ce
que la structure de votre projet ressemble à ceci :

```text
mini-projet/
├── images
│   └── logo.svg
└── index.php
```

En suivant les mêmes étapes que précédemment, sauvegardez tous les fichiers et
effectuez un commit Git pour enregistrer cette étape de développement dans
l'historique Git de votre projet avec le message de commit "Ajout du logo à la
structure de fichier".

#### Inclure cette image dans la page d'accueil

Pour inclure cette image dans la page d'accueil, vous pouvez utiliser la balise
`<img>` dans la section `<main>` de votre fichier `index.php` pour afficher le
logo.

Voici un exemple de code pour inclure le logo dans la page d'accueil :

```php
<?php
$pets = [
    // Les animaux de compagnie sont à définir ici
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

    <title>Page d'accueil | ninetendogs</title>
    <meta name="description" content="ninetendogs - Gestionnaire d'animaux de compagnie">
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
    </header>
    <main>
        <center>
            <div class="logo">
                <img src="./images/logo.svg" alt="ninetendogs logo">
            </div>

            <h1>ninetendogs</h1>
        </center>

        <p>Bienvenue sur ninetendogs, le gestionnaire d'animaux de compagnie !</p>

        <p>Cette application te permet de gérer facilement tes animaux de compagnie.</p>

        <h2>Liste des animaux de compagnie</h2>

        <div class="overflow-auto">
            <table class="striped">
                <!-- Les en-têtes de colonnes et corps du tableau sont à définir ici -->
            </table>
        </div>
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

Sauvegardez tous les fichiers et effectuez un commit Git pour enregistrer cette
étape de développement dans l'historique Git de votre projet avec le message de
commit "Ajout du logo à la page d'accueil".

Vous devriez maintenant voir le logo affiché dans la page d'accueil de votre
application de gestion d'animaux de compagnie.

#### Ajouter des styles CSS personnalisés pour améliorer l'affichage du logo

Sans doute que cette image de logo n'est pas parfaitement adaptée à l'affichage
dans la page d'accueil de votre application de gestion d'animaux de compagnie,
et que vous souhaitez ajuster sa taille ou son positionnement pour améliorer
l'apparence de la page d'accueil.

Pour cela, nous allons ajouter un style CSS personnalisé dans la section
`<head>` de votre fichier `index.php` pour ajuster l'apparence du logo.

Commençons par créer un dossier `css/` à la racine de votre mini-projet, et y
créer un fichier `styles.css` pour stocker les styles CSS personnalisés de votre
application :

```text
mini-projet/
├── css
│   └── styles.css
├── images
│   └── logo.svg
└── index.php
```

Ensuite, ajoutez un lien vers ce fichier CSS personnalisé dans la section
`<head>` de votre fichier `index.php` :

```php
    <link rel="stylesheet" href="./css/styles.css">
```

Enfin, ajoutez les styles CSS suivants dans le fichier `css/styles.css` pour
ajuster l'apparence du logo dans la page d'accueil :

```css
/* Classe personnalisée pour le logo */
.logo {
	margin-bottom: 10px;
	width: 200px;
	padding: 20px;
	border-radius: 100%;
	background-color: #0172ad;
}
```

La classe `logo` est déjà utilisée dans la balise `<div>` qui enveloppe l'image
du logo dans le fichier `index.php`, ce qui permet d'appliquer ces styles CSS
personnalisés à l'image du logo.

En suivant les mêmes étapes que précédemment, sauvegardez tous les fichiers et
effectuez un commit Git pour enregistrer cette étape de développement dans
l'historique Git de votre projet avec le message de commit "Ajout de styles CSS
personnalisés pour le logo".

Vous devriez maintenant voir le logo affiché dans la page d'accueil de votre
application de gestion d'animaux de compagnie avec les styles CSS personnalisés
appliqués, ce qui améliore l'apparence de la page d'accueil.

## Tester la page d'accueil

Afin de tester la page d'accueil de votre application de gestion d'animaux de
compagnie, accédez à la page d'accueil de votre application à l'adresse suivante
: <http://localhost:8080/mini-projet/index.php>.

Vous devriez voir une page d'accueil avec un menu de navigation, un logo, et un
tableau HTML avec les informations sur les animaux de compagnie affichées dans
la page d'accueil de votre application de gestion d'animaux de compagnie.

Pour tester quelques fonctionnalités de base de votre application, ouvrez les
outils de développement de votre navigateur (généralement accessibles avec la
touche F12 ou en faisant un clic droit sur la page et en sélectionnant
"Inspecter").

Si besoin, les instructions suivantes peuvent vous aider à ouvrir les outils de
développement dans différents navigateurs :

- **Google Chrome** (et autres navigateurs basés sur Chromium, comme Microsoft
  Edge) :
  - Ouvrez le menu (trois points verticaux en haut à droite).
  - Allez dans "Plus d'outils" > "Outils de développement" ou appuyez sur
    <kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>I</kbd> (Windows/Linux) ou
    <kbd>Cmd</kbd>+<kbd>Option</kbd>+<kbd>I</kbd> (Mac).
- **Mozilla Firefox** :
  - Ouvrez le menu (trois lignes horizontales en haut à droite).
  - Allez dans "Développement web" > "Outils de développement" ou appuyez sur
    <kbd>Ctrl</kbd>+<kbd>Shift</kbd>+<kbd>I</kbd> (Windows/Linux) ou
    <kbd>Cmd</kbd>+<kbd>Option</kbd>+<kbd>I</kbd> (Mac).
- **Safari** :
  - Allez dans "Safari" > "Préférences" > "Avancé".
  - Cochez la case "Afficher le menu Développement dans la barre de menus".
  - Allez dans "Développement" > "Afficher l'inspecteur Web" ou appuyez sur
    <kbd>Cmd</kbd>+<kbd>Option</kbd>+<kbd>I</kbd>.

Tester ensuite les fonctionnalités suivantes de votre application de gestion
d'animaux de compagnie :

- Essayez de passer l'application en mode sombre pour vérifier que les styles
  CSS de PicoCSS s'adaptent correctement au thème sombre.
- Essayez de redimensionner la fenêtre du navigateur pour vérifier que les
  styles CSS de PicoCSS s'adaptent correctement à différentes tailles d'écran
  (responsive design).

## Conclusion

Dans cette seconde séance de mini-projet, vous avez appris à manipuler des
tableaux associatifs en PHP.

Vous avez également modifié le code de l'application pour visualiser les animaux
de compagnie dans un tableau HTML avec les informations de base des animaux de
compagnie.

Ces informations sont affichées grâce à une boucle `foreach` qui parcourt le
tableau associatif `$pets` et affiche les informations sur chaque animal de
compagnie dans une ligne du tableau HTML.

La mise en page a été améliorée grâce à l'ajout de styles CSS avec le framework
PicoCSS, ce qui rend la lecture de la page plus agréable.

La page d'accueil est maintenant plus attrayante et servira de base pour les
prochaines étapes de développement de l'application de gestion d'animaux de
compagnie.

## Solution

> [!NOTE]
>
> La solution est fournie à titre indicatif uniquement. Il est fortement
> recommandé de développer votre propre version du mini-projet avant de
> consulter la solution.

La solution du mini-projet est accessible dans un dépôt GitHub dédié à l'adresse
suivante :
<https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course-mini-project-solution/tree/session-2>.

Afin d'utiliser cette solution de manière efficace pour votre apprentissage,
nous vous recommandons de suivre les étapes suivantes :

1. Essayez de développer votre propre version du mini-projet en suivant les
   instructions et les étapes décrites dans ce contenu avant de consulter la
   solution. Cela vous permettra de mettre en pratique les concepts et les
   compétences que vous avez appris et de mieux comprendre les différentes
   étapes du développement d'une application PHP.
2. Clonez le dépôt GitHub de la solution localement sur votre ordinateur en
   utilisant la commande `git clone` avec l'URL du dépôt de la solution.
3. Récupérez la dernière version du dépôt de la solution en utilisant la
   commande `git pull` pour vous assurer d'avoir la version la plus récente de
   la solution.
4. Accédez à la version spécifique de la solution correspondant à la séance en
   utilisant la commande `git checkout` avec le commit ou le tag correspondant à
   la séance 1 (par exemple, `git checkout session-1`).
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

- Êtes-vous capable d'améliorer l'affichage de l'application en ajoutant des
  styles CSS supplémentaires ?
- Êtes-vous capable d'ajouter une fonctionnalité pour trier les animaux de
  compagnie par âge ou par nom ?

<!-- URLs -->

[licence]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md
