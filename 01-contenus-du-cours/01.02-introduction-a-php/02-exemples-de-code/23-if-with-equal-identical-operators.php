<?php
// Déclaration de deux variables numériques
$a = 0;
$b = 0;
$c = "0";

// Vérification si `$a` est égal à `$b`)
if ($a == $b) {
    echo "a is equal to b (same value)";
}

// Vérification si `$a` est égal à `$c`)
if ($a == $c) {
    echo "a is equal to c (same value)";
}

// Vérification si `$a` est égal (identique) à `$b`
if ($a === $b) {
    echo "a is identical to b (same value and type)";
}

// Vérification si `$a` est égal (identique) à `$c`
if ($a === $c) {
    echo "a is identical to c (same value and type)";
} else {
    echo "a is not identical to c (different type)";
}
