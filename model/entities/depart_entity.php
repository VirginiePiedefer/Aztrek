<?php

function getAllDepartsBySejour(int $id): array {
    global $connection;

    $query="
    SELECT
      depart.*,
      DATE_FORMAT(DATE_ADD(depart.date_debut, INTERVAL sejour.duree DAY), '%d-%m-%Y') AS date_fin_format,
      sejour.places - IFNULL(SUM(reservation.nb_personnes), 0) AS places_dispo,
      DATE_FORMAT(depart.date_debut, '%d-%m-%Y') AS date_debut_format
    FROM depart
    INNER JOIN sejour ON depart.sejour_id = sejour.id
    LEFT JOIN reservation ON depart.id = reservation.depart_id
    WHERE depart.sejour_id = :id
    GROUP BY depart.id
    ";

    $stmt=$connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

