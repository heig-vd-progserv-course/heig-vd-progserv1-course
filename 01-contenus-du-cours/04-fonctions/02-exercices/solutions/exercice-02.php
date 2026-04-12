<?php
function square(int|float $number): int|float {
    return $number * $number;
}

$result = square(4);

echo $result;
