<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];

$sejour = getOneEntity("sejour", $id);

$libelle = $_POST['libelle'];
$description_princ = $_POST['description_princ'];
$description_sec = $_POST['description_sec'];
$categorie_id = $_POST['categorie_id'];
$duree = $_POST['duree'];
$places = $_POST['places'];
$pays_id = $_POST['pays_id'];



// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $sejour["image"];
}

updateSejour($id, $libelle, $pays_id, $filename, $description_princ, $description_sec, $categorie_id, $duree, $places);

header('Location: index.php');
