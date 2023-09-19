<?php
//Configuracion del documento para mostrar de forma detallada las compras que realizo el usuario
require './php/config.php';
require './php/dtbbase.php';
require './clases/clienteFunciones.php';

$token_session = $_SESSION['token'];
$orden = $_GET['orden'] ?? null;
$token = $_GET['token'] ?? null;

if ($orden == null || $token == null || $token != $token_session) {
    header("Location: compras.php");
    exit;
}

$db = new Database();
$con = $db->conectar();

$sqlCompra = $con->prepare("SELECT id, id_transaccion, fecha, total FROM compra WHERE id_transaccion = ? LIMIT 1 ");
$sqlCompra->execute([$orden]);
$rowCompra = $sqlCompra->fetch(PDO::FETCH_ASSOC);
$idCompra = $rowCompra['id'];
$fecha = new DateTime($rowCompra['fecha']);
$fecha = $fecha->format('d-m-Y H:i');

$sqlDetalle = $con->prepare("SELECT id, nombre, precio, cantidad FROM detalle_compra WHERE id_compra = ?");
$sqlDetalle->execute([$idCompra]);






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
    <title>Pacific Harvest Gourmet</title>

    <link rel="stylesheet" href="./css/registro.css">

</head>

<body>
    <!--Cabecera de la pagina-->


    <!--FIN Cabecera de la pagina-->


    <!--Contenedor vacio para espacio entre el header y banner principal-->

    <div id="vacio">

    </div>
    <!--FIN Contenedor vacio para espacio entre el header y banner principal-->





    <!--inicio banner principal-->


    <div class="containerMariscos containerMariscos--s">



    </div>

    <!--final banner principal-->


    <!--Cuerpo de la pagina-->




    <!--Fin de Cuerpo de la pagina-->

    <main>
        <!--Creamos una tabla y agregamos cada uno de los datos que solicitamos en la consulta de arriba, para que al final se muestre un detalle de la compra del cliente-->
        <div class="container">
            <div class="row" style="border: 1px dashed black;">
                <div class="col-12 col-md-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            <strong>Detalle de la compra</strong>
                        </div>
                        <div class="card-body">
                            <p><strong>Fecha: </strong>
                                <?php echo $fecha; ?>
                            </p>
                            <p><strong>Orden: </strong>
                                <?php echo $rowCompra['id_transaccion']; ?>
                            </p>
                            <p><strong>Total: </strong>
                                <?php echo MONEDA . ' ' . number_format($rowCompra['total'], 2, ".", ","); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>

                                    </th>
                                    <th>
                                        Producto
                                    </th>
                                    <th>
                                        Precio
                                    </th>
                                    <th>
                                        Cantidad
                                    </th>
                                    <th>
                                        Subtotal
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php while ($row = $sqlDetalle->fetch(PDO::FETCH_ASSOC)) {
                               
                                    $precio = $row['precio'];
                                    $cantidad = $row['cantidad'];
                                    $subtotal = $precio * $cantidad;
                                    $img="";
                                ?>
                                    <tr>
                                        <td>
                                            <?php

                                            $_id = $row["id"];
                                            $img = "./images/productos/" . $_id . "/principal.jpg";

                                            if (!file_exists($img))
                                                $img = "./images/no-img.png"
                                            ?>
                                            <a href=""><img src="<?php echo $img; ?>" width="52px"></a>
                                        </td>
                                        <td>
                                            <?php echo $row['nombre']; ?>

                                        </td>
                                        <td>

                                            <?php echo  MONEDA . ' ' . number_format($precio, 2, ".", ","); ?>

                                        </td>
                                        <td>

                                            <?php echo $cantidad; ?>

                                        </td>
                                        <td>

                                            <?php echo  MONEDA . ' ' . number_format($subtotal, 2, ".", ","); ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <!--Inicio footer-->


    <hr>
    <footer>

        <div class="container">



            <div class="footer3">
                <div>
                    <a href="../index.php"><img src="../recursos/SVGLogo.svg" alt=""></a>
                </div>
                <div>
                    <p></p>
                </div>
            </div>

        </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>