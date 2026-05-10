# Bases de données et PDO

L. Delafontaine, avec l'aide de GitHub Copilot.

Ce travail est sous licence [CC BY-SA 4.0][license].

> [!TIP]
>
> Voici quelques informations relatives à ce contenu.
>
> **Ressources annexes**
>
> - Autres formats :
>   [Présentation (web)](https://heig-vd-progserv-course.github.io/heig-vd-progserv1-course/01-contenus-du-cours/05-bases-de-donnees-et-pdo/presentation.html)
>   ·
>   [Présentation (PDF)](https://heig-vd-progserv-course.github.io/heig-vd-progserv1-course/01-contenus-du-cours/05-bases-de-donnees-et-pdo/05-bases-de-donnees-et-pdo-presentation.pdf).
> - Exemples de code : [Code source](./01-exemples-de-code/README.md).
> - Exercices : [Énoncés et solutions](./02-exercices/README.md).
> - Mini-projet : [Consignes](./03-mini-projet/README.md).
>
> **Objectifs**
>
> À l'issue de ce contenu, les personnes devraient être capables de :
>
> - Expliquer les concepts de base des bases de données et des systèmes de
>   gestion de base de données (SGBD).
> - Utiliser l'extension PDO de PHP pour interagir avec une base de données.
> - Créer une base de données SQLite et des tables avec PDO.
> - Insérer, mettre à jour, récupérer et supprimer des données dans une base de
>   données SQLite avec PDO.
>
> **Méthodes d'enseignement et d'apprentissage**
>
> Les méthodes d'enseignement et d'apprentissage utilisées pour animer le
> contenu sont les suivantes :
>
> - Présentation.
> - Discussions collectives.
> - Travail en autonomie.
>
> **Méthodes d'évaluation**
>
> L'évaluation du contenu prend la forme d'un mini-projet et d'exercices à
> réaliser en autonomie en classe ou à la maison.
>
> L'évaluation se fait en utilisant les critères suivants :
>
> - Capacité à répondre avec justesse.
> - Capacité à argumenter.
>
> Les retours se font de la manière suivante :
>
> - Corrigé du mini-projet.
> - Corrigé des exercices.
>
> L'évaluation ne donne pas lieu à une note.

## Table des matières

- [Table des matières](#table-des-matières)
- [Objectifs](#objectifs)
- [Base de données](#base-de-données)
  - [Système de gestion de base de données (SGBD)](#système-de-gestion-de-base-de-données-sgbd)
  - [SQLite](#sqlite)
- [Une brève introduction à la sécurité des applications web](#une-brève-introduction-à-la-sécurité-des-applications-web)
  - [Les attaques par injection SQL](#les-attaques-par-injection-sql)
  - [Les attaques par cross-site scripting (XSS)](#les-attaques-par-cross-site-scripting-xss)
  - [Règles de base pour prévenir les attaques](#règles-de-base-pour-prévenir-les-attaques)
- [Une brève introduction à la programmation orientée objet (POO) en PHP](#une-brève-introduction-à-la-programmation-orientée-objet-poo-en-php)
  - [Créer une instance de classe et accéder à ses méthodes](#créer-une-instance-de-classe-et-accéder-à-ses-méthodes)
- [PDO](#pdo)
  - [Connexion à une base de données SQLite](#connexion-à-une-base-de-données-sqlite)
  - [Les requêtes préparées et paramètres liés avec PDO](#les-requêtes-préparées-et-paramètres-liés-avec-pdo)
  - [Création d'une table](#création-dune-table)
  - [Insertion de données](#insertion-de-données)
  - [Récupération de données](#récupération-de-données)
  - [Mise à jour de données](#mise-à-jour-de-données)
  - [Suppression de données](#suppression-de-données)
  - [Affichage des données de manière sécurisée](#affichage-des-données-de-manière-sécurisée)
- [Conclusion](#conclusion)
- [Exemples de code](#exemples-de-code)
- [Exercices](#exercices)
- [Mini-projet](#mini-projet)
- [À faire pour la semaine suivante](#à-faire-pour-la-semaine-suivante)

## Objectifs

Dans cette séance, nous allons étudier les bases de données leur intégration
avec PHP grâce à l'extension PDO.

Nous allons aborder les concepts de base des bases de données, ainsi que les
différents types de systèmes de gestion de base de données (SGBD) et leurs
caractéristiques, en ce concentrant sur SQLite, un SGBD léger et autonome, qui
est intégré dans de nombreuses applications et langages de programmation,
notamment PHP grâce à l'extension PDO.

La liste complète des objectifs est disponible dans la section _"Objectifs"_ du
bloc d'information en haut de ce contenu.

## Base de données

Pour rappel, une base de données est un ensemble d'informations organisées de
manière à permettre un accès rapide et efficace à celle-ci.

Les bases de données sont utilisées pour stocker et gérer des données dans de
nombreux domaines, notamment les applications web, les systèmes de gestion de
contenu, les applications de commerce électronique, etc.

Les bases de données sont généralement organisées en tables, qui contiennent des
lignes et des colonnes. Chaque ligne représente un enregistrement unique, tandis
que chaque colonne représente un champ de données. Les tables peuvent être liées
entre elles par des relations, ce qui permet de créer des bases de données plus
complexes et de gérer des données interconnectées.

### Système de gestion de base de données (SGBD)

Un système de gestion de base de données (SGBD) (appelé _"database management
system (DBMS)"_ en anglais) est un logiciel qui permet de créer, gérer et
interroger des bases de données. Il fournit une interface pour interagir avec
les données, ainsi que des outils pour effectuer des opérations telles que la
création de tables, l'insertion de données, la mise à jour de données et la
suppression de données.

Les SGBD sont utilisés pour gérer des bases de données de toutes tailles, allant
des petites bases de données locales aux grandes bases de données distribuées.

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

## Une brève introduction à la sécurité des applications web

Nous étudierons la sécurité des applications web en détail dans un prochain
cours. Cependant, il est important de comprendre que lorsque nous interagissons
avec une base de données, nous devons être conscients des risques de sécurité,
notamment les attaques par injection SQL et les attaques par cross-site
scripting (XSS).

En effet, comme nous allons permettre à nos utilisateur.trices de fournir des
données qui seront utilisées et stockées dans une base de données, il est
crucial de se prémunir contre différentes types d'attaques qui peuvent nuire à
la sécurité de notre application et de ses utilisateur.trices.

Il existe principalement deux types d'attaques auxquelles nous devons faire
attention lorsque nous travaillons avec des bases de données :

- Les attaques par injection SQL.
- Les attaques par cross-site scripting (XSS).

Il s'agit de deux types d'attaques courantes qui peuvent compromettre la
sécurité de votre application et de vos utilisateur.trices. Il est important de
comprendre ces attaques et de mettre en place des mesures de sécurité pour les
prévenir

### Les attaques par injection SQL

Les attaques par injection SQL se produisent lorsque des données malveillantes
sont insérées dans une requête SQL (dans le but de la modifier), ce qui peut
compromettre la sécurité de votre application et de votre base de données. Ces
attaques peuvent permettre à un.e attaquant.e de voler des données sensibles, de
modifier ou de supprimer des données, ou même de prendre le contrôle de votre
serveur de base de données.

Les attaques par injection SQL s'effectuent du côté du serveur en manipulant les
requêtes SQL envoyées à la base de données.

### Les attaques par cross-site scripting (XSS)

Les attaques par cross-site scripting (XSS) se produisent lorsque des données
malveillantes sont injectées dans une page web, ce qui peut compromettre la
sécurité de votre application et de ses utilisateur.trices. Ces attaques peuvent
permettre à un.e attaquant.e de voler des informations sensibles, de modifier le
contenu de la page web, ou même de prendre le contrôle du navigateur de
l'utilisateur.trice.

Les attaques par cross-site scripting (XSS) s'effectuent du côté du client en
manipulant le contenu d'une page web.

### Règles de base pour prévenir les attaques

1. Ne faites **jamais** confiance aux données fournies par les
   utilisateur.trices.
2. Nettoyez et validez toujours les données fournies par les utilisateur.trices.
3. Utilisez les mécanismes de sécurité intégrés à votre langage de programmation
   et à votre SGBD pour prévenir les attaques.

La ressource suivante est un excellent point de départ pour en apprendre
davantage sur les vulnérabilités de sécurité courantes dans les applications web
et comment les prévenir :
[OWASP Top Ten](https://owasp.org/www-project-top-ten/).

## Une brève introduction à la programmation orientée objet (POO) en PHP

Nous étudierons la programmation orientée objet (POO) en détail dans un prochain
cours. Cependant, il est important de comprendre que PDO est une classe en PHP,
et que nous allons utiliser des objets de cette classe pour interagir avec notre
base de données.

### Créer une instance de classe et accéder à ses méthodes

En PHP, une classe est instanciée à l'aide du mot-clé `new`, ce qui crée un
objet de cette classe.

Avec PHP, pour accéder aux méthodes d'une classe, nous utilisons l'opérateur
`->`.

Les exemples de code de cette séance utilisent la syntaxe orientée objet de PHP
pour interagir avec la base de données. Nous allons voir comment créer une
instance de la classe `PDO` pour se connecter à une base de données, puis
comment utiliser les méthodes de cette classe pour créer des tables, insérer des
données, récupérer des données, mettre à jour des données et supprimer des
données.

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
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);
```

Dans cet exemple, nous créons une instance de `PDO` en spécifiant le chemin vers
le fichier de base de données SQLite.

Ceci crée une connexion à la base de données. Si le fichier de base de données
n'existe pas, SQLite le créera automatiquement.

Nous n'avons pas encore étudié en détail la programmation orientée objet (POO)
en PHP. Pour le moment, il est juste nécessaire de retenir que PDO est une
classe qui permet de se connecter à une base de données et d'exécuter des
requêtes SQL sur celle-ci.

### Les requêtes préparées et paramètres liés avec PDO

PDO offre une fonctionnalité de requêtes préparées qui permet de se prémunir
contre les attaques par injection SQL. Les requêtes préparées permettent de
séparer la logique de la requête SQL des données qui y sont insérées, ce qui
rend plus difficile pour un.e attaquant.e d'injecter du code malveillant dans la
requête. En utilisant des requêtes préparées avec des paramètres liés, les
données sont traitées de manière sécurisée par PDO, ce qui protège votre
application contre les attaques par injection SQL.

Nous utiliserons les requêtes préparées et les paramètres liés dans les
prochaines sections pour insérer, mettre à jour, récupérer et supprimer des
données dans notre base de données SQLite de façon sécurisée avec PDO.

### Création d'une table

Pour créer une table dans une base de données SQLite avec PDO, nous utilisons la
méthode `execute()` de l'objet `PDO`. Voici un exemple de code :

```php
<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

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

Dans cet exemple, nous créons une table `users` avec trois colonnes : `id`,
`name` et `email`.

La colonne `id` est une clé primaire qui s'incrémente automatiquement, tandis
que les colonnes `name` et `email` sont des champs de texte qui ne peuvent pas
être nuls.

La colonne `email` est également définie comme unique, ce qui signifie qu'aucun
deux utilisateur.trices ne peuvent avoir la même adresse e-mail.

Nous préparons la requête SQL avec la méthode `prepare()`, puis nous exécutons
la requête avec la méthode `execute()`.

La préparation de la requête SQL avec `prepare()` permet à PDO de gérer la
requête de manière plus efficace et sécurisée.

Au travers de ces méthodes, nous pouvons créer des tables dans notre base de
données SQLite et définir les différentes colonnes et leurs types de données.

### Insertion de données

Pour insérer des données dans une table, nous utilisons la méthode `execute()`
de l'objet `PDO`. Voici un exemple de code :

```php
<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// On définit la requête SQL pour ajouter un.e utilisateur.trice
$sql = "INSERT INTO users (name, email) VALUES (:username, :email)";

// Préparation de la requête SQL pour ajouter un.e utilisateur.trice
$stmt = $pdo->prepare($sql);

// On lie les paramètres de la requête SQL aux valeurs à insérer
$stmt->bindValue(':username', 'John Doe');
$stmt->bindValue(':email', 'john.doe@heig-vd.ch');

// Exécution de la requête SQL pour ajouter un.e utilisateur.trice
$stmt->execute();

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

Dans cet exemple, nous insérons deux nouveaux.elles utilisateur.trices dans la
table `users` à l'aide d'une requête SQL d'insertion qui contient des paramètres
nommés (`:username` et `:email`).

Une fois la requête SQL préparée avec la méthode `prepare()`, nous utilisons la
méthode `bindValue()` pour lier les paramètres de la requête préparée à des
valeurs spécifiques. Cela permet de sécuriser notre application contre les
attaques par injection SQL, car les valeurs des paramètres sont traitées de
manière sécurisée par PDO.

Puis, nous utilisons la méthode `execute()` pour exécuter la requête SQL
d'insertion.

Il est possible de récupérer l'identifiant du dernier élément inséré en
utilisant la méthode `lastInsertId()` de l'objet `PDO`.

Cette méthode retourne l'identifiant de la dernière ligne insérée dans la table.
Cela peut être utile si vous souhaitez effectuer d'autres opérations sur
l'élément inséré, comme l'ajout d'informations supplémentaires ou la création de
relations avec d'autres tables.

### Récupération de données

Pour récupérer des données d'une table, nous utilisons la méthode `execute()` de
l'objet `PDO`. Voici un exemple de code :

```php
<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// On définit la requête SQL pour récupérer l'utilisateur.trice spécifique
$sql = "SELECT * FROM users WHERE name = :name";

// On prépare la requête SQL pour récupérer l'utilisateur.trice spécifique
$stmt = $pdo->prepare($sql);

// On lie les paramètres de la requête SQL aux valeurs à insérer
$stmt->bindValue(':name', 'John Doe');

// Exécution de la requête SQL pour récupérer l'utilisateur.trice spécifique
$stmt->execute();

// Récupère le résultat de la requête
$user = $stmt->fetch();

// On affiche l'utilisateur.trice
print_r($user);
```

Dans cet exemple, nous récupérons un.e utilisateur.trice spécifique de la table
`users` en fonction de son identifiant.

Ensuite, nous utilisons la méthode `fetch()` pour récupérer le résultat de la
requête sous forme de tableau associatif.

Afin de récupérer toutes les lignes d'une table, nous pouvons utiliser la
méthode `fetchAll()` :

```php
<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

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

Dans cet exemple, nous récupérons tous les utilisateur.trices de la table
`users`.

Ensuite, nous utilisons la méthode `fetchAll()` pour récupérer tous les
résultats de la requête sous forme d'un tableau associatif multidimensionnel
contenant tou.tes les utilisateur.trices.

### Mise à jour de données

Pour mettre à jour des données dans une table, nous utilisons la méthode
`execute()` de l'objet `PDO`. Voici un exemple de code :

```php
<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

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

// On récupère l'utilisateur.trice mis à jour
$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', 2);
$stmt->execute();
$user = $stmt->fetch();

// On affiche l'utilisateur.trice mis à jour
print_r($user);
```

Dans cet exemple, nous mettons à jour le nom de l'utilisateur.trice `Jane Smith`
en `Jane Doe` ainsi que son adresse e-mail.

Nous utilisons la méthode `execute()` pour exécuter la requête SQL de mise à
jour.

Nous utilisons la clause `WHERE` pour spécifier quel utilisateur nous souhaitons
mettre à jour. Si nous ne spécifions pas de clause `WHERE`, tous les
utilisateur.trices de la table seront mis à jour.

Puis nous récupérons l'utilisateur.trice mis à jour pour vérifier que la mise à
jour a été effectuée correctement.

### Suppression de données

Pour supprimer des données d'une table, nous utilisons la méthode `execute()` de
l'objet `PDO`. Voici un exemple de code :

```php
<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// On définit la requête SQL pour supprimer l'utilisateur.trice spécifique
$sql = "DELETE FROM users WHERE email = :email";

// On prépare la requête SQL pour supprimer l'utilisateur.trice
$stmt = $pdo->prepare($sql);

// On lie les paramètres de la requête SQL aux valeurs à insérer
$stmt->bindValue(':email', 'jane.doe@heig-vd.ch');

// On exécute la requête SQL pour supprimer l'utilisateur.trice
$stmt->execute();

// On récupère tous les utilisateur.trices
$sql = "SELECT * FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();

// On affiche les utilisateur.trices restant.es
print_r($users);
```

Dans cet exemple, nous supprimons l'utilisateur.trice `Jane Smith` de la table
`users` en utilisant son adresse e-mail. Nous utilisons la clause `WHERE` pour
spécifier quel utilisateur.trice nous souhaitons supprimer. Si nous ne
spécifions pas de clause `WHERE`, tous les utilisateur.trices de la table seront
supprimé.es.

### Affichage des données de manière sécurisée

Lorsque nous affichons des données qui proviennent d'une base de données, il est
important de les afficher de manière sécurisée pour éviter les attaques par
cross-site scripting (XSS). Pour ce faire, nous pouvons utiliser la fonction
`htmlspecialchars()` de PHP pour échapper les caractères spéciaux dans les
données avant de les afficher. Voici un exemple de code :

```php
<?php
// Chemin vers le fichier de base de données SQLite
const DATABASE_FILE = __DIR__ . '/database.db';

// Création d'une instance de PDO pour se connecter à la base de données
$pdo = new PDO("sqlite:" . DATABASE_FILE);

// Insère des données d'exemple dans la table `users`
$sql = "INSERT INTO users (name, email) VALUES (:username, :email)";

$stmt = $pdo->prepare($sql);

// Les données contiennent une tentative d'injection de code malveillant
$stmt->bindValue(':username', 'John Doe');
$stmt->bindValue(':email', '<script>alert("Oh no")</script>');

$stmt->execute();

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

echo "<hr>";

// On affiche les utilisateur.trices de manière sécurisée
foreach ($users as $user) {
    echo "Nom : " . htmlspecialchars($user['name']) . "<br>";
    echo "Email : " . htmlspecialchars($user['email']) . "<br>";
}
```

Dans cet exemple, nous récupérons tous les utilisateur.trices de la table
`users` et nous les affichons de manière sécurisée en utilisant la fonction
`htmlspecialchars()` pour échapper les caractères spéciaux.

Ce mécanisme d'échappement permet de prévenir les attaques par cross-site
scripting (XSS) en s'assurant que les données affichées ne sont pas interprétées
comme du code HTML ou JavaScript par le navigateur.

En effet, imaginons que nous ayons dans notre base de données un.e
utilisateur.trice avec le nom suivant : `<script>alert('Oh no');</script>` (un
bout de code JavaScript qui affiche ici un simple message d'alerte). Si nous
affichons ce nom sans l'échapper, le navigateur interprétera ce code comme du
JavaScript et exécutera la fonction `alert()`. Ici, une alerte n'est pas un
problème majeur mais cela signifie que du code JavaScript peut être exécuté, ce
qui peut être utilisé par un.e attaquant.e pour voler des informations sensibles
ou pour compromettre la sécurité de votre application. En utilisant
`htmlspecialchars()`, les caractères spéciaux sont convertis en entités HTML, ce
qui empêche le navigateur d'interpréter le code comme du JavaScript et protège
ainsi votre application contre les attaques par cross-site scripting (XSS).

Ainsi, dès que nous affichons des données qui proviennent d'une base de données,
il est crucial de les afficher de manière sécurisée en utilisant des fonctions
d'échappement comme `htmlspecialchars()` pour prévenir les attaques par
cross-site scripting (XSS) et protéger la sécurité de votre application et de
vos utilisateur.trices.

## Conclusion

Dans ce cours, nous avons étudié les bases de données et leur intégration avec
PHP grâce à l'extension PDO.

Nous avons étudié SQLite, un SGBD léger et autonome, qui est intégré de base
dans PHP.

Nous avons également étudié l'extension PDO de PHP, qui fournit une interface
abstraite pour accéder et interagir avec différentes bases de données. Nous
avons vu comment se connecter à une base de données SQLite avec PDO, créer une
table, insérer des données, récupérer des données, mettre à jour des données,
supprimer des données et afficher des données de manière sécurisée pour prévenir
les attaques par injection SQL et les attaques par cross-site scripting (XSS).

## Exemples de code

Nous vous invitons maintenant à consulter les exemples de code de la séance afin
de mieux comprendre les concepts abordés.

Vous trouverez les exemples de code ici :
[Exemples de code](./01-exemples-de-code/README.md).

## Exercices

Nous vous invitons maintenant à réaliser les exercices de la séance afin de
mettre en pratique les concepts abordés.

Vous trouverez les exercices et leur corrigé ici :
[Exercices](./02-exercices/README.md).

## Mini-projet

Nous vous invitons maintenant à réaliser le mini-projet de la séance afin de
mettre en pratique les concepts abordés.

Vous trouverez les détails du mini-projet ici :
[Mini-projet](./03-mini-projet/README.md).

## À faire pour la semaine suivante

Chaque personne est libre de gérer son temps comme elle le souhaite. Cependant,
il est recommandé pour la séance suivante de :

- Relire le support de cours si nécessaire.
- Finaliser la partie du mini-projet qui n'a pas été terminée en classe.
- Finaliser la compréhension des exemples de code vus qui n'ont pas été compris
  en classe.
- Finaliser les exercices qui n'ont pas été terminés en classe.

<!-- URLs -->

[license]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md
