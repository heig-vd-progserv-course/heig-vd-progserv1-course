<?php
class Person {
    public $name;
    public $age;
}

$person = new Person();

$person->name = "Alice";
$person->age = 30;

echo $person->name . "<br>"; // Affiche "Alice"
echo $person->age;  // Affiche 30
