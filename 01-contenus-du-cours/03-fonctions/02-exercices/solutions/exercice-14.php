<?php
function absoluteValue(int|float $number): int|float {
    return abs($number);
}

$result = absoluteValue(-15);

echo $result;
