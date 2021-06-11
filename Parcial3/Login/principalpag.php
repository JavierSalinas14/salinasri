<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion iniciada</title>
    <style>
        body{
            background-image: url(image/fondopr.jpg);
            height: 100%;
        }

        .container{
            width: 100%;
            height: 80%;
            max-width: 800px;
            margin: auto;
            margin-top: 50px;
            margin-bottom: 50px;
            background: rgba(0,0,0,1);
            text-align: center;
            padding: 20px;
        }

        .container h1{
            font-size: 50px;
            color: white;
            font-weight: 100;
            margin-top: 20px;
        }

        .container a{
            display: block;
            margin: auto;
            width: 25%;
            margin-top: 40px;
            font-size: 20px;
            padding: 10px;
            border: 1px solid white;
            color: white;
            text-align: center;
            text-decoration: none;
        }

        .container a:hover{
            color: black;
            background: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido
            <?php echo $_SESSION['usuario']; ?>
        </h1>
        <a href="cerrar.php">Cerrar sesion</a>
        <br>
    </div>
</body>
</html>