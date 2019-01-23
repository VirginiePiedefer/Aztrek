<?php
require_once __DIR__ . "/../config/parameters.php";
require_once __DIR__ . "/../functions.php";

$user = getCurrentUser();


$liste_pays = getAllEntities("pays"); ?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AZTREK</title>

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Annie+Use+Your+Telescope|Fjalla+One" rel="stylesheet">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.sidr.light.min.css">

    <link rel="stylesheet" href="css/styles.css">


</head>

<header>

    <!-- ===============NAVIGATION PRINCIPALE===============
    ======================================== -->


    <nav class="main-nav">

        <div class="container">
            <div class="nav-1 display-flex">
                <a class="logo-nav" href="#"><img src="images/logo-nav-vectorise.svg" alt="logo"></a>
                <ul class="menu menu-1 display-flex">
                    <li><a class="icones menu-1-item home" href="../index.php"><img src="images/icone-accueil.png"
                                                                                    alt="home"></a>
                    </li>
                    <li>
                        <a class="menu-destinations menu-1-item" href="#">DESTINATIONS</span></a>
                        <ul class="sub-menu">

                            <?php foreach ($liste_pays as $pays) : ?>
                                <li>
                                    <a href="pagepays.php?id=<?= $pays["id"]; ?>">
                                        <?= $pays["libelle"]; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>

                    <li><a class="menu-1-item" href="#">THEMATIQUES</span></a>
                        <ul class="sub-menu">
                            <li><a href="">À l'aventure</a></li>
                            <li><a href="">Sur la route du café</a></li>
                            <li><a href="">Sur les traces des tribus ancestrales</a></li>
                            <li><a href="">À l'assaut des volcans</a></li>
                        </ul>

                    </li>
                    <li><a class="menu-1-item" href="#">CONTACT</a></li>
                    <?php if (isset($user)) : ?>
                        <li><a href="#"><i class="fa fa-user"></i> <?= $user["email"]; ?></a></li>
                        <li><a href="<?= SITE_ADMIN . "logout.php"; ?>"><i class="fa fa-sign-out"></i>DÉCONNEXION</a></li>
                    <?php else: ?>
                        <li><a class="menu-1-item" href="<?= SITE_URL . "create_account.php"; ?>"><i class="fa fa-sign-in"></i> Créer mon compte</a></li>
                        <li><a class="menu-1-item" href="<?= SITE_ADMIN; ?>"><i class="fa fa-sign-in"></i>CONNEXION</a></li>
                    <?php endif; ?>
                </ul>

                <div class="nav-toggle"></div>
            </div>

        </div>
    </nav>


</header>

<body>

