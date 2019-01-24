<?php
require_once '../../../model/database.php';

$categories = getAllEntities("categorie");
$liste_pays = getAllEntities("pays");

require_once '../../layout/header.php';
?>

<h1>Ajout d'un séjour</h1>

<form action="create_query.php" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label>Nom du séjour</label>
        <input type="text" name="libelle" class="form-control" placeholder="Titre" required>
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
        <input type="file" name="image" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description_princ" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Description courte</label>
        <input type="text" name="description_sec" class="form-control" placeholder="Description courte" required>
    </div>

    <div class="form-group">
        <label>Durée</label>
        <input type="number" name="duree" class="form-control" placeholder="Durée" required>
    </div>

    <div class="form-group">
        <label>Capacité: nombre de places</label>
        <input type="number" name="places" class="form-control" placeholder="Places" required>
    </div>

    <div class="form-group form-check">
        <input type="checkbox" name="publie" class="form-check-input" required>
        <label>Publié ?</label>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>
