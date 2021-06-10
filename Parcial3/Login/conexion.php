<?php
    
    try{
        $conexion = new PDO('mysql:host=localhost;dbname=login', 'root', '12345');
    }catch(PDOException $error){
        echo "Error: " . $error->getMessage();
    }

?>