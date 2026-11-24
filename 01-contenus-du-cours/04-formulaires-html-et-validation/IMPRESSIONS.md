---
lang: "fr"
geometry: "top=2.5cm, bottom=2cm, left=2cm, right=2cm"
fontsize: "11pt"
papersize: "a4"
colorlinks: true
urlcolor: "blue"
linkcolor: "blue"
header-includes: |
  \usepackage{fancyhdr}
  \AtEndDocument{\label{LastPage}}

  \newcommand{\institution}{HEIG-VD}
  \newcommand{\coursename}{ProgServ1 2026-2027}
  \newcommand{\session}{Formulaires HTML et validation - Activités en classe}

  \pagestyle{fancy}
  \fancyhead[L]{\session}
  \fancyhead[R]{Nom :\hspace{6cm}}
  \fancyfoot[LO,LE]{\coursename}
  \fancyfoot[CO,CE]{\thepage{}/\pageref*{LastPage}}
  \fancyfoot[RO,RE]{\institution}
  \renewcommand{\footrulewidth}{0.4pt}

  \newcommand{\answerbox}[1]{%
    \begin{center}%
    \fbox{\parbox[t][#1][t]{0.985\textwidth}{~}}%
    \end{center}%
  }
---

<!--
## Utilisation

```bash
./generate-printable-documents.sh
```
-->

# Formulaires HTML et validation - Activités en classe

## Partie 1 - Exploration du mini-projet

Par groupe de deux (2) à trois (3) personnes, explorez le mini-projet du cours à
l'adresse <https://progserv1.heig-vd-progserv-course.ch> (voir le résultat de la
séance 4).

### Déroulement

- 10 minutes pour répondre aux questions.
- 10 minutes pour une discussion collective sur votre compréhension du
  mini-projet.
- La seconde partie du document vous sera remis plus tard pour compléter vos
  réponses de manière individuelle.

### Question 1

Depuis la page d'accueil, voyez-vous un changement dans la manière d'accéder aux
détails d'une tâche par rapport à la séance précédente ? Si oui, comment cela
fonctionne-t-il ?

```{=latex}
\answerbox{3.5cm}
```

### Question 2

Arrivez-vous à accéder aux détails d'une tâche en modifiant l'URL dans la barre
d'adresse de votre navigateur ? Si oui, comment cela fonctionne-t-il ?

```{=latex}
\answerbox{3.5cm}
```

### Question 3

Identifiez-vous des nouveautés dans les pages à disposition dans le mini-projet
par rapport à la séance précédente ? Si oui, lesquelles et comment cela
fonctionne-t-il ?

```{=latex}
\answerbox{3.5cm}
```

```{=latex}
\newpage
```

### Question 4

Par rapport à la structure de données de la semaine dernière représentant une
tâche, comment est-ce que celle-ci se retranscrit dans le mini-projet ? Quelles
sont les différences et les similitudes ?

```{=latex}
\answerbox{3.5cm}
```

### Question 5

Est-ce que le système vous empêche de créer une tâche avec des informations
invalides ? Comment cela fonctionne-t-il ? Quelles sont les informations
invalides que vous avez pu tester ?

```{=latex}
\answerbox{3.5cm}
```

### Question 6

Est-ce que vous voyez un moyen de contourner le système de validation et de
créer une tâche avec des informations invalides ? Si oui, comment ?

```{=latex}
\answerbox{3.5cm}
```

### Question 7

Comment pensez-vous que les données sont échangées et stockées dans cette
application ?

```{=latex}
\answerbox{3.5cm}
```

```{=latex}
\newpage
```

## Partie 2 - Rétrospective de la séance

Une fois le mini-projet terminé, réfléchissez aux apprentissages acquis lors de
la séance en répondant aux questions ci-dessous.

### Déroulement

- Vous avez jusqu'à la prochaine séance pour compléter vos réponses.
- À remettre en main propre au début de la prochaine séance.
- Un retour vous sera donné sur vos réponses et vos réflexions durant la
  prochaine séance.

### Question 1

Comment la méthode `GET` diffère-t-elle de la méthode `POST` dans le contexte
d'un formulaire HTML ? Pourquoi n'est-il pas recommandé de utiliser la méthode
`GET` pour envoyer des données sensibles dans un formulaire HTML ? (ex. : mot de
passe, informations personnelles, etc.)

```{=latex}
\answerbox{3.5cm}
```

### Question 2

Quels sont les différents types de champs de formulaire HTML que vous avez
utilisés dans le mini-projet ? Pour chaque type de champ, expliquez comment il
fonctionne et quelles sont ses caractéristiques principales.

```{=latex}
\answerbox{3.5cm}
```

### Question 3

Comment les données saisies dans un formulaire HTML sont-elles récupérées et
traitées côté serveur dans le mini-projet ? Donnez un exemple concret de la
manière dont les données d'un champ de formulaire sont récupérées et utilisées
dans le code PHP.

```{=latex}
\answerbox{3.5cm}
```

```{=latex}
\newpage
```

### Question 4

Qu'est-ce que la validation côté client et la validation côté serveur dans le
contexte d'un formulaire HTML ? Est-ce qu'elles sont obligatoires ? Pourquoi
est-il important de les utiliser dans le mini-projet ?

```{=latex}
\answerbox{4.5cm}
```

### Question 5

Comment est-ce que la superglobale `$_GET` est utilisée dans le mini-projet ?
Voyez-vous un cas où elle ne serait pas appropriée ? Si oui, pourquoi ?

```{=latex}
\answerbox{4.5cm}
```

### Liste de contrôle

- [ ] J'ai lu et compris l'ensemble du support de cours (pas seulement les
      slides).
- [ ] J'ai pris connaissance des objectifs et des questions d'évaluation de la
      séance pour m'assurer de comprendre ce que je dois apprendre et valider
      mes compétences.
- [ ] J'ai réalisé le mini-projet et j'ai compris son fonctionnement.
- [ ] J'ai effectué les exercices et j'ai compris les concepts abordés dans la
      séance.
- [ ] J'ai dû demander de l'aide pour comprendre certains concepts et j'ai
      compris les explications données (ex. : par le·la professeur·e, par un·e
      camarade de classe, IA, etc.).
- [ ] J'ai dû demander de l'aide pour comprendre certains concepts et je n'ai
      pas compris les explications données (ex. : par le·la professeur·e, par
      un·e camarade de classe, IA, etc.).

Difficultés rencontrées et les solutions trouvées, apprentissages personnels,
ressenti personnel, questions restantes, commentaires sur la séance, etc.

```{=latex}
\answerbox{3cm}
```
