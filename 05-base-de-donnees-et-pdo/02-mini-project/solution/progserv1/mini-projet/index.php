<?php
require 'functions.php';

// Récupère tous les animaux
$pets = getPets();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Page d'accueil | Gestionnaire d'animaux de compagnie</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h1>Page d'accueil du gestionnaire d'animaux de compagnie</h1>
    <p>Bienvenue sur la page d'accueil du gestionnaire d'animaux de compagnie !</p>
    <p>Utilise cette page pour visualiser et gérer tous les animaux de compagnie.</p>

    <h2>Liste des animaux</h2>

    <p><a href="create.php"><button>Créer un nouvel animal de compagnie</button></a></p>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Espèce</th>
                <th>Sexe</th>
                <th>Âge</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pets as $pet) { ?>
                <tr>
                    <td><?= $pet['name'] ?></td>
                    <td><?= $pet['species'] ?></td>
                    <td><?= $pet['sex'] ?></td>
                    <td><?= $pet['age'] ?></td>
                    <td>
                        <a href="delete.php?id=<?= $pet['id'] ?>"><button>Supprimer</button></a>
                        <a href="view.php?id=<?= $pet['id'] ?>"><button>Visualiser</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>
