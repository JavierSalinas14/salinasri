<!DOCTYPE html>
<?php 

    if(isset($_SESSION['usuario'])) {
        $UsuarioIngresado = $_SESSION['usuario'];
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programadores</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    
    <style>
        body{
            background-image: url(image/fondo.jpg);
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

        .container img{
            width: 120px;
            height: 120px;
            text-align: center;
        }

        .container h1{
            font-size: 50px;
            color: white;
            font-weight: 100;
            margin-top: 20px;
        }

        .container h4{
            font-size: 30px;
            color: white;
            font-weight: 100;
            margin-top: 20px;
        }


        .container form{
            color: white;
            text-align: left;
        }

        .container a{
            display: block;
            width: 50%;
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

        .line-input{
            max-width: 350px;
            display: flex;
            border-bottom: 1px solid white;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 6px;
            position: relative;
        }


        .line-input input{
            background-color: black;
            color: #898989;
            border-style: none;
            outline: 0px;
            margin-left: 10px;
            font-size: 16px;
            width: 100%;
            font-weight: 300;
        }

        .container button{
            display: block;
            margin-left: 44%;
            margin-top: 20px;
            margin-bottom: 30px;
            font-size: 20px;
            padding: 10px;
            border: 1px solid white;
            background: black;
            color: white;
            text-align: center;
            text-decoration: none;
        }

        .container button:hover{
            color: black;
            background: white;
        }   
    </style>
</head>
<body>
   
    <div class="container">
       <img src="image/logoprogramacion.png" >
        <h1>Bienvenido 
            <?php 
                echo $UsuarioIngresado;
            ?>
        </h1>
        <br><br>
        <h4>Programadores</h4>
        
        <center><table class="table table-striped table-dark">
	    <tr align="center">
		    <th width = 10%>ID</th>
		    <th width = 25%>Nombre</th>
		    <th width = 30%>Apellido</th>
		    <th width = 35%>Lenguaje dominante</th>
	    </tr></center>
        <?php
            require_once "conexion.php";
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $conexion->exec("SET CHARACTER SET utf8");

            $consulta = "SELECT * FROM programadores";
            $resultado=$conexion->prepare($consulta);
            $resultado->execute(array());
            $i = 0;
            while ( $fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
	            $id = $fila['id'];
	            $nombre = $fila['Nombre'];
	            $apellido = $fila['Apellido'];
	            $lenguaje = $fila['LenguajeDominante'];

	            $i++;

        ?>
        <tr align="center">
        <td><?php echo $id; ?></td>
        <td><?php echo $nombre; ?></td>
        <td><?php echo $apellido; ?></td>
        <td><?php echo $lenguaje; ?></td>
        </tr>
        <?php } $resultado->closeCursor();?>
        </table>
        
        <br>
    <div class="form">
        <div id="Insertar">
            <form method="POST" action="Insertar.php">
                <h4 align="center">Insertar programador</h4>
                <div class="nombre line-input">
                    <input type="text" name="nombre" placeholder = "Nombre"><br />
                </div>
                <div class="apellido line-input">
                    <input type="text" name="apellido" placeholder = "Apellido"><br />
                </div>
                <div class="lenguaje line-input">
                    <input type="text" name="lenguaje" placeholder = "Lenguaje dominante"><br /><br>
                </div>
	            <button type="submit" name="insert" value = "Insertar">Insertar</button>
            </form>
        </div>
        <br>
        <div id="Eliminar">
            <form method="POST" action="Eliminar.php">
                <h4 align="center">Eliminar programador</h4>
                <div class="id line-input">
                    <input type="text" name="idBorrar" placeholder = "Ingrese ID">
                </div>
                <button type="submit" name="eliminar" value = "Eliminar">Eliminar</button>
            </form>
        </div>
    </div>
    <a href="cerrar.php">Cerrar sesion</a>
    </div>

</body>
</html>