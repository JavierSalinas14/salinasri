<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <?php

        try{
            $conexion = new PDO('mysql:host=localhost;dbname=salinasri', 'root', '12345');

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $conexion->exec("SET CHARACTER SET utf8");

            $consulta="SELECT DORSAL, POSICION, NOMBRE, APELLIDOPATERNO, APELLIDOMATERNO FROM EQUIPO WHERE DORSAL = ?";

            $resultado=$conexion->prepare($consulta);

            $resultado->execute(array("1"));

            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                echo "Dorsal: " . $registro['DORSAL'] . "<br>" . "Nombre: " . $registro['NOMBRE'] . "<br>" .
                "Apellido paterno: " . $registro['APELLIDOPATERNO'] . "<br>" . 
                "Apellido materno: " . $registro['APELLIDOMATERNO'];
            }

            $resultado->closeCursor();

        }catch(Exception $error){
            echo "Error: " . $error->getMessage();
        }finally{
            $conexion = null;
        }

    ?>
</body>
</html>