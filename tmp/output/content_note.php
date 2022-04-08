<div class="form-aggiungi-posizione hidden" id="formNota">
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
        <form class="form-aggiungi" action="nuova_nota.php" method="post">
            <input name="id" type="hidden">
            <input name="titolo" type="text" placeholder="Titolo" autocomplete="off" required>
            <textarea name="testo" id="testo" cols="30" rows="10" autocomplete="off" placeholder="Scrivi la tua nota" required></textarea>
            <input type="submit" value="Salva">
        </form>
    </div>
</div>
<div class="container-fluid p-0">
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <?php
            if (count($ris) == 0) {
                echo "<h3>Nessuna nota</h3>";
            ?>
                <script src="../javascript/start.js"></script>
                <?php
            } else {
                foreach ($ris as $nota) {

                ?>
                    <div class="container-nota">
                        <div class="nota">
                            <h3><?php echo $nota['titolo'] ?></h3>
                            <p>
                            <p class="text-nota"><?php echo $nota['testo'] ?></p>
                            </p>
                            <form action="elimina_nota.php" method="post" class="form-elimina hidden">
                                <input type="hidden" name="id" value="<?php echo $nota['id'] ?>">
                                <input type="submit" class="btn btn-danger elimina" value="Elimina">
                            </form>
                            <form method="post" class="form-modifica hidden">
                                <input type="hidden" name="val-id" value="<?php echo $nota['id'] ?>">
                                <input type="hidden" name="val-titolo" value="<?php echo $nota['titolo'] ?>">
                                <input type="hidden" name="val-testo" value="<?php echo $nota['testo'] ?>">
                                <input type="submit" class="btn btn-secondary modifica" value="Modifica">
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