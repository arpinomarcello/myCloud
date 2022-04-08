<?php
session_start();
require_once('../../tmp/sistema/db_connessione.php');
$nota = new db_manager($db_url, $db_username, $db_password, $db_name);
$ris = $nota->elimina_nota($_POST['id']);
header('Location: note.php');
?>