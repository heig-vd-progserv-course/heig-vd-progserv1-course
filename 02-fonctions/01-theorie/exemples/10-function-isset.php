
<?php
$var = 42;

if (isset($var)) {
    echo "La variable est définie.";
} else {
    echo "La variable n'est pas définie.";
}

echo "<br>"; // Retour à la ligne HTML

if (isset($undefined)) {
    echo "La variable est définie.";
} else {
    echo "La variable n'est pas définie.";
}
