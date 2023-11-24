<?php
    session_start();
    if(isset($_SESSION["usuario"])) {
        header('location: ./main.php');
    } else {
        header('location: ./view/usuario/login.php');
    }
    //esto se pone en index,create,edit, etc.
?>