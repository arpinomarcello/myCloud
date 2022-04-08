<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Login</title>
    <link href="../style/bootstrap.min.css" rel="stylesheet">
    <link href="../style/login.css" rel="stylesheet">

</head>

<body class="text-center">

    <main class="form-signin">
        <form class="needs-validation" method="POST" action="home.php" novalidate>
            <img class="mb-4" src="../style/imgSito/user.png" alt="user logo" width="50" height="50">
            <h1 class="h3 mb-3 fw-normal">Accedi</h1>
            <input type="text" id="inputUser" name="username" class="form-control" placeholder="Username" required autofocus>
            <div class="invalid-feedback">
            </div>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required maxlength="20">
            <div class="invalid-feedback">
            </div>
            
            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Accedi</button>

            <p id="registrati">Non sei registrato?<a href="registrati.php"> Registrati</a></p>
            <p class="mt-5 mb-3 text-muted">Copyright &copy; <?= date('Y') ?></p>
        </form>
    </main>

    <script src="../javascript/bootstrap.bundle.min.js"></script>

    <script src="../javascript/login-validation.js"></script>

</body>

</html>