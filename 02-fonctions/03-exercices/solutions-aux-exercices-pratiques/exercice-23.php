<?php
$string = "Hello, world!";
$length = 5;

function truncate($string, $length) {
    if (strlen($string) > $length) {
        return substr($string, 0, $length) . "...";
    } else {
        return $string;
    }
}

echo truncate($string, $length);
