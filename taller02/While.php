<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    $inidce=1;
    $fin = rand(1,100);
    while ($indice<=$fin){
        echo 'valor del indice: ';
        echo $indice;
        echo '<br>';
        $indice++;
    }
  ?>
</body>
</html>