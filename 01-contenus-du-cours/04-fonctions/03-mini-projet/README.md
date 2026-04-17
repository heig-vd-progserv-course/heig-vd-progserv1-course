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
- [Adapter la structure du mini-projet](#adapter-la-structure-du-mini-projet)
- [Déplacer les données des animaux de compagnie dans un fichier dédié](#déplacer-les-données-des-animaux-de-compagnie-dans-un-fichier-dédié)
- [Conclusion](#conclusion)
- [Solution](#solution)
- [Aller plus loin](#aller-plus-loin)

## Objectifs

Lors de la séance précédente, vous avez appris à créer des tableaux associatifs
en PHP pour représenter des animaux de compagnie et mis en place la page
d'accueil de votre projet à l'aide de PicoCSS.

Aujourd'hui, nous allons améliorer notre projet en créant des pages et des
fonctions pour visualiser tous les animaux de compagnie ou un animal de
compagnie en particulier.

À l'issue de cette session, les personnes qui étudient devraient avoir pu :

- Créer une page de visualisation pour un animal de compagnie.
- Utiliser des fonctions pour accéder aux données des animaux de compagnie.

## Adapter la structure du mini-projet

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
   - `getAllPets()`: Cette fonction retourne le tableau contenant tous les
     animaux de compagnie.
   - `getPetById(int $id)`: Cette fonction prendra un identifiant d'animal de
     compagnie en paramètre et retournera les données de l'animal correspondant
     à cet identifiant.

## Conclusion

Dans cette seconde session, vous avez appris à créer des fonctions en PHP pour
manipuler des animaux de compagnie de façon fictive.

Ces fonctions, dans un fichier `functions.php` séparé, ont été importées et
utilisées dans un fichier `index.php` afin de garder une structure de projet
propre. Cela nous permettra de réutiliser ces fonctions dans d'autres parties de
notre projet.

Dans la prochaine session, nous verrons comment utiliser ces fonctions pour
manipuler les animaux de compagnie de façon plus réaliste à l'aide de tableaux.

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
3. Récupérez la dernière version du dépôt de la solution en utilisant la
   commande `git pull` pour vous assurer d'avoir la version la plus récente de
   la solution.
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

-

<!-- URLs -->

[licence]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md
