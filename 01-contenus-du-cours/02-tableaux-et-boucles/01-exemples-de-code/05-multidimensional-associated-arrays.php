<?php
// Un tableau multidimensionnel contenant des tableaux associatifs
$users = [
    // `'john'` est une clé complètement arbitraire
    // représentant un premier utilisateur
    'john' => [ // Un premier tableau associatif
        'name' => 'John Doe',
        'age' => 30,
        'city' => 'New York',
    ],
    // `'jane'` est une clé complètement arbitraire
    // représentant un second utilisateur
    'jane' => [ // Un deuxième tableau associatif
        'name' => 'Jane Doe',
        'age' => 25,
        'city' => 'Los Angeles',
    ],
];

echo $users['john']['name'] . "<br>"; // Affiche 'John Doe'
echo $users['jane']['age'] . "<br>"; // Affiche 25
echo $users['john']['city'] . "<br>"; // Affiche 'New York'
