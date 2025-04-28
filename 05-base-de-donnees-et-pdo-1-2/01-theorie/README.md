# Cours 05 - Base de données et PDO (1/2)

## Ressources

- Théorie : [Support de cours](../01-theorie/README.md) ·
  [Présentation (web)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/05-base-de-donnees-et-pdo-1-2/01-theorie/index.html)
  ·
  [Présentation (PDF)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/05-base-de-donnees-et-pdo-1-2/01-theorie/05-base-de-donnees-et-pdo-1-2-presentation.pdf)
- Mini-projet : [Consignes](../02-mini-project/README.md) ·
  [Solution](../02-mini-project/solution/)
- Exercices : [Énoncés et solutions](../03-exercices/README.md)

## Table des matières

- [Ressources](#ressources)
- [Table des matières](#table-des-matières)
- [Objectifs](#objectifs)
- [Base de données](#base-de-données)
  - [Rappel des bases](#rappel-des-bases)
  - [Système de gestion de base de données (SGBD)](#système-de-gestion-de-base-de-données-sgbd)
  - [SQLite](#sqlite)
- [PDO](#pdo)
  - [Connexion à une base de données SQLite](#connexion-à-une-base-de-données-sqlite)
  - [Création d'une table](#création-dune-table)
  - [Insertion de données](#insertion-de-données)
  - [Récupération de données](#récupération-de-données)
- [Conclusion](#conclusion)
- [Mini-projet](#mini-projet)
- [Exercices](#exercices)

## Objectifs

TODO

De façon plus précise, les personnes qui étudient devraient être capables de :

- TODO

## Base de données

### Rappel des bases

Pour rappel, une base de données est un ensemble d'informations organisées de
manière à permettre un accès rapide et efficace à ces informations. Les bases de
données sont utilisées pour stocker et gérer des données dans de nombreux
domaines, notamment les applications web, les systèmes de gestion de contenu,
les applications de commerce électronique, etc.

Les bases de données sont généralement organisées en tables, qui contiennent des
lignes et des colonnes. Chaque ligne représente un enregistrement unique, tandis
que chaque colonne représente un champ de données. Les tables peuvent être liées
entre elles par des relations, ce qui permet de créer des bases de données plus
complexes et de gérer des données interconnectées.

### Système de gestion de base de données (SGBD)

Un système de gestion de base de données (SGBD) (appelé _"database management
system"_ ou _"DBMS"_ en anglais) est un logiciel qui permet de créer, gérer et
interroger des bases de données. Il fournit une interface pour interagir avec
les données, ainsi que des outils pour effectuer des opérations telles que la
création de tables, l'insertion de données, la mise à jour de données et la
suppression de données. Les SGBD sont utilisés pour gérer des bases de données
de toutes tailles, allant des petites bases de données locales aux grandes bases
de données distribuées.

Les systèmes de gestion de base de données les plus courants sont, entre autres,
MySQL, PostgreSQL, SQLite et MongoDB.

Chacun de ces SGBD a ses propres caractéristiques et avantages, mais ils
partagent tous des concepts de base communs.

### SQLite

Dans le contexte de ce cours, nous allons utiliser SQLite comme SGBD.

SQLite est un SGBD léger et autonome qui est intégré dans de nombreuses
applications et langages de programmation. Il est particulièrement adapté pour
les applications de petite à moyenne taille, ainsi que pour les applications
mobiles.

SQLite est une base de données locale qui est stockée dans un fichier unique sur
le disque. Cela signifie qu'il n'est pas nécessaire d'installer un serveur de
base de données séparé pour l'utiliser.

SQLite est donc facile à utiliser et ne nécessite pas de configuration complexe,
ce qui en fait un excellent choix pour les développeurs qui souhaitent créer
rapidement des applications avec une base de données.

## PDO

PDO (PHP Data Objects) est une extension de PHP qui fournit une interface
abstraite pour accéder à différentes bases de données. Il permet aux
développeurs de travailler avec plusieurs SGBD sans avoir à se soucier des
différences entre eux. PDO prend en charge de nombreux SGBD, notamment MySQL,
PostgreSQL, SQLite et d'autres.

PDO facilite ainsi la gestion des connexions, des requêtes et des transactions
qui pourraient être faites à une base de données. Il prend également en charge
les requêtes préparées, ce qui permet de protéger contre les attaques par
injection SQL et d'améliorer les performances des requêtes.

### Connexion à une base de données SQLite

Pour se connecter à une base de données SQLite avec PDO, il suffit de créer une
instance de la classe `PDO` en spécifiant le chemin du fichier de base de
données. Voici un exemple de code :

```php
<?php
// Chemin vers le fichier de base de données SQLite
$dbFile = 'path/to/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO('sqlite:' . $dbFile);

// Configuration des options PDO
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
```

Dans cet exemple, nous créons une instance de `PDO` en spécifiant le chemin vers
le fichier de base de données SQLite. Nous configurons également quelques
options PDO pour gérer les erreurs et le mode de récupération des résultats.

Ensuite, nous pouvons utiliser l'objet `$pdo` pour exécuter des requêtes SQL et
interagir avec la base de données.

### Création d'une table

Pour créer une table dans une base de données SQLite avec PDO, nous utilisons la
méthode `exec()` de l'objet `PDO`. Voici un exemple de code :

```php
<?php
// Création d'une table "users"
$sql = 'CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE
)';

$pdo->exec($sql);
```

Dans cet exemple, nous créons une table `users` avec trois colonnes : `id`,
`name` et `email`.

La colonne `id` est une clé primaire qui s'incrémente automatiquement, tandis
que les colonnes `name` et `email` sont des champs de texte qui ne peuvent pas
être nuls.

La colonne `email` est également définie comme unique, ce qui signifie qu'aucun
deux utilisateurs ne peuvent avoir la même adresse e-mail.

Nous utilisons la méthode `exec()` pour exécuter la requête SQL de création de
table. Cette méthode ne retourne pas de résultats, mais elle lève une exception
en cas d'erreur.

### Insertion de données

Pour insérer des données dans une table, nous utilisons la méthode `prepare()`
et `execute()` de l'objet `PDO`. Voici un exemple de code :

```php
<?php
// Insertion d'un nouvel utilisateur
$sql = 'INSERT INTO users (name, email) VALUES (:name, :email)';

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$name = 'Jane Doe';
$email = 'jane.doe@heig-vd.ch';

$stmt->execute();
```

Dans cet exemple, nous insérons un nouvel utilisateur dans la table `users`.
Nous préparons la requête SQL avec des paramètres nommés `:name` et `:email`,
puis nous utilisons la méthode `bindParam()` pour lier les variables `$name` et
`$email` aux paramètres de la requête.

Cela permet de protéger contre les attaques par injection SQL, car les
paramètres sont automatiquement échappés par PDO. Ensuite, nous exécutons la
requête avec la méthode `execute()`. Si l'insertion réussit, un nouvel
enregistrement est ajouté à la table `users`.

### Récupération de données

Pour récupérer des données d'une table, nous utilisons la méthode `query()` de
l'objet `PDO`. Voici un exemple de code :

```php
<?php
// Récupération de tous les utilisateurs
$sql = 'SELECT * FROM users';
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll();

print_r($users);
```

Dans cet exemple, nous récupérons tous les utilisateurs de la table `users`.

Nous exécutons la requête SQL avec la méthode `query()`, qui retourne un objet
`PDOStatement`. Ensuite, nous utilisons la méthode `fetchAll()` pour récupérer
tous les résultats de la requête sous forme de tableau associatif.

## Conclusion

TODO

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
