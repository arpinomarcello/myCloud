<?php
session_start();
require_once('../../tmp/sistema/db_connessione.php');
$nuova_nota = new db_manager($db_url, $db_username, $db_password, $db_name);
$ris = $nuova_nota->nuova_nota($_POST['titolo'], $_POST['testo'],$_SESSION['utente']['id']);
header('Location: note.php');
?>