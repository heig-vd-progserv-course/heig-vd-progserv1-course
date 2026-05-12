---
marp: true
theme: custom-marp-theme
size: 16:9
paginate: true
author: L. Delafontaine, avec l'aide de GitHub Copilot
description:
  Récapitulatif du cours et préparation à l'examen pour le cours ProgServ1 à la
  HEIG-VD, Suisse
url: https://heig-vd-progserv-course.github.io/heig-vd-progserv1-course/01-contenus-du-cours/06.01-recapitulatif-du-cours-et-preparation-a-lexamen/presentation.html
header:
  "[**Récapitulatif du cours et préparation à
  l'examen**][contenu-complet-sur-github]"
footer:
  "[**HEIG-VD**](https://heig-vd.ch) - [ProgServ1 Course
  2025-2026](https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course)
  - [CC BY-SA 4.0][license]"
headingDivider: 6
math: mathjax
---

# Récapitulatif du cours et préparation à l'examen

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

## Récapitulatif du cours et préparation à l'examen

<!-- _class: lead -->

Vous l'avez fait, bravo ! 🎉

## Retrospective

<!-- _class: lead -->

Jetons un coup d'œil sur ce que **vous** avez fait au cours de ce semestre.

### Objectifs du cours

> À la fin de ce cours, vous devriez être capable de :
>
> - Expliquer les bases d'un langage de programmation serveur comme PHP et son
>   rôle dans le monde web.
> - Organiser un code propre à l'aide de fonctions.
> - Manipuler des tableaux et utiliser des boucles pour traiter des collections
>   de données.
> - Gérer les formulaires et les données qu'ils contiennent.
> - Persister des données dans une base de données.

### Introduction à PHP

<!-- _class: lead -->

[Retrouvez ce cours sur le dépôt Git du cours](https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/01.02-introduction-a-php/README.md).

![bg brightness:2 opacity:0.05][illustration-principale]

#### Éléments clés à retenir

- PHP est un langage de programmation côté serveur, principalement utilisé pour
  créer des applications web dynamiques, qui repose sur une architecture
  client-serveur.
- Il est intégré dans le HTML et peut interagir avec des bases de données.
- PHP est un langage interprété, ce qui signifie qu'il est exécuté sur le
  serveur avant d'envoyer le contenu au navigateur.
- La syntaxe de PHP est similaire à d'autres langages de programmation.

### Tableaux et boucles

<!-- _class: lead -->

[Retrouvez ce cours sur le dépôt Git du cours](https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/02-tableaux-et-boucles/README.md).

![bg brightness:2 opacity:0.05][illustration-principale]

#### Éléments clés à retenir

- Les tableaux sont des structures de données qui permettent de stocker
  plusieurs valeurs sous une seule variable.
- Ils peuvent être indexés numériquement ou associativement.
- Les boucles permettent de parcourir les tableaux et d'exécuter du code
  plusieurs fois.
- Les boucles `for`, `foreach`, `while` et `do...while` sont couramment
  utilisées en PHP.
- Des fonctions permettent d'utiliser/de manipuler les tableaux de manière
  efficace (ex. `count()`, `array_push()`, etc.).

### Fonctions

<!-- _class: lead -->

[Retrouvez ce cours sur le dépôt Git du cours](https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/03-fonctions/README.md).

![bg brightness:2 opacity:0.05][illustration-principale]

#### Éléments clés à retenir

- Les fonctions permettent de regrouper du code réutilisable.
- Elles peuvent accepter des paramètres et retourner des valeurs.
- Les fonctions peuvent être définies par l'utilisateur.trice ou intégrées dans
  le langage.
- L'utilisation de fonctions permet d'améliorer la lisibilité et la
  maintenabilité du code.
- En PHP, il est possible de typer les paramètres et les valeurs de retour des
  fonctions.
- Il est également possible de définir des paramètres optionnels.

### Formulaires HTML et validation

<!-- _class: lead -->

[Retrouvez ce cours sur le dépôt Git du cours](https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/04-formulaires-html-et-validation/README.md).

![bg brightness:2 opacity:0.05][illustration-principale]

#### Éléments clés à retenir

- Les formulaires HTML permettent aux utilisateurs de soumettre des données à un
  serveur.
- En PHP, les données des formulaires peuvent être récupérées via les
  superglobales `$_GET` et `$_POST` qui sont des tableaux associatifs.
- La validation des données est essentielle pour garantir la sécurité et
  l'intégrité des données.
