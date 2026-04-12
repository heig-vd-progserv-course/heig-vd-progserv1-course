<?php
// Erreur 1 : il faut déclarer les paramètres optionnels après les
// paramètres obligatoires
function printArray($array, $numberOfElementsToDisplay = 1) {
    // Erreur 2 : il faut utiliser < au lieu de <=
    for ($i = 0; $i < $numberOfElementsToDisplay; $i++) {
        // Erreur 3 : il manque le `<br>` pour passer à la ligne
        echo $array[$i] . "<br>";
    }
}

$fruits = ["Pomme", "Poire", "Banane", "Cerise", "Fraise"];

// Erreur 4 : pour appeler une fonction, il ne faut pas la préfixer avec `$`
// Erreur 5 : il faut invertir l'ordre des paramètres
printArray($fruits, 3);
