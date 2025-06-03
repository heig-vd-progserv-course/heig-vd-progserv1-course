<?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function __destruct() {
        echo $this->name . " is being destroyed.<br>";
    }

    public function greet() {
        return "Hi, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

$alice = new Person("Alice", 30);

echo $alice->greet() . "<br>"; // Affiche "Hi, my name is Alice and I am 30 years old."

$bob = new Person("Bob", 25);

echo $bob->greet() . "<br>"; // Affiche "Hi, my name is Bob and I am 25 years old."

$evelyn = new Person("Evelyn", 40);

echo $evelyn->greet() . "<br>"; // Affiche "Hi, my name is Evelyn and I am 40 years old."

$bob = null; // Détruit l'objet $bob, le destructeur est appelé

$evelyn = $alice; // $evelyn référence maintenant le même objet que $alice, $evelyn n'est plus utilisé et est donc détruit.

// L'objet $alice sera automatiquement détruit à la fin du script, et le destructeur sera appelé.
