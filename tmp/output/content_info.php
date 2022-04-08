<section class="resume-section" id="about">
    <div class="resume-section-content">
        <?php
        foreach ($_SESSION['utente'] as $key => $val) {
            if ($key === "id" || $key === "foto_profilo" || $key === "username" || $key === "password")
                continue
        ?>
            <p><?php echo ucfirst($key) . ": " . $val ?></p>

        <?php } ?>
    </div>
    
</section>