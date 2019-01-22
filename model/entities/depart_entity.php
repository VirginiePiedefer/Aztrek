<?php

function getAllDepartsBySejour(int $id): array {
    global $connection;

    $query="
    SELECT
      depart.*,
      DATE_ADD(depart.date_debut, INTERVAL sejour.duree DAY) AS date_fin,
      sejour.places - IFNULL(SUM(reservation.nb_personnes), 0) AS places_dispo
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