<?php
// `$variable` n'est pas (encore) définie, donc elle sera affectée à "Default value"
$variable = $variable ?? "Default value";

echo "Variable: $variable<br>";

$variable = "New value";

// `$variable` est déjà définie, donc elle ne sera pas affectée à "Default value"
$variable = $variable ?? "Default value";

echo "Variable: $variable";
