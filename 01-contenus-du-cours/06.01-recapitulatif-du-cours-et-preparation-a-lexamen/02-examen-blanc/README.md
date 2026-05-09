# Récapitulatif du cours et préparation à l'examen - Examen blanc

> [!WARNING]
>
> Ce document est encore en cours de rédaction et peut être sujet à des
> modifications. Les informations présentées ici sont à titre indicatif et
> peuvent ne pas être définitives.

Cet examen blanc est conçu pour vous préparer à l'examen final du cours
_"Programmation serveur 1 (ProgServ1)"_.

Plus de détails dans le contenu
_["Récapitulatif du cours et préparation à l'examen"](../README.md)_.

## [ProgServ1 2025-2026] Examen blanc

L'examen est composé de deux parties :

1. Partie théorique (~45 minutes, 40% de la note).
2. Partie pratique (~2 heures 15 minutes, 60% de la note).

> [!CAUTION]
>
> Toute tentative de tricherie ou d'utilisation de ressources non autorisées
> entraînera la note de 1 pour l'ensemble de l'examen.

### Partie théorique

> [!CAUTION]
>
> Quitter la plateforme (changement de fenêtre, fermeture du navigateur, etc.)
> durant la partie théorique de l'examen entraînera la note de 1 pour l'ensemble
> de l'examen.

#### Ressources autorisées

- Aucune

#### Lien vers la plateforme d'évaluation

> [!NOTE]
>
> Vous devez être connecté.e au réseau Wi-Fi _"HEIG-VD"_ ou utiliser le VPN pour
> accéder à la plateforme d'évaluation en ligne de la HEIG-VD.

Lien :
<https://eval.iict-heig-vd.in/users/evaluations/cmbphhzz400ntrdfmr8ve8ijd>.

#### Rendu

Soumettre les réponses via la plateforme d'évaluation en ligne de la HEIG-VD et
faire valider le rendu par la personne qui surveille l'examen. Vous aurez
ensuite accès à la partie pratique de l'examen.

### Partie pratique

> [!CAUTION]
>
> Le rendu doit être effectué **avant** la fin de la partie pratique de
> l'examen. En cas de non-remise ou de retard, la note de 1 sera attribuée pour
> la partie pratique de l'examen.

#### Ressources autorisées

- Un environnement de développement local (par exemple, MAMP + Visual Studio
  Code).
- Un navigateur web.
- Le
  [dépôt Git de l'unité d'enseignement](https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course),
  comprenant :
  - La théorie.
  - Le mini-projet et sa solution.
  - Les exercices et leurs solutions.
