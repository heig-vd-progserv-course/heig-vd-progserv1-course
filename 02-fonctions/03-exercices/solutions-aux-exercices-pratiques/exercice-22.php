<?php
$variable1 = "Hello, world!";
$variable2 = "";
$variable3 = 42;
$variable4 = null;

function isSetAndNotEmpty($variable) {
    if (isset($variable) && !empty($variable)) {
        return "Set and not empty";
    } elseif (isset($variable) && empty($variable)) {
        return "Set and empty";
    } else {
        return "Not set";
    }
}

echo isSetAndNotEmpty($variable1) . "<br>";
echo isSetAndNotEmpty($variable2) . "<br>";
echo isSetAndNotEmpty($variable3) . "<br>";
echo isSetAndNotEmpty($variable4) . "<br>";
