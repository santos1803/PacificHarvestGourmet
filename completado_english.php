<?php

//Configuracion del documento para que cuando una compra sea marcada como aprobada se muestren detalles de la compra
require './php/config.php';
require './php/dtbbase.php';
$db = new  Database();
$con = $db->conectar();

$id_transaccion = isset($_GET['key']) ? $_GET['key'] : '0';

$error = '';

if ($id_transaccion == '') {
    $error = 'Error processing request';
} else {
    $sql = $con->prepare("SELECT count(id) FROM compra WHERE id_transaccion=? AND status=?");
    $sql->execute([$id_transaccion, 'COMPLETED']);
    if ($sql->fetchColumn() > 0) {
        $sql = $con->prepare("SELECT id, fecha, email, total FROM compra WHERE id_transaccion=? AND status=? LIMIT 1 ");
        $sql->execute([$id_transaccion, 'COMPLETED']);
        $row = $sql->fetch(PDO::FETCH_ASSOC);

        $idCompra = $row['id'];
        $total = $row['total'];
        $fecha = $row['fecha'];

        $sqlDet = $con->prepare("SELECT nombre, precio, cantidad FROM detalle_compra WHERE id_compra =?");
        $sqlDet->execute([$idCompra]);
    } else {
        $error = 'Error when checking out';
    }
}

?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/registro.css">

    <title>Pacific Harvest Gourmet</title>
</head>

<body>
    <!--Cabecera de la pagina-->


    <!--FIN Cabecera de la pagina-->


    <!--Contenedor vacio para espacio entre el header y banner principal-->

    <div id="vacio">

    </div>
    <!--FIN Contenedor vacio para espacio entre el header y banner principal-->



    <div class="containerMariscos">

    </div>


    <main>
        <div class="container">

            <!--Creamos la tabla donde tomamos los valores de la consulta que hicimos al inicio y lo mostramos en una tabla para que el cliente pueda ver los detalles de su compra exitosa-->

            <?php if (strlen($error) > 0) { ?>

                <div class="row">
                    <div class="col">
                        <h3> <?php echo $error; ?></h3>
                    </div>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div class="col">
                        <b>Order Folio: </b><?php echo   $id_transaccion; ?> <br>
                        <b>Date of Purchase: </b><?php echo   $fecha; ?> <br>
                        <b>Total: </b><?php echo MONEDA . number_format($total, 2,  '.',  ','); ?> <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Quantity</th>
                                    <th>Product</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row_det = $sqlDet->fetch(PDO::FETCH_ASSOC)) {
                                    $importe = $row_det['precio'] * $row_det['cantidad']; ?>
                                    <tr>
                                        <td>
                                            <?php echo $row_det['cantidad']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row_det['nombre']; ?>
                                        </td>
                                        <td>
                                            <?php echo $importe; ?>
                                        </td>
                                    </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php  } ?>

        </div>

    </main>















    <!--Inicio footer-->


    <footer>

        <div class="container">

            <div class="footer3">
                <div>
                    <a href="../html/index_english.php"><img src="../recursos/SVGLogo.svg" alt=""></a>
                </div>
                <div>
                    <p></p>
                </div>
            </div>

        </div>
    </footer>



    <script src="https://kit.fontawesome.com/60bf69d95c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>