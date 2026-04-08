<?php
$string = "Hello, world!";
$result = str_starts_with($string, "Hello");

if ($result) {
    echo "'$string' starts with 'Hello'<br>";
} else {
    echo "'$string' does not start with 'Hello'<br>";
}
