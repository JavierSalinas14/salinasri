<?php

    try{

        $conexion = new PDO("mysql:host=localhost;dbname=salinasri",'root','12345');

        $query = "SELECT * FROM EQUIPO";
    
        $consulta = $conexion -> prepare($query);

        if($consulta -> execute())
        {
            $resultado = $consulta -> fetchall(PDO::FETCH_ASSOC);
        }
        else{
            $resultado = "Surgio un error.";
        }

        echo json_encode($resultado);
    
    }catch(Exception $error){
        echo "Error: " . $error->getMessage();
    }finally{
        $conexion = null;
    }

?>