- La validation peut être effectuée côté client (attributs HTML - optionnel) et
  côté serveur (PHP - obligatoire).

### Bases de données et PDO

<!-- _class: lead -->

[Retrouvez ce cours sur le dépôt Git du cours](https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/05-bases-de-donnees-et-pdo/README.md).

![bg brightness:2 opacity:0.05][illustration-principale]

#### Éléments clés à retenir (1)

- Les bases de données permettent de stocker et de gérer des données de manière
  structurée.
- PDO (PHP Data Objects) est une extension de PHP qui permet d'interagir avec
  différentes bases de données de manière sécurisée et efficace.
- PDO offre une interface orientée objet pour exécuter des requêtes SQL et
  récupérer des résultats.
- SQLite est une base de données légère qui peut être utilisée avec PDO pour des
  applications simples.

#### Éléments clés à retenir (2)

- La sécurité est cruciale dans le développement web pour protéger les données
  et les utilisateur.trices.
- Les attaques courantes incluent l'injection SQL et les attaques XSS
  (Cross-Site Scripting).
- Les requêtes préparées avec PDO permettent de prévenir les attaques par
  injection SQL en séparant le code SQL des données.
- Les fonctions de nettoyage comme `htmlspecialchars()` aident à sécuriser les
  données affichées dans le navigateur en échappant les caractères spéciaux.

## Résultats des formulaires de feedback et évaluations GAPS

<!-- _class: lead -->

Discussions et retours sur le cours.

<small>

Vous pourrez les retrouver sur le [dépôt Git du
cours][contenu-complet-sur-github].

</small>

## Préparation à l'examen final

<!-- _class: lead -->

Tout ce que vous devez savoir pour réussir l'examen final.

## Modalités d'évaluation

- Le cours se termine par un examen final.
- Les dates et les salles seront communiquées d'ici peu..
- **Venez en avance pour vous installer et vous préparer.**
- L'examen est composé de deux parties, décrit dans le document
  [Évaluation finale](https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/02-evaluation-finale/README.md).

![bg right:40%][illustration-modalites-devaluation]

### Calcul de la note finale

La note finale de l'examen est calculée en combinant les notes des deux parties
de l'examen :

$$
\text{Note finale}
  = \text{Note pour la partie théorique} * 0.6
  + \text{Note pour la partie pratique} * 0.4
$$

### Sanctions possibles en cas de tricherie (1)

