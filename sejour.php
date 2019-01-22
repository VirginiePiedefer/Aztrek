<?php

require_once "model/database.php";
require_once "functions.php";

$id = $_GET["id"]; // Récupérer l'id dans l'URL
$sejour = getOneEntity("sejour", $id);
$departs = getAllDepartsBySejour($id); // Envoi l'id su séjour à la fonction pour récupérer les départs liés au séjour


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
                            <form action="">
                                <button class="btn" type="submit">S'inscrire</button>
                            </form>
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