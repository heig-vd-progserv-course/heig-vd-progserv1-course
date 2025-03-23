<?php
$x = 42;

function square() {
    global $x;
    return $x * $x;
}

$result = square();

echo $result; // Affiche 1764
