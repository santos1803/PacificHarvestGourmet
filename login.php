<?php

//Configuarion para que el usurio pueda loguearse en la pagina

require './php/config.php';
require './php/dtbbase.php';
require './clases/clienteFunciones.php';

$db = new Database();
$con = $db->conectar();

//Variable para que solo usuarios logueados puedan hacer la compra

$proceso = isset($_GET['pago']) ? 'pago' : 'login';

$errors = [];


//Validacion de valores para que el usuario inicie sesion
if (!empty($_POST)) {

    $usuario = trim($_POST["usuario"]);
    $password = trim($_POST["password"]);
    $proceso = $_POST['proceso'] ?? 'login';


    if (esNulo([$usuario, $password])) {
        $errors[] = "Debe llenar todos los campos";
    }

    if (count($errors) == 0) {
        $errors[] = login($usuario, $password, $proceso, $con);
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
    <link rel="stylesheet" href="./css/login.css">
 
    <link rel="stylesheet" href="./responsive_css/login.css">

</head>

<body>
    <!--Cabecera de la pagina-->
    <!-- <header>
        <nav>
            <section id="carrito">


                <a href="agregarcarrito.php" id="log2"><img
                        src="https://img.icons8.com/ios/50/000000/shopping-bag--v1.png" alt="shopping-bag--v1" /></a>
                <?php if ($num_cart > 0) { ?>
                    <span id="num_cart" class="badge bg-secondary carritosss">
                        <?php echo $num_cart; ?>
                    </span>
                <?php } else { ?>
                    <span id="num_cart" class="badge bg-secondary carritosss"></span>
                <?php } ?>
            </section>
            <section class="" id="iniciarSesion">
                    <?php if (isset($_SESSION['user_id'])) { ?>

                        <div class="dropdown mb-1">
                            <button class="btn btn-ligth btn-sm dropdown-toggle" type="button" id="btn_session" data-bs-toggle="dropdown" aria-expanded="false">

                                <?php echo $_SESSION['user_name']; ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btn_session">
                                <li><a class="dropdown-item" href="compras.php">Mis compras</a></li>
                                <li><a class="dropdown-item" href="logout.php">Cerrar sesion</a></li>
                            </ul>
                        </div>

                    <?php } else { ?>
                        <a href="login.php" class="btn ms-2" style="margin: 0 15px 5px 0"><img src="./recursos/icons8-account-64.png" alt="" width="35px"></a>
                    <?php } ?>

                </section>
        </nav>
    </header> -->

    <!--FIN Cabecera de la pagina-->


    <!--Contenedor vacio para espacio entre el header y banner principal-->

    <div id="vacio">

    </div>
    <!--FIN Contenedor vacio para espacio entre el header y banner principal-->





    <!--inicio banner principal-->

    <div class="containerMariscos">
      
    </div>

    <!--final banner principal-->


    <!--LOGIN-->

    <main class="form-login form-login--b  m-auto pt-4 login_form">
        <div class="container">
            <h3>Mi cuenta</h3>
            <!--Llamado de Variable que de ser el caso mostrara mensajes que le digan al usuario que esta cometiendo un error al tratar de ingresar.-->
            <?php mostrarMensajes($errors); ?>
            <form class="row g-3" action="login.php" method="post" autocomplete="off">
                <input type="hidden" name="proceso" value="<?php echo $proceso; ?>">
                <div class="col-md-6">
                    <label for="usuario"><span class="text-danger">*</span> Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" requireda>
                </div>
                <div class="col-md-6">
                    <label for="password"><span class="text-danger">*</span> Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" requireda>
                </div>

                <div class="col-12">
                    <button type="submit" id="colorboton" class="btn btn-primary">Acceder</button>
                </div>
            </form>

            <div class="password_lost">
                <span>¿No tienes cuenta? <a href="registro.php">Registrate</a></span>
                <a href="recupera.php">¿Olvidaste la contraseña?</a>
            </div>


        </div>

    </main>







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





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>