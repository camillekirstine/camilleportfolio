
<!DOCTYPE html>
<html lang="da" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">

    <title>Camille Kirstine Studio</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.typekit.net/wtu5hgz.css">

    <script src="https://kit.fontawesome.com/f5df81b727.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>


<body>
<main id="body" style="opacity: 0;">
    <div class="container">
         <div class="row">
             <div class="col">
                 <img class="p-5 mx-auto" src="images/camillekitopbtm.png">
                </div>
         </div>

            <div class="row mb-5">
                 <button type="button" class="btnfront col-6 text-nowrap btn-lg mx-auto">
                     <a href="#" class="mx-auto">ENTER</a>
                </button>
            </div>

        </div>
</main>

<?php include "includes/footer.php"; ?>

<script type="text/javascript">
    var opacity = 0;
    var intervalID = 0;
    window.onload = fadeIn;

    function fadeIn() {
        setInterval(show, 200);
    }

    function show() {
        var body = document.getElementById("body");
        opacity = Number(window.getComputedStyle(body)
            .getPropertyValue("opacity"));
        if (opacity < 1) {
            opacity = opacity + 0.1;
            body.style.opacity = opacity
        } else {
            clearInterval(intervalID);
        }
    }
</script>




    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
