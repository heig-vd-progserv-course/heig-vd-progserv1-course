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
\answerbox{4cm}
```

### Question 2

Avec ce que vous savez sur les bases de données, comment est construite la base
de données du mini-projet ?

```{=latex}
\answerbox{4cm}
```

### Question 3

Quelles sont les requêtes SQL utilisées dans le mini-projet pour interagir avec
la base de données ?

```{=latex}
\answerbox{4cm}
```

```{=latex}
\newpage
```

### Question 4

Quelle nouvelle page est présente dans le mini-projet et à quoi sert-elle ?
Quelles sont les différences ou les ressemblances avec les autres pages du
mini-projet ?

```{=latex}
\answerbox{5cm}
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
\answerbox{4cm}
```

### Question 2

Quelles sont les attaques communes dans une application web et comment s'en
protéger ?

```{=latex}
\answerbox{4cm}
```

```{=latex}
\newpage
```

### Question 3

Vous devez maintenant créer une nouvelle page d'édition pour le mini-projet.

Quelles sont les étapes que vous suivriez pour la développer ?

Soyez précis·e et détaillé·e dans votre réponse. Vous pouvez vous inspirer des
pages existantes du mini-projet pour répondre à cette question.

Une fois votre réponse formulée, présentez-la à votre enseignant·e pour
validation avant de passer à l'implémentation de la page d'édition.

```{=latex}
\answerbox{20cm}
```

```{=latex}
\newpage
```

### Question 4

Avez-vous déployé l'application en ligne sur Internet ? Si oui, comment
avez-vous procédé et quelles sont les étapes à suivre pour déployer une
application web sur Internet ? Si non, pourquoi n'avez-vous pas déployé
l'application en ligne sur Internet ?

```{=latex}
\answerbox{11.5cm}
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
