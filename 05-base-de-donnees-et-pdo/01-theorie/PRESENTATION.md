---
marp: true
---

<!--
theme: custom-marp-theme
size: 16:9
paginate: true
author: L. Delafontaine, avec l'aide de GitHub Copilot
title: HEIG-VD ProgServ1 Course - Cours 05 - Base de données et PDO
description: Cours 05 - Base de données et PDO pour le cours ProgServ1 à la HEIG-VD, Suisse
url: https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/05-base-de-donnees-et-pdo/01-theorie/index.html
header: "**Cours 05 - Base de données et PDO**"
footer: "**HEIG-VD** - ProgServ1 Course 2024-2025 - CC BY-SA 4.0"
headingDivider: 6
math: mathjax
-->

# Cours 05 - Base de données et PDO

<!--
_class: lead
_paginate: false
-->

<https://github.com/heig-vd-progserv1-course>

[Support de cours][course-material] · [Présentation (web)][presentation-web] ·
[Présentation (PDF)][presentation-pdf]

<small>L. Delafontaine, avec l'aide de
[GitHub Copilot](https://github.com/features/copilot).</small>

<small>Ce travail est sous licence [CC BY-SA 4.0][license].</small>

![bg brightness:2 opacity:0.2][illustration-principale]

## _Retrouvez plus de détails dans le support de cours_

<!-- _class: lead -->

_Cette présentation est un résumé du support de cours. Pour plus de détails,
consultez le [support de cours][course-material]._

## Objectifs (1/2)

- Expliquer les concepts de base des bases de données et des SGBD
- Utiliser l'extension PDO de PHP pour interagir avec une base de données
- Créer une base de données SQLite et des tables avec PDO

![bg right:40%][illustration-objectifs]

## Objectifs (2/2)

- Insérer, mettre à jour, récupérer et supprimer des données dans une base de
  données SQLite avec PDO

![bg right:40%][illustration-objectifs]

## Base de données

- Ensemble d'informations organisées de manière à permettre un accès rapide et
  efficace à ces informations
- Généralement organisées en tables, qui contiennent des lignes et des colonnes
  :
  - Lignes : enregistrements uniques
  - Colonnes : champs de données

![bg right:40%][illustration-objectifs]

### Système de gestion de base de données (SGBD)

- Logiciel permettant de créer, gérer et interroger des bases de données
- Fournit une interface pour interagir avec les données (création, insertion,
  mise à jour, suppression)
- Chacun avec ces caractéristiques mais avec les mêmes concepts de base

![bg right:40%][illustration-objectifs]

### SQLite

- SGBD léger et intégré
- Pas besoin d'installation ou de configuration complexe
- Stocke les données dans un fichier unique
- Prise en charge de SQL standard
- Idéal pour les applications de petite à moyenne taille

![bg right:40%][illustration-objectifs]

## PDO

- PHP Data Objects (PDO) est une extension de PHP qui fournit une interface
  orientée objet pour accéder à des bases de données
- Permet d'interagir avec différentes bases de données (MySQL, PostgreSQL,
  SQLite, etc.)
- Fournit une API cohérente pour effectuer des opérations sur des base de
  données

![bg right:40%][illustration-objectifs]

### Connexion à une base de données SQLite

### Création d'une table

### Insertion de données

### Récupération de données

### Mise à jour de données

### Suppression de données

## Conclusion

- TODO

![bg right:40%][illustration-principale]

## Questions

<!-- _class: lead -->

Est-ce que vous avez des questions ?

## À vous de jouer !

- (Re)lire le [support de cours][course-material].
- Réaliser le [mini-projet][mini-project].
- Faire les [exercices][exercices].
- Poser des questions si nécessaire.

\
\
**Entraidez-vous si vous avez des difficultés !**

![bg right:40%][illustration-a-vous-de-jouer]

## Sources (1/3)

- [Illustration principale][illustration-principale] par
  [Richard Jacobs](https://unsplash.com/@rj2747) sur
  [Unsplash](https://unsplash.com/photos/grayscale-photo-of-elephants-drinking-water-8oenpCXktqQ)
- [Illustration][illustration-objectifs] par
  [Aline de Nadai](https://unsplash.com/@alinedenadai) sur
  [Unsplash](https://unsplash.com/photos/j6brni7fpvs)

---

- [Illustration][illustration-a-vous-de-jouer] par
  [Nikita Kachanovsky](https://unsplash.com/@nkachanovskyyy) sur
  [Unsplash](https://unsplash.com/photos/white-sony-ps4-dualshock-controller-over-persons-palm-FJFPuE1MAOM)

<!-- URLs -->

[presentation-web]:
	https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/05-base-de-donnees-et-pdo/01-theorie/index.html
[presentation-pdf]:
	https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/05-base-de-donnees-et-pdo/01-theorie/05-base-de-donnees-et-pdo-presentation.pdf
[course-material]:
	https://github.com/heig-vd-progserv1-course/heig-vd-progserv1-course/blob/main/05-base-de-donnees-et-pdo/01-theorie/README.md
[license]:
	https://github.com/heig-vd-progserv1-course/heig-vd-progserv1-course/blob/main/LICENSE.md
[mini-project]:
	https://github.com/heig-vd-progserv1-course/heig-vd-progserv1-course/blob/main/05-base-de-donnees-et-pdo/02-mini-project/README.md
[exercices]:
	https://github.com/heig-vd-progserv1-course/heig-vd-progserv1-course/blob/main/05-base-de-donnees-et-pdo/03-exercices/README.md

<!-- Illustrations -->

[illustration-principale]:
	https://images.unsplash.com/photo-1517486430290-35657bdcef51?fit=crop&h=720
[illustration-objectifs]:
	https://images.unsplash.com/photo-1516389573391-5620a0263801?fit=crop&h=720

---

[illustration-a-vous-de-jouer]:
	https://images.unsplash.com/photo-1509198397868-475647b2a1e5?fit=crop&h=720
