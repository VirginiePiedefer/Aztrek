<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];


$libelle = $_POST['libelle'];
$description = $_POST['description'];


// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $categorie["image"];
}


updateCategorie($id, $libelle, $filename, $description);

header('Location: index.php');

