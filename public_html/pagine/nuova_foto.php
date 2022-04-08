<?php
session_start();
require_once('../../tmp/sistema/db_connessione.php');
$nuova_foto = new db_manager($db_url, $db_username, $db_password, $db_name);
$file = $_FILES['foto'];

if ($file['error'] == UPLOAD_ERR_OK && is_uploaded_file($file['tmp_name'])) {
    $percorso = "../img/" . $_SESSION['utente']['username'] . "/";
    $caricamento = move_uploaded_file($file['tmp_name'], $percorso . $file['name']);
    $percorso_finale = $percorso . $file['name'];
}
$ris = $nuova_foto->nuova_foto($_POST['titolo'],$percorso_finale,$_SESSION['utente']['id']);
header('Location: foto.php');