<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errore</title>
    <style>
        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
        }

        .container-center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 0.4rem #007bff;
            border-radius: 1rem;
            text-align: center;
            padding: 2rem;
        }

        .btn-alert {
            background-color: rgba(220, 53, 69, 0.8);
            outline: none;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 0.2rem;
        }

        .btn-alert:hover {
            background-color: #dc3545;
        }

        .link-alert {
            text-decoration: none;
            color: white;
        }

        .msg-errore {
            margin: 0.5rem 0.5rem 2rem 0.5rem;
        }
    </style>
</head>

<body>
    <div class="container-center">
        <p class="msg-errore">
            <?php echo $_GET['errore'] ?>
        </p>
        <button class="btn-alert"><a class="link-alert" href="../index.php">Riprova</a></button>
    </div>
</body>

</html>