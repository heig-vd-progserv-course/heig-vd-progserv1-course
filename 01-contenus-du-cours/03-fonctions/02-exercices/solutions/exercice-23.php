<?php
$string = "Hello, world!";
$length = 5;

function truncate(string $string, int $length): string {
    if (strlen($string) > $length) {
        return substr($string, 0, $length) . "...";
    } else {
        return $string;
    }
}

echo truncate($string, $length);
