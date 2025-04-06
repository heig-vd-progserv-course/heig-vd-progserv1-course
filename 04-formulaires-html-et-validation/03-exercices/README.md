# Cours 04 - Formulaires HTML et validation - Exercices

Cette série d'exercices est conçue pour vous permettre de valider les concepts
théoriques et pratiques vus dans le cours
_[Cours 04 - Formulaires HTML et validation](../01-theorie/README.md)_.

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
- [Exercice 1a](#exercice-1a)
- [Exercice 1b](#exercice-1b)
- [Exercice 1c](#exercice-1c)
- [Exercice 1d](#exercice-1d)
- [Exercice 1e](#exercice-1e)

## Exercice 1a

Réalisez un formulaire de contact en HTML avec les champs suivants :

- Nom (champ texte)
- Prénom (champ texte)
- Adresse e-mail (champ texte)
- Numéro de téléphone (champ texte)
- Message (champ textarea)
- Consentement pour le traitement des données personnelles (champ case à cocher)
- Bouton d'envoi (submit)
- Bouton de réinitialisation (reset)

Le formulaire doit être structuré de manière à ce que chaque champ soit
accompagné d'une étiquette (label). Le formulaire doit être envoyé à une page de
traitement (`contact.php`) en méthode POST.

Il n'est pas nécessaire de valider les données saisies par l'utilisateur ou de
mettre de contraintes sur les champs pour le moment.

<details>
<summary>Afficher la réponse</summary>

```php
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Formulaire de contact</title>
</head>

<body>
    <h1>Formulaire de contact</h1>
    <form action="contact.php" method="POST">
        <label for="firstName">Prénom :</label><br>
        <input type="text" id="firstName" name="firstName">

        <br>

        <label for="lastName">Nom :</label><br>
        <input type="text" id="lastName" name="lastName">

        <br>

        <label for="email">Adresse e-mail :</label><br>
        <input type="email" id="email" name="email">

        <br>

        <label for="phoneNumber">Numéro de téléphone :</label><br>
        <input type="tel" id="phoneNumber" name="phoneNumber">

        <br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message"></textarea>

        <br>

        <label for="consent">
            <input type="checkbox" id="consent" name="consent">
            J'accepte le traitement de mes données personnelles
        </label>

        <br>
        <br>

        <button type="submit">Envoyer</button>
        <button type="reset">Réinitialiser</button>
    </form>
</body>

</html>
```

</details>

## Exercice 1b

En utilisant le formulaire de contact réalisé dans
l'[exercice 1a](#exercice-1a), récupérez les données saisies par l'utilisateur
et affichez les simplement dans la page.

Il n'est pas nécessaire de conserver les données saisies par l'utilisateur dans
le formulaire après l'envoi pour le moment.

<details>
<summary>Afficher la réponse</summary>

</details>

## Exercice 1c

En utilisant le formulaire de contact réalisé dans
l'[exercice 1b](#exercice-1b), conservez et réutilisez les données saisies par
l'utilisateur pour que la personne puisse les réutiliser après l'envoi du
formulaire si besoin (en cas d'erreur par exemple).

<details>
<summary>Afficher la réponse</summary>

</details>

## Exercice 1d

En utilisant le formulaire de contact réalisé dans
l'[exercice 1c](#exercice-1c), validez les données saisies par l'utilisateur
côté server (lors de leur réception). Vous pouvez utiliser les règles de
validation suivantes :

- Le nom et le prénom doivent être obligatoires et ne doivent pas contenir de
  chiffres.
- L'adresse e-mail doit être valide.
- Le numéro de téléphone doit être valide (10 chiffres, par ex. 0791234567).
- Le message doit être obligatoire et ne doit pas dépasser 500 caractères.
- Le consentement pour le traitement des données personnelles doit être
  obligatoire.

Si les données sont valides, affichez un message de confirmation ou les messages
d'erreur correspondants sinon.

<details>
<summary>Afficher la réponse</summary>

</details>

## Exercice 1e

En utilisant le formulaire de contact réalisé dans
l'[exercice 1c](#exercice-1d), validez les données saisies par l'utilisateur
côté client (avant l'envoi du formulaire).

<details>
<summary>Afficher la réponse</summary>

</details>
