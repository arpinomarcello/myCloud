<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Registrati</title>
    <link href="../style/bootstrap.min.css" rel="stylesheet">
    <link href="../style/form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../style/imgSito/user.png" alt="user logo" width="50" height="50">
                <h2>Inserisci i tuoi dati</h2>
            </div>
            <div class="col-md-0 col-lg-0">
                <form class="needs-validation" method="POST" action="nuovo_utente.php" enctype="multipart/form-data" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" value="" required>
                            <div class="invalid-feedback">
                                Campo obbligatorio
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="cognome" class="form-label">Cognome</label>
                            <input type="text" class="form-control" name="cognome" id="cognome" value="" required>
                            <div class="invalid-feedback">
                                Campo obbligatorio
                            </div>
                        </div>



                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="nome@esempio.com" required>
                            <div class="invalid-feedback">
                                Campo obbligatorio
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="indirizzo" class="form-label">Indirizzo</label>
                            <input type="text" class="form-control" name="indirizzo" id="indirizzo" placeholder="Via Roma 10" required>
                            <div class="invalid-feedback">
                                Campo obbligatorio
                            </div>
                        </div>

                        <div class="col-md-8">
                            <label for="citta" class="form-label">Città</label>
                            <input type="text" class="form-control" name="citta" id="citta" placeholder="Roma" required>
                            <div class="invalid-feedback">
                                Campo obbligatorio
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="foto" class="form-label">Foto Profilo</label>
                            <input type="file" class="form-control" name="foto" id="foto" required>
                            <div class="invalid-feedback">
                                Campo obbligatorio
                            </div>
                        </div>

                    </div>
                    <hr class="my-4">
                    <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="username" id="username" required>
                            <div class="invalid-feedback">
                                Campo obbligatorio
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" required>
                            <div class="invalid-feedback">
                                Campo obbligatorio
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="re-password" class="form-label">Conferma Password</label>
                        <div class="input-group">
                            <input id="repass" type="password" name="re-password" class="form-control" required>
                            <div class="invalid-feedback">
                                Campo obbligatorio
                            </div>
                            <div class="invalid-feedback" id="repass-invalid">
                                Conferma Password fallita
                            </div>
                        </div>
                    </div>




                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Registrati</button>
                </form>
            </div>
    </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">Copyright &copy; <?= date('Y') ?></p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Supporto</a></li>
        </ul>
    </footer>
    </div>


    <script src="../javascript/bootstrap.bundle.min.js"></script>

    <script src="../javascript/form-validation.js"></script>
</body>

</html>