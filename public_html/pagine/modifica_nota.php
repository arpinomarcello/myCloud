<?php
session_start();
require_once('../../tmp/sistema/db_connessione.php');
$note_modifica = new db_manager($db_url, $db_username, $db_password, $db_name);
$ris = $note_modifica->modifica_nota($_POST['id'],$_POST['titolo'],$_POST['testo']);
header('Location: note.php');