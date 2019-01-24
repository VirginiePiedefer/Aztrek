<?php

function insertCategorie(string $libelle, string $image, string $description) {
    global $connection;

    $query = "INSERT INTO categorie (libelle, image, description) VALUES (:libelle, :image, :description)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->execute();
}

function updateCategorie(int $id, string $libelle, string $image, string $description) {
    global $connection;

    $query = "UPDATE categorie SET libelle = :libelle, image = :image, description = :description WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":libelle", $libelle);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->execute();
}

