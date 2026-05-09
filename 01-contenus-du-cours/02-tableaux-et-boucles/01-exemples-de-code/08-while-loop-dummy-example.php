<?php
$weather = "cloudy";

while ($weather == "cloudy") {
    echo "It's still cloudy...<br>";

    // Ici, on imagine un scénario où notre code va interagir avec un site web externe qui retourne la météo pour mettre à jour la variable `$weather`
    $weather = getWeather("Yverdon-les-Bains");
}

echo "The weather in Yverdon-les-Bains is *finally* different than cloudy! Yay!";
