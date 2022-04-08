<?php
$db_url = 'localhost';
$db_username = 'mkdesign2020';
$db_password = 'Vbcfse528491';
$db_name = 'mycloud';
class db_manager{
    private $connessione;

    function __construct($url,$username,$password,$db)
    {
        try {
            $this->connessione = new PDO("mysql:host=$url;dbname=$db;
            charset=utf8", $username, $password);
            $this->connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            header('Location: errore.php?errore=Connessione Fallita');
            exit();
        }
    }
    function convalida($u,$p){
        $stm = $this->connessione->prepare("SELECT * FROM `utenti` WHERE
                `username`= :nome AND `password`= :password");
        $stm->bindParam(':nome',$u);
        $stm->bindParam(':password', $p);
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        $esito = $stm->fetchAll();
        return $esito;
    }
    function nuovo_utente($fp,$n,$c,$e,$i,$cit,$u,$p){
        $stm = $this->connessione->prepare("INSERT INTO `utenti`(`foto_profilo`,`nome`, `cognome`, `email`, `indirizzo`, `citta`, `username`, `password`) 
        VALUES (:fp,:n,:c,:e,:i,:cit,:u,:p)");
        $stm->bindParam(':fp', $fp);
        $stm->bindParam(':n', $n);
        $stm->bindParam(':c', $c);
        $stm->bindParam(':e', $e);
        $stm->bindParam(':i', $i);
        $stm->bindParam(':cit', $cit);
        $stm->bindParam(':u', $u);
        $stm->bindParam(':p', $p);
        $stm->execute();
    }
    function vedi_galleria(){
        $sql = ("SELECT galleria.id, galleria.nome_foto, galleria.percorso_foto FROM `galleria` WHERE galleria.id_utente=".$_SESSION['utente']['id']);
        $risultato = $this->connessione->query($sql);
        $risultato->setFetchMode(PDO::FETCH_ASSOC);
        $riga = $risultato->fetchAll();
        return $riga;
    }
    function vedi_note()
    {
        $sql = ("SELECT note.id, note.titolo, note.testo FROM `note` WHERE note.id_utente=" . $_SESSION['utente']['id']);
        $risultato = $this->connessione->query($sql);
        $risultato->setFetchMode(PDO::FETCH_ASSOC);
        $riga = $risultato->fetchAll();
        return $riga;
    }
    function nuova_nota($titolo, $nota, $id_u)
    {
        $stm = $this->connessione->prepare("INSERT INTO `note`(`titolo`,`testo`, `id_utente`) 
        VALUES (:titolo,:nota,:id_u)");
        $stm->bindParam(':titolo', $titolo);
        $stm->bindParam(':nota', $nota);
        $stm->bindParam(':id_u', $id_u);
        $stm->execute();
    }
    function nuova_foto($nome_foto, $percordo_foto, $id_u)
    {
        $stm = $this->connessione->prepare("INSERT INTO `galleria`(`nome_foto`,`percorso_foto`, `id_utente`) 
        VALUES (:n_f,:p_f,:id_u)");
        $stm->bindParam(':n_f', $nome_foto);
        $stm->bindParam(':p_f', $percordo_foto);
        $stm->bindParam(':id_u', $id_u);
        $stm->execute();
    }
    function elimina_foto($id,$sel){
        $sql = ("DELETE FROM `galleria` WHERE `galleria`.`id` = $id");
        $this->connessione->query($sql);
        unlink($sel);
    }
    function elimina_nota($id)
    {
        $sql = ("DELETE FROM `note` WHERE `note`.`id` = $id");
        $this->connessione->query($sql);
    }
    function rinomina_foto($id,$nome_foto,$percorso_foto)
    {
        $stm = $this->connessione->prepare("UPDATE `galleria` SET `nome_foto`=:n_f,`percorso_foto`=:p_f WHERE `id`=$id");
        $stm->bindParam(':n_f', $nome_foto);
        $stm->bindParam(':p_f', $percorso_foto);
        $stm->execute();
    }
    function modifica_nota($id, $titolo, $testo)
    {
        $stm = $this->connessione->prepare("UPDATE `note` SET `titolo`=:titolo,`testo`=:testo WHERE `id`=$id");
        $stm->bindParam(':titolo', $titolo);
        $stm->bindParam(':testo', $testo);
        $stm->execute();
    }
}

