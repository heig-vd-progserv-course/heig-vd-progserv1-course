<?php
function isEven(int $number): bool {
    return $number % 2 === 0;
}

$result = isEven(10);

if ($result) {
    echo "Even<br>";
} else {
    echo "Odd<br>";
}
