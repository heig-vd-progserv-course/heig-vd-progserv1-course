---
marp: true
---

<!--
theme: gaia
size: 16:9
paginate: true
author: L. Delafontaine, avec l'aide de Cursor
title: HEIG-VD ProgServ1 Course - Cours 01 - Modalités de l'unité d'enseignement et introduction à PHP
description: Modalités de l'unité d'enseignement pour le cours ProgServ1 à la HEIG-VD, Suisse
url: https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/01-cours-1-modalites-de-lunite-denseignement-et-introduction-a-php/01-theorie/index.html
header: "**Cours 01 - Modalités de l'unité d'enseignement et introduction à PHP**"
footer: "**HEIG-VD** - ProgServ1 Course 2024-2025 - CC BY-SA 4.0"
style: |
    :root {
        --color-background: #fff;
        --color-foreground: #333;
        --color-highlight: #f96;
        --color-dimmed: #888;
        --color-headings: #7d8ca3;
    }
    blockquote {
        font-style: italic;
    }
    table {
        width: 100%;
    }
    h1, h2, h3, h4, h5, h6 {
        color: var(--color-headings);
    }
    h2, h3, h4, h5, h6 {
        font-size: 1.5rem;
    }
    h1 a:link, h2 a:link, h3 a:link, h4 a:link, h5 a:link, h6 a:link {
        text-decoration: none;
    }
    section:not(.lead) > p, blockquote {
        text-align: justify;
    }
    section:has(h1) {
        padding: 50px;
    }
    section:has(h1) > header {
        display: none;
    }
    section > header {
        font-size: 50%;
    }
    .two-columns {
        display: grid;
        grid-template-columns: 1fr 2fr; /* 1/3 - 2/3 split */
        gap: 1rem;
    }
    .center {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
headingDivider: 6
-->

# Cours 01 - Modalités de l'unité d'enseignement et introduction à PHP

<!--
_class: lead
_paginate: false
-->

<https://github.com/heig-vd-progserv1-course>

[Support de cours][course-material] · [Présentation (web)][presentation-web] ·
[Présentation (PDF)][presentation-pdf]

<small>L. Delafontaine, avec l'aide de [Cursor](https://www.cursor.com/)</small>

<small>Ce travail est sous licence [CC BY-SA 4.0][license].</small>

![bg brightness:2 opacity:0.2][illustration-principale]

## Bienvenue à l'unité d'enseignement Programmation serveur 1 (ProgServ1) !

<!-- _class: lead -->

## Qui suis-je

<div class="two-columns">
<div class="center">

![w:300](./images/ludovic-delafontaine.png)

**Ludovic Delafontaine**  
[E-mail](mailto:ludovic.delafontaine@heig-vd.ch) ·
[GitHub](https://github.com/ludelafo)

</div>
<div>

- CFC d'informatique à l'ETML
- Bachelor en informatique à la HEIG-VD, spécialisation en ingénierie logicielle
- Collaborateur Ra&D à la HEIG-VD pendant presque quatre ans
- Indépendant avec une boîte spécialisée dans les applications web sur mesure
- Chargé de cours à la HEIG-VD pour des cours d'informatique (Java, web, etc.)

</div>
</div>

## Comment me contacter

Selon vos préférences, vous pouvez utiliser l'un des canaux de communication
suivants pour toute question relative au cours :

- En personne, durant les sessions de cours ou en dehors
- Par e-mail
  ([ludovic.delafontaine@heig-vd.ch](mailto:ludovic.delafontaine@heig-vd.ch))
- Microsoft Teams
  - Dans le canal Teams du cours (de préférence)
  - Message privé sur Teams (à éviter si possible)

## _Retrouvez plus de détails dans le support de cours_

<!-- _class: lead -->

_Cette présentation est un résumé du support de cours. Pour plus de détails,
consultez le [support de cours][course-material]._

## Objectifs

- Lister les objectifs du cours
- Lister les modalités d'organisation du cours
- Lister les modalités d'évaluation
- TODO

![bg right:40%][illustration-objectifs]

## Modalités de l'unité d'enseignement

<!-- _class: lead -->

### Objectifs de l'unité d'enseignement (1/2)

Selon la
[fiche d'unité](https://gaps.heig-vd.ch/consultation/fiches/uv/uv.php?id=7307),
à la fin de ce cours, vous devriez être capable de :

> - Connaître les principes de base de la programmation serveur
> - Manipuler des tableaux associatifs complexes
> - Générer des documents Web dynamiquement
> - Gérer la persistance des données applicatives dans un Système de Gestion de
>   Base de Données (SGBD)

### Objectifs de l'unité d'enseignement (2/2)

En résumé, vous devriez être capable de :

- Comprendre les bases de PHP et son rôle dans le monde web.
- Écrire un code PHP propre et organisé.
- Gérer les formulaires HTML et les données qu'ils contiennent de manière sûre.
- Persister des données dans une base de données SQLite.
- Implémenter des concepts de programmation orientée objet.
- Gérer les préférences utilisateur à l'aide de cookies.

### Modalités d'organisation du cours

- En présentiel chaque semaine dans cette même salle
- Mélange de théorie et de pratique pour un meilleur apprentissage :
  - Théorie
  - Mini-projet accompagné à réaliser tout au long du cours
  - Exercices à faire en classe ou à la maison
- Espace de discussion pour poser des questions, partager vos expériences et
  obtenir de l'aide/des retours

**Il n'y a pas de questions bêtes, je suis payé pour y répondre !**

### Modalités d'évaluation

Le cours sera évalué à l'aide d'un seul examen final composé de deux parties, à
effectuer sur ordinateur :

- Partie théorique
  - 40% de la note finale
- Partie pratique
  - 60% de la note finale

![bg right:40%][illustration-modalites-devaluation]

#### Partie théorique

- Évaluation sur :
  - Les connaissances théoriques acquises sur tout le semestre
  - Les exercices
- Durée d'environ 45 minutes
- Devrait utiliser la plateforme d'évaluation en ligne de la HEIG-VD
- **Aucune aide autorisée**

![bg right:40%][illustration-modalites-devaluation]

#### Partie pratique

- Évaluation sur :
  - Les exercices
  - Le mini-projet
- Durée d'environ 2h15
- Petit projet à réaliser
- Contenu du cours, notes personnelles et documentation officielle de PHP
  autorisés
- **Tout autre aide interdite**

![bg right:40%][illustration-modalites-devaluation]

### La programmation et l'anglais

Le domaine de la programmation est très largement anglophone. La majorité des
ressources que vous trouverez dans votre carrière sont en anglais.

Dans le but de vous préparer à cette réalité, les exemples de code que nous
utiliserons dans les cours seront en anglais (commentaires en français par
contre).

Le reste du cours restera néanmoins en français. Si l'anglais est une barrière
pour vous, n'hésitez pas à me contacter.

### Bibliographie et ressources utilisées

- Documentation officielle de PHP :
  [php.net/manual/fr](https://www.php.net/manual/fr/index.php)
- Site web pour apprendre PHP :
  [phptherightway.com](https://phptherightway.com/)
- Tutoriel PHP avec W3Schools :
  [w3schools.com/php](https://www.w3schools.com/php/)
- Liste de ressources PHP :
  [github.com/ziadoz/awesome-php](https://github.com/ziadoz/awesome-php)

![bg right:40%][illustration-bibliographie-et-ressources]

## Introduction à PHP

<!-- _class: lead -->

### Introduction à PHP

### Qu'est-ce que PHP

### Comment PHP fonctionne

### Comment écrire du code PHP

### Comment exécuter du code PHP

### Les variables

#### Type de données et typage dynamique

#### Les chaînes de caractères

#### Les nombres

#### Les booléens

#### Les tableaux

### Les constantes

### Les opérateurs (arithmétiques, de comparaison, logiques, etc.)

### Les structures de contrôle conditionnelles (if, else, elseif)

## Mini-projet

### Présentation du mini-projet

### Objectifs de la session

## Exercices

## Questions

<!-- _class: lead -->

Est-ce que vous avez des questions ?

## À vous de jouer !

- (Re)lire le [support de cours][course-material]
- Réaliser le [mini-projet][mini-project]
- Faire les [exercices][exercices]
- Poser des questions si nécessaire

N'hésitez pas à me contacter si vous avez des questions !

![bg right:40%][illustration-a-vous-de-jouer]

## Sources

- [Illustration principale][illustration-principale] par
  [Richard Jacobs](https://unsplash.com/@rj2747) sur
  [Unsplash](https://unsplash.com/photos/grayscale-photo-of-elephants-drinking-water-8oenpCXktqQ)
- [Illustration][illustration-objectifs] par
  [Aline de Nadai](https://unsplash.com/@alinedenadai) sur
  [Unsplash](https://unsplash.com/photos/j6brni7fpvs)
- [Illustration][illustration-modalites-devaluation] par
  [Nguyen Dang Hoang Nhu](https://unsplash.com/@nguyendhn) sur
  [Unsplash](https://unsplash.com/photos/person-writing-on-white-paper-qDgTQOYk6B8)
- [Illustration][illustration-bibliographie-et-ressources] par
  [Tim van Cleef](https://unsplash.com/@_timvancleef) sur
  [Unsplash](https://unsplash.com/photos/wooden-ladder-by-bookshelves-1JBOZwuW7sI)
- [Illustration][illustration-a-vous-de-jouer] par
  [Nikita Kachanovsky](https://unsplash.com/@nkachanovskyyy) sur
  [Unsplash](https://unsplash.com/photos/white-sony-ps4-dualshock-controller-over-persons-palm-FJFPuE1MAOM)

<!-- URLs -->

[presentation-web]:
	https://heig-vd-mvp-course.github.io/heig-vd-mvp-course/01-cours-introduction-motivation-et-organisation-de-lunite/01-presentation/
[presentation-pdf]:
	https://heig-vd-mvp-course.github.io/heig-vd-mvp-course/01-cours-introduction-motivation-et-organisation-de-lunite/01-presentation/01-cours-introduction-motivation-et-organisation-de-lunite-presentation.pdf
[course-material]:
	https://github.com/heig-vd-mvp-course/heig-vd-mvp-course/blob/main/01-cours-introduction-motivation-et-organisation-de-lunite/02-support-de-cours/README.md
[license]:
	https://github.com/heig-vd-mvp-course/heig-vd-mvp-course/blob/main/LICENSE.md
[mini-project]:
	https://github.com/heig-vd-mvp-course/heig-vd-mvp-course/blob/main/01-cours-introduction-motivation-et-organisation-de-lunite/02-support-de-cours/README.md
[exercices]:
	https://github.com/heig-vd-mvp-course/heig-vd-mvp-course/blob/main/01-cours-introduction-motivation-et-organisation-de-lunite/03-exercices/README.md

<!-- Illustrations -->

[illustration-principale]:
	https://images.unsplash.com/photo-1517486430290-35657bdcef51?fit=crop&h=720
[illustration-objectifs]:
	https://images.unsplash.com/photo-1516389573391-5620a0263801?fit=crop&h=720
[illustration-modalites-devaluation]:
	https://images.unsplash.com/photo-1606326608606-aa0b62935f2b?fit=crop&h=720
[illustration-bibliographie-et-ressources]:
	https://images.unsplash.com/photo-1554906493-4812e307243d?fit=crop&h=720
[illustration-a-vous-de-jouer]:
	https://images.unsplash.com/photo-1509198397868-475647b2a1e5?fit=crop&h=720
