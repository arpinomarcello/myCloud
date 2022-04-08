<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
    
    .btn{
        width: 100px;
    }
    .btn:hover{
        width: 200px;
    }

    #miobox {
        min-height: 100vh;
        background-image: url("style/imgSito/nuvola.png");
        background-repeat: no-repeat;
        background-size: 35vw 28vw;
        background-position: 54% 100%;
        padding-left: 0;
        padding-right: 0;
    }

    #logo {
        width: 4rem;
        height: 2rem;
    }
    </style>
</head>

<body>
    <div id="miobox" class="container-fluid">
        <nav class="navbar navbar-expand navbar-dark bg-primary py-3">
            <div class="container-fluid">
                <a class="navbar-brand px-2"><img id="logo" src="style/imgSito/nuvola-logo.png" alt="logo">myCloud</a>
                <div class="navbar-expand px-3">
                </div>
            </div>
        </nav>
        <main class="container position-relative my-4">

            <div
                class="starter-template text-center my-5 py-5 px-3 position-relative top-50 start-50 translate-middle-x">
                <h1 class="display-3">
                    Crea il tuo spazio, salva le tue foto e le tue note.</h1>
                <p class="display-6 lead my-5">Il tuo database sempre con te.</p>
                <button type="button" class="btn btn-primary px-3 my-4"><a href="pagine/registrati.php"
                        class="text-decoration-none text-white">Registrati</a></button>
                <button type="button" class="btn btn-outline-primary bg-light px-3 my-4"><a
                        href="pagine/login.php" class="text-decoration-none">Accedi</a></button>
            </div>
        </main>
    </div>
    <footer class="footer col-12 mt-auto py-3 bg-primary text-white py-4 text-center ">
        <div class="container">
            <span><i class="fa fa-copyright" aria-hidden="true"><?= date('Y') ?> - MKdesign</i></span>
        </div>
    </footer>
</body>

</html>