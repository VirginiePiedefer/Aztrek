<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$categorie = getOneEntity("categorie", $id);

require_once '../../layout/header.php';
?>

<h1>Modification d'une catégorie</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label>Libellé</label>
        <input type="text" name="libelle" value="<?php echo $categorie["libelle"]; ?>" class="form-control" placeholder="Libellé" required>
    </div>

    <div class="form-group">
        <label>Photo</label>
        <input type="file" name="image" class="form-control">
        <?php if ($categorie["image"]) : ?>
            <img src="../../../uploads/<?php echo $categorie["image"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" value="<?php echo $categorie["description"]; ?>" class="form-control" placeholder="Libellé" required>
    </div>

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>