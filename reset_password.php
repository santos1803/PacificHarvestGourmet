<?php
//Configuaracion para que el usuario pueda recuperar la contraseña
require './php/config.php';
require './php/dtbbase.php';
require './clases/clienteFunciones.php';

$user_id = $_GET['id'] ?? $_POST['user_id'] ?? '';
$token = $_GET['token'] ?? $_POST['token'] ?? '';

if ($user_id == ''  || $token == '') {
    header("Location: product.php");
    exit;
}


$db = new Database();
$con = $db->conectar();

$exito = [];
$errors = [];

//Validacion para saber cuando la informacion se verifico en la base de datos de forma correcta

if (!verificaTokenRequest($user_id, $token, $con)) {
    echo "No se puede verificar la informacion";
    exit;
}


//Validacion que define los posibles mensajes que recibira el usuario al momento de llenar los campos 
if (!empty($_POST)) {

    $password = trim($_POST["password"]);
    $repassword = trim($_POST["repassword"]);

    if (esNulo([$user_id, $token, $password, $repassword])) {
        $errors[] = "Debe llenar todos los campos";
    }


    if (!validaPassword($password, $repassword)) {
        $errors[] = "Las contraseñas no coinciden";
    }

    if (count($errors) == 0) {
        $pass_hash = password_hash($password, PASSWORD_DEFAULT);
        if (actualizaPassword($user_id, $pass_hash, $con)) {
            $exito[] = "Su clave ha sido modificada, por favor Inicie Sesion";
            // echo "Contraseña modificada.<br><a href='login.php'>Iniciar sesion</a>'";
            // exit;
        } else {
            $errors[] = "Error al modificar contraseña. Intentalo nuvamente.";
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

    <div class="containerMariscos">
      
      </div>

    <!--final banner principal-->


    <!--Formulario para que el usuario ingrese la nueva contraseña, tambien se usan funciones ya definida antes para que muesten los posibles mensajes al usuario-->

    <section class="form-login form-login--a m-auto pt-4 login_form">
        <div class="container">
            <h3>Cambiar Contraseña</h3>

            <?php mostrarMensajes($errors); ?>
            <?php mostrarExito($exito); ?>
            <form class="row g-3" action="reset_password.php" method="post" autocomplete="off">
                <input type="hidden" name="user_id" id="user_id" value="<?= $user_id; ?>" />
                <input type="hidden" name="token" id="token" value="<?= $token; ?>" />
                <div class="col-md-6">
                    <label for="password"><span class="text-danger">*</span>Nueva Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" requireda>
                </div>
                <div class="col-md-6">
                    <label for="repassword"><span class="text-danger">*</span>Confirmar Contraseña</label>
                    <input type="password" name="repassword" id="repassword" class="form-control" requireda>
                </div>

                <div class="col-12">
                    <button type="submit" id="colorboton" class="btn btn-primary">Confirmar Cambio</button>
                </div>
            </form>

            <div class="password_lost">
                <a href="login.php">Iniciar Sesion</a></span>
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




    <!-- <script src="https://kit.fontawesome.com/60bf69d95c.js" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>




</body>

</html>