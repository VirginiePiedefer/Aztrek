<?php

function getAllSejoursByPays(int $id)
{
    global $connection;

    $query = "
    SELECT
      sejour.*,
      categorie.libelle AS categorie,
      categorie.image AS categorie_image,
      pays.libelle AS pays,
      pays.image AS pays_image
    FROM sejour
    INNER JOIN categorie ON sejour.categorie_id = categorie.id
    INNER JOIN pays ON pays.id = sejour.pays_id
    WHERE pays.id = :id
    ";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

//Appeler le séjour sélectionné

function getOneSejour(int $id)
{
    global $connection;

    $query = "
    SELECT
      sejour.*,
      categorie.libelle AS categorie,
      categorie.image AS categorie_image,
      sejour.libelle AS sejour,
      sejour.image AS sejour_image
    FROM sejour
    INNER JOIN categorie ON sejour.categorie_id = categorie.id
    INNER JOIN pays ON pays.id = sejour.pays_id
    WHERE sejour.id = :id
    ";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}


function getAllSejours(int $limit = 999)
{
    global $connection;

    $query = "
    SELECT
    sejour.*,
           categorie.libelle AS categorie,
           pays.libelle AS pays
    FROM sejour
    INNER JOIN categorie ON sejour.categorie_id = categorie.id
    INNER JOIN pays ON sejour.pays_id = pays.id
    ORDER BY pays.id DESC
    LIMIT $limit

    ";


    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}
//
//function getOneRecette(int $id): array {
//    global $connection;
//
//    $query = "
//    SELECT
//    recette.*,
//    DATE_FORMAT(recette.date_creation, '%d-%m-%Y') AS date_creation_format,
//    categorie.libelle AS categorie,
//    CONCAT(utilisateur.prenom, ' ', LEFT(utilisateur.nom,1), '.') AS pseudo,
//    COUNT(favoris.utilisateur_id) AS nb_likes
//    FROM recette
//    INNER JOIN categorie ON recette.categorie_id = categorie.id
//    INNER JOIN utilisateur ON recette.utilisateur_id = utilisateur.id
//    LEFT JOIN favoris ON recette.id = favoris.recette_id
//    WHERE recette.publie = 1
//    AND recette.id = :id
//    GROUP BY recette.id
//
//    ";
//
//
//    $stmt=$connection->prepare($query);
//    $stmt->bindParam(":id", $id);
//    $stmt->execute();
//
//    return $stmt->fetch();
//
//}
