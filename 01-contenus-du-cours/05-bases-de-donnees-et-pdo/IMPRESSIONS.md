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
  \newcommand{\session}{Bases de données et PDO - Activités en classe}

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

# Bases de données et PDO - Activités en classe

## Partie 1 - Exploration du mini-projet

Par groupe de deux (2) à trois (3) personnes, explorez le mini-projet du cours à
l'adresse <https://progserv1.heig-vd-progserv-course.ch> (voir le résultat de la
séance 5).

### Déroulement

- 10 minutes pour répondre aux questions.
- 10 minutes pour une discussion collective sur votre compréhension du
  mini-projet.
- La seconde partie du document vous sera remis plus tard pour compléter vos
  réponses de manière individuelle.

### Question 1

Quelle est la grande différence entre le mini-projet de cette séance et celui de
la séance précédente ?

```{=latex}
\answerbox{3cm}
```

### Question 2

Avec ce que vous savez sur les bases de données, comment est construite la base
de données du mini-projet ?

```{=latex}
\answerbox{0.5cm}
```

### Question 3

Quelles sont les requêtes SQL utilisées dans le mini-projet pour interagir avec
la base de données ?

```{=latex}
\answerbox{3cm}
```

### Question 4

Comment pensez-vous que

```{=latex}
\answerbox{3cm}
```

```{=latex}
\newpage
```

### Question 5

Comment pensez-vous que le mini-projet est structuré ? (ex. : nombre de
fichiers, organisation des fichiers, etc.)

```{=latex}
\answerbox{3.5cm}
```

### Question 6

Comment pensez-vous que les données sont échangées et stockées dans cette
application ?

```{=latex}
\answerbox{3.5cm}
```

### Question 7

Avez-vous découvert des limites ou des problèmes dans le mini-projet ? Si oui,
lesquels ?

```{=latex}
\answerbox{3.5cm}
```

### Question 8

De quoi est composé une tâche dans le mini-projet ? (ex. : quelles sont les
informations qui la composent ?)

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

A quoi sert PDO et comment est-il utilisé dans le mini-projet ?

```{=latex}
\answerbox{9.5cm}
```

### Question 2

Comment PDO a été utilisé pour interagir avec la base de données dans le
mini-projet ?

```{=latex}
\answerbox{9.5cm}
```

### Question 3

Vous devez maintenant créer une nouvelle page d'édition pour le mini-projet.

Quelles sont les étapes que vous suivriez pour la développer ? (ex. :
planification, conception, développement, tests, déploiement, etc.)

Validez votre réponse en expliquant les étapes que vous suivriez pour développer
une nouvelle page d'édition pour le mini-projet, en vous basant sur ce que vous
avez appris dans le cours.

Une fois votre réponse formulée, présentez-la à votre enseignant·e pour
validation avant de passer à l'implémentation de la page d'édition.

```{=latex}
\answerbox{3cm}
```

### Question 4

Vous devez refaire un projet similaire à celui que vous avez créé dans le cours.
Quelles sont les étapes que vous suivriez pour le développer ? (ex. :
planification, conception, développement, tests, déploiement, etc.)

Soyez précis·e et détaillé·e dans votre réponse, en expliquant les étapes que
vous suivriez pour développer un projet similaire à celui que vous avez créé
dans le cours.

```{=latex}
\answerbox{3cm}
```

### Question 3

Avez-vous déployé l'application en ligne sur Internet ? Si oui, comment
avez-vous procédé et quelles sont les étapes à suivre pour déployer une
application web sur Internet ? Si non, pourquoi n'avez-vous pas déployé
l'application en ligne sur Internet ?

```{=latex}
\answerbox{3cm}
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
