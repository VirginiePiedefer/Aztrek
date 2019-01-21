<?php
require_once "model/database.php";
require_once "functions.php";

getHeader("Accueil", "Aztrek, un nouveau monde à chaque pas");
 ?>




        <!-- ===============SLIDER===============
======================================== -->

<div class="slider-pop">

        <div class="owl-carousel owl-carousel-1 owl-theme position">

            <div class="item">
                <img src="./images/img-slider-1.png" alt="perroquet" srcset="">
            </div>

            <div class="item">
                <img src="./images/img-slider-2.jpg" alt="flamant rose" srcset="">
            </div>

        </div>

        <img class="logo" src="./images/logo-aztrek-jaune-baseline-vectorise-01.svg" alt="logo2">

        <!-- ===============POP-UP===============
======================================== -->

        <div class="pop-wrapper">
            <div class="container">
                <div class="pop-up">
                    <h3>
                        Rejoignez vite notre communauté !
                    </h3>

                    <p>Carnets de bord, bons plans, newsletter</p>

                    <button class="btn-fb"><a href="#">M'inscrire avec Facebook</a></button>

                    <p class="ou">OU</p>
                    <button class="btn"><a href="#">Avec mon adresse mail</a></button>


                    <img class="icone-connexion" src="./images/connexion.png" alt="#">

                    <p class="connexion">Déjà membre ? <a>Connectez-vous</a></p>

                    <div class="display-flex membres">
                        <img src="./images/profils.png" alt="">

                        <p>Déjà plus de 10 000 membres</p>

                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- ===============NAVIGATION SECONDAIRE===============
======================================== -->

<?php getMenu(); ?>

<!-- ===============SECTION 1 : DESTINATIONS===============
======================================== -->

<main>

    <section class="container destinations">

        <h1>DE<span class="underline">STINATIONS</h1></span>

        <h2>Envie d’une aventure inoubliable ? Nous nous occupons de tout, faites vos valises !</h2>

        <div class="card-destinations container">


            <!-- ===============CARD N°1===============
======================================== -->

            <article class="card card-1">

                <div>
                    <div class="pays">
                        <div class="titre-pays-wrapper">
                            <h2 class="titre-pays">MEXIQUE</h2>
                        </div>
                        <img class="photo-pays" src="./images/bg-destination-card-mexique.png" alt="mexique">
                    </div>

                    <div class="encart-voyage">
                        <div class="display-flex">
                            <div class="">
                                <img src="./images/profils.png" alt="membres">
                            </div>

                            <div class="descriptif-voyage">
                                <p class="bold">À partir de 1500 €*</p>
                                <p>Découvrez leur carnet de voyage !</p>
                            </div>


                            <div class="plus display-flex">
                                <img class="plus" src="./images/icons-plus.png" alt="+">
                            </div>

                        </div>
                    </div>
                </div>

            </article>

            <!-- ===============CARD N°2===============
======================================== -->

            <article class="card card-2">


                <div class="pays">
                    <div class="titre-pays-wrapper">
                        <h2 class="titre-pays">HONDURAS</h2>
                    </div>
                    <img class="photo-pays" src="./images/bg-destination-card-honduras.png" alt="honduras">
                </div>

                <div class="encart-voyage">
                    <div class="display-flex">
                        <div class="">
                            <img src="./images/profils.png" alt="membres">
                        </div>

                        <div class="descriptif-voyage">
                            <p class="bold">À partir de 1500 €*</p>
                            <p>Découvrez leur carnet de voyage !</p>
                        </div>

                        <div class="plus display-flex">
                            <img class="plus" src="./images/icons-plus.png" alt="+">
                        </div>
                    </div>
                </div>

            </article>

            <!-- ===============CARD N°3===============
