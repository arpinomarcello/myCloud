<?php
session_start();
require_once('../../tmp/sistema/db_connessione.php');
require_once('../../tmp/sistema/check_timeout.php');
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Info - <?= $_SESSION['utente']['nome'] . " " . $_SESSION['utente']['cognome'] ?></title>
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
        <?php
        require_once('../../tmp/output/content_info.php')
        ?>
    </div>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../javascript/home_scripts.js"></script>
</body>

</html>