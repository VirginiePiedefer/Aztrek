<?php

require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"]; // Récupérer l'id dans l'URL
$sejour = getOneEntity("sejour", $id);
$departs = getAllDepartsBySejour($id); // Envoi l'id su séjour à la fonction pour récupérer les départs liés au séjour
$programmes = getAllProgrammesBySejour($id);

$user = getCurrentUser();

getHeader("Accueil", "Aztrek, un nouveau monde à chaque pas");
?>


    <!-- ===============NAVIGATION PRINCIPALE===============
    ======================================== -->


<?php getMenu(); ?>

    <!-- ===============SEJOUR===============
    ======================================== -->
    <section class="sejour container">

        <h1>Votre séjour</h1>

        <h2><?= $sejour["libelle"]; ?></h2>

        <img src="uploads/<?= $sejour["image"]; ?>" alt="<?= $pays["libelle"]; ?>">

        <article>
            <p><?= $sejour["description_princ"]; ?></p>

            <p><?= $sejour["description_sec"]; ?></p>


            <h3>Le programme</h3>

            <?php foreach ($programmes as $programme) : ?>

                <h2><?= $programme["libelle"]; ?></h2>
                <p><?= $programme["description"]; ?></p>

                <img class="photo-sejour" src="uploads/<?= $programme["image"]; ?>" alt="<?= $programme["libelle"]; ?>">
            <?php endforeach; ?>

            <table>


                <tr>
                    <th>DU</th>
                    <th>AU</th>
                    <th>PRIX</th>
                    <th>Nombre de places restantes</th>
                    <th>S'inscrire</th>
                </tr>

                <?php foreach ($departs as $depart) : ?>
                    <tr>
                        <td><?= $depart["date_debut_format"]; ?></td>
                        <td><?= $depart["date_fin_format"]; ?></td>
                        <!--              date début  + durée en jours = date de fin-->
                        <td><?= $depart["prix"]; ?>€</td>
                        <td><?= $depart["places_dispo"]; ?></td>
                        <!--              capacité  - nb réservations-->
                        <td>
                            <?php if (isset($user)) : ?>
                                <form action="">
                                    <input type="number" min="1" max="20" placeholder="Nombre de personnes">
                                    <button class="btn" type="submit">Réserver</button>
                                </form>
                            <?php else: ?>
                                <a class="btn" href="<?= SITE_URL . "create_account.php"; ?>"> Créer mon compte</a>
                                <a class="btn" href="<?= SITE_ADMIN; ?>">Déjà membre ? Se connecter</a>
                            <?php endif; ?>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <p class="asterisque"> * Ces tarifs sont valables pour des départs de Paris. Des départs d'autres villes
                sont
                possibles, n'hésitez pas à nous en faire la demande. Les prix indiqués ne sont valables que pour
                certaines
                classes de réservation sur les compagnies aériennes qui desservent cette destination. Ils sont donc
                susceptibles d'être modifiés en cas d'indisponibilité de places dans ces classes au moment de la
                réservation.

                Le prix comprend

                • Le transport aérien international et les taxes d’aéroport
                • Les transferts terrestres nécessaires au bon déroulement du voyage
                • Le transport des bagages
                • L'encadrement par un guide indien francophone
                • L’assistance d’un guide anglophone lors des randonnées (à Periyar et Munnar)
                • L’hébergement en pension complète, sauf les boissons et certains repas (à Cochin)
                • Les frais d'entrée aux sites

                Le prix ne comprend pas

                • Les assurances
                • Les frais d’inscription
                • Les frais de visa
                • Les repas à Cochin
                • Les entrées des sites non prévus au programme
                • Les boissons, les dépenses personnelles et les pourboires
                • Les frais de transferts aéroport en cas de vol différent de celui du groupe
                • Le supplément chambre individuelle (à la demande)
            </p>

    </section>

<?php getFooter(); ?>