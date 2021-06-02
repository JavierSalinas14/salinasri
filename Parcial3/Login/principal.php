<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'html/principalpag.php';
    }else{
        header ('location: login.php');
    }
        
?>