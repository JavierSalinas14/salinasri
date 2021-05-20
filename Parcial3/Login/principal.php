<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'htmlscripts/principalpag.php';
    }else{
        header ('location: login.php');
    }
        
?>