<!-- <?php 
// require_once('estudianteModel.php');
// $object = new estudianteModel();
// $idEstudiante = $_GET['id']; // Cambiado de $_REQUEST a $_GET para obtener el parámetro de la URL.
// $object->eliminar($idEstudiante);
// header('location: index.php'); // Agregada una ';' al final para evitar errores de sintaxis.
?> -->

<?php 
 require_once('estudianteModel.php');
 $object = new estudianteModel();

 $idEstudiante = $_REQUEST['id'];
 $object->eliminar($idEstudiante);

 header('location: index.php')

?>
