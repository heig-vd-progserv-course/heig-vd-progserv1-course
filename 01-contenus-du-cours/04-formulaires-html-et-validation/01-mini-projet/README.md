# Formulaires HTML et validation - Mini-projet

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
- [Continuer à utiliser le workflow Git et GitHub](#continuer-à-utiliser-le-workflow-git-et-github)
- [Mettre en place le formulaire de création d'une nouvelle tâche](#mettre-en-place-le-formulaire-de-création-dune-nouvelle-tâche)
  - [Créer la fonction de création d'une nouvelle tâche](#créer-la-fonction-de-création-dune-nouvelle-tâche)
  - [Créer la base du formulaire](#créer-la-base-du-formulaire)
  - [Tester le formulaire de base](#tester-le-formulaire-de-base)
  - [Rafraîchir la page après la soumission du formulaire](#rafraîchir-la-page-après-la-soumission-du-formulaire)
  - [Ajouter le champ titre](#ajouter-le-champ-titre)
  - [Tester le formulaire avec le champ titre](#tester-le-formulaire-avec-le-champ-titre)
  - [Tester le formulaire avec la méthode GET](#tester-le-formulaire-avec-la-méthode-get)
  - [Récupérer les données du formulaire côté serveur](#récupérer-les-données-du-formulaire-côté-serveur)
  - [Valider le titre de la tâche côté serveur](#valider-le-titre-de-la-tâche-côté-serveur)
  - [Conserver le titre en cas d'erreur de validation](#conserver-le-titre-en-cas-derreur-de-validation)
  - [Valider le titre du formulaire côté client](#valider-le-titre-du-formulaire-côté-client)
  - [Contourner la validation côté client](#contourner-la-validation-côté-client)
  - [Mettre en place les autres champs du formulaire](#mettre-en-place-les-autres-champs-du-formulaire)
  - [Tester le formulaire complet](#tester-le-formulaire-complet)
- [Rendre dynamique la page d'accueil et de visualisation des tâches](#rendre-dynamique-la-page-daccueil-et-de-visualisation-des-tâches)
  - [Mettre à jour la page de visualisation](#mettre-à-jour-la-page-de-visualisation)
  - [Tester la page de visualisation](#tester-la-page-de-visualisation)
  - [Mettre à jour la page d'accueil](#mettre-à-jour-la-page-daccueil)
  - [Tester la page d'accueil](#tester-la-page-daccueil)
- [Mettre en place le formulaire de suppression d'une tâche](#mettre-en-place-le-formulaire-de-suppression-dune-tâche)
  - [Créer la base du formulaire](#créer-la-base-du-formulaire-1)
  - [Ajouter le lien de suppression à la page de visualisation](#ajouter-le-lien-de-suppression-à-la-page-de-visualisation)
  - [Visualiser le formulaire](#visualiser-le-formulaire)
  - [Tester le formulaire](#tester-le-formulaire)
  - [Corriger le formulaire](#corriger-le-formulaire)
  - [Créer la fonction pour supprimer une tâche](#créer-la-fonction-pour-supprimer-une-tâche)
  - [Utiliser la fonction pour supprimer une tâche](#utiliser-la-fonction-pour-supprimer-une-tâche)
- [Conclusion](#conclusion)
- [Solution](#solution)

## Objectifs

Dans cette séance, vous allez créer le formulaire permettant de créer une
nouvelle tâche.

Pour rappel, le formulaire sera composé de plusieurs champs :

- Le titre de la tâche, obligatoire, doit contenir au minimum 2 caractères et au
  maximum 200 caractères.
- La priorité de la tâche est obligatoire et doit être l'une des valeurs
  suivantes :
  - `low`.
  - `medium`.
  - `high`.
- La description de la tâche est facultative, mais si elle est fournie, elle
  doit contenir au minimum 10 caractères et au maximum 1000 caractères.
- La date limite de la tâche est facultative, mais si elle est fournie, elle
  doit être une date valide et ne peut pas être dans le passé.

Il s'agira de vos premiers pas dans des concepts propres à la programmation web,
tels que les formulaires HTML et la validation des données côté serveur et côté
client.

À l'issue de cette séance, les personnes qui étudient devraient avoir pu :

- Créer un formulaire HTML permettant de créer, modifier et supprimer une
  nouvelle tâche.
- Valider les données du formulaire côté serveur.
- Afficher les erreurs de validation.
- Conserver les données saisies en cas d'erreur de validation.
- Valider les données du formulaire côté client.

## Continuer à utiliser le workflow Git et GitHub

Dorénavant, vous allez continuer à utiliser le workflow Git et GitHub que vous
avez appris lors de la séance précédente pour gérer vos modifications et vos
contributions au mini-projet.

Profitez de cette occasion pour vous familiariser avec les bonnes pratiques de
gestion de version et de collaboration sur des projets de développement ; il
s'agit d'atouts précieux pour votre future carrière.

## Mettre en place le formulaire de création d'une nouvelle tâche

Dans cette section, nous allons créer le formulaire permettant de créer une
nouvelle tâche.

> [!WARNING]
>
> N'oubliez pas de créer une issue et sa branche dédiée pour cette nouvelle
> fonctionnalité !

### Créer la fonction de création d'une nouvelle tâche

Maintenant que nous avons une meilleure compréhension des fonctions PHP, nous
allons créer une fonction permettant de créer une nouvelle tâche.

Cette fonction `addTask()` (à ajouter dans le fichier `src/functions.php`)
prendra en paramètre les propriétés d'une tâche et, pour le moment, affichera
simplement les valeurs reçues pour vérifier que la fonction fonctionne
correctement :

```php
function addTask(
    string $title,
    string $priority,
    ?string $description,
    ?string $deadline,
): void {
    echo "Ajout d'une tâche avec les données suivantes :<br>";

    echo "Titre : $title<br>";
    echo "Priorité : $priority<br>";
    echo "Description : " . ($description ?? 'Aucune') . "<br>";
    echo "Date limite : " . ($deadline ?? 'Aucune') . "<br>";
}
```

Ici, la fonction `addTask()` prend en paramètre les propriétés d'une tâche : le
titre, la priorité, la description et la date limite. La description et la date
limite sont optionnelles, ce qui est indiqué par le type `?string`, signifiant
qu'elles peuvent être soit des chaînes de caractères, soit `null`.

La fonction retourne `void`, ce qui signifie qu'elle ne renvoie aucune valeur :
pour le moment, elle se contente d'afficher les valeurs reçues pour vérifier que
la fonction fonctionne correctement.

Pour rappel, l'opérateur de coalescence nulle (`??`) est utilisé pour vérifier
si la variable `$description` ou `$deadline` est `null`. Si c'est le cas, nous
affichons la valeur par défaut "Aucune" pour indiquer qu'aucune valeur n'a été
fournie pour ces propriétés.

Le code ci-dessus est équivalent au code suivant :

```php
if (!isset($description)) {
    $description = 'Aucune';
}
```

Nous allons maintenant utiliser cette fonction pour créer une nouvelle tâche à
l'aide d'un formulaire HTML que nous allons mettre en place dans les prochaines
étapes.

### Créer la base du formulaire

Modifiez le fichier `public/create.php` avec le contenu suivant pour créer la
base du formulaire :

```diff
diff --git a/mini-projet/public/create.php b/mini-projet/public/create.php
index cf410c2..c691a6e 100644
--- a/mini-projet/public/create.php
+++ b/mini-projet/public/create.php
@@ -7,14 +7,13 @@ $priority = '';
 $description = '';
 $deadline = '';
+$errors = [];

-$errors = validateTask(
-    $title,
-    $priority,
-    $description,
-    $deadline,
-);
+// Gestion de la soumission du formulaire
+if ($_SERVER["REQUEST_METHOD"] === "POST") {
+    echo "Le formulaire a été soumis avec les données suivantes :<br>";
+    print_r($_POST);
+}
 ?>

 <!DOCTYPE html>
@@ -52,18 +51,22 @@ $errors = validateTask(
     <main>
         <h1>Créer une nouvelle tâche</h1>

-        <?php if (!empty($errors)) { ?>
-            <p style="color: red;">Le formulaire contient des erreurs :</p>
-            <ul>
-                <?php foreach ($errors as $error) { ?>
-                    <li><?= $error ?></li>
-                <?php } ?>
-            </ul>
-        <?php } else { ?>
-            <p style="color: green;">La tâche a été créée avec succès.</p>
+        <?php if ($_SERVER["REQUEST_METHOD"] === "POST") { ?>
+            <?php if (!empty($errors)) { ?>
+                <p style="color: red;">Le formulaire contient des erreurs :</p>
+                <ul>
+                    <?php foreach ($errors as $error) { ?>
+                        <li><?= $error ?></li>
+                    <?php } ?>
+                </ul>
+            <?php } else { ?>
+                <p style="color: green;">La tâche a été créée avec succès.</p>
+            <?php } ?>
         <?php } ?>

-        <p><em>Contenu à venir...</em></p>
+        <form action="./create.php" method="POST">
+            <button class="btn btn-primary" type="submit">Créer la nouvelle tâche</button>
+        </form>
     </main>
     <footer>
         <center>
```

Ici, nous avons opéré plusieurs changements dans le fichier `public/create.php`
:

- Nous avons supprimé l'appel à la fonction `validateTask()` qui validait les
  valeurs par défaut que nous avions définies. Nous la réutiliserons plus tard
  pour valider les données du formulaire.
- Nous avons ajouté un bloc conditionnel `if` qui vérifie si la méthode de la
  requête HTTP est `POST`. Si c'est le cas, cela signifie que le formulaire a
  été soumis, et nous affichons le contenu de la superglobale `$_POST` pour
  vérifier que les données du formulaire sont bien reçues côté serveur.
- Nous avons ajouté un formulaire HTML avec un bouton de soumission. Le
  formulaire utilise la méthode `POST` pour envoyer les données à la même page
  `create.php`.
- Nous avons également ajouté un bloc conditionnel pour afficher les erreurs de
  validation que lorsque le formulaire a été soumis. Si des erreurs sont
  présentes, elles seront affichées dans une liste.

Nous réutiliserons la fonction `validateTask()` pour valider les données du
formulaire dans les prochaines étapes.

### Tester le formulaire de base

Dans l'état actuel, le formulaire ne contient qu'un bouton de soumission. Vous
pouvez tester le formulaire en cliquant sur le bouton de soumission. Vous
devriez voir le contenu de la variable `$_POST` affiché sur la page grâce à la
fonction `print_r()`, ce qui indique que les données du formulaire sont bien
reçues côté serveur avec un résultat similaire à celui-ci :

```text
Le formulaire a été soumis avec les données suivantes :
Array ( )
```

Cela signifie que le formulaire a été soumis avec succès, mais qu'aucune donnée
n'a été envoyée, car le formulaire ne contient actuellement aucun champ de
saisie.

### Rafraîchir la page après la soumission du formulaire

Lorsque vous soumettez un formulaire, le navigateur envoie une requête HTTP
(`POST` ou `GET` selon la méthode du formulaire utilisée) au serveur pour
traiter les données du formulaire.

Si vous essayez de rafraîchir la page après avoir soumis le formulaire, le
navigateur va vous proposer de renvoyer la même requête HTTP au serveur pour
traiter à nouveau les données du formulaire à l'aide d'un message
d'avertissement.

Afin d'éviter ce comportement, cliquez sur la barre d'adresse de votre
navigateur et appuyez sur la touche `Entrée` pour recharger la page sans
renvoyer les données du formulaire.

Dans les prochaines étapes, lorsque nous vous invitons à rafraîchir la page
après avoir soumis le formulaire, nous vous demandons de cliquer sur la barre
d'adresse de votre navigateur et d'appuyer sur la touche `Entrée` pour recharger
la page sans renvoyer les données du formulaire afin de toujours repartir d'une
page vierge.

### Ajouter le champ titre

Ajoutez le champ "Titre" au formulaire :

```php
<form action="./create.php" method="POST">
    <label>Titre
        <input
            type="text"
            name="title" />
    </label>

    <button class="btn btn-primary" type="submit">Créer la nouvelle tâche</button>
</form>
```

Le champ "Titre" est représenté par un élément `<input>` avec l'attribut `type`
défini avec la valeur `text`.

Associé à ce champ de saisie, un élément `<label>` est utilisé pour fournir une
étiquette descriptive pour le champ de saisie.

L'attribut `name` de l'élément `<input>` est défini avec la valeur `title`, ce
qui permet d'identifier le champ lors de l'envoi des données au serveur avec la
valeur saisie par l'utilisateur·trice.

### Tester le formulaire avec le champ titre

Une fois le champ "Titre" ajouté, enregistrez les changements effectués,
rafraîchissez la page (voir note de la section
[Rafraîchir la page après la soumission du formulaire](#rafraîchir-la-page-après-la-soumission-du-formulaire))
et effectuez un test de soumission du formulaire en saisissant une valeur dans
le champ "Titre" et en cliquant sur le bouton de soumission.

Vous devriez voir le contenu de la variable `$_POST` affiché sur la page, ce qui
indique que les données du formulaire sont bien reçues côté serveur avec un
résultat similaire à celui-ci :

```text
Le formulaire a été soumis avec les données suivantes :
Array ( [title] => Titre de ma tâche )
```

Ceci signifie que le formulaire a été soumis avec succès et que la valeur saisie
dans le champ "Titre" a été envoyée au serveur avec la clé `title` dans la
superglobale `$_POST`.

### Tester le formulaire avec la méthode GET

Le formulaire actuel est composé d'un élément `<form>` avec les éléments
suivants :

- L'attribut `action` indique l'URL vers laquelle les données du formulaire
  seront envoyées lors de la soumission du formulaire.

  Dans ce cas, les données seront envoyées à la même page `create.php`, ce qui
  signifie que nous allons gérer la soumission du formulaire dans le même
  fichier.

  Dans d'autres cas, il serait possible d'envoyer les données à une autre page
  (par exemple : `submit.php`) ou même à une API externe. Ici, nous allons gérer
  la soumission du formulaire dans la même page.

- L'attribut `method` indique la méthode HTTP utilisée pour envoyer les données
  du formulaire.

  Ici, nous utilisons la méthode `POST`, qui est généralement utilisée pour
  envoyer des données sensibles.

- Finalement, un bouton de soumission est ajouté à l'intérieur du formulaire
  avec l'élément `<button>` et l'attribut `type` défini avec la valeur `submit`.

Que se passe-t-il si nous changeons la méthode HTTP utilisée pour envoyer les
données du formulaire de `POST` à `GET` ?

Pour tester cela, modifiez l'attribut `method` de l'élément `<form>` pour
utiliser la méthode `GET`. Sauvegardez les changements effectués et effectuez un
test de soumission du formulaire en saisissant une valeur dans le champ "Titre"
et en cliquant sur le bouton de soumission.

Vous devriez voir le contenu de la superglobale `$_POST` affiché sur la page,
mais cette fois-ci, le contenu sera vide, car les données du formulaire ont été
envoyées avec la méthode `GET` et sont donc accessibles via la superglobale
`$_GET`.

Vous remarquerez également que l'URL de la page a été modifiée pour inclure les
données du formulaire dans la chaîne de requête (query string) de l'URL, avec un
format similaire à celui-ci :

```text
http://localhost:8000/mini-projet/public/create.php?title=Titre+de+ma+t%C3%A2che
```

Ici, nous retrouvons la valeur saisie dans le champ "Titre" dans la chaîne de
requête de l'URL, avec la clé `title` et la valeur correspondante.

Ainsi, si quelqu'un venait à vouloir partager l'URL de la page après avoir
soumis le formulaire avec la méthode `GET`, il partagerait également les données
saisies dans le formulaire, ce qui pourrait poser des problèmes de
confidentialité. Ici, ce n'est pas tellement un problème, car le champ "Titre"
ne contient pas d'informations sensibles, mais imaginez l'utilisation de la
méthode `GET` pour un formulaire de connexion avec un champ "Mot de passe" : la
valeur saisie dans le champ "Mot de passe" serait visible dans l'URL, ce qui
n'est pas recommandé pour des informations sensibles.

Lors de l'utilisation de la méthode `GET`, les données du formulaire sont
visibles dans l'URL, ce qui n'est pas recommandé pour des informations
sensibles. C'est pourquoi nous allons continuer à utiliser la méthode `POST`
pour envoyer les données du formulaire dans les prochaines étapes.

Remettez l'attribut `method` de l'élément `<form>` à la valeur `POST` pour
continuer à utiliser la méthode `POST` pour envoyer les données du formulaire.

### Récupérer les données du formulaire côté serveur

Maintenant que nous avons vérifié que les données du formulaire sont bien reçues
côté serveur, nous allons ajouter le code nécessaire pour utiliser les données
du formulaire et les stocker dans des variables.

Pour récupérer les données du formulaire, vous pouvez modifier le fichier
`public/create.php` avec le code suivant :

```diff
diff --git a/mini-projet/public/create.php b/mini-projet/public/create.php
index 56ffc56..c020d67 100644
--- a/mini-projet/public/create.php
+++ b/mini-projet/public/create.php
@@ -2,17 +2,21 @@
 require_once __DIR__ . '/../src/constants.php';
 require_once __DIR__ . '/../src/functions.php';

-$title = '';
-$priority = '';
-$description = '';
-$deadline = '';
+$title = $_POST["title"] ?? '';
+$priority = $_POST["priority"] ?? '';
+$description = $_POST["description"] ?? '';
+$deadline = $_POST["deadline"] ?? '';
 $errors = [];

 // Gestion de la soumission du formulaire
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
     echo "Le formulaire a été soumis avec les données suivantes :<br>";
-    print_r($_POST);
+    echo "Titre : $title<br>";
+    echo "Priorité : $priority<br>";
+    echo "Description : $description<br>";
+    echo "Date limite : $deadline<br>";
 }
 ?>
```

Ici, nous remplaçons la valeur par défaut de la variable `$title` par le code
suivant :

```php
$title = $_POST["title"] ?? '';
```

Pour rappel, l'opérateur de coalescence nulle (`??`) est utilisé pour vérifier
si la clé `title` existe dans la superglobale `$_POST`. Si la clé existe, sa
valeur est assignée à la variable `$title`. Sinon, la variable `$title` est
assignée avec une chaîne vide (`''`).

L'opérateur de coalescence nulle est particulièrement utile pour définir des
valeurs par défaut pour les variables lorsque les données du formulaire ne sont
pas encore disponibles, comme c'est le cas avant la soumission du formulaire.

Le code ci-dessus est équivalent au code suivant :

```php
if (isset($_POST["title"])) {
    $title = $_POST["title"];
} else {
    $title = '';
}
```

Il s'agit d'une manière plus concise et lisible d'assigner une valeur par défaut
à la variable `$title` en fonction de la présence ou non de la clé `title` dans
la superglobale `$_POST`.

Ainsi, lors de l'accès à la page `create.php` avant la soumission du formulaire,
la variable `$title` sera initialisée avec une chaîne vide (`''`). Après la
soumission du formulaire, la variable `$title` sera assignée avec la valeur
saisie dans le champ "Titre" du formulaire, si elle existe à l'aide du nom
`title` donné à l'élément `<input>`.

Le principe est le même pour les autres champs du formulaire, et nous allons
donc utiliser la même approche pour récupérer les données des autres champs du
formulaire et les stocker dans des variables correspondantes.

Sauvegardez les changements effectués, rafraîchissez la page (voir note de la
section
[Rafraîchir la page après la soumission du formulaire](#rafraîchir-la-page-après-la-soumission-du-formulaire)),
et effectuez un test de soumission du formulaire en saisissant une valeur dans
le champ "Titre" et en cliquant sur le bouton de soumission. Vous devriez voir
le contenu de la variable `$title` affiché sur la page, ce qui indique que les
données du formulaire sont bien récupérées côté serveur avec un résultat
similaire à celui-ci :

```text
Le formulaire a été soumis avec les données suivantes :
Titre : Titre de ma tâche
Priorité :
Description :
Date limite :
```

Le reste des champs du formulaire n'ayant pas encore été ajoutés, les variables
correspondantes sont initialisées avec des chaînes vides (`''`) grâce à
l'opérateur de coalescence nulle (`??`). En effet, les champs n'existent pas
encore dans le formulaire, et donc les clés correspondantes dans la superglobale
`$_POST` n'existent pas non plus, ce qui entraîne l'assignation des valeurs par
défaut pour ces champs, qui sont des chaînes vides ('').

### Valider le titre de la tâche côté serveur

Avant d'ajouter les autres champs du formulaire, nous allons valider le champ
"Titre" côté serveur pour nous assurer que les données saisies par
l'utilisateur·trice sont correctes et respectent les contraintes définies.

Vous vous souvenez peut-être que nous avons déjà mis en place la fonction
`validateTask()` dans le fichier `src/functions.php` pour valider les valeurs
par défaut que nous avions définies. Nous allons maintenant utiliser cette
fonction pour valider les données saisies dans le formulaire côté serveur.

Modifiez le fichier `public/create.php` avec le code suivant pour valider le
titre de la tâche côté serveur :

```diff
diff --git a/mini-projet/public/create.php b/mini-projet/public/create.php
index 1ed8c3d..96e3573 100644
--- a/mini-projet/public/create.php
+++ b/mini-projet/public/create.php
@@ -10,11 +10,22 @@ $errors = [];

 // Gestion de la soumission du formulaire
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
-    echo "Le formulaire a été soumis avec les données suivantes :<br>";
-    echo "Titre : $title<br>";
-    echo "Priorité : $priority<br>";
-    echo "Description : $description<br>";
-    echo "Date limite : $deadline<br>";
+    $errors = validateTask(
+        $title,
+        $priority,
+        $description,
+        $deadline,
+    );
+
+    // S'il n'y a pas d'erreurs, ajoute la tâche à la base de données
+    if (empty($errors)) {
+        addTask(
+            $title,
+            $priority,
+            $description,
+            $deadline,
+        );
+    }
 }
 ?>
```

Ici, nous avons remplacé l'affichage temporaire des données du formulaire par un
appel à la fonction `validateTask()` pour valider les données saisies dans le
formulaire côté serveur.

Si des erreurs de validation sont présentes, elles seront stockées dans la
variable `$errors`, qui sera ensuite utilisée pour afficher les messages
d'erreur sur la page.

Ces messages d'erreur ne seront affichés que lorsque le formulaire sera soumis,
grâce au bloc conditionnel `if` que nous avons ajouté précédemment.

De plus, nous profitons de cette étape pour ajouter un bloc conditionnel qui
vérifie si la variable `$errors` est vide. Si c'est le cas, cela signifie qu'il
n'y a pas d'erreurs de validation, et nous pouvons donc appeler la fonction
`addTask()` pour ajouter la tâche à la base de données avec les données saisies
dans le formulaire.

Enregistrez les changements effectués et effectuez un test de soumission du
formulaire avec des données invalides pour voir les messages d'erreur de
validation s'afficher sur la page :

- Essayez de soumettre le formulaire avec un titre vide.
- Essayez de soumettre le formulaire avec un titre trop court (moins de 2
  caractères).
- Essayez de soumettre le formulaire avec un titre trop long (plus de 200
  caractères).

Les messages d'erreur de validation devraient s'afficher sur la page, indiquant
les problèmes rencontrés avec les données saisies dans le formulaire. Il est
normal que les messages d'erreur s'affichent pour les autres champs du
formulaire, car nous n'avons pas encore ajouté ces champs au formulaire. Nous y
reviendrons dans les prochaines étapes pour ajouter les autres champs.

Nous voyons que la fonction `addTask` n'est pas encore appelée lorsque des
erreurs de validation sont présentes, ce qui est le comportement attendu.

### Conserver le titre en cas d'erreur de validation

Vous avez peut-être remarqué que lorsque vous soumettez le formulaire avec des
données invalides, les données saisies sont perdues et le formulaire est
réinitialisé.

Cela peut être frustrant pour l'utilisateur·trice, car la personne doit
ressaisir toutes les données du formulaire même s'il n'y a qu'une seule erreur
de validation.

Pour cela, nous pouvons utiliser l'attribut `value` de l'élément `<input>` pour
conserver les données saisies dans le champ "Titre" en cas d'erreur de
validation.

L'attribut `value` permet de définir la valeur par défaut d'un champ de
formulaire. En utilisant une syntaxe PHP, nous pouvons définir la valeur de
l'attribut `value` avec la variable `$name`, qui contient la valeur saisie par
l'utilisateur·trice dans le champ "Titre" lorsqu'une erreur de validation est
présente.

Avant de rentrer dans les détails, modifiez le fichier `public/create.php` avec
le code suivant pour ajouter l'attribut `value` à l'élément `<input>` du champ
"Titre" :

```php
<input
    type="text"
    name="title"
    value="Mon champ a une valeur par défaut" />
```

Ici, nous avons ajouté l'attribut `value` à l'élément `<input>` avec une valeur
par défaut de "Mon champ a une valeur par défaut". Cela signifie que lorsque la
page est chargée, le champ "Titre" sera pré-rempli avec cette valeur par défaut.

Sauvegardez les changements effectués et rafraîchissez la page (voir note de la
section
[Rafraîchir la page après la soumission du formulaire](#rafraîchir-la-page-après-la-soumission-du-formulaire)).
Vous devriez voir que le champ "Titre" est pré-rempli avec la valeur par défaut
que nous avons définie.

Soumettez le formulaire avec des données invalides pour voir les messages
d'erreur de validation s'afficher sur la page. Vous remarquerez que le champ
"Titre" est toujours pré-rempli avec la valeur par défaut, nous avons donc perdu
les données saisies par l'utilisateur·trice.

Afin de conserver les données saisies par les utilisateur·trices, il suffit de
remplacer la valeur par défaut de l'attribut `value` avec la variable `$title`,
qui contient la valeur saisie par l'utilisateur·trice dans le champ "Titre"
lorsqu'une erreur de validation est présente.

Modifiez le fichier `public/create.php` avec le code suivant pour utiliser la
variable `$title` comme valeur de l'attribut `value` :

```php
<input
    type="text"
    name="title"
    value="<?= $title ?>" />
```

Sauvegardez les changements effectués et rafraîchissez la page (voir note de la
section
[Rafraîchir la page après la soumission du formulaire](#rafraîchir-la-page-après-la-soumission-du-formulaire)).

Soumettez le formulaire avec des données invalides pour voir les messages
d'erreur de validation s'afficher sur la page. Vous devriez voir que les données
saisies sont conservées dans le champ "Titre" du formulaire, ce qui facilite la
correction des erreurs de validation et offre une meilleure expérience pour vos
utilisateur·trices.

### Valider le titre du formulaire côté client

En plus de la validation côté serveur que nous avons déjà mise en place, il est
également possible d'ajouter une validation côté client pour améliorer
l'expérience utilisateur·trice en fournissant un retour immédiat sur les erreurs
de validation avant même que le formulaire ne soit soumis.

Pour cela, nous pouvons utiliser les attributs de validation HTML5 pour le champ
"Titre". Par exemple, nous pouvons ajouter les attributs `required`, `minlength`
et `maxlength` pour définir les règles de validation directement dans le code
HTML du formulaire :

```php
<input
    type="text"
    name="title"
    value="<?= $title ?>"
    required
    minlength="2"
    maxlength="200" />
```

Ainsi, votre navigateur effectuera une validation côté client avant de soumettre
le formulaire.

Si le champ "Titre" est laissé vide, ou si la valeur saisie est trop courte ou
trop longue, le navigateur affichera un message d'erreur et empêchera la
soumission du formulaire jusqu'à ce que les données soient corrigées.

Sauvegardez les changements effectués, rafraîchissez la page (voir note de la
section
[Rafraîchir la page après la soumission du formulaire](#rafraîchir-la-page-après-la-soumission-du-formulaire))
et effectuez un test de soumission du formulaire en laissant le champ "Titre"
vide, ou en saisissant une valeur trop courte ou trop longue. Vous devriez voir
les messages d'erreur de validation s'afficher directement dans le navigateur,
avant même qu'une réelle soumission ne soit effectuée, offrant un retour
immédiat à l'utilisateur·trice.

Une fois le formulaire soumis avec des données valides, vous devriez voir les
messages de succès s'afficher sur la page, indiquant que la tâche a été créée
avec succès.

Dans la prochaine séance, nous allons remplacer ce message de succès par
l'enregistrement réel de la tâche dans la base de données, mais pour l'instant,
nous validons le bon fonctionnement du formulaire et sa validation côté serveur
et côté client.

### Contourner la validation côté client

Il est important de retenir que la validation client **ne remplace pas** la
validation côté serveur.

La validation côté client est une amélioration de l'expérience
utilisateur·trice, mais elle ne doit jamais être utilisée comme la seule méthode
de validation, car elle peut être contournée par des utilisateur·trices
malveillant·es ou des bots (= scripts automatisés). La validation côté serveur
est essentielle pour garantir la sécurité et l'intégrité des données.

Afin de prouver que la validation côté client ne remplace pas la validation côté
serveur, vous pouvez contourner la validation côté client grâce aux outils de
développement de votre navigateur.

1. Ouvrez les outils de développement de votre navigateur (clic droit >
   "Inspecter").
2. Utilisez l'outil de sélection d'élément pour sélectionner le champ "Titre".
3. Dans l'onglet "Éléments", supprimez les attributs `required`, `minlength` et
   `maxlength` du champ "Titre".
4. Saisissez un titre vide ou un titre de moins de 2 ou de plus de 50 caractères
   dans le champ "Titre" et cliquez sur le bouton "Créer". Vous devriez voir les
   messages d'erreur affichés à l'écran.

Le formulaire devrait être soumis malgré les données invalides, et les erreurs
de validation devraient être affichées, prouvant que la validation côté client
ne remplace pas la validation côté serveur.

Dès que vous rafraîchissez la page (voir note de la section
[Rafraîchir la page après la soumission du formulaire](#rafraîchir-la-page-après-la-soumission-du-formulaire)),
le champ "Titre" sera de nouveau soumis à la validation côté client, car les
attributs de validation HTML5 sont de nouveau présents dans le code HTML du
formulaire.

Validez le bon fonctionnement du formulaire à l'aide des outils de développement
de votre navigateur pour contourner la validation côté client et vérifier que la
validation côté serveur fonctionne correctement.

N'oubliez pas de commiter vos changements et de pousser votre branche sur GitHub
pour sauvegarder votre travail.

> [!TIP]
>
> Ici serait un bon moment pour créer la pull request de votre branche de
> travail vers la branche principale du dépôt GitHub du mini-projet. **Ne la
> fusionnez pas encore**, car nous allons continuer à travailler sur le
> formulaire de création d'une nouvelle tâche dans les prochaines étapes. Vous
> pourrez fusionner la pull request une fois que toutes les fonctionnalités du
> formulaire seront implémentées et validées.

### Mettre en place les autres champs du formulaire

Dans cette section, nous allons créer les autres champs du formulaire. Le
processus est similaire à celui du champ "Titre", décomposé en plusieurs étapes
:

1. Ajout du champ.
2. Réception des données côté serveur.
3. Validation des données côté serveur.
4. Conservation des données saisies en cas d'erreur de validation.
5. Validation des données côté client.

#### Mettre en place le champ "Priorité"

Nous allons maintenant ajouter le champ "Priorité" au formulaire. Le champ
"Priorité" est un champ obligatoire qui doit être l'une des valeurs suivantes :
`low`, `medium` ou `high`. Pour cela, nous allons utiliser un élément `<select>`
avec des options pour chaque valeur possible.

##### Ajouter le champ au formulaire

Modifiez le fichier `public/create.php` avec le code suivant pour ajouter le
champ "Priorité" au formulaire :

```php
<label>Priorité
    <select name="priority">
        <option value="low">Basse</option>
        <option value="medium">Moyenne</option>
        <option value="high">Haute</option>
    </select>
</label>
```

Le champ "Priorité" est représenté par un élément `<select>` avec l'attribut
`name` défini avec la valeur `priority`. Chaque option du champ est représentée
par un élément `<option>` avec l'attribut `value` défini avec la valeur
correspondante (`low`, `medium` ou `high`). L'étiquette descriptive pour le
champ de saisie est fournie par l'élément `<label>`.

Sauvegardez les changements effectués et rafraîchissez la page (voir note de la
section
[Rafraîchir la page après la soumission du formulaire](#rafraîchir-la-page-après-la-soumission-du-formulaire)).
Vous devriez voir le champ "Priorité" ajouté au formulaire avec les options
"Basse", "Moyenne" et "Haute".

Afin de sélectionner une valeur par défaut pour le champ "Priorité", vous pouvez
utiliser l'attribut `selected` sur l'élément `<option>` correspondant à la
valeur par défaut souhaitée.

Par exemple, pour sélectionner la valeur "Moyenne" par défaut, vous pouvez
modifier le code du champ "Priorité" comme suit :

```php
<label>Priorité
    <select name="priority">
        <option value="low">Basse</option>
        <option value="medium" selected>Moyenne</option>
        <option value="high">Haute</option>
    </select>
</label>
```

Sauvegardez les changements effectués et rafraîchissez la page (voir note de la
section
[Rafraîchir la page après la soumission du formulaire](#rafraîchir-la-page-après-la-soumission-du-formulaire)).
Vous devriez voir que la valeur "Moyenne" est sélectionnée par défaut dans le
champ "Priorité".

Soumettez le formulaire avec des données valides. Vous devriez maintenant voir
le contenu de la fonction `addTask()` affiché sur la page ainsi que le message
de succès affiché, ce qui indique que les données du formulaire sont bien reçues
côté serveur avec un résultat similaire à celui-ci :

```text
Ajout d'une tâche avec les données suivantes :
Titre : Titre de ma tâche
Priorité : low
Description :
Date limite :
```

En effet, comme les autres champs restants du formulaire sont optionnels dans
l'appel de la fonction `validateTask()`, la validation côté serveur ne renverra
pas d'erreur pour ces champs, même s'ils n'existent pas encore dans le
formulaire.

Comme il n'y a pas d'erreurs de validation, la fonction `addTask()` est appelée
avec les données saisies dans le formulaire, ce qui permet d'afficher les
données de la tâche ajoutée sur la page.

##### Récupérer les données du champ côté serveur

Les données du champ "Priorité" sont déjà récupérées côté serveur grâce à la
variable `$priority` que nous avons définie précédemment avec le code suivant :

```php
$priority = $_POST["priority"] ?? '';
```

Pour rappel, nous utilisons l'opérateur de coalescence nulle (`??`) pour
vérifier si la clé `priority` existe dans la superglobale `$_POST`. Si la clé
existe, sa valeur est assignée à la variable `$priority`. Sinon, la variable
`$priority` est assignée avec une chaîne vide (`''`).

##### Valider les données du champ côté serveur

La validation des données du champ "Priorité" est déjà effectuée côté serveur
grâce à la fonction `validateTask()` que nous avons utilisée précédemment pour
valider les données du formulaire. La fonction vérifie si la valeur saisie dans
le champ "Priorité" est l'une des valeurs autorisées (`low`, `medium`ou `high`).
Si la valeur saisie n'est pas valide, un message d'erreur est ajouté à la
variable `$errors`, qui sera ensuite utilisée pour afficher les messages
d'erreur sur la page.

Pour tester la validation côté serveur, vous pouvez soumettre le formulaire avec
une valeur invalide pour le champ "Priorité" en utilisant les outils de
développement de votre navigateur pour modifier le code HTML du formulaire et
ajouter une option invalide dans le champ "Priorité" :

```php
<option value="invalid">Invalide</option>
```

##### Conserver les données saisies en cas d'erreur de validation

Afin de conserver les données saisies dans le champ "Priorité" en cas d'erreur
de validation, nous pouvons utiliser l'attribut `selected` sur l'élément
`<option>` correspondant à la valeur saisie par l'utilisateur·trice.

Pour cela, nous pouvons utiliser une syntaxe PHP pour vérifier si la valeur de
l'option correspond à la valeur de la variable `$priority`. Si c'est le cas,
nous ajoutons l'attribut `selected` à l'élément `<option>` pour le sélectionner
par défaut (de la même manière que présenté manuellement précédemment) à l'aide
d'un `if` ternaire :

```php
<option value="low" <?= $priority === 'low' ? 'selected' : '' ?>>Basse</option>
<option value="medium" <?= $priority === 'medium' ? 'selected' : '' ?>>Moyenne</option>
<option value="high" <?= $priority === 'high' ? 'selected' : '' ?>>Haute</option>
```

Si la valeur de la variable `$priority` correspond à la valeur de l'option,
l'attribut `selected` est ajouté à l'élément `<option>`, ce qui permet de
conserver la valeur saisie par l'utilisateur·trice en cas d'erreur de
validation.

Si vous rafraîchissez la page après avoir soumis le formulaire (voir note de la
section
[Rafraîchir la page après la soumission du formulaire](#rafraîchir-la-page-après-la-soumission-du-formulaire)),
la valeur "Basse" sera sélectionnée par défaut dans le champ "Priorité", car la
valeur par défaut de la variable `$priority` est une chaîne vide (`''`), qui ne
correspond à aucune des valeurs autorisées pour le champ "Priorité". Ainsi,
aucune option n'a l'attribut `selected` et la valeur "Basse" est sélectionnée
par défaut.

##### Valider les données du champ côté client

Afin d'ajouter une validation côté client pour le champ "Priorité", nous pouvons
utiliser l'attribut `required` sur l'élément `<select>` pour indiquer que le
champ est obligatoire. Cela empêchera la soumission du formulaire si aucune
option n'est sélectionnée :

```php
<select name="priority" required>
    <option value="low" <?= $priority === 'low' ? 'selected' : '' ?>>Basse</option>
    <option value="medium" <?= $priority === 'medium' ? 'selected' : '' ?>>Moyenne</option>
    <option value="high" <?= $priority === 'high' ? 'selected' : '' ?>>Haute</option>
</select>
```

Si une option n'est pas sélectionnée dans le champ "Priorité", le navigateur
affichera un message d'erreur et empêchera la soumission du formulaire jusqu'à
ce qu'une option soit sélectionnée.

Pour tester si la validation côté client fonctionne correctement, vous pouvez
ajouter une première option vide dans le champ "Priorité" et soumettre le
formulaire sans sélectionner une option :

```php
<option value="" disabled selected>Sélectionnez une priorité</option>
```

Si vous soumettez le formulaire avec cette option vide (voir note de la section
[Rafraîchir la page après la soumission du formulaire](#rafraîchir-la-page-après-la-soumission-du-formulaire)),
le navigateur affichera un message d'erreur indiquant que le champ "Priorité"
est obligatoire.

Une fois que vous avez testé la validation côté client, vous pouvez supprimer
cette option vide pour revenir à la version précédente du champ "Priorité".

Nous avons maintenant mis en place la validation côté serveur et côté client
pour le champ "Priorité", bravo !

Validez le bon fonctionnement du formulaire à l'aide des outils de développement
de votre navigateur pour contourner la validation côté client et vérifier que la
validation côté serveur fonctionne correctement.

N'oubliez pas de commiter vos changements et de pousser votre branche sur GitHub
pour sauvegarder votre travail.

#### Mettre en place le champ "Description"

Le champ "Description" est un champ optionnel qui permet à l'utilisateur·trice
de saisir une description pour la tâche. Pour cela, nous allons utiliser un
élément `<textarea>` pour permettre à l'utilisateur·trice de saisir du texte sur
plusieurs lignes.

##### Ajouter le champ au formulaire

Ajoutez le champ "Description" au formulaire en modifiant le fichier
`public/create.php` avec le code suivant :

```php
<label>Description (optionnelle)
    <textarea
        name="description"></textarea>
</label>
```

Ici, le champ "Description" est représenté par un élément `<textarea>` avec
l'attribut `name` défini avec la valeur `description`. L'étiquette descriptive
pour le champ de saisie est fournie par l'élément `<label>`.

Un `textarea` permet à l'utilisateur·trice de saisir du texte sur plusieurs
lignes, ce qui est particulièrement utile pour les descriptions de tâches qui
peuvent être plus longues qu'un champ de saisie standard (`<input>` avec le type
`text`).

##### Récupérer les données du champ côté serveur

Les données du champ "Description" sont déjà récupérées côté serveur grâce à la
variable `$description` que nous avons définie précédemment avec le code suivant
:

```php
$description = $_POST["description"] ?? '';
```

##### Valider les données du champ côté serveur

La validation des données du champ "Description" est déjà effectuée côté serveur
grâce à la fonction `validateTask()` que nous avons utilisée précédemment pour
valider les données du formulaire. La fonction vérifie si la valeur saisie dans
le champ "Description" est plus grande que 10 caractères et ne dépasse pas les
1000 caractères. Si cette condition n'est pas respectée, un message d'erreur est
ajouté à la variable `$errors`, qui sera ensuite utilisée pour afficher les
messages d'erreur sur la page.

##### Conserver les données saisies en cas d'erreur de validation

Afin de conserver les données saisies dans le champ "Description" en cas
d'erreur de validation, nous pouvons utiliser la syntaxe PHP pour définir le
contenu de l'élément `<textarea>` avec la variable `$description`, qui contient
la valeur saisie par l'utilisateur·trice dans le champ "Description" lorsqu'une
erreur de validation est présente :

```php
<textarea
    name="description"><?= $description ?></textarea>
```

Sauvegardez les changements effectués et rafraîchissez la page (voir note de la
section
[Rafraîchir la page après la soumission du formulaire](#rafraîchir-la-page-après-la-soumission-du-formulaire)).
Soumettez le formulaire avec des données invalides pour voir les messages
d'erreur de validation s'afficher sur la page. Vous devriez voir que les données
saisies sont conservées dans le champ "Description" du formulaire, ce qui
facilite la correction des erreurs de validation et offre une meilleure
expérience pour vos utilisateur·trices.

##### Valider les données du champ côté client

Afin d'ajouter une validation côté client pour le champ "Description", nous
pouvons utiliser les attributs `minlength` et `maxlength` sur l'élément
`<textarea>` pour définir les règles de validation directement dans le code HTML
du formulaire :

```php
<textarea
    name="description"
    minlength="10"
    maxlength="1000"><?= $description ?></textarea>
```

Ici, la description reste optionnelle (il n'y a donc pas d'attribut `required`),
mais si l'utilisateur·trice saisit une valeur, elle doit respecter les
contraintes de longueur définies par les attributs `minlength` et `maxlength`.
Si la valeur saisie ne respecte pas ces contraintes, le navigateur affichera un
message d'erreur et empêchera la soumission du formulaire jusqu'à ce que les
données soient corrigées.

Nous avons maintenant mis en place la validation côté serveur et côté client
pour le champ "Description", bravo !

Validez le bon fonctionnement du formulaire à l'aide des outils de développement
de votre navigateur pour contourner la validation côté client et vérifier que la
validation côté serveur fonctionne correctement.

N'oubliez pas de commiter vos changements et de pousser votre branche sur GitHub
pour sauvegarder votre travail.

#### Mettre en place le champ "Date limite"

Le champ "Date limite" est un champ optionnel qui permet à l'utilisateur·trice
de saisir une date limite pour la tâche. Pour cela, nous allons utiliser un
élément `<input>` avec l'attribut `type` défini avec la valeur `date`, ce qui
permet à l'utilisateur·trice de saisir une date au format `YYYY-MM-DD`
(année-mois-jour).

##### Ajouter le champ au formulaire

Ajoutez le champ "Date limite" au formulaire en modifiant le fichier
`public/create.php` avec le code suivant :

```php
<label>Date limite (optionnelle)
    <input
        type="date"
        name="deadline" />
</label>
```

Ici, le champ "Date limite" est représenté par un élément `<input>` avec
l'attribut `type` défini avec la valeur `date` et l'attribut `name` défini avec
la valeur `deadline`. L'étiquette descriptive pour le champ de saisie est
fournie par l'élément `<label>`.

Un champ de saisie de type `date` permet à l'utilisateur·trice de saisir une
date au format `YYYY-MM-DD` (année-mois-jour). Le navigateur affichera un
sélecteur de date pour faciliter la saisie de la date.

##### Récupérer les données du champ côté serveur

Les données du champ "Date limite" sont déjà récupérées côté serveur grâce à la
variable `$deadline` que nous avons définie précédemment avec le code suivant :

```php
$deadline = $_POST["deadline"] ?? '';
```

##### Valider les données du champ côté serveur

La validation des données du champ "Date limite" est déjà effectuée côté serveur
grâce à la fonction `validateTask()` que nous avons utilisée précédemment pour
valider les données du formulaire. La fonction vérifie si la valeur saisie dans
le champ "Date limite" est une date valide au format `YYYY-MM-DD`. Si la valeur
saisie n'est pas valide, un message d'erreur est ajouté à la variable `$errors`,
qui sera ensuite utilisée pour afficher les messages d'erreur sur la page.

##### Conserver les données saisies en cas d'erreur de validation

Tout comme pour le champ "Titre", nous pouvons utiliser l'attribut `value` de
l'élément `<input>` pour conserver les données saisies dans le champ "Date
limite" en cas d'erreur de validation :

```php
<input
    type="date"
    name="deadline"
    value="<?= $deadline ?>" />
```

Sauvegardez les changements effectués et rafraîchissez la page (voir note de la
section
[Rafraîchir la page après la soumission du formulaire](#rafraîchir-la-page-après-la-soumission-du-formulaire)).
Soumettez le formulaire avec des données invalides pour voir les messages
d'erreur de validation s'afficher sur la page. Vous devriez voir que les données
saisies sont conservées dans le champ "Date limite" du formulaire, ce qui
facilite la correction des erreurs de validation et offre une meilleure
expérience pour vos utilisateur·trices.

##### Valider les données du champ côté client

Afin d'ajouter une validation côté client pour le champ "Date limite", nous
pouvons utiliser l'attribut `min` sur l'élément `<input>` pour définir la date
minimale autorisée pour la saisie de la date limite. Par exemple, nous pouvons
définir la date minimale à aujourd'hui pour empêcher l'utilisateur·trice de
saisir une date passée :

```php
<input
    type="date"
    name="deadline"
    min="<?= date('Y-m-d') ?>"
    value="<?= $deadline ?>" />
```

Ici, la date limite reste optionnelle (il n'y a donc pas d'attribut `required`),
mais si l'utilisateur·trice saisit une valeur, elle doit être supérieure ou
égale à la date actuelle à l'aide de l'attribut `min`. La fonction
`date('Y-m-d')` de PHP permet de récupérer la date actuelle au format
`YYYY-MM-DD` (année-mois-jour).

Si la valeur saisie ne respecte pas cette contrainte, le navigateur affichera un
message d'erreur et empêchera la soumission du formulaire jusqu'à ce que les
données soient corrigées.

Nous avons maintenant mis en place la validation côté serveur et côté client
pour le champ "Date limite", bravo !

Validez le bon fonctionnement du formulaire à l'aide des outils de développement
de votre navigateur pour contourner la validation côté client et vérifier que la
validation côté serveur fonctionne correctement.

N'oubliez pas de commiter vos changements et de pousser votre branche sur GitHub
pour sauvegarder votre travail.

### Tester le formulaire complet

Vous pouvez maintenant tester votre formulaire. Essayez de changer les valeurs
saisies dans les champs et de soumettre le formulaire pour voir les messages
d'erreur de validation s'afficher à l'écran.

N'hésitez pas à utiliser les outils de développement de votre navigateur pour
contourner la validation côté client et vérifier que la validation côté serveur
fonctionne correctement.

N'oubliez de suivre le workflow Git/GitHub pour cette tâche.

> [!TIP]
>
> Ici serait un bon moment pour valider et fusionner la pull request de votre
> branche de travail vers la branche principale du dépôt GitHub du mini-projet.
> Vous pourrez ensuite créer une nouvelle branche pour la prochaine
> fonctionnalité.

## Rendre dynamique la page d'accueil et de visualisation des tâches

Dans cette section, nous allons voir comment utiliser la superglobale `$_GET`
pour récupérer les données de l'URL et les utiliser pour afficher les
informations de la tâche sélectionnée sur la page d'accueil et de visualisation.

Comme nous avons étudié lors de la première séance de ce cours
[Introduction à PHP](../../01.02-introduction-a-php/README.md), PHP repose sur
une architecture client-serveur. Le serveur web reçoit les requêtes HTTP du
client (navigateur web) et renvoie les réponses correspondantes.

Lorsque votre navigateur demande une page web, il envoie une requête HTTP au
serveur web. Cette requête peut contenir des paramètres dans l'URL, qui sont
accessibles côté serveur via la superglobale `$_GET`, qui est un tableau
associatif contenant les paramètres de la requête HTTP, exactement comme nous
l'avons vu dans la séance
[Tableaux et boucles](../../02-tableaux-et-boucles/README.md).

Maintenant que nous avons étudié un peu plus en détail les formulaires HTML avec
notamment l'envoi de données via la méthode `GET` ou la méthode `POST`, nous
pouvons nous reposer sur ces acquis pour utiliser la superglobale `$_GET` pour
récupérer les données de l'URL et les utiliser pour afficher les informations de
la tâche sélectionnée sur la page d'accueil et de visualisation.

> [!WARNING]
>
> N'oubliez pas de créer une issue et sa branche dédiée pour cette nouvelle
> fonctionnalité !

### Mettre à jour la page de visualisation

Actuellement, la page de visualisation affiche les informations d'une tâche avec
un identifiant fixe (ID = 1). Nous allons modifier cette page pour qu'elle
affiche les informations de la tâche sélectionnée en fonction de l'identifiant
passé dans l'URL via la superglobale `$_GET`.

Pour cela, modifiez le fichier `public/view.php` pour récupérer l'identifiant de
la tâche depuis l'URL :

```php
diff --git a/mini-projet/public/view.php b/mini-projet/public/view.php
index 5e9120f..504d5a5 100644
--- a/mini-projet/public/view.php
+++ b/mini-projet/public/view.php
@@ -2,7 +2,12 @@
 require_once __DIR__ . '/../src/constants.php';
 require_once __DIR__ . '/../src/functions.php';

-$taskId = 1;
+$taskId = $_GET['id'] ?? null;
+
+if ($taskId === null) {
+    header('Location: ./index.php');
+    exit;
+}

 $task = getTaskById($taskId);
```

En utilisant la superglobale `$_GET`, nous récupérons l'identifiant de la tâche
depuis l'URL. Nous cherchons la clé `id` (symbolisé par le query parameter `id`
dans l'URL, par exemple `http://localhost:8080/view.php?id=1`) dans le tableau
associatif `$_GET`. Si la clé n'existe pas, la variable `$taskId` sera assignée
avec la valeur `null`.

Si l'identifiant n'est pas présent dans l'URL (car la variable `$taskId` est
`null`), nous redirigeons l'utilisateur·trice vers la page d'accueil avec la
fonction `header()` et nous arrêtons l'exécution du script avec la fonction
`exit()`, comme utilisé dans la séance précédente.

N'oubliez pas de commiter vos changements et de pousser votre branche sur GitHub
pour sauvegarder votre travail.

> [!TIP]
>
> Ici serait un bon moment pour créer la pull request de votre branche de
> travail vers la branche principale du dépôt GitHub du mini-projet. **Ne la
> fusionnez pas encore**, car nous allons continuer à travailler sur le
> formulaire de création d'une nouvelle tâche dans les prochaines étapes. Vous
> pourrez fusionner la pull request une fois que toutes les fonctionnalités du
> formulaire seront implémentées et validées.

### Tester la page de visualisation

Maintenant que nous avons mis à jour la page de visualisation pour qu'elle
affiche les informations de la tâche sélectionnée en fonction de l'identifiant
passé dans l'URL via la superglobale `$_GET`, nous pouvons tester cette
fonctionnalité en accédant à la page de visualisation avec différents
identifiants dans l'URL.

Par exemple, testez d'accéder à la page de visualisation avec les URLs suivantes
:

1. <http://localhost:8080/view.php?id=1>
2. <http://localhost:8080/view.php?id=2>
3. <http://localhost:8080/view.php?id=3>
4. <http://localhost:8080/view.php?id=4>
5. <http://localhost:8080/view.php?id=5>
6. <http://localhost:8080/view.php>
7. <http://localhost:8080/view.php?id=invalid>

De façon dynamique, la page de visualisation devrait afficher les informations
de la tâche correspondante à l'identifiant passé dans l'URL (cas 1 à 4). Si
l'identifiant n'existe pas car il n'y a pas de tâche correspondante (cas 5), ou
si l'identifiant n'est simplement pas présent dans l'URL (cas 6), la page de
visualisation devrait rediriger l'utilisateur·trice vers la page d'accueil.

Un cas spécial est le cas 7, où l'identifiant passé dans l'URL n'est pas un
entier. Dans ce cas, une erreur de conversion de type sera levée par la fonction
`getTaskById()`, car elle attend un entier en paramètre.

L'erreur levée sera de type `TypeError` et le message d'erreur affiché sera
similaire à celui-ci :

```text
Fatal error: Uncaught TypeError: getTaskById(): Argument #1 ($id) must be of type int, string given, called in /workspace/mini-projet/public/view.php on line 12 and defined in /workspace/mini-projet/src/functions.php:36 Stack trace: #0 /workspace/mini-projet/public/view.php(12): getTaskById('invalid') #1 {main} thrown in /workspace/mini-projet/src/functions.php on line 36
```

Nous pouvons corriger ce problème en ajoutant une validation pour vérifier si
l'identifiant passé dans l'URL est un entier avant de l'utiliser pour récupérer
les informations de la tâche :

```diff
diff --git a/mini-projet/public/view.php b/mini-projet/public/view.php
index 504d5a5..91516af 100644
--- a/mini-projet/public/view.php
+++ b/mini-projet/public/view.php
@@ -4,7 +4,7 @@ require_once __DIR__ . '/../src/functions.php';

 $taskId = $_GET['id'] ?? null;

-if ($taskId === null) {
+if ($taskId === null || !is_numeric($taskId)) {
     header('Location: ./index.php');
     exit;
 }
```

Grâce à la fonction `is_numeric()`, nous vérifions si la valeur de `$taskId` est
un nombre. Si ce n'est pas le cas, nous redirigeons l'utilisateur·trice vers la
page d'accueil.

Le cas 7 devrait maintenant rediriger l'utilisateur·trice vers la page d'accueil
au lieu d'afficher une erreur de conversion de type.

N'oubliez pas de commiter vos changements et de pousser votre branche sur GitHub
pour sauvegarder votre travail.

### Mettre à jour la page d'accueil

La page d'accueil peut également être mise à jour pour rediriger
l'utilisateur·trice pour ajouter l'identifiant de la tâche sélectionnée dans
l'URL lors du clic sur le lien "Voir la tâche" pour chaque tâche affichée :

```diff
diff --git a/mini-projet/public/index.php b/mini-projet/public/index.php
index e331062..96f22ed 100644
--- a/mini-projet/public/index.php
+++ b/mini-projet/public/index.php
@@ -61,7 +61,7 @@ $tasks = getTasks();
                     <?php } ?>

                     <footer>
-                        <a class="btn btn-primary btn-sm" href="./view.php">
+                        <a class="btn btn-primary btn-sm" href="./view.php?id=<?= $task['id'] ?>">
                             Visualiser la tâche
                         </a>
                     </footer>
```

Pour cela, nous avons ajouté l'identifiant de la tâche dans l'URL du lien "Voir
la tâche" en utilisant la syntaxe PHP `?id=<?= $task['id'] ?>` pour récupérer
l'identifiant de la tâche actuelle dans la boucle `foreach`.

En effet, comme chaque tâche est représentée par un tableau associatif contenant
les informations de la tâche, nous pouvons accéder à l'identifiant de la tâche
en utilisant la clé `id` du tableau associatif `$task` et en généré le lien vers
la page de visualisation avec l'identifiant de la tâche dans l'URL.

De cette manière, lorsque l'utilisateur·trice clique sur le lien "Voir la
tâche", il/elle sera redirigé·e vers la page de visualisation avec l'identifiant
de la tâche sélectionnée dans l'URL, ce qui permettra d'afficher les
informations de la tâche correspondante.

N'oubliez pas de commiter vos changements et de pousser votre branche sur GitHub
pour sauvegarder votre travail.

### Tester la page d'accueil

Sauvegardez les changements effectués et rafraîchissez la page d'accueil.

La liste des tâches restera inchangée, mais les liens "Voir la tâche" pour
chaque tâche devraient maintenant inclure l'identifiant de la tâche dans l'URL.

Ainsi, vous accédez à la page de visualisation avec l'identifiant de la tâche
sélectionnée dans l'URL, ce qui permettra d'afficher les informations de la
tâche correspondante.

> [!TIP]
>
> Ici serait un bon moment pour valider et fusionner la pull request de votre
> branche de travail vers la branche principale du dépôt GitHub du mini-projet.
> Vous pourrez ensuite créer une nouvelle branche pour la prochaine
> fonctionnalité.

## Mettre en place le formulaire de suppression d'une tâche

Dans cette dernière section, nous allons mettre en place le formulaire de
suppression d'une tâche. Le formulaire de suppression sera affiché sur la page
de visualisation de la tâche et permettra à l'utilisateur·trice de supprimer la
tâche sélectionnée en cliquant sur un bouton "Supprimer la tâche".

> [!WARNING]
>
> N'oubliez pas de créer une issue et sa branche dédiée pour cette nouvelle
> fonctionnalité !

### Créer la base du formulaire

Commencez par créer une nouvelle page publique `delete.php` dans le dossier
`public/` avec le code suivant :

```php
<?php
require_once __DIR__ . '/../src/constants.php';
require_once __DIR__ . '/../src/functions.php';

$taskId = $_GET['id'] ?? null;

if ($taskId === null || !is_numeric($taskId)) {
    header('Location: ./index.php');
    exit;
}

$task = getTaskById($taskId);

if ($task === null) {
    header('Location: ./index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="https://unpkg.com/@digicreon/mucss/dist/mu.css">
    <link rel="stylesheet" href="./css/styles.css">

    <title>Supprimer la tâche | <?= APP_NAME; ?> <?= APP_AUTHOR; ?></title>
    <meta name="description" content="Supprimer une tâche pour <?= APP_AUTHOR; ?>.">
</head>

<body class="container">
    <header>
        <nav>
            <ul>
                <li><strong>Liste de tâches</strong></li>
            </ul>
            <ul>
                <li><a href="./index.php">Accueil</a></li>
                <li><a href="./create.php">Nouvelle tâche</a></li>
            </ul>
        </nav>
        <nav aria-label="breadcrumb">
            <ul>
                <li><a href="./index.php">Accueil</a></li>
                <li><a href="./view.php?id=<?= $task['id'] ?>"><?= $task['title'] ?></a></li>
                <li>Supprimer la tâche</li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Supprimer la tâche ?</h1>

        <p>Souhaitez-vous vraiment supprimer la tâche <strong><?= $task['title'] ?></strong> ? Cette action est irréversible.</p>

        <form action="./delete.php" method="POST">
            <button class="btn btn-error" type="submit">Supprimer la tâche</button>
            <a class="btn btn-secondary full-width" href="./view.php?id=<?= $task['id'] ?>">
                Revenir à la page de visualisation
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

Prenez quelques instants pour examiner le code de la page `delete.php`.

Vous pouvez voir que nous avons utilisé la superglobale `$_GET` pour récupérer
l'identifiant de la tâche depuis l'URL, et nous avons utilisé la fonction
`getTaskById()` pour récupérer les informations de la tâche correspondante.

La page affiche ensuite un formulaire de confirmation demandant à
l'utilisateur·trice s'il/elle souhaite vraiment supprimer la tâche sélectionnée,
avec un bouton "Supprimer la tâche" et un lien pour revenir à la page de
visualisation de la tâche, utilisant également l'identifiant de la tâche dans
l'URL.

Pour le moment, la page ressemble beaucoup à la page de visualisation, avec un
formulaire supplémentaire.

### Ajouter le lien de suppression à la page de visualisation

Dans la page de visualisation d'une tâche, ajoutez un lien vers la page de
suppression :

```diff
diff --git a/mini-projet/public/view.php b/mini-projet/public/view.php
index 91516af..4988900 100644
--- a/mini-projet/public/view.php
+++ b/mini-projet/public/view.php
@@ -65,6 +65,12 @@ if ($task === null) {
             <?php if (!empty($task['description'])) { ?>
                 <p><?= $task['description'] ?></p>
             <?php } ?>
+
+            <footer>
+                <a class="btn btn-error btn-sm" href="./delete.php?id=<?= $task['id'] ?>">
+                    Supprimer la tâche
+                </a>
+            </footer>
         </article>
     </main>
     <footer>
```

De la même manière que nous avons ajouté l'identifiant de la tâche dans l'URL du
lien "Voir la tâche" sur la page d'accueil, nous avons ajouté l'identifiant de
la tâche dans l'URL du lien "Supprimer la tâche" sur la page de visualisation.

### Visualiser le formulaire

Accédez à la page de visualisation d'une tâche et cliquez sur le lien "Supprimer
la tâche" pour accéder à la page de suppression. Vous devriez voir le formulaire
de confirmation avec le titre de la tâche sélectionnée et le bouton "Supprimer
la tâche".

Vous remarquez peut-être que le bouton "Revenir à la page de visualisation" ne
prend pas la largeur complète de la page. Pour corriger cela, nous allons
ajouter une classe CSS `full-width` aux styles CSS du mini-projet. Ouvrez le
fichier `public/css/styles.css` et ajoutez le code suivant :

```css
/* Styles pour que l'élément prenne la largeur totale de leur conteneur */
.full-width {
	width: 100%;
}
```

Le lien "Revenir à la page de visualisation" ayant déjà la classe `full-width`,
il n'y a rien à changer dans le code HTML de la page `delete.php`.

Sauvegardez les changements effectués et rafraîchissez la page de suppression.
Le lien devrait prendre maintenant la largeur complète de la page.

### Tester le formulaire

Si vous testez le formulaire de suppression, vous remarquerez que la soumission
du formulaire redirige simplement l'utilisateur·trice vers la page d'accueil.
Nous allons corriger cela dans la prochaine étape.

Pourquoi cela ? En effet, lors de la soumission du formulaire, la page
`delete.php` est appelée avec la méthode `POST`.

Hors, les premières lignes de notre page `delete.php` ne vérifient que la
présence de l'identifiant de la tâche dans l'URL via la superglobale `$_GET`.
Comme l'identifiant n'est pas présent dans l'URL lors de la soumission du
formulaire, la page redirige l'utilisateur·trice vers la page d'accueil.

### Corriger le formulaire

Pour corriger le formulaire de suppression, nous allons modifier la page
`delete.php` pour vérifier la présence de l'identifiant de la tâche dans la
superglobale `$_POST` lors de la soumission du formulaire avec la méthode
`POST`.

Pour cela, nous devons ajouter un champ caché dans le formulaire de suppression
pour transmettre l'identifiant de la tâche lors de la soumission du formulaire.
Modifiez le code HTML du formulaire de suppression dans le fichier
`public/delete.php` comme suit :

```diff
diff --git a/mini-projet/public/delete.php b/mini-projet/public/delete.php
index 9847008..855288b 100644
--- a/mini-projet/public/delete.php
+++ b/mini-projet/public/delete.php
@@ -2,7 +2,7 @@
 require_once __DIR__ . '/../src/constants.php';
 require_once __DIR__ . '/../src/functions.php';

-$taskId = $_GET['id'] ?? null;
+$taskId = $_GET['id'] ?? $_POST['id'] ?? null;

 if ($taskId === null || !is_numeric($taskId)) {
     header('Location: ./index.php');
@@ -56,6 +56,8 @@ if ($task === null) {
         <p>Souhaitez-vous vraiment supprimer la tâche <strong><?= $task['title'] ?></strong> ? Cette action est irréversible.</p>

         <form action="./delete.php" method="POST">
+            <input type="hidden" name="id" value="<?= $taskId ?>" />
+
             <button class="btn btn-error" type="submit">Supprimer la tâche</button>
             <a class="btn btn-secondary full-width" href="./view.php?id=<?= $task['id'] ?>">
                 Revenir à la page de visualisation
```

Ici, nous avons ajouté un champ caché
`<input type="hidden" name="id" value="<?= $taskId ?>" />` dans le formulaire de
suppression pour transmettre l'identifiant de la tâche lors de la soumission du
formulaire avec la méthode `POST`.

Nous avons également modifié la ligne qui récupère l'identifiant de la tâche
pour vérifier la présence de l'identifiant dans la superglobale `$_POST` en plus
de la superglobale `$_GET`.

Le code ci-dessus est équivalent à :

```php
$taskId = null;

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Récupère l'ID de la tâche à supprimer depuis la requête GET
    $taskId = $_GET['id'];
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupère l'ID de la tâche à supprimer depuis le formulaire POST
    $taskId = $_POST["id"];
}
```

De cette manière, l'identifiant de la tâche sera correctement récupéré lors de
la soumission du formulaire avec la méthode `POST`, et la page ne redirigera
plus l'utilisateur·trice vers la page d'accueil.

Sauvegardez les changements effectués et rafraîchissez la page de suppression.

Soumettez le formulaire de suppression pour vérifier que l'identifiant de la
tâche est correctement récupéré lors de la soumission du formulaire avec la
méthode `POST`. Vous devriez voir que la page ne redirige plus
l'utilisateur·trice vers la page d'accueil, mais reste sur la page de
suppression.

Il ne nous reste plus qu'à implémenter la fonction pour supprimer la tâche.

### Créer la fonction pour supprimer une tâche

Dans le fichier `src/functions.php`, ajoutez la fonction `deleteTask()` pour
supprimer une tâche de la base de données :

```php
function deleteTask(int $id): bool {
    echo "Suppression de la tâche avec l'ID $id<br>";

    return false;
}
```

Ici, nous avons créé une fonction `deleteTask()` qui prend en paramètre
l'identifiant de la tâche à supprimer et qui retourne un booléen indiquant si la
suppression a réussi ou non.

Pour le moment, la fonction ne fait que simuler la suppression de la tâche en
affichant un message dans le navigateur et en retournant `false` pour indiquer
que la suppression a échoué.

Dans la prochaine séance, nous allons implémenter la suppression réelle de la
tâche dans la base de données.

### Utiliser la fonction pour supprimer une tâche

Dans le fichier `public/delete.php`, modifiez le code pour utiliser la fonction
`deleteTask()` lors de la soumission du formulaire avec la méthode `POST` :

```diff
diff --git a/mini-projet/public/delete.php b/mini-projet/public/delete.php
index 855288b..cba84de 100644
--- a/mini-projet/public/delete.php
+++ b/mini-projet/public/delete.php
@@ -15,6 +15,20 @@ if ($task === null) {
     header('Location: ./index.php');
     exit;
 }
+
+$error = null;
+
+// Gestion de la soumission du formulaire
+if ($_SERVER["REQUEST_METHOD"] === "POST") {
+    $success = deleteTask($taskId);
+
+    if ($success) {
+        header('Location: ./index.php');
+        exit;
+    } else {
+        $error = "Une erreur est survenue lors de la suppression de la tâche.";
+    }
+}
 ?>

 <!DOCTYPE html>
@@ -53,6 +67,10 @@ if ($task === null) {
     <main>
         <h1>Supprimer la tâche ?</h1>

+        <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($error)) { ?>
+            <p style="color: red;"><?= $error ?></p>
+        <?php } ?>
+
         <p>Souhaitez-vous vraiment supprimer la tâche <strong><?= $task['title'] ?></strong> ? Cette action est irréversible.</p>

         <form action="./delete.php" method="POST">
```

Ici, nous avons ajouté une condition pour vérifier si le formulaire a été soumis
avec la méthode `POST` et si une erreur est survenue lors de la suppression de
la tâche. Si c'est le cas, nous affichons un message d'erreur en rouge sur la
page.

Si la suppression de la tâche réussit, nous redirigeons l'utilisateur·trice vers
la page d'accueil avec la fonction `header()` et nous arrêtons l'exécution du
script avec la fonction `exit()`.

## Conclusion

Bravo ! Dans cette séance, vous avez créé des formulaires HTML permettant de
créer et de supprimer des tâches.

Vous avez également validé les données du formulaire côté serveur et côté client
en affichant des messages explicites en cas d'erreurs de validation.

Pour le moment, nous ne faisons que valider les données du formulaire. Nous ne
les enregistrons pas dans une base de données. Nous allons le faire dans la
prochaine séance.

Vous avez passer un cap important dans la création d'une application web en PHP
: vous avez maintenant les bases pour créer des formulaires HTML et valider les
données saisies par les utilisateur·trices, un élément essentiel de toute
application web.

Pour résumer, voici les étapes que nous avons suivies pour mettre en place des
formulaires :

1. Création du formulaire HTML avec l'action (où envoyer les données) et la
   méthode (comment envoyer les données avec (privilégiez `POST`).
2. Ajout des champs au formulaire.
3. Réception des données côté serveur.
4. Validation des données côté serveur.
5. Conservation des données et affichage des erreurs de validation.
6. Validation des données côté client.

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

Nous vous invitons maintenant à passer aux exemples de code et aux exercices de
la séance comme indiqué dans le [contenu principal](../README.md).

<!-- URLs -->

[licence]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md

```

```
