---
marp: true
theme: custom-marp-theme
size: 16:9
paginate: true
author: L. Delafontaine, avec l'aide de GitHub Copilot
description:
  Bases de données et PDO pour le cours ProgServ1 à la HEIG-VD, Suisse
url: https://heig-vd-progserv-course.github.io/heig-vd-progserv1-course/01-contenus-du-cours/05-bases-de-donnees-et-pdo/presentation.html
header: "[**Bases de données et PDO**][contenu-complet-sur-github]"
footer:
  "[**HEIG-VD**](https://heig-vd.ch) - [ProgServ1 Course
  2025-2026](https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course)
  - [CC BY-SA 4.0][license]"
headingDivider: 6
math: mathjax
---

# Bases de données et PDO

<!--
_class: lead
_paginate: false
-->

<https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course>

Visualiser le contenu complet sur GitHub [à cette
adresse][contenu-complet-sur-github].

<small>L. Delafontaine, avec l'aide de
[GitHub Copilot](https://github.com/features/copilot).</small>

<small>Ce travail est sous licence [CC BY-SA 4.0][license].</small>

![bg brightness:2 opacity:0.05][illustration-principale]

## Retrouvez le contenu complet de cette présentation sur GitHub

<!-- _class: lead -->

_Cette présentation est un résumé du contenu complet disponible sur GitHub._

_Pour plus de détails, retrouvez le [contenu complet sur
GitHub][contenu-complet-sur-github] ou en cliquant sur l'en-tête de ce
document._

## Objectifs (1)

- Expliquer les concepts de base des bases de données et des systèmes de gestion
  de base de données (SGBD).
- Utiliser l'extension PDO de PHP pour interagir avec une base de données.
- Créer une base de données SQLite et des tables avec PDO.

![bg right:40%][illustration-objectifs]

## Objectifs (2)

- Insérer, mettre à jour, récupérer et supprimer des données dans une base de
  données SQLite avec PDO.

![bg right:40%][illustration-objectifs]

## Base de données

- Ensemble d'informations organisées de manière à permettre un accès rapide et
  efficace à ces informations.
- Généralement organisées en tables, qui contiennent des lignes et des colonnes
  :
  - Lignes : enregistrements uniques.
  - Colonnes : champs de données.

![bg right:40%][illustration-base-de-donnees]

### Système de gestion de base de données (SGBD)

- Logiciel permettant de créer, gérer et interroger des bases de données.
- Fournit une manière pour interagir avec les données (création, insertion, mise
  à jour, suppression).
- Chacun avec ces caractéristiques mais avec les mêmes concepts de base.

![bg right:40%][illustration-systeme-de-gestion-de-base-de-donnees]

### SQLite

- SGBD léger et intégré.
- Pas besoin d'installation ou de configuration complexe.
- Stocke les données dans un fichier unique.
- Prise en charge de SQL standard.
- Idéal pour les applications de petite à moyenne taille.

![bg right:40% w:80%](https://www.sqlite.org/images/sqlite370_banner.svg)

## Une brève introduction à la sécurité des applications web (1)

La sécurité des applications web sera étudiée plus en détails dans les cours
_"Programmation serveur 2 (ProgServ2)"_ et _"Programmation serveur 3
(ProgServ3)"_.

Nous allons faire une brève introduction ici car il est important de comprendre
les concepts de base de la sécurité pour pouvoir utiliser PDO de manière
sécurisée.

## Une brève introduction à la sécurité des applications web (2)

- Comme nos utilisateur.trices vont interagir avec notre application web, rien
  n'empêche des personnes malveillantes d'insérer des données malveillantes dans
  notre base de données.
- Il est important de s'assurer que notre application est sécurisée contre les
  attaques courantes :
  - Les attaques par injection SQL.
  - Les attaques par cross-site scripting (XSS).

### Les attaques par injection SQL

- Consistent à insérer du code SQL malveillant dans une requête SQL existante
  pour manipuler la base de données de manière non prévue.
- Par exemple, un attaquant pourrait insérer du code SQL pour supprimer des
  données, voler des données sensibles ou même prendre le contrôle de la base de
  données.
- L'attaque consiste à manipuler la base de données.

### Les attaques par cross-site scripting (XSS)

- Consistent à stocker du code JavaScript malveillant dans une base de données
  pour qu'il soit exécuté lorsqu'un utilisateur.trice accède à une page web qui
  affiche ces données.
- Par exemple, un attaquant pourrait insérer du code JavaScript pour voler des
  informations sensibles, rediriger les utilisateur.trices vers des sites
  malveillants ou même prendre le contrôle de la session de l'utilisateur.trice.
- L'attaque consiste à manipuler le navigateur des utilisateur.trices.

### Règles de base pour prévenir les attaques

1. Ne faites **jamais** confiance aux données fournies par les
   utilisateur.trices.
2. Nettoyez et validez toujours les données fournies par les utilisateur.trices.
3. Utilisez les mécanismes de sécurité intégrés à votre langage de programmation
   et à votre SGBD pour prévenir les attaques.

[OWASP Top Ten](https://owasp.org/www-project-top-ten/) est une excellente
ressource pour en apprendre davantage sur les vulnérabilités de sécurité
courantes dans les applications web et comment les prévenir.

## Une brève introduction à la programmation orientée objet (POO) en PHP

La programmation orientée objet sera étudiée plus en détails dans le cours
_"Programmation serveur 2 (ProgServ2)"_.

Nous allons faire une brève introduction à la POO en PHP, car PDO est une
extension orientée objet.

Nous avons besoin de comprendre les concepts de base de la POO pour pouvoir
utiliser PDO efficacement.

### Créer une instance de classe et accéder à ses méthodes

En PHP, une classe est instanciée à l'aide du mot-clé `new`, ce qui crée un
objet de cette classe (aussi appelé _"instance"_).

Une fois que nous avons une instance d'une classe, nous pouvons accéder à ses
méthodes (fonctions) et propriétés (variables) à l'aide de l'opérateur `->`.

Ainsi, nous instancions une classe avec `new` et nous accédons à ses méthodes
avec `->`.

## PDO

- PHP Data Objects (PDO) est une extension de PHP qui fournit une interface
  orientée objet pour accéder à des bases de données.
- Permet d'interagir avec différentes bases de données (MySQL, PostgreSQL,
  SQLite, etc.).
- Fournit une API cohérente pour effectuer des opérations sur des base de
  données.

![bg right:40%][illustration-systeme-de-gestion-de-base-de-donnees]

### Connexion à une base de données SQLite

```php
<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);
```

### Les requêtes préparées et paramètres liés avec PDO

- PDO offre une fonctionnalité qui permet de se protéger contre les attaques par
  injection SQL appelée "requêtes préparées".
- Les paramètres dans la requête SQL sont remplacés par des valeurs réelles lors
  de l'exécution de la requête.
- Cela permet de séparer le code SQL des données, empêchant des données
  malveillantes d'être interprétées comme du code SQL.
- Les exemples qui suivent utilisent des requêtes préparées sécurisées.

### Création d'une table

```php
// Création d'une table `users`
$sql = 'CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE
)';

// Préparation de la requête SQL pour créer la table
$stmt = $pdo->prepare($sql);

// Exécution de la requête SQL pour créer la table
$stmt->execute();
```

### Insertion de données

```php
// On définit la requête SQL pour ajouter un.e utilisateur.trice
$sql = "INSERT INTO users (name, email) VALUES (:username, :email)";

// Préparation de la requête SQL pour ajouter un.e utilisateur.trice
$stmt = $pdo->prepare($sql);

// On lie les paramètres de la requête SQL aux valeurs à insérer
$stmt->bindValue(':username', 'John Doe');
$stmt->bindValue(':email', 'john.doe@heig-vd.ch');

// Exécution de la requête SQL pour ajouter un.e utilisateur.trice
$stmt->execute();
```

---

```php
// On lie les paramètres de la requête SQL aux valeurs à insérer
$stmt->bindValue(':username', 'Jane Smith');
$stmt->bindValue(':email', 'jane.smith@heig-vd.ch');

// Exécution de la requête SQL pour ajouter un.e utilisateur.trice
$stmt->execute();

// On récupère l'identifiant de l'utilisateur.e inséré.e
$lastId = $pdo->lastInsertId();

// On affiche l'identifiant du dernier élément inséré
echo "L'identifiant du dernier élément inséré est : $lastId";
```

### Récupération de données

```php
// On définit la requête SQL pour récupérer l'utilisateur.trice spécifique
$sql = "SELECT * FROM users WHERE name = :name";

// On prépare la requête SQL pour récupérer l'utilisateur.trice spécifique
$stmt = $pdo->prepare($sql);

// On lie les paramètres de la requête SQL aux valeurs à insérer
$stmt->bindValue(':name', 'John Doe');

// Exécution de la requête SQL pour récupérer l'utilisateur.trice spécifique
$stmt->execute();
```

---

```php
// Récupère le résultat de la requête
$user = $stmt->fetch();

// On affiche l'utilisateur.trice
print_r($user);
```

---

```php
// On définit la requête SQL pour récupérer l'utilisateur.trice `Jane Smith`
$sql = "SELECT * FROM users";

// On prépare la requête SQL pour récupérer l'utilisateur.trice spécifique
$stmt = $pdo->prepare($sql);

// Exécution de la requête SQL pour récupérer l'utilisateur.trice spécifique
$stmt->execute();

// Récupère tous les résultats de la requête
$users = $stmt->fetchAll();

// On affiche les utilisateur.trices
print_r($users);
```

### Mise à jour de données

```php
// On définit la requête SQL pour mettre à jour l'utilisateur.trice spécifique
$sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";

// On prépare la requête SQL pour mettre à jour l'utilisateur.trice
$stmt = $pdo->prepare($sql);

// On lie les paramètres de la requête SQL aux valeurs à insérer
$stmt->bindValue(':name', 'Jane Doe');
$stmt->bindValue(':email', 'jane.doe@heig-vd.ch');
$stmt->bindValue(':id', 2);

// On exécute la requête SQL pour mettre à jour l'utilisateur.trice
$stmt->execute();
```

---

```php
// On récupère l'utilisateur.trice mis à jour
$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', 2);
$stmt->execute();
$user = $stmt->fetch();

// On affiche l'utilisateur.trice mis à jour
print_r($user);
```

### Suppression de données

```php
<?php
// On définit la requête SQL pour supprimer l'utilisateur.trice spécifique
$sql = "DELETE FROM users WHERE email = :email";

// On prépare la requête SQL pour supprimer l'utilisateur.trice
$stmt = $pdo->prepare($sql);

// On lie les paramètres de la requête SQL aux valeurs à insérer
$stmt->bindValue(':email', 'jane.doe@heig-vd.ch');

// On exécute la requête SQL pour supprimer l'utilisateur.trice
$stmt->execute();
```

---

```php
// On récupère tous les utilisateurs
$sql = "SELECT * FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();

// On affiche les utilisateurs restants
print_r($users);
```

### Affichage des données de manière sécurisée

```php
<?php
// Insère des données d'exemple dans la table `users`
$sql = "INSERT INTO users (name, email) VALUES (:username, :email)";

$stmt = $pdo->prepare($sql);

// Les données contiennent une tentative d'injection de code malveillant
$stmt->bindValue(':username', 'John Doe');
$stmt->bindValue(':email', '<script>alert("Oh no")</script>');

$stmt->execute();
```

---

```php
// On définit la requête SQL pour récupérer tous les utilisateur.trices
$sql = "SELECT * FROM users";

// On prépare la requête SQL pour récupérer tous les utilisateur.trices
$stmt = $pdo->prepare($sql);

// On exécute la requête SQL pour récupérer tous les utilisateur.trices
$stmt->execute();

// Récupère tous les résultats de la requête
$users = $stmt->fetchAll();

// On affiche les utilisateur.trices de manière non-sécurisée
foreach ($users as $user) {
    echo "Nom : " . $user['name'] . "<br>";
    echo "Email : " . $user['email'] . "<br>";
}
```

---

```php
echo "<hr>";

// On affiche les utilisateur.trices de manière sécurisée
foreach ($users as $user) {
    echo "Nom : " . htmlspecialchars($user['name']) . "<br>";
    echo "Email : " . htmlspecialchars($user['email']) . "<br>";
}
```

## Conclusion

- Les bases de données permettent de stocker et de gérer des données.
- SQLite est un système de gestion de base de données (SGBD).
- PDO est une extension PHP qui permet d'interagir avec des SGBDs.
- Les opérations de base incluent la création, l'insertion, la mise à jour et la
  suppression de données.

![bg right:40%][illustration-principale]

## Questions

<!-- _class: lead -->

Est-ce que vous avez des questions ?

## Feedback

Le [formulaire de feedback][feedback] vous **permet de partager votre retour**
sur le cours _"ProgServ1"_.

Il ne prend **que quelques minutes** et est **anonyme**. Vous pouvez aussi y
**demander un/des cours d'appui**.

Les résultats seront discutés au prochain cours. **Merci beaucoup !**

[![bg right:40% w:85%][feedback-qr-code]][feedback]

## À vous de jouer !

- (Re)lire le [support de cours][contenu-complet-sur-github].
- Explorer les [exemples de code][exemples-de-code].
- Faire les [exercices][exercices].
- Réaliser le [mini-projet][mini-projet].
- Poser des questions si nécessaire.

**N'allez pas trop vite, vous avez le temps !** N'hésitez pas à vous entraidez
si vous avez des difficultés.

![bg right:40%][illustration-a-vous-de-jouer]

## Sources

- [Illustration principale][illustration-principale] par
  [Richard Jacobs](https://unsplash.com/@rj2747) sur
  [Unsplash](https://unsplash.com/photos/grayscale-photo-of-elephants-drinking-water-8oenpCXktqQ)
- [Illustration][illustration-objectifs] par
  [Aline de Nadai](https://unsplash.com/@alinedenadai) sur
  [Unsplash](https://unsplash.com/photos/j6brni7fpvs)
- [Illustration][illustration-base-de-donnees] par
  [Jan Antonin Kolar](https://unsplash.com/@jankolar) sur
  [Unsplash](https://unsplash.com/photos/brown-wooden-drawer-lRoX0shwjUQ)
- [Illustration][illustration-systeme-de-gestion-de-base-de-donnees] par
  [israel palacio](https://unsplash.com/@othentikisra) sur
  [Unsplash](https://unsplash.com/photos/two-square-blue-led-lights-ImcUkZ72oUs)
- [Illustration][illustration-a-vous-de-jouer] par
  [Nikita Kachanovsky](https://unsplash.com/@nkachanovskyyy) sur
  [Unsplash](https://unsplash.com/photos/white-sony-ps4-dualshock-controller-over-persons-palm-FJFPuE1MAOM)

<!-- URLs -->

[license]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md
[contenu-complet-sur-github]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/05-bases-de-donnees-et-pdo/README.md
[exemples-de-code]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/05-bases-de-donnees-et-pdo/01-exemples-de-code/README.md
[exercices]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/05-bases-de-donnees-et-pdo/02-exercices/README.md
[mini-projet]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/05-bases-de-donnees-et-pdo/03-mini-projet/README.md
[feedback]: https://framaforms.org/progserv1-2025-2026-feedback-1778517625
[feedback-qr-code]:
	https://quickchart.io/qr?format=png&ecLevel=Q&size=400&margin=1&text=https://framaforms.org/progserv1-2025-2026-feedback-1778517625

<!-- Illustrations -->

[illustration-principale]:
	https://images.unsplash.com/photo-1517486430290-35657bdcef51?fit=crop&h=720
[illustration-objectifs]:
	https://images.unsplash.com/photo-1516389573391-5620a0263801?fit=crop&h=720
[illustration-base-de-donnees]:
	https://images.unsplash.com/photo-1544383835-bda2bc66a55d?fit=crop&h=720
[illustration-systeme-de-gestion-de-base-de-donnees]:
	https://images.unsplash.com/photo-1534224039826-c7a0eda0e6b3?fit=crop&h=720
[illustration-a-vous-de-jouer]:
	https://images.unsplash.com/photo-1509198397868-475647b2a1e5?fit=crop&h=720
