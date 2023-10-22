<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require_once dirname(__FILE__,3).'/php/settings/header.php';
    ?>
    <title>Principal</title>
</head>
<body>
    <?php 
        require_once dirname(__FILE__, 3).'/php/settings/menu.php';
    ?>
    <div class="container-md">
        <?php
        $saltolinea = "\n";
        $fichero = fopen("datos.txt","a") or die("Problema en la creacion");
            fputs($fichero, $_POST['nombre'].$saltolinea);
            fputs($fichero, $_POST['apellido'].$saltolinea);
            fputs($fichero, $_POST['telefono'].$saltolinea);
            fputs($fichero, $_POST['cedula'].$saltolinea);
            fputs($fichero, "-------------------------");
            fclose($fichero);
            echo "Datos Guardados Correctamente!";
        ?>

    </div>
</body>
    <?php 
        require_once dirname(__FILE__,3).'/php/settings/footer.php';
    ?>
</html>