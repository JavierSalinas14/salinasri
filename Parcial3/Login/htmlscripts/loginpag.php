<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <link rel="stylesheet" href="css/estilos.css">
    
    <style>
        body{
            background-image: url(image/fondo2.jpg);
        }
    </style>
</head>
<body>
    
<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="image/logoprogramacion.png" alt="">
                <h2>Cursos de programación</h2>
            </div>
            <div class="menu">
                <a href="login.php"><li class="module-login active">Login</li></a>
                <a href="registro.php"><li class="module-register">Registro</li></a>
            </div>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <div class="welcome-form"><h1>Bienvenido a los cursos de programación</h1></div>
            <div class="user line-input">
                <input type="text" placeholder="Usuario" name="usuario">
            </div>
            <div class="password line-input">
                <input type="password" placeholder="Contraseña" name="clave">
            </div>
            
             <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <button type="submit">Entrar<label class="lnr lnr-chevron-right"></label></button>
        </form>
    </div>
    
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>