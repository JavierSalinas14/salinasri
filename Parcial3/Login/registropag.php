<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body{
            background-image: url(image/fondolog.jpg);
        }

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Raleway';
            text-decoration: none;
            /*outline: 1px solid red;*/
        }

        body{
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }

        .container-form{
            width: 100%;
            max-width: 500px;
            background: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding-bottom: 50px;
            overflow: hidden;
        }

        .header{
            width: 100%;
            height: 80px;
            background: black;
            display: flex;
            position: relative;
        }

        .logo-title{
            display: flex;
            margin-top: 8px;
            margin-left: 10px;
        }
        .menu{
            display: flex;
            position: absolute;
            width:100%;
            top: 0px;
            color: white;
        }

        .menu li{
            text-align: center;
            width: 250px;
            list-style: none;
            padding: 30px;
            padding-bottom: 27px;
            font-weight: 300;
            border-bottom: 4px black solid;
        }


        .menu li:hover{
            border-bottom: 4px solid white;
            cursor: pointer;
        }

        a{
            color: white;
        }

        /*formulario Login*/

        .logo-title img{
            display: block;
            margin: auto;
            width: 60px;
            height: 60px;
        }

        .form{
            width: 100%;
        }

        .form .welcome-form{
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .form .welcome-form h1{
            font-weight: 300;
            font-size: 30px;
            color: black;
        }


        .line-input{
            max-width: 350px;
            display: flex;
            border-bottom: 1px solid white;
            margin: auto;
            margin-top: 40px;
            padding: 6px;
            position: relative;
        }

        

        .line-input input{
            border-bottom: 1px solid black;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            background-color: none;
            color: black;
            outline: 1px;
            margin-left: 10px;
            font-size: 16px;
            width: 100%;
            font-weight: 300;
        }

        .line-input label{
            font-size: 20px;
            position: relative;
            top: -4px;
        }

        .form button{
            width: 300px;
            height: 50px;
            display: block;
            margin: auto;
            margin-top: 50px;
            color: white;
            background: #5B1BF1;
            border-style: none;
            outline: 0px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .form button:hover{
            opacity: .9;
        }

        .form button label{
            position: relative;
            left: 50px;
            font-size: 10px;
            cursor: pointer;
        }


        .mensaje{
            width: 100%;
            max-width: 350px;
            margin: auto;
            margin-top: 20px;
            text-align: left;
            padding: 6px;
            color: red;
        }
        .active{
            border-bottom: 4px solid lightgreen;
        }
    </style>
</head>
<body>
<div class="container-form">
        <div class="header">
            <div class="menu">
                <a href="login.php"><li class="module-login active">Login</li></a>
                <a href="registro.php"><li class="module-register">Registro</li></a>
            </div>
        </div>
        <br><br>
        <div align="center" class="logo-title">
            <img src="image/login.png" alt="">
            <br>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <div class="welcome-form"><h1>Registro</h1></div>
            
            <div class="user line-input">
                <label class="lnr lnr-envelope"></label>
                <input type="text" placeholder="Correo" name="correo">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Usuario" name="usuario">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="clave">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Confirmar contraseña" name="clave2">
            </div>
            
            <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <button type="submit">Registrarse<label class="lnr lnr-chevron-right"></label></button>
               
    </form>
    </div>
</body>
</html>