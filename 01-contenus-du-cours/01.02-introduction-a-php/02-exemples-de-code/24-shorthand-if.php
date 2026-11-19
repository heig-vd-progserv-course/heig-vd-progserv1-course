<?php
// Déclaration d'une variable
$age = 18;

// Vérification si `$age` est supérieur ou égal à 18
// Si c'est le cas, la variable `$message` contiendra "You are an adult."
// Sinon, la variable `$message` contiendra "You are a minor."
$message = ($age >= 18) ? "You are an adult." : "You are a minor.";

echo $message;
