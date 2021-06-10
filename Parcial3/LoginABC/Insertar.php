<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "conexion.php";
    if(isset($_POST["insert"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $lenguaje = $_POST["lenguaje"];
        $statement = $conexion->prepare("INSERT INTO programadores (id, Nombre, Apellido, LenguajeDominante) VALUES (null, :nombre, :apellido, :lenguaje)");
        $statement->execute(array(
            
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':lenguaje' => $lenguaje
        
        ));
        
        if ($statement){
            $statement->closeCursor();
            header('location: principal.php');
        }
    }
}

?>