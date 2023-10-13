!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            if (iseet($_POST['numero']) && !empty($_POST['numero'])) {
                $numero = $_POST['numero'];
                $inicio=1;
                while ($inicio<=$numero) {
                    echo 'valor generado: ' . $inicio;
                    $inicio++;
                }
            } else {
                echo 'valor no valido. ';
            }
        ?>
    </div>
</body>
</html>