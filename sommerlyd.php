<!DOCTYPE html>

<html lang="da">

<head>

    <meta charset="utf-8">

    <title>Portfolio overview</title>

    <meta name="robots" content="All">
    <meta name="author" content="Camille Kirstine Larsson">
    <meta name="copyright" content="Copyright Camille Kirstine Larsson">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.typekit.net/wtu5hgz.css">

    <script src="https://kit.fontawesome.com/f5df81b727.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:CamilleKirstine" content="CamilleKirstine">
    <meta property="og:type" content="website">
    <meta property="og:url" content="#">
    <meta property="og:image" content="#">
    <meta property="og:description" content="Online portfolio and resumé for Camille Kirstine. Graphic Design, Web Design and Front-end Development.">
    <meta property="og:locale" content="da_DK">
    <link rel="shortcut icon" href="images/camilleki.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>

<?php include "includes/navbar.php" ?>

<main>
    <div class="container">
        <div class="row mx-auto">
            <div class="col-12 col-lg-12 bg-lightBlue infobox mx-auto">
                <h1 class="text-center p-3 frontwelcome">SOMMERLYD</h1>
                <p class="text-center pb-3">Sommerlyd is a festival held in Slagelse. I've worked as a volunteer on their Communications and Graphics team.
                Throughout this work I've been responsible for their visuel identity and design style for this season (2022). I've made posters, ticketart, online ads,
                    templates for the marketing team to use on Social Media and in general a lot the graphic designs for promotional items.</p>
            </div>
        </div>
    </div>
    <div class="container mx-auto pb-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active mx-auto">
                    <div class="row">
                        <img src="images/Sommerlydimg/billetsalgsplakat.png" class="w-50 mx-auto col-lg-6" alt="ticket sales poster">
                        <img src="images/Sommerlydimg/avisannonce185x270.png" class="w-50 mx-auto col-lg-6" alt="newspaper ad">
                    </div>
                </div>

                <div class="carousel-item mx-auto">
                    <div class="row">
                        <img src="images/Sommerlydimg/infoskaerm1.jpg" class="w-50 mx-auto col col-lg-6" alt="info screen artwork">
                        <img src="images/Sommerlydimg/infoskaerm2.jpg" class="w-50 mx-auto col col-lg-6" alt="info screen artwork">
                    </div>
                </div>

                <div class="carousel-item mx-auto">
                    <div class="row">
                        <img src="images/Sommerlydimg/gaffaprint.jpg" class="w-100 mx-auto col col-lg-6" alt="print for the music magazine Gaffa">
                    </div>
                </div>

                <div class="carousel-item mx-auto">
                    <div class="row">
                        <img src="images/Sommerlydimg/sommerlydcitrusmedia.jpg" class="w-100 mx-auto col " alt="Electronic billboard artwork">
                    </div>
                </div>

                <div class="carousel-item mx-auto">
                    <div class="row">
                        <img src="images/Sommerlydimg/sommerlydticket.jpg" class="w-100 mx-auto col " alt="Print for the festival ticket">
                    </div>
                </div>

                <div class="carousel-item mx-auto">
                    <div class="row">
                        <img src="images/Sommerlydimg/ticketmasterartwork.png" class="w-100 mx-auto col " alt="Artwork for Ticketmasters website">
                    </div>
                </div>

                <div class="carousel-item mx-auto">
                    <div class="row">
                        <img src="images/Sommerlydimg/programfredag.png" class="w-50 mx-auto col col-lg-4" alt="Program for friday">
                        <img src="images/Sommerlydimg/programlørdag.png" class="w-50 mx-auto col col-lg-4" alt="Program for saturday">
                    </div>
                </div>

                <div class="carousel-item mx-auto">
                    <div class="row">
                        <img src="images/Sommerlydimg/beercoaster1.png" class="w-50 mx-auto col col-lg-4" alt="Beercoaster with Jonah Blacksmith">
                        <img src="images/Sommerlydimg/VIBESSOME.png" class="w-50 mx-auto col col-lg-4" alt="Example of SoMe post">
                    </div>
                </div>

                <div class="carousel-item mx-auto">
                    <div class="row">
                        <img src="images/Sommerlydimg/dejligsteboybeercoaster.png" class="w-50 mx-auto col col-lg-4" alt="Beercoaster with Benjamin Hav">
                        <img src="images/Sommerlydimg/muckibarbeercoaster.png" class="w-50 mx-auto col col-lg-4" alt="Beercoaster with Tobias Rahim">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</main>

<?php include "includes/footer.php" ?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
