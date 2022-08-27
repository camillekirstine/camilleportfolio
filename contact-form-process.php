<!DOCTYPE html>
<html lang="da" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">

    <title>Mail site</title>

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
<?php include "includes/navbar.php"; ?>



<main>
    <div class="row p-3 m-3">
        <div class="col-12 col-lg-6 mx-auto infobox bg-lightBlue text-center mailmessage">
            <?php
            if (isset($_POST['Email'])) {

                $email_to = "camille@camillekirstine.com";
                $email_subject = "Portfolio mail";

                function problem($error)
                {
                    echo "<br><h5> We are very sorry, but there were error(s) found with the form you submitted.</h5> ";
                    echo "<h5>These errors appear below:<h5></h5><br><br><br>";
                    echo $error . "<br><br>";
                    echo "<h5>Please go back and fix these errors.</h5><br><br><br>";
                    die();
                }

                // validation expected data exists
                if (
                    !isset($_POST['Name']) ||
                    !isset($_POST['Email']) ||
                    !isset($_POST['Message'])
                ) {
                    problem('We are sorry, but there appears to be a problem with the form you submitted.');
                }

                $name = $_POST['Name'];
                $email = $_POST['Email'];
                $message = $_POST['Message'];

                $error_message = "";
                $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

                if (!preg_match($email_exp, $email)) {
                    $error_message .= '<h4>- The Email address you entered does not appear to be valid.</h4><br>';
                }

                $string_exp = "/^[A-Za-z .'-]+$/";

                if (!preg_match($string_exp, $name)) {
                    $error_message .= '<h4>- The Name you entered does not appear to be valid.</h4><br>';
                }

                if (strlen($message) < 2) {
                    $error_message .= '<h4>- The Message you entered do not appear to be valid.</h4><br>';
                }

                if (strlen($error_message) > 0) {
                    problem($error_message);
                }

                $email_message = "Form details below.\n\n";

                function clean_string($string)
                {
                    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
                    return str_replace($bad, "", $string);
                }

                $email_message .= "Name: " . clean_string($name) . "\n";
                $email_message .= "Email: " . clean_string($email) . "\n";
                $email_message .= "Message: " . clean_string($message) . "\n";

                // create email headers
                $headers = 'From: ' . $email . "\r\n" .
                    'Reply-To: ' . $email . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                @mail($email_to, $email_subject, $email_message, $headers);
                ?>
                    <br><br>
                <h1 class="p-1">Success!</h1>
                 <h4 class="m-1">Your e-mail was successfully sent! <br>
                     I will get back to you as soon as possible! </h4>
                <img class="mx-auto" alt="smiling avatar" src="images/camilleki3.png">
                <?php
            }
            ?>

        </div>
    </div>
</main>

<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

