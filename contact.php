
<!DOCTYPE html>

<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Contact</title>

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
</head>


<body>

<?php include "includes/navbar.php" ?>

<main class="container">
    <div class="row p-3">
        <div class="col-12 col-lg-6 mx-auto infobox bg-lightBlue">
            <h1 class="text-center pt-3 frontwelcome">CONTACT</h1>

            <p class="text-center">If you have any questions, if you like my work or just feel like a chat,
               feel free to send a message end I'll get back to you ASAP.</p>

            <div class="fcf-body text-center">

                <div id="fcf-form">

                    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">

                        <div class="m-3 fcf-form-group mx-auto">
                            <label for="Name" class="fcf-label">Name</label>
                            <div class="fcf-input-group">
                                <input type="text" id="Name" name="Name" class="fcf-form-control" placeholder="Your name" required>
                            </div>
                        </div>

                        <div class="fcf-form-group mx-auto mb-3">
                            <label for="Email" class="fcf-label">E-mail</label>
                            <div class="fcf-input-group">
                                <input type="email" id="Email" name="Email" class="fcf-form-control" placeholder="email@email.com" required>
                            </div>
                        </div>

                        <div class="fcf-form-group mx-auto">
                            <div class="fcf-input-group">
                                <textarea id="Message" name="Message" class="fcf-form-control text-center" rows="6" maxlength="3000" placeholder="Your message here! :-)" required></textarea>
                            </div>
                        </div>

                        <div class="fcf-form-group">
                            <button type="submit" id="fcf-button" class="btncontact mb-3 fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
                        </div>

                    </form>
                </div>

            </div>

    </div>
</main>



</body>
</html>



<?php include "includes/footer.php" ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
