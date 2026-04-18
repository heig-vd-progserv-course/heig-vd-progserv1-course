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
2.

Par exemple, vous pouvez ajouter un lien "Voir les détails" pour chaque animal
de compagnie qui redirige vers une page `public/pet.php?id=ID_DE_L_ANIMAL`, où
`ID_DE_L_ANIMAL` est l'identifiant unique de l'animal de compagnie.

### Créer la page de visualisation

Créez un fichier `public/pet.php` qui sera la page de visualisation pour un
animal de compagnie. Dans ce fichier, importez les fonctions depuis
`src/functions.php` et utilisez la fonction `getPetById(int $id)` pour récupérer
les données de l'animal de compagnie correspondant à l'identifiant passé en
paramètre dans l'URL. Affichez ensuite les détails de l'animal de compagnie sur
cette page.

### Récupérer l'identifiant de l'animal de compagnie depuis l'URL

### Utiliser la fonction `getPetById` dans la page de visualisation

### Afficher les détails de l'animal de compagnie

### Gérer le cas où l'animal de compagnie n'est pas trouvé

### Tester la page de visualisation

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
  de leur nom ?
- Seriez-vous capable de trier les animaux de compagnie par ordre
  croissant/décroissant de leur âge ?
- Seriez-vous capable de

<!-- URLs -->

[licence]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md
