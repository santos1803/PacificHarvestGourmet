<?php
//Configuracion para mostrar en la pagina solo los productos y sus detalles de la base de datos de la tabla producto cuyo valor de su fila activo sea igual a uno y la categoria sea igua a mariscos, tambien se le agrega una capa des seguridad mostrando el pruducto segun su id y token correspondiente, tambien se definen varios foramtos de imagenes para asi poder tener un carrusel dentro de esta pagina
require './php/config.php';
require './php/dtbbase.php';
$db = new Database();
$con = $db->conectar();

$id = isset($_GET["id"]) ? $_GET["id"] : "";
$token = isset($_GET["token"]) ? $_GET["token"] : "";

if ($id == "" || $token == "") {
    echo "Error al procesar la peticion";
    exit;
} else {
    $token_tmp = hash_hmac("sha1", $id, KEY_TOKEN);
    if ($token == $token_tmp) {
        $sql = $con->prepare("SELECT count(id) FROM productos WHERE id=? AND activo=1 AND categoria = 'mariscos'  ");
        $sql->execute([$id]);
        if ($sql->fetchColumn() > 0) {
            $sql = $con->prepare("SELECT nombre, descripcion, precio, descuento, categoria, enlace FROM productos WHERE id=? AND activo=1 AND categoria = 'mariscos'  ");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $nombre = $row["nombre"];
            $descripcion = $row["descripcion"];
            $categoria = $row["categoria"];
            $precio = $row["precio"];
            $descuento = $row["descuento"];
            $enlace = $row["enlace"];
            $precio_decuento = $precio - (($precio * $descuento) / 100);
            $dir_images = './images/productos/' . $id . '/';
            $rutaImg = $dir_images . 'principal.jpg';

            if (!file_exists($rutaImg)) {
                $rutaImg = './images/no-img.png';
            }
            $imagenes = array();
            $dir = dir($dir_images);

            while (($archivo = $dir->read()) != false) {
                if ($archivo != 'principal.jpg' && (strpos($archivo, 'jpg') || strpos($archivo, 'jpge'))) {
                    $imagenes[] = $dir_images . $archivo;
                }
            }
            $dir->close();
        }
    } else {
        echo "Error al procesar la peticion";
        exit;
    }
};


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
    <link rel="stylesheet" href="./css/detallesproductos.css">
    <link rel="stylesheet" href="./responsive_css/detalles.css">
</head>

<body>
    <!--Inicio de Header-->
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




    <!--BANNER PRINCIPAL PARA LA SECCION DE MARISCOS-->

    <div class="containerMariscos ">
      
    </div>

    <!--FIN BANNER PRINCIPAL PARA LA SECCION DE MARISCOS-->



    <!--SECCION DE MUESTRA DE PRODUCTOS-->

    <article class="containeres">
        <!-- Carrusel de imagenes para que muestren diferentes fotos del mismo producto-->
        <section class="row">
            <section class="row_img">
                <div id="carouselImages" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo $rutaImg; ?>" class="d-block ">
                        </div>
                        <?php foreach ($imagenes as $img) { ?>
                            <div class="carousel-item ">


                                <img src="<?php echo $img; ?>" class="d-block ">

                            </div>
                        <?php } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </section>
            <section class="row_txt">
                <!-- En esta seccion mostramos nombre, precio. descuento (si lo tiene) y descripcion-->
                <h1>
                    <?php echo $nombre; ?>
                </h1>

                <?php if ($descuento > 0) { ?>
                    <p class="tachado"><del>
                            <?php echo MONEDA . number_format($precio); ?>
                        </del></p>
                    <h2>
                        <?php echo MONEDA . number_format($precio_decuento); ?>
                        <small class="text-success">
                            <?php echo $descuento; ?>% descuento
                        </small>
                    </h2>

                <?php } else { ?>

                    <h2>
                        <?php echo MONEDA . number_format($precio); ?>
                    </h2>
                <?php } ?>

                <p class="lead">
                    <?php echo $descripcion; ?>
                </p>
                <div class="button-hide oculto2">
                    <!--El boton de agregar carrito va aagregar y mostrar la cantidad de productos agregados en el carrito del nav y detallara los productos en la subpagina de agregar carito-->
                    <button class="hidden-btn hidden-btn--a" onclick="addProducto(<?php echo $id; ?>, '<?php echo $token_tmp; ?>')">Agregar al
                        Carrito</button>
                    <!-- Este boton redirecciona al carrito de compras-->
                    <button class="boton_comun--b"><a href="agregarcarrito.php" id="enlaceBoton">Comprar</a></button>
                </div>
                <div class="stripe_button">
                    <button class="boton_comun--c"> <a href="<?php echo $enlace; ?>">PAGAR CON STRIPE</a></button>


                </div>
                <article class=" categoria">
                    <p>Categoria:</p>
                    <p><a href="./mariscos.php">
                            <?php echo $categoria; ?>
                        </a></p>
                </article>

            </section>
        </section>
    </article>

    <!--FIN SECCION DE MUESTRA DE PRODUCTOS-->





    <!-- fin del formulario de contacto -->
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

    <!--FIN Inicio footer-->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="../JS/scripts.js" type="module"></script>


    <script>
        function addProducto(id, token) {

            let url = './clases/carrito.php'
            let formData = new FormData()
            formData.append('id', id)
            formData.append('token', token)

            fetch(url, {
                    method: 'POST',
                    body: formData,
                    mode: 'cors',
                }).then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        let elemento = document.getElementById("num_cart")
                        elemento.innerHTML = data.numero
                    }
                })
        }
    </script>

</body>

</html>