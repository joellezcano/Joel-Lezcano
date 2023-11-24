<?php 
    require_once('estudianteModel.php');
    $object = new estudianteModel();

    $idEstudiante = $_REQUEST['id'];
    $nombre= $_REQUEST['nombre'];
    $apellido= $_REQUEST['apellido'];
    $codigocurso= $_REQUEST['codigoCurso'];
    $registro = $object->actualizar($idEstudiante, $nombre, $apellido,$codigocurso);
    //echo "Registro de estudiante ".$registro." guardado exitosamente";
    
    header('location: index.php')
?>