======================================== -->

            <article class="card card-3">

                <div>
                    <div class="pays">
                        <div class="titre-pays-wrapper">
                            <h2 class="titre-pays">COSTA RICA</h2>
                        </div>
                        <img class="photo-pays" src="./images/bg-destination-card-costarica.png" alt="costarica">
                    </div>

                    <div class="encart-voyage">
                        <div class="display-flex">
                            <div class="">
                                <img src="./images/profils.png" alt="membres">
                            </div>

                            <div class="descriptif-voyage">
                                <p class="bold">À partir de 1500 €*</p>
                                <p>Découvrez leur carnet de voyage !</p>
                            </div>

                            <div class="plus display-flex">
                                <img class="plus" src="./images/icons-plus.png" alt="+">
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- ===============CARD N°4===============
======================================== -->

            <article class="card card-4 container">

                <div>
                    <div class="pays">
                        <div class="titre-pays-wrapper">
                            <h2 class="titre-pays">SALVADOR</h2>
                        </div>
                        <img class="photo-pays" src="./images/bg-destination-card-salvador.png" alt="salvador">
                    </div>

                    <div class="encart-voyage">
                        <div class="display-flex">
                            <div class="">
                                <img src="./images/profils.png" alt="membres">
                            </div>

                            <div class="descriptif-voyage">
                                <p class="bold">À partir de 1500 €*</p>
                                <p>Découvrez leur carnet de voyage !</p>
                            </div>

                            <div class="plus display-flex">
                                <img class="plus" src="./images/icons-plus.png" alt="+">
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- ===============CARD N°5===============
======================================== -->

            <article class="card card-5 container">

                <div>
                    <div class="pays">
                        <div class="titre-pays-wrapper">
                            <h2 class="titre-pays">GUATEMALA</h2>
                        </div>
                        <img class="photo-pays" src="./images/bg-destination-card-guatemala.png" alt="guatemala">
                    </div>

                    <div class="encart-voyage">
                        <div class="display-flex">
                            <div class="">
                                <img src="./images/profils.png" alt="membres">
                            </div>

                            <div class="descriptif-voyage">
                                <p class="bold">À partir de 1500 €*</p>
                                <p>Découvrez leur carnet de voyage !</p>
                            </div>

                            <div class="plus display-flex">
                                <img class="plus" src="./images/icons-plus.png" alt="+">
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- ===============CARD N°6===============
======================================== -->

            <article class="card card-6 container">

                <div class="pays">
                    <div class="titre-pays-wrapper">
                        <h2 class="titre-pays">NOUVEAUTÉS</h2>
                    </div>
                    <img class="photo-pays" src="./images/bg-destinations-nouveautes.png" alt="nouveautés">
                </div>

            </article>

    </section>

    <!-- ===============SECTION 2 : THÉMATIQUES==============
======================================== -->

    <section class="thematiques">

        <h1>TH<span class="underline">ÉMATIQUE</h1></span>
        <h2>Une sélection de voyages pour tous les goûts : il y en a forcément un pour vous.
            1, 2, 3, prêt, partez !!</h2>


        <div class="container owl-carousel owl-carousel-2 owl-theme position display-flex vignettes">

            <div class="vignette">
                <img class="img-vignette" src="./images/thématique-img-cafe.png" alt="" srcset="">
                <p>Sur la route du café</p>
            </div>

            <div class="vignette">
                <img class="img-vignette" src="./images/thematique-img-aventure.png" alt="" srcset="">
                <p>À l'aventure</p>
            </div>

            <div class="vignette">
                <img class="img-vignette" src="./images/thematique-img-volcans.png" alt="" srcset="">
                <p>À l'assaut des volcans</p>
            </div>

            <div class="vignette ">
                <img class="img-vignette" src="./images/thématique-img-tribus.png" alt="" srcset="">
                <p>Sur les traces des tribus ancestrales</p>
            </div>

        </div>

        <button class="btn btn-toutvoir"><a href="#">Tout voir</a></button>

    </section>

    <!-- ===============SECTION 3 : NOS CONSEILS==============
======================================== -->

    <section class="container conseils">

        <h1>CO<span class="underline">NSEILS</h1></span>

        <h2>Tout savoir avant de partir et bénéficier des retours d’expérience de notre communauté pour profiter de
            votre voyage en toute sérénité</h2>

        <div class="articles">

            <div class="card card-7">
                <img class="img-conseil" src="./images/A.jpg" alt="">
                <div class="encart display-flex">
                    <p>À SAVOIR</p>
                    <p>Passeport, vaccins, change…les indispensables pour partir l’esprit tranquille</p>
                </div>
            </div>

            <div class="card card-8">
                <img class="img-conseil" src="./images/B.jpg" alt="">
                <div class="encart display-flex">
                    <p>PRATIQUE</p>
                    <p>Équipement, matériel, tout ce qu’il faut prévoir avant le départ !</p>
                </div>
            </div>

            <div class="card card-9">
                <img class="img-conseil" src="./images/C.jpg" alt="">
                <div class="encart display-flex">
                    <p>BON PLAN</p>
                    <p>Partez avec AZTREK, parrainez des proches et cumulez des « pas » qui récompensent votre
                        fidélité</p>
                </div>
            </div>


        </div>

        <div class="display-flex">
            <button class="btn btn-toutvoir"><a href="#">S'INSCRIRE À LA NEWSLETTER</a></button>
            <button class="btn btn-toutvoir"><a href="#">REJOINDRE LE BLOG</a></button>
        </div>

    </section>

</main>

<?php getFooter(); ?>