<?php
function divide(int|float $a, int|float $b): string|int|float {
    if ($b === 0) {
        return "Division by zero is not allowed.";
    } else {
        return $a / $b;
    }
}

$result = divide(6, 3);

echo $result . "<br>";
