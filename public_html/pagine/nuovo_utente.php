<?php
require_once('../../tmp/sistema/db_connessione.php');
mkdir("../../public_html/img/" . $_POST['username']);
mkdir("../../public_html/img/" . $_POST['username']."/foto_profilo");
$file= $_FILES['foto'];

if($file['error']==UPLOAD_ERR_OK && is_uploaded_file($file['tmp_name']))
{
    $percorso = "../../public_html/img/" . $_POST['username'] . "/foto_profilo";
    $caricamento = move_uploaded_file($file['tmp_name'], $percorso."/".$file['name']);
    $lettura = "../img/".$_POST['username']. "/foto_profilo"."/".$file['name'];
}


$nuovo_utente = new db_manager($db_url, $db_username, $db_password, $db_name);
$nuovo_utente->nuovo_utente($lettura,$_POST['nome'], $_POST['cognome'], $_POST['email'], $_POST['indirizzo'], $_POST['citta'], $_POST['username'], $_POST['password']);

header("Location: ../index.php");

