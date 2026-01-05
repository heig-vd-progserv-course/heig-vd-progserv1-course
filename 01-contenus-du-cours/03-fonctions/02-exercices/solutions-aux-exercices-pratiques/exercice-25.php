<?php
function isDivisibleBy($a, $b) {
    return $b != 0 && $a % $b == 0;
}

if (isDivisibleBy(10, 2)) {
    echo "10 is divisible by 2<br>";
} else {
    echo "10 is not divisible by 2<br>";
}

if (isDivisibleBy(10, 3)) {
    echo "10 is divisible by 3<br>";
} else {
    echo "10 is not divisible by 3<br>";
}
