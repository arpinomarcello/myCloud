<?php
session_start();
require_once('../../tmp/sistema/db_connessione.php');

$estensione = substr($_POST['percorso-foto'], -4);
$new_percorso = substr($_POST['percorso-foto'], 0, -4);
$new_percorso = rtrim($new_percorso, $_POST['old-nome-foto']);

$new_percorso = $new_percorso . $_POST['new-nome-foto'] . $estensione;
$galleria_rinomina = new db_manager($db_url, $db_username, $db_password, $db_name);
$ris = $galleria_rinomina->rinomina_foto($_POST['id-foto'],$_POST['new-nome-foto'],$new_percorso);
rename($_POST['percorso-foto'], $new_percorso );
header('Location: foto.php');
?>
