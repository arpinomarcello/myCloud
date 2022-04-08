<?php
$accesso = getdate()[0];
if (isset($_SESSION['timeout'])) {
    if($_SESSION['timeout'] < $accesso){
        header('Location: errore.php?errore=Il tempo della connessione è terminato');
        session_unset();
        session_destroy();
    }
}
?>