# Récapitulatif du cours et préparation à l'examen - Examen blanc

Cet examen blanc est conçu pour vous préparer à l'examen final du cours
_"Programmation serveur 1 (ProgServ1)"_.

Plus de détails dans le contenu
_["Récapitulatif du cours et préparation à l'examen"](../README.md)_.

- [Examen blanc](#examen-blanc)
  - [Partie théorique](#partie-théorique)
  - [Partie pratique](#partie-pratique)

## Examen blanc

L'examen est composé de deux parties :

1. Partie théorique (90 minutes, 60% de la note).
2. Partie pratique (90 minutes, 40% de la note).

> [!WARNING]
>
> L'examen final peut différer de cet examen blanc en termes de questions
> posées, de fonctionnalités à implémenter, de critères d'évaluation, etc.
>
> Cet examen blanc est conçu pour vous aider à vous entraîner et à vous préparer
> pour l'examen final, mais il ne garantit pas que les questions ou les tâches
> de l'examen final seront exactement les mêmes.
>
> Il est important de réviser l'ensemble du contenu du cours et de comprendre
> les concepts fondamentaux pour être bien préparé.e pour l'examen final.

### Partie théorique

#### Question 1 (4 points)

Expliquez le concept d'architecture client-serveur et illustrez-le avec un
exemple concret d'application web avec PHP.

#### Question 2 (2 points)

Listez les outils nécessaires pour exécuter du code PHP. Pour chacun de ces
outils, donnez leur rôle/but.

#### Question 3 (2 points)

Qu'affiche le code suivant ?

```php
<?php
$variable1 = "Bonjour";
$variable2 = "$variable1 tout le monde !";
$variable3 = $variable1 . " " .  $variable2;
$variable4 = "\$variable3 contient \"$variable3\"";

echo $variable1;
echo "<br>";
echo $variable2;
echo "<br>";
echo $variable3;
echo "<br>";
echo $variable4;
```

#### Question 4 (2 points)

Lorsque nous parlons de nature dynamique des variables et constantes en PHP, à
quoi faisons-nous référence ?

#### Question 5 (2 points)

Est-il possible de typer une variable ou une fonction en PHP ? Justifiez votre
réponse avec un exemple.

#### Question 6 (4 points)

Quels sont les différents types de tableaux existants avec PHP ? Pour chaque
type, donnez un exemple concret.

#### Question 7 (2 points)

Soit le tableau `$fruitsEtLegumes` suivant, parcourez et affichez chaque élément
du sous-tableau `fruits` à l'aide d'une boucle `for`.

```php
<?php
$fruitsEtLegumes = [
    'fruits' => ['Pomme', 'Poire', 'Banane'],
    'legumes' => ['Carotte', 'Tomate', 'Salade']
];
```

#### Question 8 (2 points)

Soit le tableau `$outils` suivant, parcourez et affichez chaque élément du
tableau à l'aide d'une boucle `foreach`.

```php
<?php
$outils = ['marteau', 'tournevis', 'clé à molette'];
```

#### Question 9 (2 points)

Rédigez une fonction qui s'appelle `isLongerThan4` qui calcule la longueur d'une
chaîne de caractères passée en paramètre et qui retourne un booléen `true` si la
longueur de la chaîne de caractères est plus grande que 4 ou `false` sinon.

Appelez-la ensuite avec la valeur _"Non"_.

**Note** : votre fonction doit être typée correctement.

#### Question 10 (2 points)

Rédigez une fonction qui s'appelle `calculateArea` qui calcule l'aire d'un
rectangle à partir de sa largeur et de sa hauteur passées en paramètres. La
fonction doit retourner l'aire calculée.

Pour rappel, la formule pour calculer l'aire d'un rectangle est :
$aire = largeur * hauteur$.

**Note** : votre fonction doit être typée correctement.

#### Question 11 (2 points)

Quel est le but de l'attribut `action` d'un formulaire HTML ?

#### Question 12 (4 points)

Quel est le but de l'attribut `method` d'un formulaire HTML ? Quelles sont les
différentes méthodes possibles et quelles sont leurs différences ?

#### Question 13 (4 points)

Comment pouvons-nous récupérer les données des formulaires HTML avec PHP ?
Donnez un exemple de code pour illustrer votre réponse.

#### Question 14 (4 points)

Qu'est-ce que la validation côté serveur ? Pourquoi devons-nous la faire ?

#### Question 15 (4 points)

Qu'est-ce que la validation côté client ? Est-elle suffisante pour garantir la
sécurité de notre application ? Justifiez votre réponse.

#### Question 16 (4 points)

Décrivez ce qu'est l'extension PDO de PHP ainsi que son but. Comment
l'utiliseriez-vous pour vous connecter à une base de données SQLite et exécuter
une requête SQL pour récupérer tous les enregistrements d'une table appelée
`users` où le prénom est "John" ?

#### Question 17 (2 points)

Quelles implications peuvent se produire si le nettoyage des saisies
utilisateurs n'est pas pris en compte dans une application web faite avec PHP ?

**Note** : il est possible qu'il y ait zéro, une, plusieurs ou toutes les
réponses qui soient possibles. Tout doit être correct pour obtenir les points.

- [ ] Des personnes mal intentionnées peuvent injecter du code malveillant.
- [ ] Des données peuvent être perdues.
- [ ] Des données peuvent être volées.
- [ ] Des données peuvent être modifiées.

#### Question 18 (2 points)

Dans un contexte de sécurité d'une application faite avec PHP, quelles
affirmations sont associées à des attaques par injection SQL dans la liste
suivante ?

**Note** : il est possible qu'il y ait zéro, une, plusieurs ou toutes les
réponses qui soient possibles. Tout doit être correct pour obtenir les points.

- [ ] Injecter/modifier dans une requête existante une autre requête pour
      manipuler la base de donnée.
- [ ] On peut s'en prémunir à l'aide de l'échappement des caractères spéciaux à
      l'aide de la fonction `htmlspecialchars`.
- [ ] On peut s'en prémunir à l'aide des requêtes préparées offertes par PDO.
- [ ] Injecter du code JavaScript dans une page HTML qui sera alors exécuté.

#### Question 19 (2 points)

Dans un contexte de sécurité d'une application faite avec PHP, quelles
affirmations sont associées à des attaques XSS dans la liste suivante ?

**Note** : il est possible qu'il y ait zéro, une, plusieurs ou toutes les
réponses qui soient possibles. Tout doit être correct pour obtenir les points.

- [ ] On peut s'en prémunir à l'aide des requêtes préparées offertes par PDO.
- [ ] On peut s'en prémunir à l'aide de l'échappement des caractères spéciaux à
      l'aide de la fonction `htmlspecialchars`.
- [ ] Injecter du code JavaScript dans une page HTML qui sera alors exécuté.
- [ ] Injecter/modifier dans une requête existante une autre requête pour
      manipuler la base de donnée.

#### Question 20 (12 points)

Vous devez développer une application web de gestion de projets avec PHP.
Comment vous y prendriez-vous ?

Soyez précis.e et expliquez les étapes nécessaires pour les différentes
fonctionnalités de l'application et comment vous les implémenteriez.

Listez la structure de votre application (fichiers, dossiers, etc.) et expliquez
le rôle de chacun de ces éléments, comment ils interagissent entre eux (client,
serveur, base de données, fichiers, imports, etc.) et la méthode de travail que
vous adopteriez pour développer cette application.

Vos explications doivent permettre de démontrer votre compréhension des concepts
et des bonnes pratiques de développement web avec PHP.

### Partie pratique

#### Contexte

Vous venez de rejoindre une nouvelle équipe de développement web.

Votre responsable vous a demandé de créer une application web de gestion de
projets. Vous devez implémenter les fonctionnalités suivantes :

- Afficher la liste des projets.
- Afficher les détails d'un projet.
- Ajouter un nouveau projet.
- Modifier un projet existant.
- Supprimer un projet.

Chaque projet a les attributs suivants :

- Nom du projet (texte, obligatoire, minimum 2 caractères, maximum 100
  caractères).
- Description du projet (texte long, optionnel, minimum 10 caractères, maximum
  500 caractères).
- Statut du projet (sélection, obligatoire, valeurs possibles : _"En cours"_,
  _"Terminé"_, _"Annulé"_).
- Priorité du projet (boutons radio, obligatoire, valeurs possibles : _"Basse"_,
  _"Moyenne"_, _"Haute"_).
- Catégories du projet (cases à cocher, optionnel, valeurs possibles :
  _"Développement"_, _"Finances"_, _"Administration"_ ou _"Marketing"_).

La requête pour créer la base de données vous a été fournie afin de vous
simplifier le travail :

```sql
CREATE TABLE IF NOT EXISTS projects (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    description TEXT,
    status TEXT NOT NULL,
    priority TEXT NOT NULL,
    categories TEXT
);
```

Réalisez cette application avec PHP en utilisant toutes les bonnes pratiques de
développement web que vous avez acquises durant le cours.

#### Grille d'évaluation

**Page d'accueil**

|   # | Description                                                                                                                                                  | Points |
| --: | :----------------------------------------------------------------------------------------------------------------------------------------------------------- | -----: |
|   1 | La page d'accueil présente l'application, un bouton pour créer un nouveau projet ainsi que la liste des projets.                                             |      2 |
|   2 | La liste des projets affiche les projets avec les attributs suivants : nom, description, statut, priorité et un bouton pour visualiser un projet spécifique. |      2 |

**Page de création**

|   # | Description                                                                                                                                                                                                                                                                                                                                              | Points |
| --: | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -----: |
|   3 | La page de création permet de créer un nouveau projet à l'aide d'un formulaire avec les attributs du nouveau projet.                                                                                                                                                                                                                                     |      2 |
|   4 | Le formulaire de création supporte la validation des champs (obligatoire, longueur minimale et maximale), autant côté serveur que côté client. En cas d'erreur, celles-ci sont affichées de manière claire et précise et les données sont pré-remplies. Une fois le projet créé, la personne est redirigée vers la page de visualisation du projet créé. |      2 |
|   5 | Le projet créé est correctement sauvegardé dans la base de données lors de la création.                                                                                                                                                                                                                                                                  |      2 |
|   6 | Une fois le projet créé, la personne est redirigée vers la page de visualisation du projet créé.                                                                                                                                                                                                                                                         |      2 |

**Page de visualisation**

|   # | Description                                                                                                                        | Points |
| --: | :--------------------------------------------------------------------------------------------------------------------------------- | -----: |
|   7 | La page de visualisation permet d'afficher les détails d'un projet avec les attributs du projet.                                   |      2 |
|   8 | Lors de l'accès à la page de visualisation du projet, si le projet n'existe pas, la personne est redirigée vers la page d'accueil. |      2 |

**Page d'édition**

|   # | Description                                                                                                                                                                                                                                                                                                                                                        | Points |
| --: | :----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -----: |
|   9 | La page d'édition permet de modifier un projet à l'aide d'un formulaire avec les attributs du projet. Le formulaire d'édition est pré-rempli avec les données du projet à modifier.                                                                                                                                                                                |      2 |
|  10 | Lors de l'accès à la page d'édition du projet, si le projet n'existe pas, la personne est redirigée vers la page d'accueil.                                                                                                                                                                                                                                        |      2 |
|  11 | Le formulaire d'édition supporte la validation des champs (obligatoire, longueur minimale et maximale), autant côté serveur que côté client. En cas d'erreur, celles-ci sont affichées de manière claire et précise et les données sont pré-remplies. Une fois le projet mis à jour, la personne est redirigée vers la page de visualisation du projet mis à jour. |      2 |
|  12 | Le projet modifié est correctement mis à jour dans la base de données lors de la modification.                                                                                                                                                                                                                                                                     |      2 |
|  13 | Une fois le projet mis à jour, la personne est redirigée vers la page de visualisation du projet mis à jour.                                                                                                                                                                                                                                                       |      2 |

**Page de suppression**

|   # | Description                                                                                                                                                                                     | Points |
| --: | :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -----: |
|  14 | La page de suppression permet de supprimer un projet à l'aide d'un formulaire avec les attributs du projet. Le formulaire de suppression est pré-rempli avec les données du projet à supprimer. |      2 |
|  15 | Lors de l'accès à la page de suppression du projet, si le projet n'existe pas, la personne est redirigée vers la page d'accueil.                                                                |      2 |
|  16 | Le projet supprimé est correctement supprimé de la base de données.                                                                                                                             |      2 |
|  17 | Une fois le projet supprimé, la personne est redirigée vers la page d'accueil.                                                                                                                  |      2 |

#### Contraintes

> [!CAUTION]
>
> Le non-respect des règles suivantes entraînera la note de 1 pour l'ensemble de
> l'examen (partie 1 + partie 2).

- Votre application ne doit pas contenir de code ou de commentaires hors
  contexte (par exemple, liés à d'autres projets comme le mini-projet sur les
  animaux de compagnie, du code utilisant des concepts que nous n'avons pas
  étudiés en cours, du code généré par IA, etc.).
- Le code doit être votre propre travail. Toute tentative de plagiat ou de
  tricherie entraînera la note de 1 pour l'ensemble de l'examen.
- Le code est lisible, agréable à lire et utilise des noms de
  variables/fonctions/fichiers/dossiers/etc. explicites.
- **L'utilisation de code généré par des outils d'intelligence artificielle ou
  copié depuis des sources externes n'est pas autorisé.** En cas de doutes, nous
  pouvons vous questionner selon les règles évoquées dans le contenu
  [Introduction et modalités du cours](../01-contenus-du-cours/01.01-introduction-et-organisation-du-cours/README.md#quen-est-il-de-chatgpt-etc-).
- Vous devez appliquer les bonnes pratiques de développement avec PHP, notamment
  en ce qui concerne la structure du code, la lisibilité, etc.
