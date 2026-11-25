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
  \newcommand{\session}{Introduction à PHP - Activités en classe}

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

# Introduction à PHP - Activités en classe

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

Quelles sont les fonctionnalités principales que propose le mini-projet ?

```{=latex}
\answerbox{3cm}
```

### Question 2

Combien de pages composent le mini-projet ?

```{=latex}
\answerbox{0.5cm}
```

### Question 3

Pour chaque page, quelles sont les informations affichées et les actions
possibles ?

```{=latex}
\answerbox{3cm}
```

### Question 4

Quelles sont les technologies utilisées pour implémenter le mini-projet ?

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
\answerbox{4.5cm}
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

Dans quel fichier se trouve la documentation du projet ? Pourquoi est-il si
important ?

```{=latex}
\answerbox{3cm}
```

### Question 2

Comment devez-vous ouvrir le projet dans Visual Studio Code pour que
l'environnement de développement local fonctionne correctement ? Quelle est la
commande à exécuter pour lancer le serveur web local ?

```{=latex}
\answerbox{3cm}
```

### Question 3

A quelle adresse (URL) pouvez-vous accéder pour visualiser votre projet dans
votre navigateur web ?

```{=latex}
\answerbox{0.5cm}
```

### Question 4

Qu'est-ce qu'un serveur web tel que Apache et à quoi sert-il dans le mini-projet
? De quoi est-il composé et comment fonctionne-t-il ?

```{=latex}
\answerbox{3cm}
```

```{=latex}
\newpage
```

### Question 5

Quelle est la différence entre PHP et HTML ? Comment ces deux langages sont-ils
utilisés dans le mini-projet ?

```{=latex}
\answerbox{3cm}
```

### Question 6

Donnez l'explication complète de ce qu'il se passe lorsque vous accédez à une
page PHP dans votre navigateur web.

```{=latex}
\answerbox{6.5cm}
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
