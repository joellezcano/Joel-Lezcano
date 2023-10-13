<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Bucle For</div>
    <div>
        <?php
        for ($indice = 1; $indice <=100; $indice++) {
            echo 'valor del indice: '
            echo $indice;
            echo '<br>'
            $indice++
        }
        <?php
        
    </div>
</body>
</html>