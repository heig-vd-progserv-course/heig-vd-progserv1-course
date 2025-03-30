<?php
$users = [
    'john' => [
        'name' => 'John Doe',
        'age' => 30,
        'city' => 'New York',
    ],
    'jane' => [
        'name' => 'Jane Doe',
        'age' => 25,
        'city' => 'Los Angeles',
    ],
];

echo $users['john']['name'] . "<br>"; // Affiche 'John Doe'
echo $users['jane']['age'] . "<br>"; // Affiche 25
echo $users['john']['city'] . "<br>"; // Affiche 'New York'
