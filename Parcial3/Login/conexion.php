<?php
    
    try{
         $conexion = new PDO('mysql:host=localhost;dbname=login', 'root', '12345');
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>