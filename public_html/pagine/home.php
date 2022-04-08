<?php
session_set_cookie_params(600);
session_start();
require_once('../../tmp/sistema/db_connessione.php');
require_once('../../tmp/sistema/check_timeout.php');
if (!isset($_SESSION['utente'])) {
    $_SESSION['timeout'] = $accesso + 600;
    $login = new db_manager($db_url, $db_username, $db_password, $db_name);
    $dati_utente = $login->convalida($_POST['username'], $_POST['password']);

    if (!$dati_utente) {
        header('Location: errore.php?errore=Username o Password non corretti');
        exit();
    } else {
        $_SESSION['utente'] = $dati_utente[0];
    }
    
}


?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home - <?= $_SESSION['utente']['nome'] . " " . $_SESSION['utente']['cognome'] ?></title>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <link href="../style/home_style.css" rel="stylesheet" />
</head>

<body id="page-top">
    
    <?php
        require_once('../../tmp/output/navbar.php')
    ?>
    <div class="container-fluid p-0">

        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    <?= $_SESSION['utente']['nome'] ?>
                    <span class="text-primary"><?= $_SESSION['utente']['cognome'] ?></span>
                </h1>
                <div class="subheading mb-5">
                    <?= $_SESSION['utente']['indirizzo'] ?>
                    <a href="mailto:<?= $_SESSION['utente']['email'] ?>"><?= $_SESSION['utente']['email'] ?></a>
                </div>
                <div class="social-icons">
                    <a class="social-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../javascript/home_scripts.js"></script>
    
</body>

</html>