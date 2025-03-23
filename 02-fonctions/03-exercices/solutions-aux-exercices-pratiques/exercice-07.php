<?php
function isEven($number) {
    return $number % 2 == 0;
}

$result = isEven(10);

if ($result) {
    echo "Even<br>";
} else {
    echo "Odd<br>";
}
