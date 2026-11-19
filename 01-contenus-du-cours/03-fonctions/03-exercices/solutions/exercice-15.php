<?php
function power(int|float $base, int|float $exponent): int|float {
    return pow($base, $exponent);
}

$result = power(2, 8);

echo $result;