Source :
[Règlement d'études Bachelor de la HEIG-VD](https://intra.heig-vd.ch/academique/cadre-de-reference/Documents/Rglt-Etudes-HEIG-VD.pdf).

> **Art. 16. - Fraude, plagiat et usage de faux**
>
> 1 - Toute fraude, y compris le plagiat ou la tentative de fraude dans les
> travaux d'évaluation, les examens et le travail de bachelor, **entraîne la
> note de 1.0 au module**, impliquant la non-acquisition des crédits ECTS
> correspondants, voire l'invalidation du titre, et peut faire l'objet d'une des
> sanctions prévues à l'article 14.

### Sanctions possibles en cas de tricherie (2)

> **Art. 14. - Sanctions**
>
> 1 - L'étudiant qui ne respecte pas les règles ainsi que les directives ou les
> consignes de la HEIG-VD, [...] est passible des sanctions disciplinaires
> suivantes :
>
> 1. l'avertissement ;
> 2. l'exclusion temporaire ;
> 3. **l'exclusion de la filière, voire du domaine** si les règlements du
>    domaine le prévoient.

### Sanctions possibles en cas de tricherie (3)

**Les personnes qui surveilleront l'examen sont informées des règles
d'évaluation et des sanctions possibles en cas de triche.**

Elles sont en charge de surveiller le bon déroulement de l'examen et de signaler
les éventuels cas de triche. **Aucune tolérance ne sera accordée en cas de
triche avérée ou de doute sur la bonne conduite de l'examen**.

Vous avez travaillé dur pour arriver jusqu'ici et nous avons confiance en vos
capacités à réussir cet examen. **Ne prenez pas le risque de nous décevoir et/ou
de vous faire renvoyer**.

### Comment se préparer ?

- Avoir un environnement de développement fonctionnel (cf. cours
  [Introduction à PHP](https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/01.02-introduction-a-php/README.md),
  plus particulièrement le mini-projet).
- **Désactiver toutes aides externes (Copilot, ChatGPT, etc.)**.
- Relire les supports de cours avec leurs objectifs respectifs (utilisez ces
  objectifs pour valider vos acquis).
- Refaire les mini-projets et les exercices.
- Réaliser l'[examen blanc][examen-blanc] à disposition.

## Questions

<!-- _class: lead -->

Est-ce que vous avez des questions ?

## À vous de jouer !

- Prendre connaissance du document
  [Évaluation finale](https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/02-evaluation-finale/README.md).
- Réaliser l'[examen blanc][examen-blanc] à votre disposition.
- Finaliser le mini-projet du cours.
- Poser des questions si nécessaire.

**N'allez pas trop vite, vous avez le temps !** N'hésitez pas à vous entraidez
si vous avez des difficultés.

![bg right:40%][illustration-a-vous-de-jouer]

## Examen final

<!-- _class: lead -->

<small>_Ces slides sont utilisées le jour de l'examen final pour rappeler les
modalités d'évaluation et les consignes à suivre._</small>

### Déroulement

<div class="two-columns">
<div>

**Partie 1**

- 90 minutes.
- Papier et crayon.
- Si vous avez fini, vous pouvez quitter la salle.
- **Aucune ressource autorisée**.

</div>
<div>

**Partie 2**

- 90 minutes.
- Sur ordinateur.
- Rendu sur GitHub.
- **Ressources partielles autorisées**.

</div>
</div>

<center>

Une pause de 15 minutes est prévue entre les deux parties.

</center>

### Sanctions possibles en cas de tricherie (1)

Source :
[Règlement d'études Bachelor de la HEIG-VD](https://intra.heig-vd.ch/academique/cadre-de-reference/Documents/Rglt-Etudes-HEIG-VD.pdf).

> **Art. 16. - Fraude, plagiat et usage de faux**
>
> 1 - Toute fraude, y compris le plagiat ou la tentative de fraude dans les
> travaux d'évaluation, les examens et le travail de bachelor, **entraîne la
> note de 1.0 au module**, impliquant la non-acquisition des crédits ECTS
> correspondants, voire l'invalidation du titre, et peut faire l'objet d'une des
> sanctions prévues à l'article 14.

### Sanctions possibles en cas de tricherie (2)

> **Art. 14. - Sanctions**
>
> 1 - L'étudiant qui ne respecte pas les règles ainsi que les directives ou les
> consignes de la HEIG-VD, [...] est passible des sanctions disciplinaires
> suivantes :
>
> 1. l'avertissement ;
> 2. l'exclusion temporaire ;
> 3. **l'exclusion de la filière, voire du domaine** si les règlements du
>    domaine le prévoient.

---

<div class="two-columns">
<div>

**Partie 1**

- 90 minutes.
- Si vous avez fini, vous pouvez quitter la salle.

</div>
<div>

**Partie 2**

- 90 minutes.
- Rendu sur GitHub avant la fin de l'examen.

</div>
</div>

<div style="left:0; width:100%; height:0; position:relative; padding-bottom:25%; margin:0 auto">
  <iframe src="https://www.tickcounter.com/widget/clock/61896" style="top:0; left:0; width:100%; height:100%; position:absolute; border:0; overflow:hidden" title="Time In Zurich"></iframe>
</div>

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
- [Illustration][illustration-a-vous-de-jouer] par
  [Nikita Kachanovsky](https://unsplash.com/@nkachanovskyyy) sur
  [Unsplash](https://unsplash.com/photos/white-sony-ps4-dualshock-controller-over-persons-palm-FJFPuE1MAOM)

<!-- URLs -->

[license]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/LICENSE.md
[contenu-complet-sur-github]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/06.01-recapitulatif-du-cours-et-preparation-a-lexamen/README.md
[examen-blanc]:
	https://github.com/heig-vd-progserv-course/heig-vd-progserv1-course/blob/main/01-contenus-du-cours/06.01-recapitulatif-du-cours-et-preparation-a-lexamen/02-examen-blanc/README.md

<!-- Illustrations -->

[illustration-principale]:
	https://images.unsplash.com/photo-1517486430290-35657bdcef51?fit=crop&h=720
[illustration-objectifs]:
	https://images.unsplash.com/photo-1516389573391-5620a0263801?fit=crop&h=720
[illustration-modalites-devaluation]:
	https://images.unsplash.com/photo-1606326608606-aa0b62935f2b?fit=crop&h=720
[illustration-a-vous-de-jouer]:
	https://images.unsplash.com/photo-1509198397868-475647b2a1e5?fit=crop&h=720
