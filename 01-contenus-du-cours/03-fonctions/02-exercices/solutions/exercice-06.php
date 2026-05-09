<?php
function maxOfTwo(int|float $a, int|float $b): int|float {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$result = maxOfTwo(12, 8);

echo $result;
