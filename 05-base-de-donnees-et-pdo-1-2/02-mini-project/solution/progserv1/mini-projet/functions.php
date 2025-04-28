<?php
// On inclut le fichier de configuration de la base de données
require 'database.php';

function getPets() {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pdo;

    // On prépare la requête SQL pour récupérer tous les animaux
    $stmt = $pdo->prepare("SELECT * FROM pets");

    // On exécute la requête
    $stmt->execute();

    // On récupère tous les animaux
    $pets = $stmt->fetchAll();

    // On transforme la chaîne `personalities` en tableau pour chaque animal
    foreach ($pets as &$pet) {
        if (!empty($pet['personalities'])) {
            $pet['personalities'] = explode(',', $pet['personalities']);
        }
    }

    // On retourne tous les animaux.
    return $pets;
}

function getPet($id) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pdo;

    // On prépare la requête SQL pour récupérer un animal par son identifiant
    $stmt = $pdo->prepare("SELECT * FROM pets WHERE id = :id");

    // On lie le paramètre `:name` à la valeur de `$name`
    $stmt->bindParam(':id', $id);

    // On exécute la requête
    $stmt->execute();

    // On récupère l'animal
    $pet = $stmt->fetch();

    // On transforme la chaîne `personalities` en tableau si elle existe
    if ($pet && !empty($pet['personalities'])) {
        $pet['personalities'] = explode(',', $pet['personalities']);
    }

    // On retourne l'animal
    return $pet;
}

function addPet(
    $name,
    $species,
    $nickname,
    $sex,
    $age,
    $color,
    $personalities,
    $size,
    $notes
) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pets`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pdo;

    // On prépare la requête SQL pour ajouter un animal
    $stmt = $pdo->prepare("INSERT INTO pets (name, species, nickname, sex, age, color, personalities, size, notes) VALUES (:name, :species, :nickname, :sex, :age, :color, :personalities, :size, :notes)");

    // On transforme le tableau `$personalities` en chaîne de caractères avec `implode`
    $personalitiesAsString = implode(',', $personalities);

    // On lie les paramètres `:name` et `:age` aux valeurs de `$name` et `$age`
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':species', $species);
    $stmt->bindParam(':nickname', $nickname);
    $stmt->bindParam(':sex', $sex);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':color', $color);
    $stmt->bindParam(':personalities', $personalitiesAsString);
    $stmt->bindParam(':size', $size);
    $stmt->bindParam(':notes', $notes);

    // On exécute la requête
    $stmt->execute();

    // On récupère l'identifiant de l'animal ajouté
    $petId = $pdo->lastInsertId();

    // On retourne l'identifiant de l'animal ajouté.
    return $petId;
}

function updatePet(
    $id,
    $name,
    $species,
    $nickname,
    $sex,
    $age,
    $color,
    $personalities,
    $size,
    $notes
) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pdo`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pdo;

    // On prépare la requête SQL pour mettre à jour les détails d'un animal
    $stmt = $pdo->prepare("UPDATE pets SET name = :name, species = :species, nickname = :nickname, sex = :sex, age = :age, color = :color, personalities = :personalities, size = :size, notes = :notes WHERE id = :id");

    // On transforme le tableau `$personalities` en chaîne de caractères avec `implode`
    $personalitiesAsString = implode(',', $personalities);

    // On lie les paramètres aux valeurs correspondantes
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':species', $species);
    $stmt->bindParam(':nickname', $nickname);
    $stmt->bindParam(':sex', $sex);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':color', $color);
    $stmt->bindParam(':personalities', $personalitiesAsString);
    $stmt->bindParam(':size', $size);
    $stmt->bindParam(':notes', $notes);

    // On exécute la requête et la retourne pour confirmer la mise à jour
    return $stmt->execute();
}

function removePet($id) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pdo`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pdo;

    // On prépare la requête SQL pour supprimer un animal par son identifiant
    $stmt = $pdo->prepare("DELETE FROM pets WHERE id = :id");

    // On lie le paramètre `:id` à la valeur de `$id`
    $stmt->bindParam(':id', $id);

    // On exécute la requête et retourne le résultat pour confirmer la suppression
    return $stmt->execute();
}
