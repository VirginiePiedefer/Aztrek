<?php
require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"];
$pays = getOneEntity("pays", $id);
$sejours = getAllSejoursByPays($id);

getHeader("Accueil", "Aztrek, un nouveau monde à chaque pas");
?>


<section class="presentation-pays">

    <h2>Nos Séjours au <?= $pays["libelle"]; ?></h2>
    <img src="uploads/<?= $pays["image"]; ?>" alt="<?= $pays["libelle"]; ?>">
    <p><?= $pays["description"]; ?></p>

    <div class="circuit">

        <?php foreach ($sejours as $sejour) : ?>
            <article id="circuit-1">
                <p class="circuit-name">
                    <?= $sejour["libelle"]; ?>
                </p>
                <img class="photo-sejour" src="uploads/<?= $sejour["image"]; ?>" alt="<?= $sejour["libelle"]; ?>">
                <p><?= $sejour["description_princ"]; ?></p>
                <a href="sejour.php?id=<?= $sejour["id"]; ?>" class="btn">JE DECOUVRE</a>

            </article>
        <?php endforeach; ?>

    </div>

</section>
