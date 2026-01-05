<?php
require 'functions.php';

// Crée Caramel, un chat de 3 ans
addPet("Caramel", 3);

// Crée Rex, un chien de 8 ans
addPet("Rex", 8);

// Crée Tweety, un oiseau de 1 an
addPet("Tweety", 1);

// Crée Godzilla, un lézard de 4 ans
addPet("Godzilla", 4);

// Récupère tous les animaux
getPets();

// Récupère l'animal nommé Rex
getPet("Rex");

// Met à jour l'âge de Rex à 9 ans
updatePet("Rex", 9);

// Supprime Tweety... :(
removePet("Tweety");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Page d'accueil | Gestionnaire d'animaux de compagnie</title>
</head>

<body>
    <h1>Page d'accueil du gestionnaire d'animaux de compagnie</h1>
    <p>Bienvenue sur la page d'accueil du gestionnaire d'animaux de compagnie !</p>
    <p>Utilise cette page pour visualiser et gérer tous les animaux de compagnie.</p>
</body>

</html>
