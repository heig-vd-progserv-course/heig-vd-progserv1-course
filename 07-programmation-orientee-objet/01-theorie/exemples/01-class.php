<?php
class Person {
    public $name;
    public $age;
}

$person = new Person();

$person->name = "Alice";
$person->age = 30;

echo $person->name; // Affiche "Alice"
echo "<br>";
echo $person->age;  // Affiche 30
