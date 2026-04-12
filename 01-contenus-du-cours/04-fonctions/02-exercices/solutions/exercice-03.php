<?php
function multiply(int|float $a, int|float $b): int|float {
    return $a * $b;
}

$result = multiply(6, 7);

echo $result;
