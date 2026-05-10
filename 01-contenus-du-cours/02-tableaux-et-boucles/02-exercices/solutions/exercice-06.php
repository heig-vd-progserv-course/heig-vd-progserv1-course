<?php
$people = [
    "johnDoe" => [
        "name" => "John Doe",
        "age" => 30,
        "city" => "New York"
    ],
    "janeDoe" => [
        "name" => "Jane Doe",
        "age" => 25,
        "city" => "Los Angeles"
    ],
    "aliceSmith" => [
        "name" => "Alice Smith",
        "age" => 35,
        "city" => "Chicago"
    ]
];

print_r($people);

echo "<br>";

echo $people["janeDoe"]["name"];
