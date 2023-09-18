<?php

//Configuracion para que los datos del formulario de registro se guarden de manera correcta en la base de datos

require './php/config.php';
require './php/dtbbase.php';
require './clases/clienteFunciones.php';

$db = new Database();
$con = $db->conectar();

$exito = [];
$errors = [];

//Validamos los valores del registro y definimos posibles mensajes de error y exito

if (!empty($_POST)) {
    $nombres = trim($_POST["nombres"]);
    $direccion = trim($_POST["direccion"]);
    $email = trim($_POST["email"]);
    $telefono = trim($_POST["telefono"]);
    $dni = trim($_POST["dni"]);
    $usuario = trim($_POST["usuario"]);
    $password = trim($_POST["password"]);
    $repassword = trim($_POST["repassword"]);

    if (esNulo([$nombres, $direccion, $email, $telefono, $dni, $usuario, $password, $repassword])) {
        $errors[] = "Debe llenar todos los campos";
    }

    if (!esEmail($email)) {
        $errors[] = "La direccion de correo no es valida";
    }

    if (!validaPassword($password, $repassword)) {
        $errors[] = "Las contraseñas no coinciden";
    }

    if (usuarioExiste($usuario, $con)) {
        $errors[] = "El nombre de usuario $usuario ya existe, usa otro nombre de usuario";
    }

    if (emailExiste($email, $con)) {
        $errors[] = "El correo electronico $email ya existe, usa otra direccion de correo";
    }

    //Validacion donde se define el mensaje que recibira por correo el usuario para que active su cuenta
    if (count($errors) == 0) {
        $id = registraCliente([$nombres, $direccion, $email, $telefono, $dni], $con);

        if ($id > 0) {
            require './clases/mailer.php';
            $mailer = new Mailer();
            $token = generarToken();

            $pass_hash = password_hash($password, PASSWORD_DEFAULT);

            $idUsuario = registraUsuario([$usuario, $pass_hash, $token, $id], $con);

            if ($idUsuario > 0) {

                $url = SITE_URL . '/activa_cliente.php?id=' . $idUsuario . '&token=' . $token;
                $asunto = "Activar cuenta - Tienda online";
                $cuerpo = "Estimado $nombres: <br> para continuar con el proceso de registro es indespensable  que de click en el siguiente enlace <a href='$url'>Activar cuenta</a>";

                if ($mailer->enviarEmail($email, $asunto, $cuerpo)) {
                    $exito[] = "Hemos enviado el correo para activar su cuenta a la siguiente direccion: " . $email;
                    // echo "Para terminar el proceso de registro siga las instrucciones que le hemos enviado a la direccion de correo electronico $email";
                    // exit;
                }
            } else {
                $errors[] = "Error al registar usuario";
            }
        } else {
            $errors[] = "Error al registar cliente";
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
    <header>
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
    </header>
 
    <!--FIN Cabecera de la pagina-->


    <!--Contenedor vacio para espacio entre el header y banner principal-->

    <div id="vacio">

    </div>
    <!--FIN Contenedor vacio para espacio entre el header y banner principal-->





    <!--inicio banner principal-->

    <div class="containerMariscos">
      
    </div>

    <!--final banner principal-->


    <!--Formulario de Registro del cliente, cada uno de los praremetros sera guardado en la bade de datos en la tabla de cliente y usuario respectivamente, aqui tambien se hace llamado a unas funciones ya creadas para los posibles mensajes de error o exit, dependiendo del caso-->

    <section class="login_registro">
        <div class="container">
            <h2 style="margin-bottom:70px;">Datos del cliente</h2>
            <?php mostrarMensajes($errors); ?>
            <?php mostrarExito($exito); ?>
            <form id="formulario" class="row g-3" action="registro.php" method="post" autocomplete="off">
                <div class="col-md-6">
                    <label for="nombres"><span class="text-danger">*</span> Nombre completo (Personal, Empresa)</label>
                    <input type="text" name="nombres" id="nombres" class="form-control" requireda>
                </div>
                <div class="col-md-6">
                    <label for="direccion"><span class="text-danger">*</span> Dirección</label>
                    <input type="text" name="direccion" id="direccion" class="form-control" requireda>
                </div>
                <div class="col-md-6">
                    <label for="email"><span class="text-danger">*</span> Correo Electronico</label>
                    <input type="email" name="email" id="email" class="form-control" requireda>
                    <span id="validaEmail" class="text-danger"></span>
                </div>
                <div class="col-md-6">
                    <label for="telefono"><span class="text-danger">*</span> Telefono</label>
                    <input type="tel" name="telefono" id="telefono" class="form-control" requireda>
                </div>
                <div class="col-md-6">
                    <label for="dni"><span class="text-danger">*</span> DNI</label>
                    <input type="text" name="dni" id="dni" class="form-control" requireda>
                </div>

                <div class="col-md-6">
                    <label for="usuario"><span class="text-danger">*</span> Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" requireda>
                    <span id="validaUsuario" class="text-danger"></span>
                </div>
                <div class="col-md-6">
                    <label for="password"><span class="text-danger">*</span> Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" requireda>
                </div>
                <div class="col-md-6">
                    <label for="repassword"><span class="text-danger">*</span>Repetir Contraseña</label>
                    <input type="password" name="repassword" id="repassword" class="form-control" requireda>
                </div>

                <div class="col-12" id="boton_registro">
                    <button type="submit" id="colorboton" class="btn btn-primary">Registrar</button>
                </div>
                <i><b>Nota:</b>Los campos con * son obligatorios</i>
            </form>
            <div class="login_plus">
                <span>¿Ya posees cuenta? <a href="login.php">Accede</a></span>

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


    <!-- En este script usuamos la funcion de consulta ajax ya creada, para poder saber si existe el email o usuario en la base de datos-->
    <script>
        let txtUsuario = document.getElementById('usuario')
        txtUsuario.addEventListener("blur", function() {
            existeUsuario(txtUsuario.value)
        }, false)

        let txtEmail = document.getElementById('email')
        txtEmail.addEventListener("blur", function() {
            existeEmail(txtEmail.value)
        }, false)


        function existeUsuario(usuario) {
            let url = "./clases/clienteAjax.php"
            let formData = new FormData()
            formData.append("action", "existeUsuario")
            formData.append("usuario", usuario)

            fetch(url, {
                    method: 'POST',
                    body: formData
                }).then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        document.getElementById('usuario').value = ''
                        document.getElementById('validaUsuario').innerHTML = 'Usuario no disponible'
                    } else {
                        document.getElementById('validaUsuario').innerHTML = ''
                    }
                })
        }

        function existeEmail(email) {
            let url = "./clases/clienteAjax.php"
            let formData = new FormData()
            formData.append("action", "existeEmail")
            formData.append("email", email)

            fetch(url, {
                    method: 'POST',
                    body: formData
                }).then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        document.getElementById('email').value = ''
                        document.getElementById('validaEmail').innerHTML = 'Email no disponible'
                    } else {
                        document.getElementById('validaEmail').innerHTML = ''
                    }
                })
        }
    </script>


</body>

</html>