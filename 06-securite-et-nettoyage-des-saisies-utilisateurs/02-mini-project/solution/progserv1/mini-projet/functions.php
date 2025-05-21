<?php
// Inclusion du fichier de connexion à la base de données
require './database.php';

function getPets() {
    // On utilise le mot-clé `global` pour accéder à la variable `$pdo`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pdo;

    // On définit la requête SQL pour récupérer tous les animaux
    $sql = "SELECT * FROM pets";

    // On prépare la requête SQL
    $stmt = $pdo->prepare($sql);

    // On exécute la requête SQL
    $stmt->execute();

    // On récupère tous les animaux
    $pets = $stmt->fetchAll();

    // On transforme la chaîne `personalities` en tableau pour chaque animal
    foreach ($pets as &$pet) {
        if (!empty($pet['personalities'])) {
            $pet['personalities'] = explode(',', $pet['personalities']);
        }
    }

    // On retourne tous les animaux
    return $pets;
}

function getPet($id) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pdo`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pdo;

    // On définit la requête SQL pour récupérer un animal
    $sql = "SELECT * FROM pets WHERE id = :id";

    // On prépare la requête SQL
    $stmt = $pdo->prepare($sql);

    // On lie le paramètre
    $stmt->bindValue(':id', $id);

    // On exécute la requête SQL
    $stmt->execute();

    // On récupère le résultat comme tableau associatif
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
    // On utilise le mot-clé `global` pour accéder à la variable `$pdo`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pdo;

    // On transforme le tableau `$personalities` en chaîne de caractères avec `implode`
    $personalitiesAsString = implode(',', $personalities);

    // On définit la requête SQL pour ajouter un animal
    $sql = "INSERT INTO pets (
        name,
        species,
        nickname,
        sex,
        age,
        color,
        personalities,
        size,
        notes
    ) VALUES (
        :name,
        :species,
        :nickname,
        :sex,
        :age,
        :color,
        :personalities,
        :size,
        :notes
    )";

    // On prépare la requête SQL
    $stmt = $pdo->prepare($sql);

    // On lie les paramètres
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':species', $species);
    $stmt->bindValue(':nickname', $nickname);
    $stmt->bindValue(':sex', $sex);
    $stmt->bindValue(':age', $age);
    $stmt->bindValue(':color', $color);
    $stmt->bindValue(':personalities', $personalitiesAsString);
    $stmt->bindValue(':size', $size);
    $stmt->bindValue(':notes', $notes);

    // On exécute la requête SQL pour ajouter un animal
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

    // On transforme le tableau `$personalities` en chaîne de caractères avec `implode`
    $personalitiesAsString = implode(',', $personalities);

    // On définit la requête SQL pour mettre à jour un animal
    $sql = "UPDATE pets SET
        name = :name,
        species = :species,
        nickname = :nickname,
        sex = :sex,
        age = :age,
        color = :color,
        personalities = :personalities,
        size = :size,
        notes = :notes
    WHERE id = :id";

    // On prépare la requête SQL
    $stmt = $pdo->prepare($sql);

    // On lie les paramètres
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':species', $species);
    $stmt->bindValue(':nickname', $nickname);
    $stmt->bindValue(':sex', $sex);
    $stmt->bindValue(':age', $age);
    $stmt->bindValue(':color', $color);
    $stmt->bindValue(':personalities', $personalitiesAsString);
    $stmt->bindValue(':size', $size);
    $stmt->bindValue(':notes', $notes);

    // On exécute la requête SQL pour mettre à jour un animal
    return $stmt->execute();
}

function removePet($id) {
    // On utilise le mot-clé `global` pour accéder à la variable `$pdo`.
    // Même si c'est une mauvaise pratique, c'est nécessaire ici.
    global $pdo;

    // On définit la requête SQL pour supprimer un animal
    $sql = "DELETE FROM pets WHERE id = :id";

    // On prépare la requête SQL
    $stmt = $pdo->prepare($sql);

    // On lie le paramètre
    $stmt->bindValue(':id', $id);

    // On exécute la requête SQL pour supprimer un animal
    return $stmt->execute();
}
