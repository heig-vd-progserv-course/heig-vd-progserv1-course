<?php
$x = 42;

function square() {
    global $x;

    $x = $x * $x;
}

square();

echo $x; // Affiche 1764
