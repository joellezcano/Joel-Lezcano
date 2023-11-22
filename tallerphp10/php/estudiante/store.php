<?php 
    require_once('estudianteModel.php');
    $object = new estudianteModel();

    $nombre= $_REQUEST['nombre'];
    $apellido= $_REQUEST['apellido'];
    $idCurso= $_REQUEST['idCurso'];
    $registro = $object->insertar($nombre, $apellido,$idCurso);
    //echo "Registro de estudiante ".$registro." guardado exitosamente";
    
    header('location: index.php')
?>