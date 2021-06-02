<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programadores</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <link rel="stylesheet" href="css/estilospr.css">
    
    <style>
        body{
            background-image: url(image/fondo.jpg);
        }
    </style>
</head>
<body>
   
   <div class="welcome">
       <img src="image/logoprogramacion.png" >
        <h1>Bienvenido 
            <?php
                echo $_SESSION['usuario'];
            ?>
        </h1>
        <a href="cerrar.php">Cerrar sesion</a>
   </div>
   
</body>
</html>