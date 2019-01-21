<?php

require_once "model/database.php";
require_once "functions.php";

getHeader("Accueil", "Aztrek, un nouveau monde à chaque pas");
?>



<!-- ===============NAVIGATION PRINCIPALE===============
======================================== -->


<?php getMenu(); ?>

<!-- ===============SEJOUR===============
======================================== -->
<section class="sejour container">

    <h1>Votre séjour</h1>

    <h2>Les trésors du Yucatan</h2>

    <img src="./images/bg-destination-card-mexique.png" alt="">

    <article>
        <p>Le Mexique, et en particulier le Yucatán, est une terre de rêve. Elle y mêle quelques-uns des plus beaux
            sites mayas, riche patrimoine culturel, et des trésors naturels, comme la mer des Caraïbes ou les cenotes,
            ces puits souterrains ou à ciel ouvert, trous d’eau qui parsèment le plateau calcaire du Yucatán.

            L’âme indienne y est bien vivante, celle de la civilisation raffinée des Mayas à leur grande époque bien
            sûr, mais également celle des Mayas d’aujourd’hui, qui ont gardé leurs us et coutumes. </p>

        <p>Vous apprécierez:

            Des sites mayas incontournables et hors sentiers battus

            Un délicieux cocktail d’écotourisme et de découverte culturelle

            Palenque et les sites de la forêt lacandone au Chiapas

            Un itinéraire ponctué de baignades en mer, en cenote et en lagune</p>


        <table>


            <tr>
                <th>DU</th>
                <th>AU</th>
                <th>PRIX</th>
                <th>Nombre de places restantes</th>
                <th>S'inscrire</th>

            <tr>
                <td>14/02/2019</td>
                <td>21/02/2019</td>
                <td>2500 €</td>
                <td>10</td>
                <td>
                    <form action="">
                        <button class="btn" type="submit">S'inscrire</button>
                    </form>
                </td>
            </tr>

        </table>

        <p class="asterisque"> * Ces tarifs sont valables pour des départs de Paris. Des départs d'autres villes sont
            possibles, n'hésitez pas à nous en faire la demande. Les prix indiqués ne sont valables que pour certaines
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