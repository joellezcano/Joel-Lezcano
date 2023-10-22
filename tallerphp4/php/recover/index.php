<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require_once dirname(_FILE_, 3).'/php/settings/header.php';
    ?>
    <title>Principal</title>
</head>
<body>
    <?php 
        require_once dirname(_FILE_, 3).'/php/settings/menu.php';
    ?>
    <div class="container-md">
        <?php
        $saltolinea = "";
        $liena = "";
        $fichero = fopen("../datos.txt","r") or die("Problema al abrir fichero.");
         while (!feof($fichero)) {
            $linea = fgets($fichero);
            $saltolinea = nl2br($liena);
            echo "<h4>".$saltolinea . "</h4>";
         }
         fclose($fichero);
            echo "<h5> Fin del listado!</h5>";
        ?>

    </div>
</body>
    <?php 
        require_once dirname(_FILE_,3).'/php/settings/footer.php';
    ?>
</html>