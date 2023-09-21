<?php

require './php/config.php';
require './php/dtbbase.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio, descuento FROM productos WHERE activo=1 ");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Pacific Harvest Gourmet</title>
    <link rel="stylesheet" href="./css/contacto.css">
    <link rel="stylesheet" href="./responsive_css/contactos.css">


</head>

<body>
    <!--Cabecera de la pagina-->


    <!--FIN Cabecera de la pagina-->


    <!--Contenedor vacio para espacio entre el header y banner principal-->

    <div id="vacio">

    </div>
    <!--FIN Contenedor vacio para espacio entre el header y banner principal-->
    <!--inicio banner principal-->



    <!--final banner principal-->


    <!-- inicio del formulario de contacto -->
    <section class="textos_Contacto">
        <div class="container">
            <article>
                <h1 class="contenidoTitulo_Contacto">
                    Comunícate con nosotros
                </h1>
                <p class="contenidoParrafo_Contacto">
                    Completa el siguiente formulario y déjanos tus inquietudes, dentro de 24 horas nos comunicaremos contigo.
                </p>

            </article>
        </div>



    </section>

    <div class="contenedorForm">
        <section class="Formulario">

            <p class="correo">PacificHarvestGourmet@gmail.com</p>
            <form class="formulario_Contacto separador">
                <input type="text" name="" id="" placeholder="      Nombre">
                <input type="email" name="" id="" placeholder="     Correo Electrónico">
                <input type="tel" name="" id="" placeholder="   Teléfono">

                <textarea name="" id="" cols="30" rows="10" placeholder="Dejanos tu mensaje"></textarea>
                <button type="submit">Enviar</button>
            </form>


        </section>
    </div>




    <!-- fin del formulario de contacto -->




    <script src="https://kit.fontawesome.com/5d15e4e334.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>