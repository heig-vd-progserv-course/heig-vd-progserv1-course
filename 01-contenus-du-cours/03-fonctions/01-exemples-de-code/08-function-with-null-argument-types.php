<?php
function add(int $x, ?int $y): int {
    if ($y === null) {
        return $x;
    }

    return $x + $y;
}

add(3, null); // Retourne 3
add(3, 5); // Retourne 8
