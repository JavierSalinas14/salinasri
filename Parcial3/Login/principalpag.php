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
    <link rel="stylesheet" href="css/estilospr.css">
    
    <style>
        body{
            background-image: url(image/fondo.jpg);
            height: 100%;
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

    <div class="form">
        <div id="Insertar">
            <form method="POST" action="Insertar.php">
                <h4 align="center">Eliminar programador</h4>
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
        <div id="Eliminar"text-align="center">
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