<?php
$variable1 = "Hello, world!";
$variable2 = 42;
$variable3 = 3.14;
$variable4 = true;

function isStringOrInteger($variable) {
    if (is_string($variable)) {
        return "String";
    } elseif (is_int($variable)) {
        return "Integer";
    } else {
        return "Unknown";
    }
}

echo isStringOrInteger($variable1) . "<br>";
echo isStringOrInteger($variable2) . "<br>";
echo isStringOrInteger($variable3) . "<br>";
echo isStringOrInteger($variable4) . "<br>";
