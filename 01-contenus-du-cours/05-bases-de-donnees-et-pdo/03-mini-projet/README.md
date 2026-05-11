# Bases de données et PDO - Mini-projet

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
- [Intégrer PDO et créer la base de données](#intégrer-pdo-et-créer-la-base-de-données)
  - [Créer l'issue et la branche pour la tâche à réaliser](#créer-lissue-et-la-branche-pour-la-tâche-à-réaliser)
  - [Créer le fichier `database.php`](#créer-le-fichier-databasephp)
  - [Créer la base de données pour les animaux de compagnie](#créer-la-base-de-données-pour-les-animaux-de-compagnie)
  - [Visualiser le contenu de la base de données](#visualiser-le-contenu-de-la-base-de-données)
  - [Créer, valider et fusionner la pull request](#créer-valider-et-fusionner-la-pull-request)
- [Gérer les animaux de compagnie](#gérer-les-animaux-de-compagnie)
  - [Créer un animal de compagnie dans la base de données](#créer-un-animal-de-compagnie-dans-la-base-de-données)
  - [Visualiser un animal de compagnie spécifique de la base de données](#visualiser-un-animal-de-compagnie-spécifique-de-la-base-de-données)
  - [Visualiser tous les animaux de compagnie de la base de données](#visualiser-tous-les-animaux-de-compagnie-de-la-base-de-données)
  - [Se protéger contre les attaques XSS](#se-protéger-contre-les-attaques-xss)
  - [Supprimer un animal de compagnie de la base de données](#supprimer-un-animal-de-compagnie-de-la-base-de-données)
  - [Éditer un animal de compagnie dans la base de données](#éditer-un-animal-de-compagnie-dans-la-base-de-données)
- [Supprimer les données d'animaux de compagnie créés en dur](#supprimer-les-données-danimaux-de-compagnie-créés-en-dur)
  - [Créer l'issue et la branche pour la tâche à réaliser](#créer-lissue-et-la-branche-pour-la-tâche-à-réaliser-7)
  - [Supprimer les données d'animaux de compagnie créés en dur](#supprimer-les-données-danimaux-de-compagnie-créés-en-dur-1)
  - [Créer, valider et fusionner la pull request](#créer-valider-et-fusionner-la-pull-request-7)
- [Valider que tout est fonctionnel](#valider-que-tout-est-fonctionnel)
- [Conclusion](#conclusion)
- [Solution](#solution)
- [Aller plus loin](#aller-plus-loin)

## Objectifs

Jusqu'à présent, vous avez créé une application PHP composée de plusieurs
fonctionnalités distinctes qui permet de visualiser et créer des animaux de
compagnie au travers d'un formulaire.

Pour le moment, les données de l'application sont fixes et sont définies en dur
dans le code.

Lors de la création d'un animal de compagnie, les données sont stockées en
mémoire. Cela signifie que les données ne sont pas persistées (= conservées) et
que vous perdez toutes les données lorsque vous rechargez la page.

Dans cette séance, vous allez apprendre à persister les données des animaux de
compagnie dans une base de données SQLite à l'aide de PDO (PHP Data Objects).

Cela permettra de stocker les données des animaux de compagnie et de les rendre
disponibles même après le rechargement de la page dans toutes les pages de
l'application.

Pour cela, il sera nécessaire de créer une base de données SQLite avec une table
pour stocker les données des animaux de compagnie. Ensuite, vous pourrez
insérer, récupérer et supprimer des données de cette table.

Vous allez également apprendre à utiliser PDO pour interagir avec la base de
données.

## Intégrer PDO et créer la base de données

Dans cette section, nous allons intégrer PDO dans un projet PHP et créer une
base de données SQLite pour stocker les données des animaux de compagnie.

### Créer l'issue et la branche pour la tâche à réaliser

Afin de continuer à utiliser les bonnes pratiques acquises avec Git et GitHub
dans la séance précédente, créez une nouvelle issue intitulée "Intégration de
PDO et création de la base de données" dans le dépôt GitHub de votre projet pour
suivre la progression de cette tâche.

Créez une branche depuis celle-ci et basculez dessus pour y faire les
modifications nécessaires pour réaliser la tâche.

### Créer le fichier `database.php`

Afin de ne pas mélanger le code de la base de données avec le code de
l'application, nous allons créer un nouveau fichier qui contiendra la connexion
à la base de données. Ce fichier sera inclus dans le fichier `functions.php`
pour que les fonctions puissent y accéder.

Créez un nouveau fichier `database.php` dans le dossier de votre projet.

La structure de votre mini-projet devrait ressembler à ceci :

```text
mini-projet/
├── public/
│   ├── css/
│   │   └── styles.css
│   ├── images/
│   │   └── logo.svg
│   ├── create.php
│   ├── index.php
│   └── view.php
└── src/
    ├── data.php
    ├── database.php
    └── functions.php
```

Ce fichier contiendra la connexion à la base de données SQLite. Il permettra de
se connecter à la base de données et de créer la table pour stocker les données
des animaux de compagnie.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

### Créer la base de données pour les animaux de compagnie

Maintenant que nous avons créé le fichier `database.php`, nous pouvons créer la
base de données SQLite et la table pour stocker les données des animaux de
compagnie.

Pour cela, vous allez utiliser la classe `PDO` pour créer la base de données et
la table.

Complétez le fichier `database.php` avec le code suivant :

```php
<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/../petsmanager.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// On définit la requête SQL pour créer la table `pets` si elle n'existe pas déjà
$sql = "CREATE TABLE IF NOT EXISTS pets (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    species TEXT NOT NULL,
    nickname TEXT,
    sex TEXT NOT NULL,
    birthday DATE NOT NULL,
    color TEXT,
    personalities TEXT,
    size INTEGER,
    weight FLOAT,
    notes TEXT
);";

// On prépare la requête SQL
$stmt = $pdo->prepare($sql);

// On exécute la requête SQL
$stmt->execute();
```

La constante `DATABASE_FILE` contient le chemin vers le fichier de base de
données SQLite. Si le fichier n'existe pas, il sera créé automatiquement. La
notation `__DIR__ . '/../petsmanager.db'` permet de créer le fichier dans le
dossier parent que celui du fichier `database.php`.

Ensuite, nous utilisons la classe `PDO` pour créer une instance de PDO qui se
connecte à la base de données SQLite. La chaîne de connexion `sqlite:` indique
que nous voulons utiliser SQLite comme moteur de base de données.

Nous n'avons pas encore étudié en détail la programmation orientée objet (POO)
en PHP. Pour le moment, il est juste nécessaire de retenir que PDO est une
classe qui permet de se connecter à une base de données et d'exécuter des
requêtes SQL sur celle-ci. Nous étudierons la POO en détail dans un prochain
cours.

Une fois la connexion à la base de données établie, nous définissons une requête
SQL pour créer la table `pets` si elle n'existe pas déjà. La table `pets`
contient les colonnes suivantes :

- `id` : identifiant unique de l'animal (clé primaire, auto-incrémentée).
- `name` : nom de l'animal (obligatoire, de type texte).
- `species` : espèce de l'animal (obligatoire, de type texte).
- `nickname` : surnom de l'animal (facultatif, de type texte).
- `sex` : sexe de l'animal (obligatoire, de type texte).
- `birthday` : date de naissance de l'animal (obligatoire, de type date).
- `color` : couleur de l'animal (facultatif, de type texte).
- `personalities` : personnalités de l'animal (facultatif, de type texte).
- `size` : taille de l'animal (facultatif, de type entier).
- `weight` : poids de l'animal (facultatif, de type réel).
- `notes` : notes sur l'animal (facultatif, de type texte).

C'est cette table qui permettra de stocker les données des animaux de compagnie
dans la base de données.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

Incluez le fichier `database.php` dans le fichier `functions.php` pour que les
fonctions puissent y accéder.

Votre fichier `functions.php` devrait ressembler à ceci :

```diff
diff --git a/mini-projet/src/functions.php b/mini-projet/src/functions.php
index 0fa0b2d..65fbfe7 100644
--- a/mini-projet/src/functions.php
+++ b/mini-projet/src/functions.php
@@ -1,7 +1,7 @@
 <?php
-require_once __DIR__ . '/data.php';
+require_once __DIR__ . '/database.php';

 function getPets(): array {
     global $pets;

     return $pets;
```

Ouvrez votre navigateur et accédez à l'adresse
<http://localhost:8080/mini-projet/public/index.php>.

Une erreur devrait survenir (car nous n'avons pas encore implémenté la logique
pour afficher les animaux de compagnie) mais vous devriez remarquer qu'un
nouveau fichier `petsmanager.db` a été créé dans le dossier de votre projet.

Votre structure de projet devrait ressembler à ceci :

```text
mini-projet/
├── public/
│   ├── css/
│   │   └── styles.css
│   ├── images/
│   │   └── logo.svg
│   ├── create.php
│   ├── index.php
│   └── view.php
├── src/
│   ├── database.php
│   └── functions.php
└── petsmanager.db
```

Notre base de données SQLite et la table a été créée avec succès !

### Visualiser le contenu de la base de données

L'environnement de développement vous a mis à disposition de façon automatique
l'extension SQLite Viewer, permettant de visualiser le contenu de la base de
données.

Pour cela, ouvrez le fichier `petsmanager.db` dans Visual Studio Code. La base
de données devrait s'ouvrir dans un nouvel onglet.

Vous devriez voir une vue de la base de données avec les tables et les données
qu'elle contient. La table `pets` devrait être visible dans la vue de la base de
données. Vous pouvez cliquer sur la table pour voir sa structure et ses données.

Pour rafraîchir la vue de la base de données, vous pouvez cliquer sur l'icône de
rafraîchissement dans la barre d'outils de l'extension SQLite Viewer.

Si à un moment donné vous souhaitez réinitialiser la base de données, vous
pouvez simplement supprimer le fichier `petsmanager.db` et recharger la page
d'accueil. Cela recréera la base de données et la table.

La base de données est maintenant prête à être utilisée. Vous allez maintenant
mettre à jour les fonctions pour gérer les animaux de compagnie dans la base de
données.

### Créer, valider et fusionner la pull request

Si ce n'est pas déjà fait, pensez à commiter et pousser les modifications que
vous avez faites jusqu'à présent. Ensuite, créez une pull request pour que votre
travail puisse être visible par les autres personnes du dépôt de code. Donnez
lui le même nom que l'issue correspondante.

Validez les changements de la pull request et fusionnez-la dans la branche
principale. N'oubliez pas de supprimer la branche associée une fois la pull
request fusionnée.

## Gérer les animaux de compagnie

Dans cette section, nous allons créer/mettre à jour les fonctions pour gérer les
animaux de compagnie dans la base de données.

### Créer un animal de compagnie dans la base de données

Suite au travail effectué dans une des séances précédentes
([Formulaires HTML et validation](../../04-formulaires-html-et-validation/README.md)),
vous avez déjà un formulaire pour créer un nouvel animal de compagnie.

Dans cette section, nous allons créer la fonction `addPet()` pour ajouter un
nouvel animal de compagnie dans la base de données.

Pour cela, vous allez utiliser une requête SQL `INSERT INTO` pour insérer les
données de l'animal de compagnie dans la table `pets`.

#### Créer l'issue et la branche pour la tâche à réaliser

Afin de continuer à utiliser les bonnes pratiques acquises avec Git et GitHub
dans la séance précédente, créez une nouvelle issue intitulée "Création d'un
animal de compagnie dans la base de données" dans le dépôt GitHub de votre
projet pour suivre la progression de cette tâche.

Créez une branche depuis celle-ci et basculez dessus pour y faire les
modifications nécessaires pour réaliser la tâche.

#### Mettre à jour la fonction `addPet()`

Mettez à jour la fonction `addPet()` dans le fichier `functions.php` avec le
code suivant :

```php
diff --git a/mini-projet/src/functions.php b/mini-projet/src/functions.php
index 65fbfe7..96561c0 100644
--- a/mini-projet/src/functions.php
+++ b/mini-projet/src/functions.php
@@ -105,5 +105,81 @@ function validatePet(
         }
     }

     return $errors;
 }
+
+function addPet(
+    string $name,
+    string $species,
+    ?string $nickname,
+    string $sex,
+    ?string $birthday,
+    ?string $color,
+    ?array $personalities,
+    ?string $size,
+    ?string $weight,
+    ?string $notes,
+): ?int {
+    global $pdo;
+
+    $sql = "INSERT INTO pets (
+        name,
+        species,
+        nickname,
+        sex,
+        birthday,
+        color,
+        personalities,
+        size,
+        weight,
+        notes
+    ) VALUES (
+        :name,
+        :species,
+        :nickname,
+        :sex,
+        :birthday,
+        :color,
+        :personalities,
+        :size,
+        :weight,
+        :notes
+    )";
+
+    $stmt = $pdo->prepare($sql);
+
+    if ($personalities) {
+        $personalities = implode(",", $personalities);
+    }
+
+    $stmt->bindValue(':name', $name);
+    $stmt->bindValue(':species', $species);
+    $stmt->bindValue(':nickname', $nickname);
+    $stmt->bindValue(':sex', $sex);
+    $stmt->bindValue(':birthday', $birthday);
+    $stmt->bindValue(':color', $color);
+    $stmt->bindValue(':personalities', $personalities);
+    $stmt->bindValue(':size', $size);
+    $stmt->bindValue(':weight', $weight);
+    $stmt->bindValue(':notes', $notes);
+
+    $stmt->execute();
+
+    // Alternativement, on peut aussi utiliser la syntaxe suivante pour lier les valeurs et exécuter la requête en une seule étape :
+    // $success = $stmt->execute([
+    //     ':name' => $name,
+    //     ':species' => $species,
+    //     ':nickname' => $nickname,
+    //     ':sex' => $sex,
+    //     ':birthday' => $birthday,
+    //     ':color' => $color,
+    //     ':personalities' => $personalities ? implode(",", $personalities) : null,
+    //     ':size' => $size,
+    //     ':weight' => $weight,
+    //     ':notes' => $notes,
+    // ]);
+
+    $lastInsertId = $pdo->lastInsertId();
+
+    return $lastInsertId;
+}
```

Prenez quelques minutes pour lire et comprendre le code de la fonction
`addPet()`.

La fonction `addPet()` permet d'ajouter un nouvel animal de compagnie dans la
base de données. Elle prend en paramètres tous les champs du formulaire d'ajout
d'un animal de compagnie.

Tout comme précédemment, le mot-clé `global` est utilisé pour accéder à la
variable `$pdo` qui contient la connexion à la base de données. Ce mot-clé est
nécessaire car la variable `$pdo` est définie dans le fichier `database.php` et
n'est pas accessible directement dans la fonction `addPet()` sans utiliser le
mot-clé `global`.

La variable `$sql` contient la requête SQL `INSERT INTO` pour insérer un nouvel
animal de compagnie dans la table `pets` avec les valeurs des colonnes. Les
valeurs sont liées aux paramètres de la fonction.

La méthode `execute()` de l'objet `$pdo` est utilisée pour exécuter la requête
SQL et insérer l'animal de compagnie dans la base de données.

La méthode `lastInsertId()` permet de récupérer l'identifiant de l'animal de
compagnie qui vient d'être ajouté. Cet identifiant est retourné par la fonction
`addPet()`.

Cela permet de récupérer l'identifiant automatiquement généré par la base de
données lors de l'insertion de l'animal de compagnie. Cet identifiant peut
ensuite être utilisé pour afficher l'animal de compagnie ou pour effectuer
d'autres opérations sur cet animal.

Vous remarquerez peut-être l'utilisation de la fonction `implode()` (source :
<https://www.php.net/manual/fr/function.implode.php>) pour convertir le tableau
`$personalities` en une chaîne de caractères avant de l'insérer dans la base de
données. En effet, SQLite ne supporte pas les champs de type tableau, il est
donc nécessaire de convertir le tableau en chaîne de caractères avant de
l'insérer dans la base de données.

La fonction `implode()` permet de convertir un tableau en une chaîne de
caractères en utilisant un séparateur. Par exemple, si nous avons un tableau
`$personalities` contenant les valeurs `['gentil', 'joueur']`, nous pouvons le
convertir en chaîne de caractères avec la fonction `implode()` comme ceci :

```php
$personalities = ['gentil', 'playful'];

$personalitiesAsString = implode(',', $personalities);

print_r($personalitiesAsString); // Affiche : gentil,playful
```

Le résultat de la variable `$personalitiesAsString` sera alors la chaîne de
caractères `'gentil,playful'`.

Par la suite, lors de la récupération des données de l'animal de compagnie
depuis la base de données, il sera nécessaire de convertir cette chaîne de
caractères en tableau à l'aide de la fonction `explode()` (source :
<https://www.php.net/manual/fr/function.explode.php>).

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Mettre à jour l'interface utilisateur

Afin de tester la fonction `addPet()`, vous allez mettre à jour le fichier
`create.php` (qui contient le formulaire d'ajout d'un animal de compagnie) afin
d'appeler la fonction `addPet()` lorsque le formulaire est soumis.

Mettez à jour le fichier `create.php` avec le code suivant :

```diff
diff --git a/mini-projet/public/create.php b/mini-projet/public/create.php
index daf8b85..40dafef 100644
--- a/mini-projet/public/create.php
+++ b/mini-projet/public/create.php
@@ -27,17 +27,31 @@ if ($_SERVER["REQUEST_METHOD"] === "POST") {
         $size,
         $weight,
         $notes,
     );

-    // S'il n'y a pas d'erreurs, affiche les données de l'animal de compagnie qui va être ajouté
+    // S'il n'y a pas d'erreurs, ajoute l'animal de compagnie à la base de données
     if (empty($errors)) {
-        // Information de debug : affichage du contenu de la variable $_POST
-        // À supprimer une fois que le formulaire fonctionne correctement
-        echo "Succès ! L'animal de compagnie va être ajouté avec les données suivantes : ";
+        $newPetId = addPet(
+            $name,
+            $species,
+            $nickname ?: null,
+            $sex,
+            $birthday ?: null,
+            $color ?: null,
+            $personalities ?: null,
+            $size ?: null,
+            $weight ?: null,
+            $notes ?: null,
+        );

-        print_r($_POST);
+        if ($newPetId !== null) {
+            header('Location: ./view.php?id=' . $newPetId);
+            exit;
+        } else {
+            $errors = array_push($errors, "Une erreur est survenue lors de l'ajout de l'animal de compagnie.");
+        }
     }
 }
 ?>

 <!DOCTYPE html>
```

Prenez quelques minutes pour lire et comprendre le code de la page `create.php`.

Dans ce code, nous avons mis à jour la logique qui est exécutée lorsque le
formulaire est soumis.

Si aucune erreur de validation n'est détectée, nous appelons la fonction
`addPet()` pour ajouter l'animal de compagnie à la base de données avec les
données du formulaire.

Vous remarquerez peut-être l'utilisation de l'opérateur `?:` (source :
<https://www.php.net/manual/fr/language.operators.comparison.php#language.operators.comparison.coalesce>).
Cet opérateur permet de donner une valeur par défaut à une variable si celle-ci
est vide ou nulle. Par exemple, l'expression `$nickname ?: null` signifie que si
la variable `$nickname` est vide, alors la valeur `null` sera utilisée à la
place.

A la différence de l'opérateur `??`, l'opérateur `?:` gère aussi le cas où la
variable est définie mais contient une valeur vide. En effet, l'opérateur `??`
ne considère que les variables non définies ou nulles comme vides, tandis que
l'opérateur `?:` considère également les variables définies mais contenant des
valeurs vides comme vides. Par exemple, si la variable `$nickname` est définie
mais contient une chaîne de caractères vide `''`, l'opérateur `??` ne la
considérera pas comme vide et utilisera la valeur `''`, tandis que l'opérateur
`?:` la considérera comme vide et utilisera la valeur `null`.

Cela permet d'insérer la valeur `null` dans la base de données pour les champs
facultatifs qui n'ont pas été remplis par l'utilisateur.trice plutôt que
d'insérer une chaîne de caractères vide.

Une fois que l'animal de compagnie a été ajouté à la base de données, nous
redirigeons l'utilisateur.trice vers la page de visualisation de l'animal de
compagnie avec l'identifiant de l'animal de compagnie qui vient d'être ajouté.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Tester la création d'un animal de compagnie

Ouvrez votre navigateur et accédez à l'adresse
<http://localhost:8081/mini-projet/public/create.php>. Vous devriez voir le
formulaire d'ajout d'un animal de compagnie.

Remplissez le formulaire avec les données d'un animal de compagnie et
soumettez-le :

- Nom : _"Mew"_
- Espèce : _"Chat"_
- Surnom : _"Minou"_
- Sexe : _"Mâle"_
- Année de naissance : _"2023-04-13"_
- Couleur : _"Noir"_
- Personnalités : _"Paresseux"_
- Taille : _"23 cm"_
- Poids : _"3 kg"_
- Notes : _"Aime dormir sur le canapé."_

Créez l'animal de compagnie en soumettant le formulaire.

Lors de la redirection vers la page de visualisation de l'animal de compagnie,
une erreur devrait survenir car nous n'avons pas encore implémenté la logique
pour afficher les animaux de compagnie.

Par contre, l'animal que vous venez d'ajouter devrait être ajouté à la base de
données sans erreur. Vous pouvez vérifier que l'animal de compagnie a bien été
ajouté à la base de données en ouvrant le fichier `petsmanager.db` dans Visual
Studio Code et en vérifiant que la table `pets` contient bien l'animal de
compagnie que vous venez d'ajouter.

#### Créer, valider et fusionner la pull request

Si ce n'est pas déjà fait, pensez à commiter et pousser les modifications que
vous avez faites jusqu'à présent. Ensuite, créez une pull request pour que votre
travail puisse être visible par les autres personnes du dépôt de code. Donnez
lui le même nom que l'issue correspondante.

Validez les changements de la pull request et fusionnez-la dans la branche
principale. N'oubliez pas de supprimer la branche associée une fois la pull
request fusionnée.

### Visualiser un animal de compagnie spécifique de la base de données

Suite au travail effectué dans une des séances précédentes
([Fonctions](../../03-fonctions/README.md)), vous avez déjà une page de
visualisation d'un animal de compagnie qui affiche les données d'un animal de
compagnie.

Dans cette section, nous allons mettre à jour la fonction `getPet()` pour
récupérer un animal de compagnie de la base de données.

Pour cela, vous allez utiliser une requête SQL `SELECT` pour récupérer les
données de l'animal de compagnie dans la table `pets`.

#### Créer l'issue et la branche pour la tâche à réaliser

Afin de continuer à utiliser les bonnes pratiques acquises avec Git et GitHub
dans la séance précédente, créez une nouvelle issue intitulée "Visualisation
d'un animal de compagnie de la base de données" dans le dépôt GitHub de votre
projet pour suivre la progression de cette tâche.

Créez une branche depuis celle-ci et basculez dessus pour y faire les
modifications nécessaires pour réaliser la tâche.

#### Mettre à jour la fonction `getPet()`

Mettez à jour la fonction `getPet()` dans le fichier `functions.php` avec le
code suivant :

```diff
diff --git a/mini-projet/src/functions.php b/mini-projet/src/functions.php
index 96561c0..4380e99 100644
--- a/mini-projet/src/functions.php
+++ b/mini-projet/src/functions.php
@@ -6,16 +6,26 @@ function getPets(): array {

     return $pets;
 }

 function getPetById(int $id): ?array {
-    global $pets;
+    global $pdo;
+
+    $stmt = $pdo->prepare("SELECT * FROM pets WHERE id = :id");
+
+    $stmt->bindValue(':id', $id);

-    foreach ($pets as $pet) {
-        if ($pet['id'] === $id) {
-            return $pet;
+    $stmt->execute();
+
+    $pet = $stmt->fetch();
+
+    if ($pet) {
+        if ($pet['personalities']) {
+            $pet['personalities'] = explode(",", $pet['personalities']);
         }
+
+        return $pet;
     }

     return null;
 }
```

Prenez quelques minutes pour lire et comprendre le code de la fonction
`getPetById()`.

La fonction `getPetById()` permet de récupérer un animal de compagnie de la base
de données en fonction de son identifiant. Elle prend en paramètre l'identifiant
de l'animal de compagnie à récupérer.

Tout comme précédemment, le mot-clé `global` est utilisé pour accéder à la
variable `$pdo` qui contient la connexion à la base de données.

La variable `$stmt` contient la requête SQL `SELECT` pour récupérer l'animal de
compagnie avec l'identifiant spécifié dans la table `pets`. La méthode
`prepare()` de l'objet `$pdo` est utilisée pour préparer la requête SQL.

Ensuite, la méthode `bindValue()` est utilisée pour lier la valeur de
l'identifiant à la requête SQL. Cela permet d'éviter les injections SQL et de
sécuriser la requête.

La méthode `execute()` de l'objet `$stmt` est utilisée pour exécuter la requête
SQL et récupérer l'animal de compagnie de la base de données. La méthode
`fetch()` permet de récupérer le résultat de la requête SQL sous forme de
tableau associatif.

Si un animal de compagnie avec l'identifiant spécifié est trouvé, la fonction
vérifie si le champ `personalities` contient une valeur. Si c'est le cas, la
fonction utilise la fonction `explode()` (source :
<https://www.php.net/manual/fr/function.explode.php>) pour convertir la chaîne
de caractères en tableau. Cela est en lien avec la fonction `addPet()` qui
convertit le tableau de personnalités en une chaîne de caractères avant de
l'insérer dans la base de données. Ici, le processus inverse est effectué pour
récupérer les personnalités sous forme de tableau.

Ainsi, en reprenant le même exemple que précédemment, si le champ
`personalities` contient la chaîne de caractères `'gentil,playful'`, la fonction
`explode()` permettra de convertir cette chaîne de caractères en un tableau
`['gentil', 'playful']` :

```php
$personalitiesAsString = 'gentil,playful';

$personalities = explode(',', $personalitiesAsString);

print_r($personalities); // Affiche : Array ( [0] => gentil [1] => playful )
```

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Mettre à jour l'interface utilisateur

Accédez à la page de visualisation d'un animal de compagnie avec le lien
<http://localhost:8081/mini-projet/public/view.php?id=1>.

Une page de visualisation de l'animal de compagnie devrait s'afficher avec les
données de l'animal de compagnie que vous avez ajouté précédemment. Si l'animal
de compagnie s'affiche correctement, cela signifie que la fonction
`getPetById()` fonctionne correctement et que les données de l'animal de
compagnie sont bien récupérées de la base de données.

Actuellement, cette page de visualisation d'un animal de compagnie affiche les
données de base d'un animal, à savoir :

- Nom.
- Espèce.
- Sexe.
- Date de naissance.

En effet, depuis la dernière mise à jour de la fonction `getPetById()`, les
données de l'animal de compagnie sont bien récupérées de la base de données,
mais l'interface utilisateur n'a pas encore été mise à jour pour afficher toutes
les données de l'animal de compagnie.

Vous remarquerez aussi que l'espèce et le sexe de l'animal de compagnie sont
affichés en anglais (par exemple, `dog` au lieu de _"Chien"_).

En effet, les données de l'animal de compagnie en base de données utilisent les
valeurs des champs de saisie du formulaire d'ajout d'un animal de compagnie,
qui, elles, sont décrites en anglais (par exemple, `dog` pour l'espèce et `male`
pour le sexe).

Ainsi, nous allons mettre à jour l'interface utilisateur pour afficher toutes
les données de l'animal de compagnie et pour traduire les valeurs de l'espèce et
du sexe en français.

Afin d'utiliser les noms des espèces et des sexes de notre animal de compagnie
en français dans l'interface utilisateur, nous allons profiter des tableaux
associatifs que nous avions étudiés dans la séance précédente
([Tableaux et boucles](../../02-tableaux-et-boucles/README.md)) pour créer des
tableaux associatifs qui font le lien entre les valeurs en anglais utilisées
dans la base de données et les valeurs en français que nous voulons afficher
dans l'interface utilisateur.

Comme il s'agit de données statiques qui ne changent pas, nous allons les
définir dans un nouveau fichier `constants.php`.

La structure de votre mini-projet devrait ressembler à ceci :

```text
mini-projet/
├── public/
│   ├── css/
│   │   └── styles.css
│   ├── images/
│   │   └── logo.svg
│   ├── create.php
│   ├── index.php
│   └── view.php
├── src/
│   ├── constants.php
│   ├── data.php
│   ├── database.php
│   └── functions.php
└── petsmanager.db
```

Dans le fichier `constants.php`, définissez les tableaux associatifs suivants :

```php
<?php
const PET_SPECIES = [
    'dog' => 'Chien',
    'cat' => 'Chat',
    'lizard' => 'Lézard',
    'snake' => 'Serpent',
    'bird' => 'Oiseau',
    'rabbit' => 'Lapin',
    'other' => 'Autre',
];

const PET_SEXES = [
    'male' => 'Mâle',
    'female' => 'Femelle',
];

const PET_PERSONALITIES = [
    'friendly' => 'Gentil',
    'playful' => 'Joueur',
    'lazy' => 'Paresseux',
    'shy' => 'Timide',
    'curious' => 'Curieux',
    'aggressive' => 'Agressif',
];
```

Ces tableaux associatifs permettent de faire le lien entre les valeurs en
anglais utilisées dans les valeurs des champs de saisies (stockés ensuite dans
la base de données) et les valeurs en français que nous voulons afficher dans
l'interface utilisateur.

Mettez ensuite à jour le fichier `view.php` pour utiliser les tableaux
associatifs définis dans le fichier `constants.php` dans le but d'afficher les
valeurs de l'espèce et du sexe en français :

```diff
diff --git a/mini-projet/public/view.php b/mini-projet/public/view.php
index d4fcb03..f8b1063 100644
--- a/mini-projet/public/view.php
+++ b/mini-projet/public/view.php
@@ -1,6 +1,7 @@
 <?php
+require_once __DIR__ . '/../src/constants.php';
 require_once __DIR__ . '/../src/functions.php';

 $petId = $_GET['id'] ?? null;

 if ($petId === null) {
@@ -51,12 +52,12 @@ if ($pet === null) {
     </header>
     <main>
         <h1><?= $pet['name'] ?></h1>

         <ul>
-            <li><strong>Espèce</strong> : <?= $pet['species'] ?></li>
-            <li><strong>Sexe</strong> : <?= $pet['gender'] ?></li>
+            <li><strong>Espèce</strong> : <?= PET_SPECIES[$pet['species']] ?></li>
+            <li><strong>Sexe</strong> : <?= PET_SEXES[$pet['sex']] ?></li>
             <li><strong>Date de naissance</strong> : <?= $pet['birthday'] ?></li>
         </ul>
     </main>
     <footer>
         <center>
```

Rafraîchissez la page de visualisation de l'animal de compagnie. Les valeurs de
l'espèce et du sexe de l'animal de compagnie devraient maintenant être affichées
en français.

Ajoutons maintenant l'affichage de toutes les autres données de l'animal de
compagnie dans la page de visualisation. Il sera aussi nécessaire d'ajouter
quelques styles CSS pour que l'affichage soit plus agréable.

Mettez à jour le fichier `view.php` pour afficher toutes les données de l'animal
de compagnie :

```diff
diff --git a/mini-projet/public/view.php b/mini-projet/public/view.php
index f8b1063..ee9fb13 100644
--- a/mini-projet/public/view.php
+++ b/mini-projet/public/view.php
@@ -55,10 +55,38 @@ if ($pet === null) {

         <ul>
             <li><strong>Espèce</strong> : <?= PET_SPECIES[$pet['species']] ?></li>
             <li><strong>Sexe</strong> : <?= PET_SEXES[$pet['sex']] ?></li>
             <li><strong>Date de naissance</strong> : <?= $pet['birthday'] ?></li>
+            <?php if ($pet['nickname']) { ?>
+                <li><strong>Surnom</strong> : <?= $pet['nickname'] ?></li>
+            <?php } ?>
+            <?php if ($pet['color']) { ?>
+                <li><strong>Couleur</strong> :
+                    <span class="color-chip" style="background-color: <?= $pet['color'] ?>;"></span>
+                    <?= $pet['color'] ?>
+                </li>
+            <?php } ?>
+            <?php if ($pet['personalities']) { ?>
+                <li>
+                    <strong>Personnalité</strong> :
+                    <ul>
+                        <?php foreach ($pet['personalities'] as $personality) { ?>
+                            <li><?= PET_PERSONALITIES[$personality] ?></li>
+                        <?php } ?>
+                    </ul>
+                </li>
+            <?php } ?>
+            <?php if ($pet['size']) { ?>
+                <li><strong>Taille</strong> : <?= $pet['size'] ?> cm</li>
+            <?php } ?>
+            <?php if ($pet['weight']) { ?>
+                <li><strong>Poids</strong> : <?= $pet['weight'] ?> kg</li>
+            <?php } ?>
+            <?php if ($pet['notes']) { ?>
+                <li><strong>Notes</strong> : <?= nl2br($pet['notes']) ?></li>
+            <?php } ?>
         </ul>
     </main>
     <footer>
         <center>
             <small>
```

Mettez à jour le fichier `styles.css` pour ajouter les styles suivants :

```diff
diff --git a/mini-projet/public/css/styles.css b/mini-projet/public/css/styles.css
index f53cb7f..48234fe 100644
--- a/mini-projet/public/css/styles.css
+++ b/mini-projet/public/css/styles.css
@@ -15,5 +15,16 @@ body {
 }

 main {
 	flex: 1;
 }
+
+/* Styles pour avoir une pastille de couleur pour afficher la couleur de l'animal de compagnie */
+.color-chip {
+	width: 1em;
+	height: 1em;
+	border-radius: 50%;
+	display: inline-block;
+	border: 1px solid #0003;
+	box-shadow: inset 0 0 0 1px #fff4;
+	vertical-align: center;
+}
```

Prenez quelques minutes pour lire et comprendre le code de la page `view.php` et
du fichier `styles.css`.

Dans ce code, nous avons ajouté du code pour afficher toutes les données de
l'animal de compagnie dans la page de visualisation.

Comme certaines données de l'animal de compagnie sont facultatives, nous avons
utilisé des conditions pour vérifier si ces données existent avant de les
afficher. Par exemple, pour afficher le surnom de l'animal de compagnie, nous
avons utilisé la condition `if ($pet['nickname'])` pour vérifier si le champ
`nickname` contient une valeur avant de l'afficher.

Le champ `color` est affiché avec une pastille de couleur grâce à une `span`
avec la classe `color-chip` et un style en ligne pour définir la couleur de fond
de la pastille.

Les personnalités de l'animal de compagnie sont affichées dans une liste à puces
imbriquée. Nous avons utilisé une boucle `foreach` pour parcourir le tableau des
personnalités et afficher chaque personnalité dans une liste à puces à l'aide du
tableau associatif `PET_PERSONALITIES` pour afficher la valeur en français.

La fonction `nl2br()` (source :
<https://www.php.net/manual/fr/function.nl2br.php>) est utilisée pour convertir
les sauts de ligne dans les notes de l'animal de compagnie en balises `<br>`
afin que les sauts de ligne soient correctement affichés dans le navigateur.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Tester la visualisation d'un animal de compagnie

Rafraîchissez la page de visualisation de l'animal de compagnie. Toutes les
données de l'animal de compagnie devraient maintenant être affichées, y compris
les données facultatives qui n'étaient pas affichées auparavant.

Essayez de créer un nouvel animal de compagnie avec différentes données
facultatives remplies ou non remplies, puis vérifiez que la page de
visualisation de cet animal de compagnie affiche correctement les données
facultatives en fonction des valeurs.

#### Créer, valider et fusionner la pull request

Si ce n'est pas déjà fait, pensez à commiter et pousser les modifications que
vous avez faites jusqu'à présent. Ensuite, créez une pull request pour que votre
travail puisse être visible par les autres personnes du dépôt de code. Donnez
lui le même nom que l'issue correspondante.

Validez les changements de la pull request et fusionnez-la dans la branche
principale. N'oubliez pas de supprimer la branche associée une fois la pull
request fusionnée.

### Visualiser tous les animaux de compagnie de la base de données

Suite au travail effectué dans une des séances précédentes
([Fonctions](../../03-fonctions/README.md)), vous avez déjà une page de
visualisation de tous les animaux de compagnie qui affiche les données de tous
les animaux de compagnie.

Dans cette section, nous allons mettre à jour la fonction `getPets()` pour
récupérer les animaux de compagnie de la base de données.

Pour cela, vous allez utiliser une requête SQL `SELECT` pour récupérer les
données des animaux de compagnie dans la table `pets`.

#### Créer l'issue et la branche pour la tâche à réaliser

Afin de continuer à utiliser les bonnes pratiques acquises avec Git et GitHub
dans la séance précédente, créez une nouvelle issue intitulée "Visualisation de
tous les animaux de compagnie de la base de données" dans le dépôt GitHub de
votre projet pour suivre la progression de cette tâche.

Créez une branche depuis celle-ci et basculez dessus pour y faire les
modifications nécessaires pour réaliser la tâche.

#### Mettre à jour la fonction `getPets()`

Mettez à jour la fonction `getPets()` dans le fichier `functions.php` avec le
code suivant :

```diff
diff --git a/mini-projet/src/functions.php b/mini-projet/src/functions.php
index 4380e99..a8df88e 100644
--- a/mini-projet/src/functions.php
+++ b/mini-projet/src/functions.php
@@ -1,10 +1,24 @@
 <?php
 require_once __DIR__ . '/database.php';

 function getPets(): array {
-    global $pets;
+    global $pdo;
+
+    $sql = "SELECT * FROM pets ORDER BY name ASC";
+
+    $stmt = $pdo->prepare($sql);
+
+    $stmt->execute();
+
+    $pets = $stmt->fetchAll();
+
+    foreach ($pets as &$pet) {
+        if ($pet['personalities']) {
+            $pet['personalities'] = explode(",", $pet['personalities']);
+        }
+    }

     return $pets;
 }

 function getPetById(int $id): ?array {
```

Prenez quelques minutes pour lire et comprendre le code de la fonction
`getPets()`.

La fonction `getPets()` permet de récupérer tous les animaux de compagnie de la
base de données. Elle n'a pas de paramètre.

Tout comme précédemment, le mot-clé `global` est utilisé pour accéder à la
variable `$pdo` qui contient la connexion à la base de données.

La variable `$sql` contient la requête SQL `SELECT` pour récupérer tous les
animaux de compagnie de la table `pets` triés par ordre alphabétique du nom
grâce à la clause `ORDER BY name ASC`.

La méthode `prepare()` de l'objet `$pdo` est utilisée pour préparer la requête
SQL.

Ensuite, la méthode `execute()` de l'objet `$stmt` est utilisée pour exécuter la
requête SQL et récupérer les animaux de compagnie de la base de données. La
méthode `fetchAll()` permet de récupérer le résultat de la requête SQL sous
forme de tableau associatif.

Une boucle `foreach` permet de parcourir le tableau des animaux de compagnie les
uns après les autres.

Comme pour la fonction `getPetById()`, la fonction `getPets()` vérifie si le
champ `personalities` contient une valeur pour chaque animal de compagnie. Si
c'est le cas, la fonction utilise la fonction `explode()` pour convertir la
chaîne de caractères en tableau.

Vous remarquerez peut-être que cette boucle utilise une référence `&` pour
modifier directement les éléments du tableau `$pets`. Comme présenté dans le
contenu [Fonctions](../../03-fonctions/README.md), une référence permet de faire
en sorte que les modifications apportées à la variable `$pet` dans la boucle
soient répercutées dans le tableau `$pets`.

Sans cette référence, la variable `$pet` serait une copie de l'élément du
tableau `$pets` et les modifications apportées à `$pet` ne seraient pas
répercutées dans le tableau `$pets`. En utilisant la référence `&`, nous
modifions directement les éléments du tableau `$pets` et les modifications sont
répercutées dans le tableau.

Si nous avions souhaité ne pas utiliser de référence, nous aurions pu créer un
nouveau tableau pour stocker les animaux de compagnie avec les personnalités
converties en tableau, comme ceci :

```php
function getPets(): array {
    global $pdo;

    $sql = "SELECT * FROM pets ORDER BY name ASC";

    $stmt = $pdo->prepare($sql);

    $stmt->execute();

    $pets = $stmt->fetchAll();

    $petsWithPersonalitiesAsArray = [];

    foreach ($pets as $pet) {
        if ($pet['personalities']) {
            $pet['personalities'] = explode(",", $pet['personalities']);
        }

        array_push($petsWithPersonalitiesAsArray, $pet);
    }

    return $petsWithPersonalitiesAsArray;
}
```

Cette version de la fonction `getPets()` crée un nouveau tableau
`$petsWithPersonalitiesAsArray` pour stocker les animaux de compagnie avec les
personnalités converties en tableau. La boucle `foreach` parcourt le tableau
`$pets`, convertit les personnalités en tableau si nécessaire, puis ajoute
chaque animal de compagnie au nouveau tableau `$petsWithPersonalitiesAsArray`.
Enfin, la fonction retourne le nouveau tableau.

Bien que complètement valide et fonctionnelle, cette version de la fonction
`getPets()` est moins efficace que la version utilisant une référence, car elle
nécessite de créer un nouveau tableau et de copier tous les éléments du tableau
`$pets` dans ce nouveau tableau après avoir transformé les personnalités en
tableau. En utilisant une référence, nous modifions directement les éléments du
tableau `$pets` sans avoir besoin de créer un nouveau tableau, ce qui est plus
efficace en termes de mémoire, de performance mais surtout de lisibilité du
code.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Mettre à jour l'interface utilisateur

Il est temps de mettre à jour la page d'accueil pour afficher tous les animaux
de compagnie de la base de données.

Mettez à jour le fichier `index.php` avec le code suivant :

```diff
diff --git a/mini-projet/public/index.php b/mini-projet/public/index.php
index fd35d81..298efc0 100644
--- a/mini-projet/public/index.php
+++ b/mini-projet/public/index.php
@@ -1,6 +1,7 @@
 <?php
+require_once __DIR__ . '/../src/constants.php';
 require_once __DIR__ . '/../src/functions.php';

 $pets = getPets();
 ?>

@@ -58,12 +59,12 @@ $pets = getPets();
                 </thead>
                 <tbody>
                     <?php foreach ($pets as $pet) { ?>
                         <tr>
                             <td><?= $pet['name'] ?></td>
-                            <td><?= $pet['species'] ?></td>
-                            <td><?= $pet['gender'] ?></td>
+                            <td><?= PET_SPECIES[$pet['species']] ?></td>
+                            <td><?= PET_SEXES[$pet['sex']] ?></td>
                             <td><?= $pet['birthday'] ?></td>
                             <td>
                                 <a href="./view.php?id=<?= $pet['id'] ?>">
                                     <button>Voir</button>
                                 </a>
```

Ici, peu de modifications ont été apportées par rapport à la version précédente
de la page d'accueil.

En effet, la page d'accueil affichait déjà une liste de tous les animaux de
compagnie, mais les données étaient statiques et ne provenaient pas de la base
de données.

Ici, nous avons simplement mis à jour le code pour que les données des animaux
de compagnie soient récupérées de la base de données grâce à la fonction
`getPets()`, et nous avons utilisé les tableaux associatifs définis dans le
fichier `constants.php` pour afficher les valeurs de l'espèce et du sexe en
français.

Si souhaité, nous pouvons accéder à la page de visualisation d'un animal de
compagnie en cliquant sur le bouton "Voir" pour accéder aux détails de cet
animal de compagnie.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Créer, valider et fusionner la pull request

Si ce n'est pas déjà fait, pensez à commiter et pousser les modifications que
vous avez faites jusqu'à présent. Ensuite, créez une pull request pour que votre
travail puisse être visible par les autres personnes du dépôt de code. Donnez
lui le même nom que l'issue correspondante.

Validez les changements de la pull request et fusionnez-la dans la branche
principale. N'oubliez pas de supprimer la branche associée une fois la pull
request fusionnée.

### Se protéger contre les attaques XSS

Maintenant que nous avons des pages de visualisation d'un ou plusieurs animaux
de compagnie qui affichent les données de l'animal de compagnie, il est
important de se protéger contre les attaques XSS (Cross-Site Scripting).

Pour illustrer ce point, essayez d'ajouter un animal de compagnie avec le nom
suivant : `<script>alert('Oh no');</script>` dans la page d'ajout d'un animal de
compagnie (<http://localhost:8081/mini-projet/public/create.php>).

Lorsque vous soumettez le formulaire, vous devriez être redirigé.e vers la page
de visualisation de l'animal de compagnie que vous venez d'ajouter.

Une alerte JavaScript devrait s'afficher avec le message "Oh no". Cela signifie
que votre application est vulnérable aux attaques XSS.

En effet, les données que vous avez saisies dans le formulaire d'ajout d'un
animal de compagnie sont stockées dans la base de données et affichées dans la
page de visualisation de l'animal de compagnie sans être échappées. Cela permet
à un.e attaquant.e de saisir du code JavaScript malveillant dans le formulaire
et de l'exécuter dans le navigateur des utilisateur.trices qui consultent la
page de visualisation de l'animal de compagnie.

Bien qu'ici l'attaque soit relativement inoffensive (une simple alerte
JavaScript), dans une application réelle, une attaque XSS pourrait être utilisée
pour voler des données sensibles, comme les cookies de session, ou pour
rediriger les utilisateur.trices vers des sites malveillants.

Afin de se protéger contre les attaques XSS, la règle est simple : dès qu'une
donnée issue de la base de données est affichée dans une page, elle doit être
échappée avec la fonction `htmlspecialchars()` (source :
<https://www.php.net/manual/fr/function.htmlspecialchars.php>).

Dans cette section, nous allons mettre à jour le code de toutes les pages
existantes pour échapper les données de l'animal de compagnie avant de les
afficher.

#### Créer l'issue et la branche pour la tâche à réaliser

Afin de continuer à utiliser les bonnes pratiques acquises avec Git et GitHub
dans la séance précédente, créez une nouvelle issue intitulée "Protection contre
les attaques XSS" dans le dépôt GitHub de votre projet pour suivre la
progression de cette tâche.

Créez une branche depuis celle-ci et basculez dessus pour y faire les
modifications nécessaires pour réaliser la tâche.

#### Mettre à jour la page de visualisation de tous les animaux de compagnie

Mettez à jour le fichier `index.php` pour échapper les données de l'animal de
compagnie avant de les afficher dans la page d'accueil :

```diff
diff --git a/mini-projet/public/index.php b/mini-projet/public/index.php
index 298efc0..2b737ac 100644
--- a/mini-projet/public/index.php
+++ b/mini-projet/public/index.php
@@ -58,16 +58,16 @@ $pets = getPets();
                     </tr>
                 </thead>
                 <tbody>
                     <?php foreach ($pets as $pet) { ?>
                         <tr>
-                            <td><?= $pet['name'] ?></td>
-                            <td><?= PET_SPECIES[$pet['species']] ?></td>
-                            <td><?= PET_SEXES[$pet['sex']] ?></td>
-                            <td><?= $pet['birthday'] ?></td>
+                            <td><?= htmlspecialchars($pet['name']) ?></td>
+                            <td><?= PET_SPECIES[htmlspecialchars($pet['species'])] ?></td>
+                            <td><?= PET_SEXES[htmlspecialchars($pet['sex'])] ?></td>
+                            <td><?= htmlspecialchars($pet['birthday']) ?></td>
                             <td>
-                                <a href="./view.php?id=<?= $pet['id'] ?>">
+                                <a href="./view.php?id=<?= htmlspecialchars($pet['id']) ?>">
                                     <button>Voir</button>
                                 </a>
                             </td>
                         </tr>
                     <?php } ?>
```

Dans ce code, nous avons utilisé la fonction `htmlspecialchars()` pour échapper
les données de l'animal de compagnie avant de les afficher dans la page
d'accueil.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Mettre à jour la page de visualisation d'un animal de compagnie

Mettez à jour le fichier `view.php` pour échapper les données de l'animal de
compagnie avant de les afficher dans la page de visualisation d'un animal de
compagnie :

```diff
diff --git a/mini-projet/public/view.php b/mini-projet/public/view.php
index ee9fb13..1570558 100644
--- a/mini-projet/public/view.php
+++ b/mini-projet/public/view.php
@@ -44,48 +44,48 @@ if ($pet === null) {
         </nav>

         <nav aria-label="breadcrumb">
             <ul>
                 <li><a href="./index.php">Accueil</a></li>
-                <li><?= $pet['name'] ?></li>
+                <li><?= htmlspecialchars($pet['name']) ?></li>
             </ul>
         </nav>
     </header>
     <main>
-        <h1><?= $pet['name'] ?></h1>
+        <h1><?= htmlspecialchars($pet['name']) ?></h1>

         <ul>
-            <li><strong>Espèce</strong> : <?= PET_SPECIES[$pet['species']] ?></li>
-            <li><strong>Sexe</strong> : <?= PET_SEXES[$pet['sex']] ?></li>
-            <li><strong>Date de naissance</strong> : <?= $pet['birthday'] ?></li>
+            <li><strong>Espèce</strong> : <?= PET_SPECIES[htmlspecialchars($pet['species'])] ?></li>
+            <li><strong>Sexe</strong> : <?= PET_SEXES[htmlspecialchars($pet['sex'])] ?></li>
+            <li><strong>Date de naissance</strong> : <?= htmlspecialchars($pet['birthday']) ?></li>
             <?php if ($pet['nickname']) { ?>
-                <li><strong>Surnom</strong> : <?= $pet['nickname'] ?></li>
+                <li><strong>Surnom</strong> : <?= htmlspecialchars($pet['nickname']) ?></li>
             <?php } ?>
             <?php if ($pet['color']) { ?>
                 <li><strong>Couleur</strong> :
-                    <span class="color-chip" style="background-color: <?= $pet['color'] ?>;"></span>
-                    <?= $pet['color'] ?>
+                    <span class="color-chip" style="background-color: <?= htmlspecialchars($pet['color']) ?>;"></span>
+                    <?= htmlspecialchars($pet['color']) ?>
                 </li>
             <?php } ?>
             <?php if ($pet['personalities']) { ?>
                 <li>
                     <strong>Personnalité</strong> :
                     <ul>
                         <?php foreach ($pet['personalities'] as $personality) { ?>
-                            <li><?= PET_PERSONALITIES[$personality] ?></li>
+                            <li><?= PET_PERSONALITIES[htmlspecialchars($personality)] ?></li>
                         <?php } ?>
                     </ul>
                 </li>
             <?php } ?>
             <?php if ($pet['size']) { ?>
-                <li><strong>Taille</strong> : <?= $pet['size'] ?> cm</li>
+                <li><strong>Taille</strong> : <?= htmlspecialchars($pet['size']) ?> cm</li>
             <?php } ?>
             <?php if ($pet['weight']) { ?>
-                <li><strong>Poids</strong> : <?= $pet['weight'] ?> kg</li>
+                <li><strong>Poids</strong> : <?= htmlspecialchars($pet['weight']) ?> kg</li>
             <?php } ?>
             <?php if ($pet['notes']) { ?>
-                <li><strong>Notes</strong> : <?= nl2br($pet['notes']) ?></li>
+                <li><strong>Notes</strong> : <?= nl2br(htmlspecialchars($pet['notes'])) ?></li>
             <?php } ?>
         </ul>
     </main>
     <footer>
         <center>
```

Dans ce code, nous avons utilisé la fonction `htmlspecialchars()` pour échapper
les données de l'animal de compagnie avant de les afficher dans la page de
visualisation d'un animal de compagnie.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Mettre à jour la page de création d'un animal de compagnie

Mettez à jour le fichier `create.php` pour échapper les données de l'animal de
compagnie avant de les afficher dans le formulaire d'ajout d'un animal de
compagnie :

```diff
diff --git a/mini-projet/public/create.php b/mini-projet/public/create.php
index 3540939..8d8e4be 100644
--- a/mini-projet/public/create.php
+++ b/mini-projet/public/create.php
@@ -1,19 +1,19 @@
 <?php
 require_once __DIR__ . '/../src/functions.php';

 // Définition des valeurs par défaut de l'animal de compagnie
-$name = $_POST["name"] ?? null;
-$species = $_POST["species"] ?? null;
-$nickname = $_POST["nickname"] ?? null;
-$sex = $_POST["sex"] ?? null;
-$birthday = $_POST["birthday"] ?? null;
-$color = $_POST["color"] ?? null;
+$name = $_POST["name"] ?? '';
+$species = $_POST["species"] ?? '';
+$nickname = $_POST["nickname"] ?? '';
+$sex = $_POST["sex"] ?? '';
+$birthday = $_POST["birthday"] ?? '';
+$color = $_POST["color"] ?? '';
 $personalities = $_POST["personalities"] ?? [];
-$size = $_POST["size"] ?? null;
-$weight = $_POST["weight"] ?? null;
-$notes = $_POST["notes"] ?? null;
+$size = $_POST["size"] ?? '';
+$weight = $_POST["weight"] ?? '';
+$notes = $_POST["notes"] ?? '';

 // Gestion de la soumission du formulaire
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
     // Validation de l'animal de compagnie
     $errors = validatePet(
@@ -105,11 +105,11 @@ if ($_SERVER["REQUEST_METHOD"] === "POST") {
             <label for="name">Nom</label>
             <input
                 type="text"
                 id="name"
                 name="name"
-                value="<?= $name ?>"
+                value="<?= htmlspecialchars($name) ?>"
                 minlength="2"
                 maxlength="50"
                 required />

             <label for="species">Espèce</label>
@@ -154,11 +154,11 @@ if ($_SERVER["REQUEST_METHOD"] === "POST") {
             <label for="nickname">Surnom (optionnel)</label>
             <input
                 type="text"
                 id="nickname"
                 name="nickname"
-                value="<?= $nickname ?>"
+                value="<?= htmlspecialchars($nickname) ?>"
                 minlength="2"
                 maxlength="50" />

             <fieldset>
                 <legend>Sexe</legend>
@@ -185,20 +185,20 @@ if ($_SERVER["REQUEST_METHOD"] === "POST") {
             <label for="birthday">Date de naissance</label>
             <input
                 type="date"
                 id="birthday"
                 name="birthday"
-                value="<?= $birthday ?>"
+                value="<?= htmlspecialchars($birthday) ?>"
                 required
                 max="<?= date("Y-m-d") ?>" />

             <label for="color">Couleur (optionnel)</label>
             <input
                 type="color"
                 id="color"
                 name="color"
-                value="<?= $color ?>" />
+                value="<?= htmlspecialchars($color) ?>" />

             <fieldset>
                 <legend>Personnalité (optionnel)</legend>

                 <input
@@ -249,30 +249,30 @@ if ($_SERVER["REQUEST_METHOD"] === "POST") {
             <label for="size">Taille en cm (optionnel)</label>
             <input
                 type="number"
                 id="size"
                 name="size"
-                value="<?= $size ?>"
+                value="<?= htmlspecialchars($size) ?>"
                 min="1" />

             <label for="weight">Poids en kg (optionnel)</label>
             <input
                 type="number"
                 id="weight"
                 name="weight"
-                value="<?= $weight ?>"
+                value="<?= htmlspecialchars($weight) ?>"
                 min="0.1"
                 step="0.1" />

             <label for="notes">Notes (optionnel)</label>
             <textarea
                 id="notes"
                 name="notes"
                 rows="4"
                 cols="50"
                 minlength="10"
-                maxlength="500"><?= $notes ?></textarea>
+                maxlength="500"><?= htmlspecialchars($notes) ?></textarea>

             <button type="submit">Créer le nouvel animal</button>
         </form>
     </main>
     <footer>
```

Dans la première partie du code, nous avons mis à jour les valeurs par défaut
des variables pour qu'elles soient des chaînes de caractères vides au lieu de
`null`. Cela permet d'éviter des erreurs d'affichage dans le formulaire lorsque
les données sont affichées pour la première fois (lorsque le formulaire n'a pas
encore été soumis). Sans quoi, la fonction `htmlspecialchars()` ne pourrait pas
être utilisée pour échapper les données, car elle ne peut pas traiter des
valeurs `null`.

Dans la seconde partie du code, nous avons utilisé la fonction
`htmlspecialchars()` pour échapper les données de l'animal de compagnie avant de
les afficher dans le formulaire d'ajout d'un animal de compagnie.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Créer, valider et fusionner la pull request

Si ce n'est pas déjà fait, pensez à commiter et pousser les modifications que
vous avez faites jusqu'à présent. Ensuite, créez une pull request pour que votre
travail puisse être visible par les autres personnes du dépôt de code. Donnez
lui le même nom que l'issue correspondante.

Validez les changements de la pull request et fusionnez-la dans la branche
principale. N'oubliez pas de supprimer la branche associée une fois la pull
request fusionnée.

### Supprimer un animal de compagnie de la base de données

Maintenant que nous avons une page de visualisation d'un animal de compagnie qui
affiche les données de l'animal de compagnie, il est temps d'ajouter une page
pour supprimer un animal de compagnie de la base de données.

Afin d'afficher les boutons correctement, il sera nécessaire de rajouter
quelques styles CSS dans le fichier `styles.css`.

#### Créer l'issue et la branche pour la tâche à réaliser

Afin de continuer à utiliser les bonnes pratiques acquises avec Git et GitHub
dans la séance précédente, créez une nouvelle issue intitulée "Suppression d'un
animal de compagnie de la base de données" dans le dépôt GitHub de votre projet
pour suivre la progression de cette tâche.

Créez une branche depuis celle-ci et basculez dessus pour y faire les
modifications nécessaires pour réaliser la tâche.

#### Créer la fonction `deletePet()`

Mettez à jour le fichier `functions.php` pour ajouter la fonction `deletePet()`
qui permet de supprimer un animal de compagnie de la base de données :

```diff
diff --git a/mini-projet/src/functions.php b/mini-projet/src/functions.php
index a8df88e..f9f613a 100644
--- a/mini-projet/src/functions.php
+++ b/mini-projet/src/functions.php
@@ -205,5 +205,19 @@ function addPet(

     $lastInsertId = $pdo->lastInsertId();

     return $lastInsertId;
 }
+
+function deletePet(int $id): bool {
+    global $pdo;
+
+    $sql = "DELETE FROM pets WHERE id = :id";
+
+    $stmt = $pdo->prepare($sql);
+
+    $stmt->bindValue(':id', $id);
+
+    $success = $stmt->execute();
+
+    return $success;
+}
```

Cette fonction `deletePet()` permet de supprimer un animal de compagnie de la
base de données en utilisant une requête SQL `DELETE`. La fonction prend en
paramètre l'identifiant de l'animal de compagnie à supprimer et retourne un
booléen indiquant si la suppression a réussi ou non.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Créer la page de suppression d'un animal de compagnie

Créez un nouveau fichier `delete.php` dans le dossier `public` avec le code
suivant :

```php
<?php
require_once __DIR__ . '/../src/functions.php';

$petId = $_GET['id'] ?? $_POST["id"];

if ($petId === null) {
    header('Location: ./index.php');
    exit;
}

$pet = getPetById($petId);

if ($pet === null) {
    header('Location: ./index.php');
    exit;
}

// Définition des valeurs par défaut de l'animal de compagnie
$petId = $_POST["id"] ?? $pet['id'];

// Gestion de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $success = deletePet($petId);

    if ($success) {
        header('Location: ./index.php');
        exit;
    } else {
        $errors = "Une erreur est survenue lors de la suppression de l'animal de compagnie.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="./css/styles.css">

    <title>Page de suppression | ninetendogs</title>
    <meta name="description" content="ninetendogs - Gestionnaire d'animaux de compagnie - Suppression d'un animal de compagnie">
</head>

<body class="container">
    <header>
        <nav>
            <ul>
                <li><strong>ninetendogs</strong></li>
            </ul>
            <ul>
                <li><a href="./index.php">Accueil</a></li>
                <li><a href="./create.php">Nouvel animal</a></li>
            </ul>
        </nav>

        <nav aria-label="breadcrumb">
            <ul>
                <li><a href="./index.php">Accueil</a></li>
                <li><a href="./view.php?id=<?= htmlspecialchars($pet['id']) ?>"><?= htmlspecialchars($pet['name']) ?></a></li>
                <li>Suppression de l'animal</li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Supprimer <?= htmlspecialchars($pet['name']) ?> ?</h1>

        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($errors)) { ?>
            <p style="color: red;"><?= $errors ?></p>
        <?php } ?>

        <p>Souhaites-tu vraiment supprimer l'animal de compagnie <strong><?= htmlspecialchars($pet['name']) ?></strong> ? Cette action est irréversible.</p>

        <form action="./delete.php?id=<?= htmlspecialchars($pet['id']) ?>" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($petId) ?>" />

            <button type="submit" class="contrast">Supprimer l'animal</button>
            <a href="./view.php?id=<?= htmlspecialchars($pet['id']) ?>">
                <button role="button" class="button-full-width secondary">Revenir à la page de visualisation</button>
            </a>
        </form>
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

Ce code crée une page de suppression d'un animal de compagnie qui affiche les
détails de l'animal de compagnie à supprimer et demande à l'utilisateur.trice de
confirmer la suppression en utilisant la fonction `getPetById()` pour récupérer
les détails de l'animal de compagnie à supprimer.

Vous remarquerez peut-être que le formulaire définit un champ caché `id` pour
stocker l'identifiant de l'animal de compagnie à supprimer. Cela permet de
s'assurer que nous avons l'identifiant de l'animal de compagnie à supprimer lors
de la soumission du formulaire, même si l'utilisateur.trice modifie l'URL ou les
données du formulaire.

Une fois le formulaire soumis, la page utilise la fonction `deletePet()` pour
supprimer l'animal de compagnie de la base de données. Si la suppression
réussit, l'utilisateur.trice est redirigé.e vers la page d'accueil. Si une
erreur survient lors de la suppression, un message d'erreur est affiché.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Mettre à jour la page de visualisation d'un animal de compagnie

Mettez à jour le fichier `view.php` pour ajouter un bouton de suppression d'un
animal de compagnie dans la page de visualisation d'un animal de compagnie :

```diff
diff --git a/mini-projet/public/view.php b/mini-projet/public/view.php
index 1570558..ce36350 100644
--- a/mini-projet/public/view.php
+++ b/mini-projet/public/view.php
@@ -84,10 +84,16 @@ if ($pet === null) {
             <?php } ?>
             <?php if ($pet['notes']) { ?>
                 <li><strong>Notes</strong> : <?= nl2br(htmlspecialchars($pet['notes'])) ?></li>
             <?php } ?>
         </ul>
+
+        <div>
+            <a href="./delete.php?id=<?= htmlspecialchars($pet['id']) ?>">
+                <button class="button-full-width secondary">Accéder à la page de suppression</button>
+            </a>
+        </div>
     </main>
     <footer>
         <center>
             <small>
                 Un projet réalisé dans le cadre du cours <a href="https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course">ProgServ1</a> enseigné à la <a href="https://heig-vd.ch">HEIG-VD</a>.
```

Mettez à jour le fichier `styles.css` pour ajouter les styles suivants :

```diff
diff --git a/mini-projet/public/css/styles.css b/mini-projet/public/css/styles.css
index 48234fe..923c74d 100644
--- a/mini-projet/public/css/styles.css
+++ b/mini-projet/public/css/styles.css
@@ -26,5 +26,11 @@ main {
 	display: inline-block;
 	border: 1px solid #0003;
 	box-shadow: inset 0 0 0 1px #fff4;
 	vertical-align: center;
 }
+
+/* Styles pour que les boutons prennent la largeur totale de leur conteneur */
+.button-full-width {
+	margin-bottom: var(--pico-spacing);
+	width: 100%;
+}
```

Ces modifications ajoutent un bouton dans la page de visualisation d'un animal
de compagnie qui permet d'accéder à la page de suppression de cet animal de
compagnie. Le bouton est stylisé pour prendre toute la largeur de son conteneur
grâce à la classe `button-full-width`.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Tester la suppression d'un animal de compagnie

Ouvrez la page de visualisation d'un animal de compagnie et cliquez sur le
bouton "Accéder à la page de suppression". Vous devriez être redirigé.e vers la
page de suppression de cet animal de compagnie.

Essayez de supprimer l'animal de compagnie en cliquant sur le bouton "Supprimer
l'animal". Vous devriez être redirigé.e vers la page d'accueil et l'animal de
compagnie que vous venez de supprimer ne devrait plus être affiché dans la liste
des animaux de compagnie.

#### Créer, valider et fusionner la pull request

Si ce n'est pas déjà fait, pensez à commiter et pousser les modifications que
vous avez faites jusqu'à présent. Ensuite, créez une pull request pour que votre
travail puisse être visible par les autres personnes du dépôt de code. Donnez
lui le même nom que l'issue correspondante.

Validez les changements de la pull request et fusionnez-la dans la branche
principale. N'oubliez pas de supprimer la branche associée une fois la pull
request fusionnée.

### Éditer un animal de compagnie dans la base de données

Dans la prochaine section, nous allons permettre de modifier un animal de
compagnie dans la base de données en créant une page d'édition d'un animal de
compagnie.

Cette dernière étape sera un mélange entre la page de création d'un animal de
compagnie et la page de visualisation d'un animal de compagnie. En effet, la
page d'édition d'un animal de compagnie affichera un formulaire pré-rempli avec
les données de l'animal de compagnie à modifier, et permettra de soumettre les
modifications pour mettre à jour l'animal de compagnie dans la base de données.

#### Créer l'issue et la branche pour la tâche à réaliser

Afin de continuer à utiliser les bonnes pratiques acquises avec Git et GitHub
dans la séance précédente, créez une nouvelle issue intitulée "Édition d'un
animal de compagnie dans la base de données" dans le dépôt GitHub de votre
projet pour suivre la progression de cette tâche.

Créez une branche depuis celle-ci et basculez dessus pour y faire les
modifications nécessaires pour réaliser la tâche.

#### Créer la fonction `updatePet()`

Mettez à jour le fichier `functions.php` pour ajouter la fonction `updatePet()`
qui permet de modifier un animal de compagnie dans la base de données :

```diff
diff --git a/mini-projet/src/functions.php b/mini-projet/src/functions.php
index f9f613a..4e6fcac 100644
--- a/mini-projet/src/functions.php
+++ b/mini-projet/src/functions.php
@@ -219,5 +219,56 @@ function deletePet(int $id): bool {

     $success = $stmt->execute();

     return $success;
 }
+
+function updatePet(
+    int $id,
+    string $name,
+    string $species,
+    ?string $nickname,
+    string $sex,
+    ?string $birthday,
+    ?string $color,
+    ?array $personalities,
+    ?string $size,
+    ?string $weight,
+    ?string $notes,
+): bool {
+    global $pdo;
+
+    $sql = "UPDATE pets SET
+        name = :name,
+        species = :species,
+        nickname = :nickname,
+        sex = :sex,
+        birthday = :birthday,
+        color = :color,
+        personalities = :personalities,
+        size = :size,
+        weight = :weight,
+        notes = :notes
+    WHERE id = :id";
+
+    $stmt = $pdo->prepare($sql);
+
+    if ($personalities) {
+        $personalities = implode(",", $personalities);
+    }
+
+    $stmt->bindValue(':id', $id);
+    $stmt->bindValue(':name', $name);
+    $stmt->bindValue(':species', $species);
+    $stmt->bindValue(':nickname', $nickname);
+    $stmt->bindValue(':sex', $sex);
+    $stmt->bindValue(':birthday', $birthday);
+    $stmt->bindValue(':color', $color);
+    $stmt->bindValue(':personalities', $personalities);
+    $stmt->bindValue(':size', $size);
+    $stmt->bindValue(':weight', $weight);
+    $stmt->bindValue(':notes', $notes);
+
+    $success = $stmt->execute();
+
+    return $success;
+}
```

Cette fonction `updatePet()` permet de modifier un animal de compagnie dans la
base de données en utilisant une requête SQL `UPDATE`. La fonction prend en
paramètre l'identifiant de l'animal de compagnie à modifier, les nouvelles
valeurs des champs de l'animal de compagnie, et retourne un booléen indiquant si
la modification a réussi ou non.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Créer la page d'édition d'un animal de compagnie

Créez un nouveau fichier `edit.php` dans le dossier `public` avec le code
suivant :

```php
<?php
require_once __DIR__ . '/../src/functions.php';

$petId = $_GET['id'] ?? $_POST["id"];

if ($petId === null) {
    header('Location: ./index.php');
    exit;
}

$pet = getPetById($petId);

if ($pet === null) {
    header('Location: ./index.php');
    exit;
}

// Définition des valeurs par défaut de l'animal de compagnie
$petId = $pet['id'] ?? '';
$name = $pet['name'] ?? '';
$species = $pet['species'] ?? '';
$nickname = $pet['nickname'] ?? '';
$sex = $pet['sex'] ?? '';
$birthday = $pet['birthday'] ?? '';
$color = $pet['color'] ?? '';
$personalities = $pet['personalities'] ?? [];
$size = $pet['size'] ?? '';
$weight = $pet['weight'] ?? '';
$notes = $pet['notes'] ?? '';

// Gestion de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $petId = $_POST["id"] ?? null;
    $name = $_POST["name"] ?? null;
    $species = $_POST["species"] ?? null;
    $nickname = $_POST["nickname"] ?? null;
    $sex = $_POST["sex"] ?? null;
    $birthday = $_POST["birthday"] ?? null;
    $color = $_POST["color"] ?? null;
    $personalities = $_POST["personalities"] ?? null;
    $size = $_POST["size"] ?? null;
    $weight = $_POST["weight"] ?? null;
    $notes = $_POST["notes"] ?? null;

    // Validation de l'animal de compagnie
    $errors = validatePet(
        $name,
        $species,
        $nickname,
        $sex,
        $birthday,
        $color,
        $personalities,
        $size,
        $weight,
        $notes,
    );

    // S'il n'y a pas d'erreurs, ajoute l'animal de compagnie à la base de données
    if (empty($errors)) {
        $success = updatePet(
            $petId,
            $name,
            $species,
            $nickname ?: null,
            $sex,
            $birthday ?: null,
            $color ?: null,
            $personalities ?: null,
            $size ?: null,
            $weight ?: null,
            $notes ?: null,
        );

        if ($success) {
            header('Location: ./view.php?id=' . $petId);
            exit;
        } else {
            $errors = array_push($errors, "Une erreur est survenue lors de la mise à jour de l'animal de compagnie.");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="./css/styles.css">

    <title>Page d'édition | ninetendogs</title>
    <meta name="description" content="ninetendogs - Gestionnaire d'animaux de compagnie - Édition d'un animal de compagnie">
</head>

<body class="container">
    <header>
        <nav>
            <ul>
                <li><strong>ninetendogs</strong></li>
            </ul>
            <ul>
                <li><a href="./index.php">Accueil</a></li>
                <li><a href="./create.php">Nouvel animal</a></li>
            </ul>
        </nav>

        <nav aria-label="breadcrumb">
            <ul>
                <li><a href="./index.php">Accueil</a></li>
                <li><a href="./view.php?id=<?= htmlspecialchars($petId) ?>"><?= htmlspecialchars($name) ?></a></li>
                <li>Édition de l'animal</li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Modifier <?= htmlspecialchars($name) ?></h1>

        <?php if ($_SERVER["REQUEST_METHOD"] === "POST") { ?>
            <?php if (!empty($errors)) { ?>
                <p style="color: red;">Le formulaire contient des erreurs :</p>
                <ul>
                    <?php foreach ($errors as $error) { ?>
                        <li><?= $error ?></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        <?php } ?>

        <form action="./edit.php?id=<?= htmlspecialchars($petId) ?>" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($petId) ?>" />

            <label for="name">Nom</label>
            <input
                type="text"
                id="name"
                name="name"
                value="<?= htmlspecialchars($name) ?>"
                minlength="2"
                maxlength="50"
                required />

            <label for="species">Espèce</label>
            <select id="species" name="species" required>
                <option
                    value="dog"
                    <?= $species === "dog" ? "selected" : "" ?> />
                Chien
                </option>
                <option
                    value="cat"
                    <?= $species === "cat" ? "selected" : "" ?> />
                Chat
                </option>
                <option
                    value="lizard"
                    <?= $species === "lizard" ? "selected" : "" ?> />
                Lézard
                </option>
                <option
                    value="snake"
                    <?= $species === "snake" ? "selected" : "" ?> />
                Serpent
                </option>
                <option
                    value="bird"
                    <?= $species === "bird" ? "selected" : "" ?> />
                Oiseau
                </option>
                <option
                    value="rabbit"
                    <?= $species === "rabbit" ? "selected" : "" ?> />
                Lapin
                </option>
                <option
                    value="other"
                    <?= $species === "other" ? "selected" : "" ?> />
                Autre
                </option>
            </select>

            <label for="nickname">Surnom (optionnel)</label>
            <input
                type="text"
                id="nickname"
                name="nickname"
                value="<?= htmlspecialchars($nickname) ?>"
                minlength="2"
                maxlength="50" />

            <fieldset>
                <legend>Sexe</legend>

                <input
                    type="radio"
                    id="male"
                    name="sex"
                    value="male"
                    required
                    <?= $sex === "male" ? "checked" : "" ?> />
                <label for="male">Mâle</label>

                <input
                    type="radio"
                    id="female"
                    name="sex"
                    value="female"
                    required
                    <?= $sex === "female" ? "checked" : "" ?> />
                <label for="female">Femelle</label>
            </fieldset>

            <label for="birthday">Date de naissance</label>
            <input
                type="date"
                id="birthday"
                name="birthday"
                value="<?= htmlspecialchars($birthday) ?>"
                required
                max="<?= date("Y-m-d") ?>" />

            <label for="color">Couleur (optionnel)</label>
            <input
                type="color"
                id="color"
                name="color"
                value="<?= htmlspecialchars($color) ?>" />

            <fieldset>
                <legend>Personnalité (optionnel)</legend>

                <input
                    type="checkbox"
                    id="friendly"
                    name="personalities[]"
                    value="friendly"
                    <?= in_array("friendly", $personalities) ? "checked" : "" ?> />
                <label for="friendly">Gentil</label>

                <input
                    type="checkbox"
                    id="playful"
                    name="personalities[]"
                    value="playful"
                    <?= in_array("playful", $personalities) ? "checked" : "" ?> />
                <label for="playful">Joueur</label>

                <input
                    type="checkbox"
                    id="lazy"
                    name="personalities[]"
                    value="lazy" <?= in_array("lazy", $personalities) ? "checked" : "" ?> />
                <label for="lazy">Paresseux</label>

                <input
                    type="checkbox"
                    id="shy"
                    name="personalities[]"
                    value="shy" <?= in_array("shy", $personalities) ? "checked" : "" ?> />
                <label for="shy">Timide</label>

                <input
                    type="checkbox"
                    id="curious"
                    name="personalities[]"
                    value="curious" <?= in_array("curious", $personalities) ? "checked" : "" ?> />
                <label for="curious">Curieux</label>

                <input
                    type="checkbox"
                    id="aggressive"
                    name="personalities[]"
                    value="aggressive" <?= in_array("aggressive", $personalities) ? "checked" : "" ?> />
                <label for="aggressive">Agressif</label>
            </fieldset>

            <label for="size">Taille en cm (optionnel)</label>
            <input
                type="number"
                id="size"
                name="size"
                value="<?= htmlspecialchars($size) ?>"
                min="1" />

            <label for="weight">Poids en kg (optionnel)</label>
            <input
                type="number"
                id="weight"
                name="weight"
                value="<?= htmlspecialchars($weight) ?>"
                min="0.1"
                step="0.1" />

            <label for="notes">Notes (optionnel)</label>
            <textarea
                id="notes"
                name="notes"
                rows="4"
                cols="50"
                minlength="10"
                maxlength="500"><?= htmlspecialchars($notes) ?></textarea>

            <button type="submit">Mettre à jour l'animal</button>
            <a href="./view.php?id=<?= htmlspecialchars($petId) ?>">
                <button type="button" class="button-full-width secondary">Revenir à la page de visualisation</button>
            </a>
        </form>
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

Prenez quelques minutes pour lire et comprendre le code.

Ici, nous avons créé une page d'édition d'un animal de compagnie qui affiche un
formulaire pré-rempli avec les données de l'animal de compagnie à modifier.

En effet, lors de l'accès à la page, les données de l'animal de compagnie sont
récupérées à l'aide de la fonction `getPetById()` et utilisées pour pré-remplir
les champs du formulaire.

Lorsque le formulaire est soumis, les nouvelles valeurs des champs sont
récupérées et utilisées pour mettre à jour l'animal de compagnie dans la base de
données à l'aide de la fonction `updatePet()`. Si la mise à jour réussit,
l'utilisateur.trice est redirigé.e vers la page de visualisation de l'animal de
compagnie modifié. Si une erreur survient lors de la mise à jour, un message
d'erreur est affiché.

De la même manière que pour la suppression, l'identifiant de l'animal de
compagnie à modifier est stocké dans un champ caché `id` pour s'assurer que nous
avons l'identifiant de l'animal de compagnie à modifier lors de la soumission du
formulaire, même si l'utilisateur.trice modifie l'URL ou les données du
formulaire.

Cette page d'édition d'un animal de compagnie est très similaire aux pages de
création et de visualisation d'un animal de compagnie, à la différence que les
champs du formulaire sont pré-remplis avec les données de l'animal de compagnie
à modifier, et que la fonction `updatePet()` est utilisée pour mettre à jour
l'animal de compagnie dans la base de données au lieu de la fonction `addPet()`.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Mettre à jour la page de visualisation d'un animal de compagnie

Mettez à jour le fichier `view.php` pour ajouter un bouton d'édition d'un animal
de compagnie dans la page de visualisation d'un animal de compagnie :

```diff
diff --git a/mini-projet/public/view.php b/mini-projet/public/view.php
index ce36350..52ac6c6 100644
--- a/mini-projet/public/view.php
+++ b/mini-projet/public/view.php
@@ -86,10 +86,13 @@ if ($pet === null) {
                 <li><strong>Notes</strong> : <?= nl2br(htmlspecialchars($pet['notes'])) ?></li>
             <?php } ?>
         </ul>

         <div>
+            <a href="./edit.php?id=<?= htmlspecialchars($pet['id']) ?>">
+                <button class="button-full-width">Accéder à la page de modification</button>
+            </a>
             <a href="./delete.php?id=<?= htmlspecialchars($pet['id']) ?>">
                 <button class="button-full-width secondary">Accéder à la page de suppression</button>
             </a>
         </div>
     </main>
```

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

#### Tester la modification d'un animal de compagnie

Ouvrez la page de visualisation d'un animal de compagnie et cliquez sur le
bouton "Accéder à la page de modification". Vous devriez être redirigé.e vers la
page de modification de cet animal de compagnie.

Essayez de modifier l'animal de compagnie avec de nouvelles valeurs. Vous
devriez être redirigé.e vers la page de visualisation et l'animal de compagnie
que vous venez de modifier devrait être mis à jour.

#### Créer, valider et fusionner la pull request

Si ce n'est pas déjà fait, pensez à commiter et pousser les modifications que
vous avez faites jusqu'à présent. Ensuite, créez une pull request pour que votre
travail puisse être visible par les autres personnes du dépôt de code. Donnez
lui le même nom que l'issue correspondante.

Validez les changements de la pull request et fusionnez-la dans la branche
principale. N'oubliez pas de supprimer la branche associée une fois la pull
request fusionnée.

## Supprimer les données d'animaux de compagnie créés en dur

Maintenant que notre application utilise une base de données pour stocker les
animaux de compagnie, nous pouvons supprimer les données d'animaux de compagnie
créés en dur dans le fichier `data.php`.

### Créer l'issue et la branche pour la tâche à réaliser

Afin de continuer à utiliser les bonnes pratiques acquises avec Git et GitHub
dans la séance précédente, créez une nouvelle issue intitulée "Suppression du
fichier data.php" dans le dépôt GitHub de votre projet pour suivre la
progression de cette tâche.

Créez une branche depuis celle-ci et basculez dessus pour y faire les
modifications nécessaires pour réaliser la tâche.

### Supprimer les données d'animaux de compagnie créés en dur

Supprimez le fichier `data.php`. Ce fichier n'est plus nécessaire car nous
utilisons désormais une base de données pour stocker les animaux de compagnie.

Pensez à commiter et pousser les modifications que vous avez faites jusqu'à
présent avant de continuer. Dès le premier push, créez une pull request pour que
votre travail puisse être visible par les autres personnes du dépôt de code.
Donnez lui le même nom que l'issue correspondante.

### Créer, valider et fusionner la pull request

Si ce n'est pas déjà fait, pensez à commiter et pousser les modifications que
vous avez faites jusqu'à présent. Ensuite, créez une pull request pour que votre
travail puisse être visible par les autres personnes du dépôt de code. Donnez
lui le même nom que l'issue correspondante.

Validez les changements de la pull request et fusionnez-la dans la branche
principale. N'oubliez pas de supprimer la branche associée une fois la pull
request fusionnée.

## Valider que tout est fonctionnel

Votre application devrait maintenant être fonctionnelle. Vous devriez être
capable d'ajouter un nouvel animal de compagnie, de visualiser la liste de tous
les animaux de compagnie, de visualiser les détails d'un animal de compagnie et
de supprimer un animal de compagnie.

Si vous avez suivi toutes les étapes du mini-projet, vous devriez avoir une
application fonctionnelle qui utilise une base de données SQLite pour stocker
les animaux de compagnie et permettre de persister les données entre les
rafraîchissements de la page.

## Conclusion

Dans cette séance, nous avons mis à jour le mini-projet PHP pour utiliser une
base de données pour stocker les animaux de compagnie.

Nous avons créé une base de données SQLite et une table `pets` pour stocker les
animaux de compagnie.

Cette base de données nous permet de pouvoir stocker les animaux de compagnie de
manière persistante, ce qui signifie que les données des animaux de compagnie ne
seront pas perdues lors du rafraîchissement de la page ou de la fermeture du
navigateur.

Les opérations standard de création, de lecture, de mise à jour et de
suppression (CRUD) des animaux de compagnie ont été implémentées en utilisant
des requêtes SQL pour interagir avec la base de données.

Nous avons maintenant une application PHP fonctionnelle qui permet de gérer une
liste d'animaux de compagnie avec une persistance des données grâce à
l'utilisation d'une base de données SQLite.

Avec cette séance, nous arrivons au terme de ce mini-projet. Vous avez
maintenant une bonne base pour continuer à développer votre application PHP et à
explorer les différentes fonctionnalités que vous pouvez ajouter pour rendre
votre application encore plus complète et intéressante.

Bravo ! Vous pouvez être fier.e de ce que vous avez accompli jusqu'à présent.
N'hésitez pas à explorer davantage les fonctionnalités de votre application ou à
ajouter de nouvelles fonctionnalités pour continuer à apprendre et à vous amuser
avec PHP et les bases de données !

Si vous le souhaitez, vous pouvez déployer votre application en suivant le
document
[Déployer un site ou une application web sur Internet](../../06.02-deployer-un-site-ou-une-application-web-sur-internet/README.md)
pour la rendre accessible à d'autres personnes sur Internet.

## Solution

> [!NOTE]
>
> La solution est fournie à titre indicatif uniquement. Il est fortement
> recommandé de développer votre propre version du mini-projet avant de
> consulter la solution.

La solution du mini-projet est accessible dans un dépôt GitHub dédié à l'adresse
suivante :
<https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course-mini-project-solution/tree/session-5>.

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

- Seriez-vous capable d'ajouter une fonctionnalité de tri des animaux de
  compagnie par nom, par espèce ou par date de naissance dans la page d'accueil
  ?
- Seriez-vous capable de créer une page d'erreur dédiée pour le cas où un animal
  de compagnie n'est pas trouvé dans la page de visualisation, au lieu de
  rediriger vers la page d'accueil ?
- Seriez-vous capable d'ajouter une fonctionnalité de recherche d'animaux de
  compagnie par nom ou par espèce ?
- Seriez-vous capable d'utiliser les constantes pour définir les différentes
  espèces d'animaux de compagnie/personnalités et sexes de l'animal de compagnie
  au lieu d'utiliser des chaînes de caractères en dur dans le code ?
- Seriez-vous capable de déployer votre application sur un service d'hébergement
  web pour la rendre accessible à d'autres personnes sur Internet ? Utilisez le
  document
  [Déployer un site ou une application web sur Internet](../../06.02-deployer-un-site-ou-une-application-web-sur-internet/README.md)
  pour vous guider dans le processus de déploiement de votre application PHP.

<!-- URLs -->

[licence]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md
