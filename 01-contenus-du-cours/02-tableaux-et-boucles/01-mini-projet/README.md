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
- [Ouvrir son environnement de développement](#ouvrir-son-environnement-de-développement)
- [Utiliser des tableaux et des boucles sur la page d'accueil](#utiliser-des-tableaux-et-des-boucles-sur-la-page-daccueil)
  - [Identifier les informations communes à toutes les tâches](#identifier-les-informations-communes-à-toutes-les-tâches)
  - [Définir une structure de données pour les tâches](#définir-une-structure-de-données-pour-les-tâches)
  - [Créer plusieurs tableaux associatifs représentant les tâches](#créer-plusieurs-tableaux-associatifs-représentant-les-tâches)
  - [Utiliser les tableaux associatifs dans le code HTML](#utiliser-les-tableaux-associatifs-dans-le-code-html)
  - [Mettre en place un tableau de tâches](#mettre-en-place-un-tableau-de-tâches)
  - [Utiliser une boucle pour parcourir le tableau de tâches](#utiliser-une-boucle-pour-parcourir-le-tableau-de-tâches)
  - [Ajouter une nouvelle tâche](#ajouter-une-nouvelle-tâche)
  - [Gérer le cas d'un tableau de tâches vide](#gérer-le-cas-dun-tableau-de-tâches-vide)
  - [Harmoniser le tableau de tâches](#harmoniser-le-tableau-de-tâches)
- [Utiliser un tableau sur la page de visualisation d'une tâche](#utiliser-un-tableau-sur-la-page-de-visualisation-dune-tâche)
- [Conclusion](#conclusion)
- [Solution](#solution)

## Objectifs

Lors de la séance précédente, vous avez mis en place un environnement de
développement pour PHP et vous avez créé les pages de base pour gérer une
collection de tâches.

Vous avez peut-être remarqué que les informations sur les tâches sont écrites en
dur dans le code HTML des pages `index.php` et `view.php`.

Dans cette séance, nous allons utiliser les tableaux et les boucles mises à
disposition pour rendre nos pages dynamiques.

Une page dynamique est une page dont le contenu est généré automatiquement à
partir d'une source de données unique, plutôt que d'être écrit en dur dans le
code HTML.

De plus, nous allons profiter de cette séance pour mettre en place un suivi de
version avec Git, afin de pouvoir sauvegarder notre travail au fil du temps.

À l'issue de cette séance, les personnes qui étudient devraient avoir pu :

- Définir des tâches à l'aide d'un tableau associatif.
- Utiliser des tables HTML pour afficher des données des tâches.
- Utiliser des boucles pour parcourir un tableau multidimensionnel et afficher
  les informations sur chaque tâche.
- Gérer le cas d'un tableau de tâches vide.
- Appliquer un suivi de version avec Git pour sauvegarder le travail au fil du
  temps.

## Ouvrir son environnement de développement

Avant de commencer le mini-projet, assurez-vous d'avoir votre projet ouvert dans
votre éditeur de code, et d'avoir votre terminal ouvert à la racine de votre
projet.

> [!NOTE]
>
> Si besoin, consultez le fichier `README.md` de votre projet pour retrouver les
> instructions pour ouvrir votre projet dans votre éditeur de code et pour
> ouvrir un terminal à la racine de votre projet.

Lancez ensuite le serveur web Apache pour pouvoir accéder à votre application
dans votre navigateur.

Une fois que le serveur web Apache est lancé, vous devriez pouvoir accéder à
votre application dans votre navigateur à l'adresse suivante :
<http://localhost:8080>.

Ouvrez un second terminal (en plus du premier ou à côté du premier) et
assurez-vous d'être à la racine de votre projet. Ce second terminal nous servira
à utiliser Git pour suivre les différentes étapes de développement de
l'application.

Cette configuration de votre environnement de développement vous permettra de
développer votre application tout en ayant un suivi clair de vos différentes
étapes de développement grâce à Git.

## Utiliser des tableaux et des boucles sur la page d'accueil

Dans cette section, nous allons utiliser des tableaux et des boucles pour rendre
la page d'accueil de notre application dynamique, permettant d'afficher les
informations sur les tâches à partir d'une source de données unique.

### Identifier les informations communes à toutes les tâches

Si l'on se réfère à la page `index.php`, on peut identifier qu'il y a plusieurs
blocs de code HTML qui se répètent pour chaque tâche, et que ces blocs de code
contiennent sensiblement les mêmes informations pour chaque tâche :

```php
<article>
    <h2>Exemple de tâche 1</h2>

    <p>
        <span class="badge badge-contrast">Personnel</span>
        <span class="badge badge-primary">Haute</span>
        <span class="badge badge-secondary">2027-01-24</span>
    </p>

    <p>Description de la tâche 1.</p>

    <footer>
        <a class="btn btn-primary btn-sm" href="./view.php">
            Visualiser la tâche
        </a>
    </footer>
</article>

<article>
    <h2>Exemple de tâche 2</h2>

    <p>
        <span class="badge badge-contrast">Autre</span>
        <span class="badge badge-primary">Moyenne</span>
        <span class="badge badge-secondary">2027-04-01</span>
    </p>

    <footer>
        <a class="btn btn-primary btn-sm" href="./view.php">
            Visualiser la tâche
        </a>
    </footer>
</article>

<article>
    <h2>Exemple de tâche 3</h2>

    <p>
        <span class="badge badge-contrast">Personnel</span>
        <span class="badge badge-primary">Haute</span>
        <span class="badge badge-secondary">2027-10-10</span>
    </p>

    <p>Description de la tâche 3.</p>

    <footer>
        <a class="btn btn-primary btn-sm" href="./view.php">
            Visualiser la tâche
        </a>
    </footer>
</article>

<article>
    <h2>Exemple de tâche 4</h2>

    <p>
        <span class="badge badge-contrast">Travail</span>
        <span class="badge badge-primary">Basse</span>
    </p>

    <footer>
        <a class="btn btn-primary btn-sm" href="./view.php">
            Visualiser la tâche
        </a>
    </footer>
</article>
```

Nous pouvons identifier les informations suivantes qui se répètent pour chaque
tâche :

- Le titre de la tâche.
- La description de la tâche.
- Les badges de la tâche qui représentent la catégorie, la priorité et la date
  butoire pour réaliser la tâche.
- Le lien pour visualiser la tâche.

Par contre, nous pouvons également identifier que certaines informations ne sont
pas présentes pour toutes les tâches, comme par exemple la description ou encore
la date butoire pour réaliser la tâche.

Plutôt que de répéter ces informations pour chaque tâche, nous allons utiliser
un tableau associatif pour stocker ces informations dans une seule source de
données, et nous allons utiliser une boucle pour parcourir ce tableau associatif
et afficher les informations sur chaque tâche dans le code HTML.

### Définir une structure de données pour les tâches

Afin de pouvoir stocker les informations sur les tâches dans une seule source de
données, nous allons définir un tableau `$tasks` dans le fichier `index.php`
pour stocker les informations sur les tâches.

PHP propose plusieurs types de tableaux et nous allons exploiter plusieurs types
de tableaux pour stocker les informations sur les tâches.

Pour commencer, identifions les informations que nous voulons stocker pour
chaque tâche :

- Un identifiant unique pour chaque tâche.
- Un titre pour chaque tâche.
- Un type de tâche (ex. : personnel, travail, autre).
- Une priorité pour chaque tâche (ex. : haute, moyenne, basse).
- Une description pour chaque tâche (optionnelle).
- Une date butoire pour réaliser la tâche (optionnelle).

Pour conserver ces informations, nous allons utiliser un tableau associatif pour
représenter une seule tâche.

Ainsi, nous pourrons stocker les informations de la première tâche dans un
tableau associatif `$task1` comme suit :

```php
// Fichier `mini-projet/public/index.php`
const APP_NAME = "Liste de tâches de";
const APP_AUTHOR = "Ludovic";

$task1 = [
    'id' => 1,
    'title' => 'Exemple de tâche 1',
    'type' => 'Personnel',
    'priority' => 'Haute',
    'description' => 'Description de la tâche 1.',
    'deadline' => '2027-01-24',
];
```

Les clés du tableau associatif représentent les informations que nous voulons
stocker pour chaque tâche, et les valeurs associées à ces clés représentent les
informations spécifiques à la tâche.

Le choix des noms des clés du tableau associatif est complètement arbitraire.
Par exemple, nous aurions pu utiliser les noms de clés suivants pour représenter
les mêmes informations :

```php
<?php
$task1 = [
    'identifiant' => 1,
    'titre' => 'Exemple de tâche 1',
    'categorie' => 'Personnel',
    'priorite' => 'Haute',
    'description' => 'Description de la tâche 1.',
    'date_butoire' => '2027-01-24',
];
```

Il est important de choisir des noms de clés qui sont clairs et explicites pour
représenter les informations que nous voulons stocker pour chaque tâche, afin de
faciliter la lecture et la compréhension du code.

Afin de sauvegarder le travail effectué jusqu'à présent, nous allons créer un
commit Git pour enregistrer l'état actuel de notre projet. Dans le terminal, à
la racine de votre projet, exécutez les commandes suivantes :

```bash
# Ajouter les modifications à Git
git add .

# Créer un commit avec un message décrivant les modifications
git commit -m "Définir un tableau associatif pour représenter une tâche"

# Pousser les modifications vers le dépôt distant
git push
```

Vos modifications locales sont maintenant sauvegardées dans votre dépôt Git et
vous pouvez continuer à travailler sur votre projet en toute sécurité. De plus,
les modifications locales ont été poussées vers le dépôt distant, ce qui permet
de les partager avec d'autres personnes travaillant sur le même projet ou
d'avoir une sauvegarde en ligne de votre travail.

### Créer plusieurs tableaux associatifs représentant les tâches

Répétons cette opération pour les autres tâches, en changeant les valeurs des
clés pour chaque tâche :

```php
$task2 = [
    'id' => 2,
    'title' => 'Exemple de tâche 2',
    'type' => 'Autre',
    'priority' => 'Moyenne',
    'description' => null,
    'deadline' => '2027-04-01',
];

$task3 = [
    'id' => 3,
    'title' => 'Exemple de tâche 3',
    'type' => 'Personnel',
    'priority' => 'Haute',
    'description' => 'Description de la tâche 3.',
    'deadline' => '2027-10-10',
];

$task4 = [
    'id' => 4,
    'title' => 'Exemple de tâche 4',
    'type' => 'Travail',
    'priority' => 'Basse',
];
```

Notez également que certaines informations sont optionnelles, comme la
description ou la date butoire pour réaliser la tâche. Dans ce cas, nous pouvons
utiliser la valeur `null` pour représenter l'absence de valeur pour ces
informations ou simplement ne pas inclure ces clés dans le tableau associatif.

Afin de sauvegarder le travail effectué jusqu'à présent, nous allons créer un
commit Git pour enregistrer l'état actuel de notre projet. Dans le terminal, à
la racine de votre projet, exécutez les commandes suivantes :

```bash
# Ajouter les modifications à Git
git add .

# Créer un commit avec un message décrivant les modifications
git commit -m "Créer plusieurs tableaux associatifs représentant les tâches"

# Pousser les modifications vers le dépôt distant
git push
```

Vos modifications locales sont maintenant sauvegardées dans votre dépôt Git et
vous pouvez continuer à travailler sur votre projet en toute sécurité. De plus,
les modifications locales ont été poussées vers le dépôt distant, ce qui permet
de les partager avec d'autres personnes travaillant sur le même projet ou
d'avoir une sauvegarde en ligne de votre travail.

### Utiliser les tableaux associatifs dans le code HTML

Maintenant que nous avons ces quatre tableaux associatifs représentant les
quatre tâches, nous pouvons les remplacer dans le code HTML de la page
`index.php` pour utiliser ces valeurs :

> [!TIP]
>
> Pour rappel, cet affichage est appelé un "diff" et il permet de visualiser les
> différences entre deux versions d'un fichier.
>
> Les lignes précédées d'un signe `-` représentent les lignes supprimées, et les
> lignes précédées d'un signe `+` représentent les lignes ajoutées.

```diff
diff --git a/mini-projet/public/index.php b/mini-projet/public/index.php
index 79dcfba..5b16cbc 100644
--- a/mini-projet/public/index.php
+++ b/mini-projet/public/index.php
@@ -75,15 +75,15 @@ $task4 = [
         <p>Cette application web permet de gérer une liste de tâches pour <?= APP_AUTHOR; ?>. Vous pouvez créer, visualiser, modifier et supprimer des tâches.</p>

         <article>
-            <h2>Exemple de tâche 1</h2>
+            <h2><?= $task1['title']; ?></h2>

             <p>
-                <span class="badge badge-contrast">Personnel</span>
-                <span class="badge badge-primary">Haute</span>
-                <span class="badge badge-secondary">2027-01-24</span>
+                <span class="badge badge-contrast"><?= $task1['type']; ?></span>
+                <span class="badge badge-primary"><?= $task1['priority']; ?></span>
+                <span class="badge badge-secondary"><?= $task1['deadline']; ?></span>
             </p>

-            <p>Description de la tâche 1.</p>
+            <p><?= $task1['description']; ?></p>

             <footer>
                 <a class="btn btn-primary btn-sm" href="./view.php">
@@ -93,12 +93,12 @@ $task4 = [
         </article>

         <article>
-            <h2>Exemple de tâche 2</h2>
+            <h2><?= $task2['title']; ?></h2>

             <p>
-                <span class="badge badge-contrast">Autre</span>
-                <span class="badge badge-primary">Moyenne</span>
-                <span class="badge badge-secondary">2027-04-01</span>
+                <span class="badge badge-contrast"><?= $task2['type']; ?></span>
+                <span class="badge badge-primary"><?= $task2['priority']; ?></span>
+                <span class="badge badge-secondary"><?= $task2['deadline']; ?></span>
             </p>

             <footer>
@@ -109,15 +109,15 @@ $task4 = [
         </article>

         <article>
-            <h2>Exemple de tâche 3</h2>
+            <h2><?= $task3['title']; ?></h2>

             <p>
-                <span class="badge badge-contrast">Personnel</span>
-                <span class="badge badge-primary">Haute</span>
-                <span class="badge badge-secondary">2027-10-10</span>
+                <span class="badge badge-contrast"><?= $task3['type']; ?></span>
+                <span class="badge badge-primary"><?= $task3['priority']; ?></span>
+                <span class="badge badge-secondary"><?= $task3['deadline']; ?></span>
             </p>

-            <p>Description de la tâche 3.</p>
+            <p><?= $task3['description']; ?></p>

             <footer>
                 <a class="btn btn-primary btn-sm" href="./view.php">
@@ -127,15 +127,13 @@ $task4 = [
         </article>

         <article>
-            <h2>Exemple de tâche 4</h2>
+            <h2><?= $task4['title']; ?></h2>

             <p>
-                <span class="badge badge-contrast">Travail</span>
-                <span class="badge badge-primary">Basse</span>
+                <span class="badge badge-contrast"><?= $task4['type']; ?></span>
+                <span class="badge badge-primary"><?= $task4['priority']; ?></span>
             </p>
```

Sauvegardez ensuite le fichier `index.php` et accédez à la page d'accueil de
votre application dans votre navigateur à l'adresse suivante :
<http://localhost:8080/mini-projet/index.php>. Vous devriez voir les
informations sur les tâches s'afficher dynamiquement à partir des tableaux
associatifs que nous avons définis.

Si vous changez les valeurs dans les tableaux associatifs `$task1`, `$task2`,
`$task3`, et `$task4`, vous verrez que les informations affichées sur la page
d'accueil se mettront à jour automatiquement sans avoir à modifier le code HTML.

Afin de sauvegarder le travail effectué jusqu'à présent, nous allons créer un
commit Git pour enregistrer l'état actuel de notre projet. Dans le terminal, à
la racine de votre projet, exécutez les commandes suivantes :

```bash
# Ajouter les modifications à Git
git add .

# Créer un commit avec un message décrivant les modifications
git commit -m "Utiliser les tableaux associatifs dans le code HTML"

# Pousser les modifications vers le dépôt distant
git push
```

Vos modifications locales sont maintenant sauvegardées dans votre dépôt Git et
vous pouvez continuer à travailler sur votre projet en toute sécurité. De plus,
les modifications locales ont été poussées vers le dépôt distant, ce qui permet
de les partager avec d'autres personnes travaillant sur le même projet ou
d'avoir une sauvegarde en ligne de votre travail.

### Mettre en place un tableau de tâches

Avoir les tâches dans des tableaux associatifs est une bonne première étape,
mais nous pouvons aller plus loin en regroupant toutes les tâches dans un seul
tableau. Cela nous permettra de parcourir toutes les tâches avec une seule
boucle, plutôt que d'avoir à répéter le code pour chaque tâche.

Pour cela, nous allons créer un tableau `$tasks` qui contiendra tous les
tableaux associatifs représentant les tâches. Voici comment nous pouvons le
faire :

```php
$tasks = [
    $task1,
    $task2,
    $task3,
    $task4,
];
```

Ici, nous avons donc un tableau indexé `$tasks` qui contient quatre éléments,
chacun étant un tableau associatif représentant une tâche.

Il s'agit d'un tableau multidimensionnel (car il contient des tableaux à
l'intérieur d'un autre tableau) indexé contenant des tableaux associatifs. Cela
nous permettra de parcourir toutes les tâches avec une seule boucle.

Afin de sauvegarder le travail effectué jusqu'à présent, nous allons créer un
commit Git pour enregistrer l'état actuel de notre projet. Dans le terminal, à
la racine de votre projet, exécutez les commandes suivantes :

```bash
# Ajouter les modifications à Git
git add .

# Créer un commit avec un message décrivant les modifications
git commit -m "Définir un tableau associatif pour représenter la liste de tâches"

# Pousser les modifications vers le dépôt distant
git push
```

Vos modifications locales sont maintenant sauvegardées dans votre dépôt Git et
vous pouvez continuer à travailler sur votre projet en toute sécurité. De plus,
les modifications locales ont été poussées vers le dépôt distant, ce qui permet
de les partager avec d'autres personnes travaillant sur le même projet ou
d'avoir une sauvegarde en ligne de votre travail.

### Utiliser une boucle pour parcourir le tableau de tâches

Maintenant que nous avons notre tableau `$tasks`, nous pouvons utiliser une
boucle `foreach` pour parcourir toutes les tâches et afficher leurs informations
dans le code HTML.

```diff
diff --git a/mini-projet/public/index.php b/mini-projet/public/index.php
index 1c91aa2..cadcb5f 100644
--- a/mini-projet/public/index.php
+++ b/mini-projet/public/index.php
@@ -81,72 +81,29 @@ $tasks = [

         <p>Cette application web permet de gérer une liste de tâches pour <?= APP_AUTHOR; ?>. Vous pouvez créer, visualiser, modifier et supprimer des tâches.</p>

-        <article>
-            <h2><?= $task1['title']; ?></h2>
-
-            <p>
-                <span class="badge badge-contrast"><?= $task1['type']; ?></span>
-                <span class="badge badge-primary"><?= $task1['priority']; ?></span>
-                <span class="badge badge-secondary"><?= $task1['deadline']; ?></span>
-            </p>
-
-            <p><?= $task1['description']; ?></p>
-
-            <footer>
-                <a class="btn btn-primary btn-sm" href="./view.php">
-                    Visualiser la tâche
-                </a>
-            </footer>
-        </article>
-
-        <article>
-            <h2><?= $task2['title']; ?></h2>
-
-            <p>
-                <span class="badge badge-contrast"><?= $task2['type']; ?></span>
-                <span class="badge badge-primary"><?= $task2['priority']; ?></span>
-                <span class="badge badge-secondary"><?= $task2['deadline']; ?></span>
-            </p>
-
-            <footer>
-                <a class="btn btn-primary btn-sm" href="./view.php">
-                    Visualiser la tâche
-                </a>
-            </footer>
-        </article>
-
-        <article>
-            <h2><?= $task3['title']; ?></h2>
-
-            <p>
-                <span class="badge badge-contrast"><?= $task3['type']; ?></span>
-                <span class="badge badge-primary"><?= $task3['priority']; ?></span>
-                <span class="badge badge-secondary"><?= $task3['deadline']; ?></span>
-            </p>
-
-            <p><?= $task3['description']; ?></p>
-
-            <footer>
-                <a class="btn btn-primary btn-sm" href="./view.php">
-                    Visualiser la tâche
-                </a>
-            </footer>
-        </article>
-
-        <article>
-            <h2><?= $task4['title']; ?></h2>
-
-            <p>
-                <span class="badge badge-contrast"><?= $task4['type']; ?></span>
-                <span class="badge badge-primary"><?= $task4['priority']; ?></span>
-            </p>
-
-            <footer>
-                <a class="btn btn-primary btn-sm" href="./view.php">
-                    Visualiser la tâche
-                </a>
-            </footer>
-        </article>
+        <?php foreach ($tasks as $task) { ?>
+            <article>
+                <h2><?= $task['title'] ?></h2>
+
+                <p>
+                    <span class="badge badge-contrast"><?= $task['type'] ?></span>
+                    <span class="badge badge-primary"><?= $task['priority'] ?></span>
+                    <?php if (!empty($task['deadline'])) { ?>
+                        <span class="badge badge-secondary"><?= $task['deadline'] ?></s
pan>
+                    <?php } ?>
+                </p>
+
+                <?php if (!empty($task['description'])) { ?>
+                    <p><?= $task['description'] ?></p>
+                <?php } ?>
+
+                <footer>
+                    <a class="btn btn-primary btn-sm" href="./view.php">
+                        Visualiser la tâche
+                    </a>
+                </footer>
+            </article>
+        <?php } ?>
     </main>
     <footer>
         <center>
```

Que pouvons-nous observer dans ce code ?

Toutes les tâches sont maintenant affichées dynamiquement à partir du tableau
`$tasks` et de la boucle `foreach` que nous avons définis.

Grâce à la boucle `foreach`, nous n'avons plus besoin de répéter le code HTML
pour chaque tâche. La boucle parcourt chaque élément du tableau `$tasks`, et
pour chaque tâche, elle affiche les informations correspondantes.

Si les informations ne sont pas présentes pour une tâche (comme la description
ou la date butoire), nous utilisons une condition `if` avec la fonction
`!empty()` pour vérifier si ces informations existent avant de les afficher.
Cela permet d'éviter d'afficher des éléments vides dans le code HTML.

Nous reviendrons sur les fonctions lors du prochain cours, mais pour l'instant,
il est important de comprendre que la fonction `empty()` permet de vérifier si
une variable est vide ou non. Si la variable n'est pas vide (à l'aide de
l'inversation `!`), le code à l'intérieur du bloc `if` sera exécuté.

Sauvegardez ensuite le fichier `index.php` et accédez à la page d'accueil de
votre application dans votre navigateur à l'adresse suivante :
<http://localhost:8080/mini-projet/index.php>. Vous devriez voir les
informations sur les tâches s'afficher dynamiquement à partir du tableau
`$tasks` et de la boucle `foreach` que nous avons définis.

Modifiez les valeurs dans le tableau `$tasks` et vous verrez que les
informations affichées sur la page d'accueil se mettront à jour automatiquement
sans avoir à modifier le code HTML.

Afin de sauvegarder le travail effectué jusqu'à présent, nous allons créer un
commit Git pour enregistrer l'état actuel de notre projet. Dans le terminal, à
la racine de votre projet, exécutez les commandes suivantes :

```bash
# Ajouter les modifications à Git
git add .

# Créer un commit avec un message décrivant les modifications
git commit -m "Utiliser une boucle pour parcourir le tableau de tâches"

# Pousser les modifications vers le dépôt distant
git push
```

Vos modifications locales sont maintenant sauvegardées dans votre dépôt Git et
vous pouvez continuer à travailler sur votre projet en toute sécurité. De plus,
les modifications locales ont été poussées vers le dépôt distant, ce qui permet
de les partager avec d'autres personnes travaillant sur le même projet ou
d'avoir une sauvegarde en ligne de votre travail.

### Ajouter une nouvelle tâche

Maintenant que nous avons mis en place un tableau `$tasks` pour stocker les
informations sur les tâches, nous pouvons facilement ajouter une nouvelle tâche
à notre application.

Pour ajouter une nouvelle tâche, il suffit de créer un nouveau tableau
associatif représentant la tâche et de l'ajouter au tableau `$tasks`. Par
exemple, pour ajouter une cinquième tâche, nous pouvons faire ceci :

```php
$task5 = [
    'id' => 5,
    'title' => 'Exemple de tâche 5',
    'type' => 'Travail',
    'priority' => 'Moyenne',
    'description' => 'Description de la tâche 5.',
    'deadline' => '2027-12-31',
];
```

Puis mettre à jour le tableau `$tasks` pour inclure cette nouvelle tâche :

```php
$tasks = [
    $task1,
    $task2,
    $task3,
    $task4,
    $task5,
];
```

Sauvegardez ensuite le fichier `index.php` et accédez à la page d'accueil de
votre application dans votre navigateur à l'adresse suivante :
<http://localhost:8080/mini-projet/index.php>. Vous devriez voir la nouvelle
tâche s'afficher dynamiquement avec les autres tâches.

Afin de sauvegarder le travail effectué jusqu'à présent, nous allons créer un
commit Git pour enregistrer l'état actuel de notre projet. Dans le terminal, à
la racine de votre projet, exécutez les commandes suivantes :

```bash
# Ajouter les modifications à Git
git add .

# Créer un commit avec un message décrivant les modifications
git commit -m "Ajouter une nouvelle tâche au tableau de tâches"

# Pousser les modifications vers le dépôt distant
git push
```

Vos modifications locales sont maintenant sauvegardées dans votre dépôt Git et
vous pouvez continuer à travailler sur votre projet en toute sécurité. De plus,
les modifications locales ont été poussées vers le dépôt distant, ce qui permet
de les partager avec d'autres personnes travaillant sur le même projet ou
d'avoir une sauvegarde en ligne de votre travail.

### Gérer le cas d'un tableau de tâches vide

Imaginons maintenant que nous n'avons pas de tâches à afficher sur la page
d'accueil.

Pour ilustrer ce cas, nous allons temporairement vider le tableau `$tasks` en le
remplaçant par un tableau vide :

```php
$tasks = [];
```

Sauvegardez ensuite le fichier `index.php` et accédez à la page d'accueil de
votre application dans votre navigateur à l'adresse suivante :
<http://localhost:8080/mini-projet/index.php>. Vous devriez voir que la page
d'accueil ne contient plus aucune tâche à afficher.

Cela peut être problématique pour l'utilisateur·trice, car la personne ne sait
pas s'il n'y a vraiment aucune tâche à afficher ou si c'est un problème
technique qui empêche l'affichage des tâches.

Pour cela, nous pouvons utiliser une condition `if` avec la fonction `empty()`
pour vérifier si le tableau `$tasks` est vide ou non avant d'afficher les
tâches. Si le tableau est vide, nous pouvons afficher un message informant
l'utilisateur·trice qu'il n'y a aucune tâche à afficher. Si le tableau n'est pas
vide, nous pouvons afficher les tâches comme nous l'avons fait précédemment.

Remplacez l'entièreté de la boucle `foreach` qui affiche les tâches par le code
suivant :

```php
<?php if (empty($tasks)) { ?>
    <p><em>Aucune tâche n'a été trouvée.</em></p>
<?php } else { ?>
    <?php foreach ($tasks as $task) { ?>
        <article>
            <h2><?= $task['title'] ?></h2>

            <p>
                <span class="badge badge-contrast"><?= $task['type'] ?></span>
                <span class="badge badge-primary"><?= $task['priority'] ?></span>
                <?php if (!empty($task['deadline'])) { ?>
                    <span class="badge badge-secondary"><?= $task['deadline'] ?></span>
                <?php } ?>
            </p>

            <?php if (!empty($task['description'])) { ?>
                <p><?= $task['description'] ?></p>
            <?php } ?>

            <footer>
                <a class="btn btn-primary btn-sm" href="./view.php">
                    Visualiser la tâche
                </a>
            </footer>
        </article>
    <?php } ?>
<?php } ?>
```

Sauvegardez ensuite le fichier `index.php` et accédez à la page d'accueil de
votre application dans votre navigateur à l'adresse suivante :
<http://localhost:8080/mini-projet/index.php>. Vous devriez voir le message
"Aucune tâche n'a été trouvée." s'afficher à la place des tâches.

Si vous remettez le tableau `$tasks` avec des tâches à l'intérieur, vous verrez
que les tâches s'afficheront à nouveau sur la page d'accueil.

Afin de sauvegarder le travail effectué jusqu'à présent, nous allons créer un
commit Git pour enregistrer l'état actuel de notre projet. Dans le terminal, à
la racine de votre projet, exécutez les commandes suivantes :

```bash
# Ajouter les modifications à Git
git add .

# Créer un commit avec un message décrivant les modifications
git commit -m "Gérer le cas d'un tableau de tâches vide"

# Pousser les modifications vers le dépôt distant
git push
```

Vos modifications locales sont maintenant sauvegardées dans votre dépôt Git et
vous pouvez continuer à travailler sur votre projet en toute sécurité. De plus,
les modifications locales ont été poussées vers le dépôt distant, ce qui permet
de les partager avec d'autres personnes travaillant sur le même projet ou
d'avoir une sauvegarde en ligne de votre travail.

### Harmoniser le tableau de tâches

Actuellement, nous avons défini les tâches dans des tableaux associatifs
séparés, puis nous avons regroupé ces tableaux associatifs dans un tableau
indexé `$tasks`. Cela fonctionne, mais ce n'est pas très pratique si nous
voulons ajouter ou modifier des tâches, car nous devons créer un tableau
associatif pour chaque tâche, puis les ajouter au tableau `$tasks`.

Il est plus pratique de définir directement les tâches dans le tableau `$tasks`,
en utilisant des tableaux associatifs pour chaque tâche. Cela nous permet de
définir toutes les tâches dans un seul endroit, et de les modifier ou d'en
ajouter facilement.

Pour cela, nous allons remplacer la définition des tâches dans des tableaux
associatifs séparés par une définition directe des tâches dans le tableau
`$tasks`. Voici comment nous pouvons le faire :

```php
$tasks = [
    [
        'id' => 1,
        'title' => 'Exemple de tâche 1',
        'type' => 'Personnel',
        'priority' => 'Haute',
        'description' => 'Description de la tâche 1.',
        'deadline' => '2027-01-24',
    ],
    [
        'id' => 2,
        'title' => 'Exemple de tâche 2',
        'type' => 'Autre',
        'priority' => 'Moyenne',
        'description' => null,
        'deadline' => '2027-04-01',
    ],
    [
        'id' => 3,
        'title' => 'Exemple de tâche 3',
        'type' => 'Personnel',
        'priority' => 'Haute',
        'description' => 'Description de la tâche 3.',
        'deadline' => '2027-10-10',
    ],
    [
        'id' => 4,
        'title' => 'Exemple de tâche 4',
        'type' => 'Travail',
        'priority' => 'Basse',
    ],
];
```

Ainsi, nous avons toujours un même tableau multidimensionnel indexé `$tasks`
composé de plusieurs tableaux associatifs, mais nous avons défini directement
les tâches dans ce tableau, ce qui est plus pratique pour ajouter ou modifier
des tâches.

Si nous souhaitons ajouter une nouvelle tâche, il nous suffit d'ajouter un
nouveau tableau associatif à la fin du tableau `$tasks`.

Afin de sauvegarder le travail effectué jusqu'à présent, nous allons créer un
commit Git pour enregistrer l'état actuel de notre projet. Dans le terminal, à
la racine de votre projet, exécutez les commandes suivantes :

```bash
# Ajouter les modifications à Git
git add .

# Créer un commit avec un message décrivant les modifications
git commit -m "Harmoniser le tableau de tâches en définissant directement les tâches dans le tableau 'tasks'"

# Pousser les modifications vers le dépôt distant
git push
```

Vos modifications locales sont maintenant sauvegardées dans votre dépôt Git et
vous pouvez continuer à travailler sur votre projet en toute sécurité. De plus,
les modifications locales ont été poussées vers le dépôt distant, ce qui permet
de les partager avec d'autres personnes travaillant sur le même projet ou
d'avoir une sauvegarde en ligne de votre travail.

## Utiliser un tableau sur la page de visualisation d'une tâche

Dans cette section, nous allons utiliser un tableau associatif pour stocker les
informations sur une tâche spécifique dans la page `view.php`, et utiliser ces
informations pour afficher les détails de la tâche.

En réutilisant ce que nous avons appris jusqu'ici, nous pouvons également
utiliser un tableau associatif pour stocker les informations sur une tâche
spécifique dans la page `view.php`, et utiliser ces informations pour afficher
les détails de la tâche.

Utilisez ce que nous avons appris jusqu'ici pour définir un tableau associatif
représentant **une seule et unique tâche** dans le fichier `view.php`, et
utilisez les informations de ce tableau pour afficher les détails de la tâche
dans le code HTML.

Sauvegardez votre travail avec Git et poussez vos modifications vers le dépôt
distant.

<details>
<summary>Exemple de solution pour la page `view.php`</summary>

```diff
diff --git a/mini-projet/public/view.php b/mini-projet/public/view.php
index 9c7d604..94961da 100644
--- a/mini-projet/public/view.php
+++ b/mini-projet/public/view.php
@@ -1,6 +1,15 @@
 <?php
 const APP_NAME = "Liste de tâches de";
 const APP_AUTHOR = "Ludovic";
+
+$task = [
+    'id' => 1,
+    'title' => 'Exemple de tâche 1',
+    'type' => 'Personnel',
+    'priority' => 'Haute',
+    'description' => 'Description de la tâche 1.',
+    'deadline' => '2027-01-24',
+];
 ?>

 <!DOCTYPE html>
@@ -30,21 +39,21 @@ const APP_AUTHOR = "Ludovic";
         <nav aria-label="breadcrumb">
             <ul>
                 <li><a href="./index.php">Accueil</a></li>
-                <li>Exemple de tâche 1</li>
+                <li><?= $task['title'] ?></li>
             </ul>
         </nav>
     </header>
     <main>
         <article>
-            <h1>Exemple de tâche 1</h1>
+            <h1><?= $task['title'] ?></h1>

             <p>
-                <span class="badge badge-contrast">Personnel</span>
-                <span class="badge badge-primary">Haute</span>
-                <span class="badge badge-secondary">2027-01-24</span>
+                <span class="badge badge-contrast"><?= $task['type'] ?></span>
+                <span class="badge badge-primary"><?= $task['priority'] ?></span>
+                <span class="badge badge-secondary"><?= $task['deadline'] ?></span>
             </p>

-            <p>Description de la tâche 1.</p>
+            <p><?= $task['description'] ?></p>
         </article>
     </main>
     <footer>
```

```bash
# Ajouter les modifications à Git
git add .

# Créer un commit avec un message décrivant les modifications
git commit -m "Utiliser un tableau associatif pour stocker les informations sur une tâche spécifique dans la page 'view.php'"

# Pousser les modifications vers le dépôt distant
git push
```

</details>

## Conclusion

Dans cette seconde séance de mini-projet, vous avez appris à manipuler les
tableaux mis à disposition avec PHP, incluant les tableaux indexés, les tableaux
associatifs et les tableaux multi-dimensionnels.

A l'aide des boucles, nous pouvons parcourir ces tableaux et afficher les
informations dans le code HTML.

Ces informations sont affichées grâce à une boucle `foreach` qui parcourt le
tableau `$tasks` et affiche les informations sur chaque tâche dans un article
dédié.

Nous vous invitons maintenant à passer aux exemples de code et aux exercices de
la séance comme indiqué dans le [contenu principal](../README.md).

## Solution

> [!NOTE]
>
> La solution est fournie à titre indicatif uniquement. Il est fortement
> recommandé de développer votre propre version du mini-projet avant de
> consulter la solution.

La solution du mini-projet est accessible dans un dépôt GitHub dédié à l'adresse
suivante :
<https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course-mini-project-solution>.

Afin d'utiliser cette solution de manière efficace pour votre apprentissage,
nous vous recommandons de suivre les étapes suivantes :

1. Essayez de développer votre propre version du mini-projet en suivant les
   instructions et les étapes décrites dans ce contenu avant de consulter la
   solution. Cela vous permettra de mettre en pratique les concepts et les
   compétences que vous avez appris et de mieux comprendre les différentes
   étapes du développement d'une application PHP.
2. Clonez le dépôt GitHub de la solution localement sur votre ordinateur en
   utilisant la commande `git clone` avec l'URL du dépôt de la solution.
3. Explorez le code de la solution pour comprendre comment les différentes
   fonctionnalités ont été implémentées et comment les concepts appris ont été
   appliqués dans la solution.
4. Comparez votre propre version du mini-projet avec la solution pour identifier
   les différences et les similitudes, et pour comprendre les différentes
   approches possibles pour résoudre les problèmes rencontrés lors du
   développement de votre application PHP.

<!-- URLs -->

[licence]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md
