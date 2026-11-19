<?php
function increment($x) {
    $x++;
}

$value = 5;

increment($value);

echo $value; // Affiche 5, car $value n'est pas modifié par la fonction increment
