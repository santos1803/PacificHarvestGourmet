<?php
//Configuracion del documento para crear un historial de compra para cada usuario
require './php/config.php';
require './php/dtbbase.php';
require './clases/clienteFunciones.php';

$db = new Database();
$con = $db->conectar();


$token = generarToken();
$_SESSION['token'] = $token;



$idCliente = $_SESSION['user_cliente'];
$sql = $con->prepare("SELECT id_transaccion, fecha, status, total FROM compra WHERE id_cliente= ? ORDER BY DATE(fecha) DESC ");
$sql->execute([$idCliente])




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
    <link rel="stylesheet" href="./responsive_css/compra.css">

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


    <!--LOGIN-->

    <main class="comprasContainer">
        <div class=" container" style="width: 90vw;">
            <h4>My Shopping</h4>
            <hr>

            <!--Utilizando Boostram creamos unas cards con boton que le den una vista previ al usuario de cuales han sido sus compras, usando la consulta de arriba, le ingresamos a estas cartas cada una de los datos de la compra-->


            <?php while ($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>

                <div class="card mb-4 border-primary">
                    <div class="card-header">
                        <?php echo  $row['fecha']; ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Folio: <?php echo $row['id_transaccion']; ?></h5>
                        <p class="card-text">Total: <?php echo $row['total']; ?> </p>
                        <a href="compra_detalle_english.php?orden=<?php echo $row['id_transaccion']; ?>&token=<?php echo $token; ?>" class="btn btn-primary">View Buy</a>
                    </div>
                </div>
            <?php } ?>
        </div>

    </main>







    <!--Inicio footer-->


    <hr>
    <!-- <footer>

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
    </footer> -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>