- Notes personnelles.
- Code source personnel.
- Documentation officielle de PHP (<https://www.php.net/>).
- Ressources MDN (<https://developer.mozilla.org>).

#### Rendu

Le rendu de la partie pratique se fait via mail à l'adresse
[ludovic.delafontaine@heig-vd.ch](mailto:ludovic.delafontaine@heig-vd.ch) dans
une archive ZIP ayant pour format `prenom_nom.zip`.

Par exemple, pour une personne nommée _Ludovic Delafontaine_, le rendu de
l'archive sera `ludovic_delafontaine.zip`.

Vous êtes responsable de son contenu.

Le travail et la consigne doivent être rendus avant la fin de l'examen.

#### Consignes

Vous venez de rejoindre une nouvelle équipe de développement web. Votre
responsable vous a demandé de créer une application web de gestion de projets.
Vous devez implémenter les fonctionnalités suivantes :

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
développement web que vous avez acquises durant l'unité d'enseignement.

#### Grille d'évaluation

- 0 point - Le travail est manquant, hors sujet ou montre une compréhension très
  limitée du sujet.
- 1 point - Le travail montre une compréhension partielle : certains éléments
  clés sont manquants, peu clairs ou mal mis en œuvre.
- 2 points - Le travail est complet, précis et montre une compréhension claire
  et approfondie du sujet.

> [!NOTE]
>
> Il n'y a aucun critère sur l'aspect visuel de l'application. Vous pouvez
> utiliser du HTML et du CSS de base (CSS optionnel), mais l'accent doit être
> mis sur la fonctionnalité et la structure du code.

**Page d'accueil**

|   # | Description                                                                                                                                                                 | Points |
| --: | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -----: |
|   1 | La page d'accueil présente l'application, un bouton pour créer un nouveau projet ainsi que la liste des projets.                                                            |      2 |
|   2 | La liste des projets affiche les projets avec les attributs suivants : nom, description, statut, priorité et les actions associées (visualisation, édition et suppression). |      2 |

**Page de création**

|   # | Description                                                                                                                                                                                                                                                                                                                                              | Points |
| --: | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -----: |
|   3 | La page de création permet de créer un nouveau projet à l'aide d'un formulaire avec les attributs du nouveau projet.                                                                                                                                                                                                                                     |      2 |
|   4 | Le formulaire de création supporte la validation des champs (obligatoire, longueur minimale et maximale), autant côté serveur que côté client. En cas d'erreur, celles-ci sont affichées de manière claire et précise et les données sont pré-remplies. Une fois le projet créé, la personne est redirigée vers la page de visualisation du projet créé. |      2 |
|   5 | Le projet créé est correctement sauvegardé dans la base de données lors de la création.                                                                                                                                                                                                                                                                  |      2 |

**Page de visualisation**

|   # | Description                                                                                                                        | Points |
| --: | :--------------------------------------------------------------------------------------------------------------------------------- | -----: |
|   6 | La page de visualisation permet d'afficher les détails d'un projet avec les attributs du projet.                                   |      2 |
|   7 | Lors de l'accès à la page de visualisation du projet, si le projet n'existe pas, la personne est redirigée vers la page d'accueil. |      2 |

**Page d'édition**

|   # | Description                                                                                                                                                                                                                                                                                                                                                        | Points |
| --: | :----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -----: |
|   8 | La page d'édition permet de modifier un projet à l'aide d'un formulaire avec les attributs du projet. Le formulaire d'édition est pré-rempli avec les données du projet à modifier.                                                                                                                                                                                |      2 |
|   9 | Lors de l'accès à la page d'édition du projet, si le projet n'existe pas, la personne est redirigée vers la page d'accueil.                                                                                                                                                                                                                                        |      2 |
|  10 | Le formulaire d'édition supporte la validation des champs (obligatoire, longueur minimale et maximale), autant côté serveur que côté client. En cas d'erreur, celles-ci sont affichées de manière claire et précise et les données sont pré-remplies. Une fois le projet mis à jour, la personne est redirigée vers la page de visualisation du projet mis à jour. |      2 |
|  11 | Le projet modifié est correctement mis à jour dans la base de données lors de la modification.                                                                                                                                                                                                                                                                     |      2 |

**Page de suppression**

|   # | Description                                                                                                                      | Points |
| --: | :------------------------------------------------------------------------------------------------------------------------------- | -----: |
|  12 | Il est possible de supprimer un projet à partir de la page d'accueil.                                                            |      2 |
|  13 | Lors de l'accès à la page de suppression du projet, si le projet n'existe pas, la personne est redirigée vers la page d'accueil. |      2 |
|  14 | Le projet supprimé est correctement supprimé de la base de données.                                                              |      2 |
|  15 | Lors de la suppression d'un projet, la personne est redirigée vers la page d'accueil.                                            |      2 |

**Qualité du code**

|   # | Description                                                                                                                                                   | Points |
| --: | :------------------------------------------------------------------------------------------------------------------------------------------------------------ | -----: |
|  16 | Les fonctions sont définies dans un fichier unique. Elles sont utilisées dans les différentes pages pour structurer le code et éviter la duplication de code. |      2 |
|  17 | Le code est lisible, agréable à lire et utilise des noms de variables/fonctions/fichiers/dossiers/etc. explicites.                                            |      2 |

**Contraintes**

- Votre application ne doit pas contenir de code ou de commentaires hors
  contexte (par exemple, liés à d'autres projets comme le mini-projet sur les
  animaux de compagnie, du code utilisant des concepts que nous n'avons pas
  étudiés en cours, du code généré par IA, etc.). Le non-respect de cette règle
  entraînera la note de 1 pour l'ensemble de l'examen.
- Le code doit être votre propre travail. Toute tentative de plagiat ou de
  tricherie entraînera la note de 1 pour l'ensemble de l'examen.
