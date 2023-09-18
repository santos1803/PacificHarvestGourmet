<?php

//Configuracion de la pagina para que pueda solicitar una nueva clave

require './php/config.php';
require './php/dtbbase.php';
require './clases/clienteFunciones.php';

$db = new Database();
$con = $db->conectar();

$exito = [];
$errors = [];

//validaciones para que de forma correcta llene los datos solicitados y aqui tambien se define el mensaje que le llegara al usuario para recuperar su correo y el link donde sera redirigido

if (!empty($_POST)) {
    $email = trim($_POST["email"]);


    if (esNulo([$email])) {
        $errors[] = "Debe llenar todos los campos";
    }

    if (!esEmail($email)) {
        $errors[] = "La direccion de correo no es valida";
    }

    if (count($errors) == 0) {
        if (emailExiste($email, $con)) {
            $sql = $con->prepare("SELECT usuarios.id, clientes.nombres FROM usuarios
            INNER JOIN clientes ON usuarios.id_cliente=clientes.id
            WHERE clientes.email LIKE ? LIMIT 1");
            $sql->execute([$email]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $user_id = $row['id'];
            $nombres = $row['nombres'];


            $token = solicitaPassword($user_id, $con);

            if ($token !== null) {
                require './clases/mailer.php';
                $mailer = new Mailer();
                $url = SITE_URL . '/reset_password.php?id=' . $user_id . '&token=' . $token;
                $asunto = "Recuperar Clave - Geomar";
                $cuerpo = "Estimado $nombres: <br> Si haz solicitado el cambio de tu clave, da click en el siguiente enlace <a href='$url'>Cambiar clave</a>";
                $cuerpo .= "<br> Si no hiciste esta solicitud, ignora este correo";


                if ($mailer->enviarEmail($email, $asunto, $cuerpo)) {
                    $exito[] = "Hemos enviado el correo para recuperar su clave a la siguiente direccion: " . $email;
                    // echo "<p><b>Correo Enviado</b></p>";
                    // echo "<p>Hemos enviado el correo de recuperacion a este correo electronico $email para restablecer la clave</p>";
                    // exit; 
                }
            }
        } else {
            $errors[] = "No existe una cuenta asociada a esta direccion de correo";
        }
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
    <title>Pacific Harvest Gourmet</title>
    <link rel="stylesheet" href="./css/recuperacion_de_cuenta.css">

</head>

<body>
    <!--Cabecera de la pagina-->

    <!--FIN Cabecera de la pagina-->


    <!--Contenedor vacio para espacio entre el header y banner principal-->

    <div id="vacio">

    </div>
    <!--FIN Contenedor vacio para espacio entre el header y banner principal-->





    <!--inicio banner principal-->

    <div class="containerMariscos">
      
      </div>

    <!--final banner principal-->


    <!--Formulario para la recuperacion de contraseña-->

    <section class=" form-login form-login--c m-auto pt-4 login_form">
        <div class="container">
            <h3>Contraseña perdida</h3>
            <p>¿Perdiste tu contraseña? Por favor, introduce tu nombre de usuario o correo electrónico. Recibirás un enlace para crear una contraseña nueva por correo electrónico.</p>
            <?php mostrarMensajes($errors); ?>
            <?php mostrarExito($exito); ?>
            <form class="row g-3" action="recupera.php" method="post" autocomplete="off">
                <div class="col-md-6">
                    <label for="email"><span class="text-danger">*</span> Correo electronico</label>
                    <input type="email" name="email" id="email" class="form-control" requireda>
                </div>

                <div class="col-12">
                    <button type="submit" id="colorboton" class="btn btn-primary">Restablecer Contraseña</button>
                </div>
            </form>

            <div class="password_lost">
                <span>¿No tienes cuenta? <a href="registro.php">Registrate</a></span>
            </div>

        </div>

    </section>







    <!--Inicio footer-->


    <hr>
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