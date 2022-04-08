<div class="form-aggiungi-posizione hidden" id="formFoto">
    <div class="container-form">
        <div class="barra-superiore">
            <p class="titolo-barra-superiore"></p>
            <a id="icona-barra-superiore">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                </svg>
            </a>
        </div>
        <form class="form-aggiungi" action="nuova_foto.php" method="post" enctype="multipart/form-data">
            <input type="file" name="foto" id="foto" width="100" height="80">
            <input name="titolo" id="nome-foto" type="text" placeholder="Nome foto" autocomplete="off">
            <input type="submit" value="Salva">
        </form>
    </div>
</div>
<div class="container-fluid p-0">
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <?php
            if (count($ris) == 0){
                echo "<h3>Nessuna foto</h3>";
                ?>
                <script src="../javascript/start.js"></script>
                <?php
            }else {
                foreach ($ris as $foto) {
            ?>
                    <div class="container-foto">
                        <div class="box-foto">
                            <img src="<?php echo $foto['percorso_foto'] ?>" alt="<?php echo $foto['nome_foto'] ?>">
                            <form action="rinomina_foto.php" method="post" class="form-modifica-nome">
                                <input type="hidden" name="id-foto" value="<?php echo $foto['id'] ?>">
                                <input type="hidden" name="percorso-foto" value="<?php echo $foto['percorso_foto'] ?>">
                                <input type="hidden" name="old-nome-foto" value="<?php echo $foto['nome_foto'] ?>">
                                <input class="rinomina etichetta-foto" type="text" name="new-nome-foto" maxlength="15" value="<?php echo $foto['nome_foto'] ?>" readonly>
                                <input class="rinomina btn btn-secondary submit-rinomina hidden" type="submit" value="Rinomina">
                            </form>
                            <form action=" elimina_foto.php" method="post" class="form-elimina hidden">
                                <input type="hidden" name="id" value="<?php echo $foto['id'] ?>">
                                <input type="hidden" name="sel-foto" value="<?php echo $foto['percorso_foto'] ?>">
                                <input type="submit" class="btn btn-danger elimina" value="Elimina">
                            </form>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </section>
</div>
