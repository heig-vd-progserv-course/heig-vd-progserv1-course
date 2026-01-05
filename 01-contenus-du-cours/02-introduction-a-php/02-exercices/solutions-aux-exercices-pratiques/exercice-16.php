<?php
$number = 15;

if ($number % 3 == 0 && $number % 5 == 0) {
    echo "Divisible by 3 and 5";
} elseif ($number % 3 == 0) {
    echo "Divisible by 3";
} elseif ($number % 5 == 0) {
    echo "Divisible by 5";
} else {
    echo "Not divisible by 3 or 5";
}
