<?php
function add(float $x, float $y = 0): float {
    return $x + $y;
}

$result = add(3);

echo "$result<br>"; // Affiche 3

$result = add(3, 5);

echo "$result<br>"; // Affiche 8

$result = add(4.5, 5);

echo "$result<br>"; // Affiche 9.5

$result = add(4.5, "Hello"); // Une erreur survient
