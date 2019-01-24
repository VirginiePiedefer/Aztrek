<?php
require_once '../../../model/database.php';

$id = $_GET['id'];

$sejour = getOneEntity("sejour", $id);
$liste_pays = getAllEntities("pays");
$categories = getAllEntities("categorie");



require_once '../../layout/header.php';
?>

<h1>Modification d'un séjour</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nom du séjour</label>
        <input type="text" name="libelle" value="<?php echo $sejour["libelle"]; ?>" class="form-control" placeholder="Libellé" required>
    </div>

    <div class="form-group">
        <label>Pays</label>
        <select name="pays_id" class="form-control" value="pays_id">
            <?php foreach ($liste_pays as $pays) : ?>
                <option value="<?php echo $pays["id"]; ?>">
                    <?php echo $pays["libelle"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Catégorie</label>
        <select name="categorie_id" class="form-control" value="categorie_id">
            <?php foreach ($categories as $categorie) : ?>
                <option value="<?php echo $categorie["id"]; ?>">
                    <?php echo $categorie["libelle"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        <?php if ($sejour["image"]) : ?>
            <img src="../../../uploads/<?php echo $sejour["image"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description_princ" class="form-control"><?php echo $sejour["description_princ"]; ?></textarea>
    </div>

    <div class="form-group">
        <label>Description courte</label>
        <textarea name="description_sec" class="form-control"><?php echo $sejour["description_sec"]; ?></textarea>
    </div>

    <div class="form-group">
        <label>Durée</label>
        <input type="number" name="duree" class="form-control" placeholder="Durée" value="<?php echo $sejour["duree"]; ?>" required>
    </div>

    <div class="form-group">
        <label>Capacité: nombre de places</label>
        <input type="number" name="places" class="form-control" placeholder="Places" value="<?php echo $sejour["places"]; ?>" required>
    </div>


    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>