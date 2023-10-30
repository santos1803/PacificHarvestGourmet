<?php

//Esta es la conexion para que el usuario pueda activar su cuenta

require './php/config.php';
require './php/dtbbase.php';
require './clases/clienteFunciones.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';


//Validacion para que si el token y el id estan vacios los redirija a la pagina de productos

if ($id == '' || $token == '') {
    header("Location: producto.php");
    exit;
}

$db = new Database();
$con = $db->conectar();


// echo validaToken($id, $token, $con)



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

</head>

<body>
    <!--Cabecera de la pagina-->

    <!--FIN Cabecera de la pagina-->


    <!--Contenedor vacio para espacio entre el header y banner principal-->

    <div id="vacio">

    </div>
    <!--FIN Contenedor vacio para espacio entre el header y banner principal-->


    <!--Este es el mensaja que el usuario vera dependiendo si su activacion sea exitosa o no-->

    <div class="container">

        <h1><?php

            echo validaToken($id, $token, $con)

            ?></h1>

            <a href="./index.php" style="margin-top: 10px">Volver a la pagina</a>



    </div>
</body>

</html>