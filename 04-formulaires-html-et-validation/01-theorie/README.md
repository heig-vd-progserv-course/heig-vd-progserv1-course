# Cours 04 - Formulaires HTML et validation

## Ressources

- Théorie : [Support de cours](../01-theorie/README.md) ·
  [Présentation (web)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/04-formulaires-html-et-validation/01-theorie/index.html)
  ·
  [Présentation (PDF)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/04-formulaires-html-et-validation/01-theorie/04-formulaires-html-et-validation-presentation.pdf)
- Mini-projet : [Consignes](../02-mini-project/README.md) ·
  [Solution](../02-mini-project/solution/)
- Exercices : [Énoncés et solutions](../03-exercices/README.md)

## Table des matières

- [Ressources](#ressources)
- [Table des matières](#table-des-matières)
- [Objectifs](#objectifs)
- [Formulaires HTML](#formulaires-html)
  - [Structure d'un formulaire](#structure-dun-formulaire)
  - [Types de champs](#types-de-champs)
  - [Attributs](#attributs)
  - [Groupement de champs](#groupement-de-champs)
- [Envoyer des données des formulaires à un serveur](#envoyer-des-données-des-formulaires-à-un-serveur)
  - [Méthodes `GET` et `POST`](#méthodes-get-et-post)
  - [URL d'action](#url-daction)
  - [Envoi de données](#envoi-de-données)
  - [Traitement des données](#traitement-des-données)
- [Validation des formulaires](#validation-des-formulaires)
  - [Côté client](#côté-client)
  - [Côté serveur](#côté-serveur)
- [Conclusion](#conclusion)
- [Mini-projet](#mini-projet)
- [Exercices](#exercices)

## Objectifs

TODO

De façon plus précise, les personnes qui étudient devraient être capables de :

- TODO

## Formulaires HTML

TODO

### Structure d'un formulaire

### Types de champs

#### Champs de texte

#### Champs de mot de passe

#### Champs de texte multiligne

#### Champs de sélection

#### Champs de sélection multiple

#### Champs de case à cocher

#### Champs de bouton radio

#### Champs de bouton

#### Champs de fichier

#### Champs de date

#### Champs de couleur

#### Champs de nombre

### Attributs

### Groupement de champs

## Envoyer des données des formulaires à un serveur

### Méthodes `GET` et `POST`

Les formulaires HTML peuvent envoyer des données à un serveur en utilisant
différentes méthodes. Les deux méthodes les plus courantes sont `GET` et `POST`.

- La méthode `GET` envoie les données du formulaire dans l'URL de la requête
  HTTP. Cela signifie que les données sont visibles dans la barre d'adresse du
  navigateur et peuvent être enregistrées dans l'historique du navigateur. Cette
  méthode est généralement utilisée pour des requêtes simples où la sécurité
  n'est pas une préoccupation majeure.
- La méthode `POST` envoie les données du formulaire dans le corps de la requête
  HTTP. Cela signifie que les données ne sont pas visibles dans l'URL et ne sont
  pas enregistrées dans l'historique du navigateur. Cette méthode est
  généralement utilisée pour des requêtes plus complexes ou lorsque la sécurité
  est une préoccupation.

### URL d'action

L'URL d'action est l'URL à laquelle les données du formulaire seront envoyées
lorsque le formulaire sera soumis. Cette URL peut être un script PHP, un
endpoint d'API ou toute autre ressource capable de traiter les données du
formulaire. L'URL d'action est spécifiée dans l'attribut `action` de la balise
`<form>`.

### Envoi de données

Lorsque le formulaire est soumis, les données sont envoyées au serveur selon la
méthode spécifiée (`GET` ou `POST`). Le serveur peut ensuite traiter ces données
et renvoyer une réponse au client. La réponse peut être une page HTML, un
fichier ou des données au format JSON, par exemple.

### Traitement des données

Le traitement des données envoyées par le formulaire dépend de la technologie
utilisée côté serveur. Par exemple, en PHP, vous pouvez accéder aux données du
formulaire en utilisant les superglobales `$_GET` ou `$_POST`, selon la méthode
utilisée pour envoyer les données. Ces superglobales contiennent des tableaux
associatifs qui mappent les noms des champs du formulaire aux valeurs soumises.
Vous pouvez ensuite utiliser ces données pour effectuer des opérations telles
que l'insertion dans une base de données, l'envoi d'e-mails ou la génération de
réponses dynamiques.

## Validation des formulaires

### Côté client

### Côté serveur

## Conclusion

TODO

## Mini-projet

Nous vous invitons maintenant à réaliser le mini-projet de cette session pour
mettre en pratique les concepts vus en classe.

Vous trouverez les détails du mini-projet ici :
[Consignes](../02-mini-project/README.md).

## Exercices

Nous vous invitons également à réaliser les exercices de cette session pour
renforcer votre compréhension des concepts vus en classe.

Vous trouverez les détails des exercices ici :
[Énoncés et solutions](../03-exercices/README.md).
