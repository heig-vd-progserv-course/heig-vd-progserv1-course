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
  \newcommand{\session}{Tableaux et boucles - Activités en classe}

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

# Tableaux et boucles - Activités en classe

## Partie 1 - Exploration du mini-projet

Par groupe de deux (2) à trois (3) personnes, explorez le mini-projet que vous
avez réalisé lors de la dernière séance. Si besoin, vous pouvez retrouver le
résultat attendu à l'adresse <https://progserv1.heig-vd-progserv-course.ch>
(voir le résultat de la séance 1).

### Déroulement

- 10 minutes pour répondre aux questions.
- 10 minutes pour une discussion collective sur votre compréhension du
  mini-projet.
- La seconde partie du document vous sera remis plus tard pour compléter vos
  réponses de manière individuelle.

### Question 1

Vous avez peut-être remarqué que le contenu des pages `index.php` et `view.php`
est statique (c'est-à-dire que le contenu est écrit en dur directement dans le
code HTML).

Selon vous, comment faudrait-il transformer le code pour que le contenu des
pages soit dynamique, c'est-à-dire que le contenu soit généré automatiquement à
partir d'une source de données unique ?

```{=latex}
\answerbox{15cm}
```

```{=latex}
\newpage
```

### Question 2

En reprenant le contexte de la question 1, vous avez peut-être remarqué que le
code HTML pour afficher les tâches est répétitif. Selon vous, comment
faudrait-il transformer le code pour éviter cette répétition et rendre le code
plus maintenable ?

```{=latex}
\answerbox{9.5cm}
```

### Question 3

Dans la page `view.php`, comment déplaceriez-vous les informations de la tâche
pour utiliser PHP et ne pas avoir à les écrire en dur dans le code HTML ?

```{=latex}
\answerbox{9.5cm}
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

Comment avez-vous identifié les éléments répétitifs dans le code HTML du
mini-projet ? (ex. : tâches, boutons, liens, etc.)

```{=latex}
\answerbox{4cm}
```

### Question 2

Comment avez-vous structuré l'information pour représenter les tâches dans le
mini-projet ? (ex. : tableau, liste, etc.)

```{=latex}
\answerbox{4cm}
```

### Question 3

Quelle est la différence entre un tableau indexé et un tableau associatif en PHP
? Dans le mini-projet, quel type de tableau avez-vous utilisé pour représenter
les tâches et pourquoi ?

```{=latex}
\answerbox{4cm}
```

```{=latex}
\newpage
```

### Question 4

Dans un tableau associatif, comment accédez-vous à une valeur spécifique en
utilisant sa clé ? Donnez un exemple concret en rapport avec le mini-projet.

```{=latex}
\answerbox{4cm}
```

### Question 5

Comment exprimer des attributs ou des propriétés facultatifs d'une tâche dans un
tableau associatif en PHP ? Donnez un exemple concret en rapport avec le
mini-projet.

```{=latex}
\answerbox{4cm}
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
\answerbox{4cm}
```
