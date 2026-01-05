<?php
function add($x, $y = 0) {
    return $x + $y;
}

$result = add(3);

echo "$result<br>"; // Affiche 3

$result = add(3, 5);

echo "$result<br>"; // Affiche 8
