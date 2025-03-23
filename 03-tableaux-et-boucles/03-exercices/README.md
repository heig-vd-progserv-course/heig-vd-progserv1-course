# Cours 03 - Tableaux et boucles - Exercices

Cette série d'exercices est conçue pour vous permettre de valider les concepts
théoriques et pratiques vus dans le cours
_[Cours 03 - Tableaux et boucles](../01-theorie/README.md)_.

## Ressources

- Théorie : [Support de cours](../01-theorie/README.md) ·
  [Présentation (web)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/03-tableaux-et-boucles/01-theorie/index.html)
  ·
  [Présentation (PDF)](https://heig-vd-progserv1-course.github.io/heig-vd-progserv1-course/03-tableaux-et-boucles/01-theorie/03-tableaux-et-boucles-presentation.pdf)
- Mini-projet : [Consignes](../02-mini-project/README.md) ·
  [Solution](../02-mini-project/solution/)
- Exercices : [Énoncés et solutions](../03-exercices/README.md)

## Tables des matières

- [Ressources](#ressources)
- [Tables des matières](#tables-des-matières)
- [Exercice 1](#exercice-1)

## Exercice 1

TODO

## Exercice 18

En utilisant la documentation officielle de PHP sur les fonctions `explode` :
<https://www.php.net/manual/fr/function.explode.php> et `implode` :
<https://www.php.net/manual/fr/function.implode.php>, déclarez une fonction
`reverseWords` qui prend un paramètre `$string` et retourne la chaîne de
caractères `$string` avec les mots dans l'ordre inverse.

Faites des tests avec la chaîne suivante :

```php
<?php
$string = "Hello, world!";
```

<details>
<summary>Afficher la réponse</summary>

```php
<?php
$string = "Hello, world!";
$words = explode(" ", $string);
$reversedWords = array_reverse($words);
$reversedString = implode(" ", $reversedWords);

echo $reversedString;
```

```text
world! Hello,
```

</details>
