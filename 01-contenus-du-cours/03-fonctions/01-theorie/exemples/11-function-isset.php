<?php
$var = 42;

if (isset($var)) {
    echo "The variable is defined.";
} else {
    echo "The variable is not defined.";
}

echo "<br>"; // Retour à la ligne HTML

if (isset($undefined)) {
    echo "The variable is defined.";
} else {
    echo "The variable is not defined.";
}
