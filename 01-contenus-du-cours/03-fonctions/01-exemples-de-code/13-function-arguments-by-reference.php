<?php
function increment(&$x) {
    $x++;
}

$value = 5;

increment($value);

echo $value; // Affiche 6, car $value est modifié par la fonction increment
