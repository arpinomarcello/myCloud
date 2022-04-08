<?php
session_start();
require_once('../../tmp/sistema/db_connessione.php');
require_once('../../tmp/sistema/check_timeout.php');
$galleria = new db_manager($db_url, $db_username, $db_password, $db_name);
$ris = $galleria->vedi_galleria();
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Foto - <?= $_SESSION['utente']['nome'] . " " . $_SESSION['utente']['cognome'] ?></title>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <link href="../style/home_style.css" rel="stylesheet" />
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php
    require_once('../../tmp/output/style_foto.php')
    ?>
</head>

<body id="page-top">
    <?php
    require_once('../../tmp/output/navbar.php');

    require_once('../../tmp/output/content_foto.php');

    require_once('../../tmp/output/button.php')
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="../javascript/home_scripts.js"></script>
    <script src="../javascript/personale.js"></script>
</body>

</html>