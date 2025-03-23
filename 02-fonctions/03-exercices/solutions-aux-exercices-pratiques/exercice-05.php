<?php
function absoluteValue($number) {
    if ($number < 0) {
        return -$number;
    } else {
        return $number;
    }
}

$result = absoluteValue(-15);

echo $result;
