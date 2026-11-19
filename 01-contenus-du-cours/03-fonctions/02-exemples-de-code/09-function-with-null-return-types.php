<?php
function find(array $numbers, int $id): ?int { // ou : int|null
    foreach ($numbers as $number) {
        if ($number === $id) {
            return $id;
        }
    }

    return null;
}

$numbers = [1, 2, 3];

find($numbers, 2); // Retourne 2
find($numbers, 4); // Retourne null car 4 n'est pas dans le tableau $numbers
find([2, 4, 6], 4); // Retourne 4
find([2, 4, 6], 5); // Retourne null car 5 n'est pas dans le tableau [2, 4, 6]
