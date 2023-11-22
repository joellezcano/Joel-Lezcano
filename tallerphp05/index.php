<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Arreglo con PHP</h3>
        <?php
        $nombre[] = "JUAN";
        $nombre[] = "ROSA";
        $nombre[] = "MABEL";
        $nombre[] = "JULIO";
        $nombre[] = "ARACELI";
        for ($indice=0; $indice < count($nombre); $indice++) { 
            echo "Nombre:" . $nombre[$indice]. "<br>";
        }
        ?>
            <table class="table">
                <thead>
                    <th>Nombre</th>
                </thead>
                <tbody>
                    <?php
                        for ($i=0; $i < count($nombre ); $i++) { ?>
                            <tr>
                                <td>
                                    <?=$nombre[$i];?>
                                </td>
                            </tr>
                        <?php
                        } ?>
                </tbody>
            </table>
            <table class="table">
                <thead>
                    <th>Forma de Pago</th>
                </thead>
                <tbody>
                    <?php
                    $fpagos = array("Efectivo", "Tarjeta", "Transferencia", "Paypal");
                        for ($i=0; $i < count($fpagos); $i++) { ?>
                            <tr><td><?=$fpagos[$i];?></td></tr>
                        <?php
                        } ?>
                </tbody>
            </table>
    </div>
</body>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
</html>