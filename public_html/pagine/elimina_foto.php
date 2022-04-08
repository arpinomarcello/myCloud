<?php
session_start();
require_once('../../tmp/sistema/db_connessione.php');
$galleria = new db_manager($db_url, $db_username, $db_password, $db_name);
$ris = $galleria->elimina_foto($_POST['id'],$_POST['sel-foto']);
header('Location: foto.php');
?>