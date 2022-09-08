<!DOCTYPE html>

<html lang="da">

<head>

    <meta charset="utf-8">

    <title>Chocolate Club</title>

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
                <h1 class="text-center p-3 frontwelcome">CHOCOLATE CLUB</h1>
                <p class="text-center pb-3">Chocolate Club was the case project for our second exam. We had to create a visual identity and online
                presence for a fictive chocolate collective. On this project I made marketing analytics, did SEO for the website and made graphic
                designs for social media.</p>
            </div>
        </div>
    </div>
    <div class="container mx-auto pb-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active mx-auto">
                    <div class="row">
                        <img src="images/chocolateclubimg/Amaliepresentation.png" class="w-25 mx-auto col-lg-4" alt="Example of use of graphic frame for sociale media on a stockphoto">
                        <img src="images/chocolateclubimg/Tobiaspresentation.png" class="w-25 mx-auto col-lg-4" alt="Example of use of graphic frame for sociale media on a stockphoto">
                        <img src="images/chocolateclubimg/Frederikpresentation.png" class="w-25 mx-auto col-lg-4" alt="Example of use of graphic frame for sociale media on a stockphoto">
                    </div>
                </div>

                <div class="carousel-item mx-auto">
                    <div class="row">
                        <img src="images/chocolateclubimg/strawberries.png" class="w-25 mx-auto col col-lg-4" alt="Graphic illustration for SoMe: Chocolate covered strawberries">
                        <img src="images/chocolateclubimg/funkychoco.png" class="w-25 mx-auto col col-lg-4" alt="Graphic illustration for SoMe: Funky and fun chocolate">
                        <img src="images/chocolateclubimg/cocoabean.png" class="w-25 mx-auto col col-lg-4" alt="Graphic illustration for SoMe: Cocoabean">
                    </div>
                </div>

                <div class="carousel-item mx-auto">
                    <div class="row">
                        <img src="images/chocolateclubimg/CCfacade.png" class="w-50 mx-auto col col-lg-6" alt="Photoshop of Chocolate Clubs logo onto the facade of the building, example of graphic design frame for social media">
                    </div>
                </div>

                <div class="carousel-item mx-auto">
                    <div class="row">
                        <img src="images/chocolateclubimg/Styletile.png" class="w-50 mx-auto col col-lg-6" alt="Styletile for Chocolate Clubs visual identity">
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
