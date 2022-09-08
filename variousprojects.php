<!DOCTYPE html>

<html lang="da">

<head>

    <meta charset="utf-8">

    <title>Various projects</title>

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
                <h1 class="text-center p-3 frontwelcome">VARIOUS PROJECTS</h1>
                <p class="text-center pb-3">This page contains a little of everything from various projects I've worked on, but
                don't have enough material that I can justify making a whole page for it. At this moment it contains a poster for EFC (where all
                design aspects are made by me), two graphic illustrations I made for a case project for Studieby Slagelse, a poster for a photo
                assignment we had (photo and design by me) and a logo for a ficticious product called Sustainabelt.</p>
            </div>
        </div>
    </div>
    <div class="container mx-auto pb-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active mx-auto">
                    <div class="row">
                        <img src="images/variousimg/efc.png" class="w-50 mx-auto col-lg-6" alt="Poster for a streetsport event">
                    </div>
                </div>

                <div class="carousel-item mx-auto">
                    <div class="row">
                        <img src="images/variousimg/knowslagelsfb.png" class="w-50 mx-auto col col-lg-6" alt="Graphic illustration for social media about Slagelse">
                        <img src="images/variousimg/studyraceig.png" class="w-50 mx-auto col col-lg-6" alt="Graphic illustration for bicycle event in Slagelse">
                    </div>
                </div>

                <div class="carousel-item mx-auto">
                    <div class="row">
                        <img src="images/variousimg/plakatzealand.png" class="w-50 mx-auto col col-lg-6" alt="Poster for Zealand about Zealand, photo by me">
                    </div>
                </div>

                <div class="carousel-item mx-auto">
                    <div class="row">
                        <img src="images/variousimg/sustainabelt-logo.png" class="w-50 mx-auto col col-lg-6" alt="Logo for a product from innovation week called Sustainabelt">
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
