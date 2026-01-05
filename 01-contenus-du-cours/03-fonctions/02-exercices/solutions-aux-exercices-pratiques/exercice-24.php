<?php
$variable1 = "Hello, world!";
$variable2 = 42;
$variable3 = 3.14;
$variable4 = true;

function debug($variable) {
    var_dump($variable);
}

debug($variable1);
echo "<br>";
debug($variable2);
echo "<br>";
debug($variable3);
echo "<br>";
debug($variable4);
echo "<br>";
