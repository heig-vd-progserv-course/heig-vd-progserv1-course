<?php
function getPets() {
    echo "Getting pets.<br>";
}

function getPet($name) {
    echo "Getting pet with name '$name'.<br>";
}

function addPet($name, $age) {
    echo "Adding $name, who is $age years old.<br>";
}

function updatePet($name, $age) {
    echo "Updating pet with name '$name' to be $age years old.<br>";
}

function removePet($name) {
    echo "Removing pet with name '$name'.<br>";
}
