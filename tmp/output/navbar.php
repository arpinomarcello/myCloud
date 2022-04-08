<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">
            <?= $_SESSION['utente']['nome'] . " " . $_SESSION['utente']['cognome'] ?>
        </span>
        <span class="d-none d-lg-block">
            <img class="img-fluid img-profile mx-auto mb-4" src="<?php echo $_SESSION['utente']['foto_profilo'] ?>" alt="Foto profilo" />
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="info.php">Info</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="foto.php">Foto</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="note.php">Note</a></li>
            <hr>
            <li class="nav-item"><a class="nav-link js-scroll-trigger btn btn-danger btn-secondary btn-sm" href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>