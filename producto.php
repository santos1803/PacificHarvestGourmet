<?php

//Configuracion para mostrar en la pagina solo los productos de la base de datos de la tabla producto cuyo valor de su fila activo sea igual a uno, sin importar la categoria

require './php/config.php';
require './php/dtbbase.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio, descuento FROM productos WHERE activo=1  AND categoria = 'ofertas'  ");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);


$sqls = $con->prepare("SELECT id, nombre, precio, descuento FROM productos WHERE activo=1  AND categoria = 'alimentos'  ");
$sqls->execute();
$resultados = $sqls->fetchAll(PDO::FETCH_ASSOC);

$sqlss = $con->prepare("SELECT id, nombre, precio, descuento FROM productos WHERE activo=1  AND categoria = 'mariscos'  ");
$sqlss->execute();
$resultadoss = $sqlss->fetchAll(PDO::FETCH_ASSOC);

$sqlsss = $con->prepare("SELECT id, nombre, precio, descuento FROM productos WHERE activo=1  AND categoria = 'condimentos'  ");
$sqlsss->execute();
$resultadosss = $sqlsss->fetchAll(PDO::FETCH_ASSOC);

$sqlssss = $con->prepare("SELECT id, nombre, precio, descuento FROM productos WHERE activo=1  AND categoria = 'dulces'  ");
$sqlssss->execute();
$resultadossss = $sqlssss->fetchAll(PDO::FETCH_ASSOC);

$sqlsssss = $con->prepare("SELECT id, nombre, precio, descuento FROM productos WHERE activo=1  AND categoria = 'regalos'  ");
$sqlsssss->execute();
$resultadosssss = $sqlsssss->fetchAll(PDO::FETCH_ASSOC);



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
    <link rel="stylesheet" href="./css/productos.css">
    <link rel="stylesheet" href="./responsive_css/productos.css">


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




    <!--BANNER PRINCIPAL PARA LA SECCION DE MARISCOS-->

    <div class="containerMariscos containerMariscos--s">


        
    </div>

    <!--FIN BANNER PRINCIPAL PARA LA SECCION DE MARISCOS-->



    <!--SECCION DE MUESTRA DE PRODUCTOS-->

    <div class="containerProductos">
        <article class="containerProductos_Txt">
            <h2>Ofertas</h2>
            <p>Se muestran todos los productos</p>
        </article>


        <!--Carta del producto que se autocreara desde la base de datos, siempre y cuando cumpla con los parametros de la consulta-->

        <section class="containerProductos_Cards">
            <?php foreach ($resultado as $row) { ?>

                <section class="trajeta">


                    <section class="containerProductos_Cards_Img containerProductos_Cards_Img--a">

                        <!--Aqui se define la url de la imagen, la imagen que se muestra se muestra por el id, si el id del producto coincide con el numero de la carpeta se mostrara la imagen, tambien tiene que tener nombre de "principal" y estar en formato jpg-->
                        <?php

                        $id = $row["id"];
                        $img = "./images/productos/" . $id . "/principal.jpg";
                        if (!file_exists($img))
                            $img = "./images/no-img.png"
                        ?>
                        <a href=""><img src="<?php echo $img; ?>"></a>
                    </section>
                    <section class="containerProductos_Cards_Txt">
                        <!--Aqui mostramos el nombre y precio del producto que traemos desde la base de dato-->
                        <h2>
                            <?php echo $row["nombre"]; ?>
                        </h2>
                        <article class="seccion_descuento">
                            <p class="pricess">
                                <?php echo number_format($row["precio"]); ?>$
                            </p>
                        </article>

                        <article class="boton_videos boton_videos--b">
                            <!--El boton de ver mas va a redireccionar a la pagina de detalles de productos, que correspona al id del producto seleccionado-->
                            <button class="hidden-btn hidden-btn--a"><a href="detalleofertas.php?id=<?php echo $row["id"]; ?>&token=<?php echo hash_hmac("sha1", $row["id"], KEY_TOKEN); ?>">Ver
                                    Mas</a></button>
                            <!--El boton de agregar carrito va aagregar y mostrar la cantidad de productos agregados en el carrito del nav y detallara los productos en la subpagina de agregar carito-->
                            <button class="hidden-btn boton_comun--b" onclick="addProducto(<?php echo $row['id']; ?>, '<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>')">Agregar
                                al Carrito</button>


                        </article>
                    </section>

                </section>
            <?php } ?>



        </section>
        <button class="botonPagina"><a href="ofertas.php" class="enlaceBoton">VER MAS</a></button>

        <!--FIN Seccion Productos-->

    </div>

    <div class="containerProductos">
        <article class="containerProductos_Txt">
            <h2>Alimentos</h2>
            <p>Se muestran todos los productos</p>
        </article>

    

        <!--Carta del producto que se autocreara desde la base de datos, siempre y cuando cumpla con los parametros de la consulta-->

        <section class="containerProductos_Cards">
            <?php foreach ($resultados as $row) { ?>

                <section class="trajeta">


                    <section class="containerProductos_Cards_Img containerProductos_Cards_Img--a">

                        <!--Aqui se define la url de la imagen, la imagen que se muestra se muestra por el id, si el id del producto coincide con el numero de la carpeta se mostrara la imagen, tambien tiene que tener nombre de "principal" y estar en formato jpg-->
                        <?php

                        $id = $row["id"];
                        $img = "./images/productos/" . $id . "/principal.jpg";
                        if (!file_exists($img))
                            $img = "./images/no-img.png"
                        ?>
                        <a href=""><img src="<?php echo $img; ?>"></a>
                    </section>
                    <section class="containerProductos_Cards_Txt">
                        <!--Aqui mostramos el nombre y precio del producto que traemos desde la base de dato-->
                        <h2>
                            <?php echo $row["nombre"]; ?>
                        </h2>
                        <article class="seccion_descuento">
                            <p class="pricess">
                                <?php echo number_format($row["precio"]); ?>$
                            </p>
                        </article>

                        
                        <article class="boton_videos boton_videos--b">
                            <!--El boton de ver mas va a redireccionar a la pagina de detalles de productos, que correspona al id del producto seleccionado-->
                            <button class="hidden-btn hidden-btn--a"><a href="detallealimentos.php?id=<?php echo $row["id"]; ?>&token=<?php echo hash_hmac("sha1", $row["id"], KEY_TOKEN); ?>">Ver
                                    Mas</a></button>
                            <!--El boton de agregar carrito va aagregar y mostrar la cantidad de productos agregados en el carrito del nav y detallara los productos en la subpagina de agregar carito-->
                            <button class="hidden-btn boton_comun--b" onclick="addProducto(<?php echo $row['id']; ?>, '<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>')">Agregar
                                al Carrito</button>


                        </article>
                    </section>

                </section>
            <?php } ?>



        </section>
        <button class="botonPagina"><a href="alimentos.php" class="enlaceBoton">VER MAS</a></button>


        <!--FIN Seccion Productos-->

    </div>

    <div class="containerProductos">
        <article class="containerProductos_Txt">
            <h2>Mariscos</h2>
            <p>Se muestran todos los productos</p>
        </article>

     

        <!--Carta del producto que se autocreara desde la base de datos, siempre y cuando cumpla con los parametros de la consulta-->

        <section class="containerProductos_Cards">
            <?php foreach ($resultadoss as $row) { ?>

                <section class="trajeta">


                    <section class="containerProductos_Cards_Img containerProductos_Cards_Img--a">

                        <!--Aqui se define la url de la imagen, la imagen que se muestra se muestra por el id, si el id del producto coincide con el numero de la carpeta se mostrara la imagen, tambien tiene que tener nombre de "principal" y estar en formato jpg-->
                        <?php

                        $id = $row["id"];
                        $img = "./images/productos/" . $id . "/principal.jpg";
                        if (!file_exists($img))
                            $img = "./images/no-img.png"
                        ?>
                        <a href=""><img src="<?php echo $img; ?>"></a>
                    </section>
                    <section class="containerProductos_Cards_Txt">
                        <!--Aqui mostramos el nombre y precio del producto que traemos desde la base de dato-->
                        <h2>
                            <?php echo $row["nombre"]; ?>
                        </h2>
                        <article class="seccion_descuento">
                            <p class="pricess">
                                <?php echo number_format($row["precio"]); ?>$
                            </p>
                        </article>

                        
                        <article class="boton_videos boton_videos--b">
                            <!--El boton de ver mas va a redireccionar a la pagina de detalles de productos, que correspona al id del producto seleccionado-->
                            <button class="hidden-btn hidden-btn--a"><a href="detallemariscos.php?id=<?php echo $row["id"]; ?>&token=<?php echo hash_hmac("sha1", $row["id"], KEY_TOKEN); ?>">Ver
                                    Mas</a></button>
                            <!--El boton de agregar carrito va aagregar y mostrar la cantidad de productos agregados en el carrito del nav y detallara los productos en la subpagina de agregar carito-->
                            <button class="hidden-btn boton_comun--b" onclick="addProducto(<?php echo $row['id']; ?>, '<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>')">Agregar
                                al Carrito</button>


                        </article>
                    </section>

                </section>
            <?php } ?>



        </section>
        <button class="botonPagina"><a href="mariscos.php" class="enlaceBoton">VER MAS</a></button>


        <!--FIN Seccion Productos-->

    </div>

    <div class="containerProductos">
        <article class="containerProductos_Txt">
            <h2>Condimentos</h2>
            <p>Se muestran todos los productos</p>
        </article>

        

        <!--Carta del producto que se autocreara desde la base de datos, siempre y cuando cumpla con los parametros de la consulta-->

        <section class="containerProductos_Cards">
            <?php foreach ($resultadosss as $row) { ?>

                <section class="trajeta">


                    <section class="containerProductos_Cards_Img containerProductos_Cards_Img--a">

                        <!--Aqui se define la url de la imagen, la imagen que se muestra se muestra por el id, si el id del producto coincide con el numero de la carpeta se mostrara la imagen, tambien tiene que tener nombre de "principal" y estar en formato jpg-->
                        <?php

                        $id = $row["id"];
                        $img = "./images/productos/" . $id . "/principal.jpg";
                        if (!file_exists($img))
                            $img = "./images/no-img.png"
                        ?>
                        <a href=""><img src="<?php echo $img; ?>"></a>
                    </section>
                    <section class="containerProductos_Cards_Txt">
                        <!--Aqui mostramos el nombre y precio del producto que traemos desde la base de dato-->
                        <h2>
                            <?php echo $row["nombre"]; ?>
                        </h2>
                        <article class="seccion_descuento">
                            <p class="pricess">
                                <?php echo number_format($row["precio"]); ?>$
                            </p>
                        </article>

                     
                        <article class="boton_videos boton_videos--b">
                            <!--El boton de ver mas va a redireccionar a la pagina de detalles de productos, que correspona al id del producto seleccionado-->
                            <button class="hidden-btn hidden-btn--a"><a href="detallecondimentos.php?id=<?php echo $row["id"]; ?>&token=<?php echo hash_hmac("sha1", $row["id"], KEY_TOKEN); ?>">Ver
                                    Mas</a></button>
                            <!--El boton de agregar carrito va aagregar y mostrar la cantidad de productos agregados en el carrito del nav y detallara los productos en la subpagina de agregar carito-->
                            <button class="hidden-btn boton_comun--b" onclick="addProducto(<?php echo $row['id']; ?>, '<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>')">Agregar
                                al Carrito</button>


                        </article>
                    </section>

                </section>
            <?php } ?>



        </section>
        <button class="botonPagina"><a href="condimentos.php" class="enlaceBoton">VER MAS</a></button>


        <!--FIN Seccion Productos-->

    </div>

    <div class="containerProductos">
        <article class="containerProductos_Txt">
            <h2>Dulces</h2>
            <p>Se muestran todos los productos</p>
        </article>

       

        <!--Carta del producto que se autocreara desde la base de datos, siempre y cuando cumpla con los parametros de la consulta-->

        <section class="containerProductos_Cards">
            <?php foreach ($resultadossss as $row) { ?>

                <section class="trajeta">


                    <section class="containerProductos_Cards_Img containerProductos_Cards_Img--a">

                        <!--Aqui se define la url de la imagen, la imagen que se muestra se muestra por el id, si el id del producto coincide con el numero de la carpeta se mostrara la imagen, tambien tiene que tener nombre de "principal" y estar en formato jpg-->
                        <?php

                        $id = $row["id"];
                        $img = "./images/productos/" . $id . "/principal.jpg";
                        if (!file_exists($img))
                            $img = "./images/no-img.png"
                        ?>
                        <a href=""><img src="<?php echo $img; ?>"></a>
                    </section>
                    <section class="containerProductos_Cards_Txt">
                        <!--Aqui mostramos el nombre y precio del producto que traemos desde la base de dato-->
                        <h2>
                            <?php echo $row["nombre"]; ?>
                        </h2>
                        <article class="seccion_descuento">
                            <p class="pricess">
                                <?php echo number_format($row["precio"]); ?>$
                            </p>
                        </article>

                        <article class="boton_videos boton_videos--b">
                            <!--El boton de ver mas va a redireccionar a la pagina de detalles de productos, que correspona al id del producto seleccionado-->
                            <button class="hidden-btn hidden-btn--a"><a href="detalledulces.php?id=<?php echo $row["id"]; ?>&token=<?php echo hash_hmac("sha1", $row["id"], KEY_TOKEN); ?>">Ver
                                    Mas</a></button>
                            <!--El boton de agregar carrito va aagregar y mostrar la cantidad de productos agregados en el carrito del nav y detallara los productos en la subpagina de agregar carito-->
                            <button class="hidden-btn boton_comun--b" onclick="addProducto(<?php echo $row['id']; ?>, '<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>')">Agregar
                                al Carrito</button>


                        </article>
                    </section>

                </section>
            <?php } ?>



        </section>
        <button class="botonPagina"><a href="dulces.php" class="enlaceBoton">VER MAS</a></button>   

        <!--FIN Seccion Productos-->

    </div>

    <div class="containerProductos">
        <article class="containerProductos_Txt">
            <h2>Regalos</h2>
            <p>Se muestran todos los productos</p>
        </article>

        <!--Carta del producto que se autocreara desde la base de datos, siempre y cuando cumpla con los parametros de la consulta-->

        <section class="containerProductos_Cards">
            <?php foreach ($resultadosssss as $row) { ?>

                <section class="trajeta">


                    <section class="containerProductos_Cards_Img containerProductos_Cards_Img--a">

                        <!--Aqui se define la url de la imagen, la imagen que se muestra se muestra por el id, si el id del producto coincide con el numero de la carpeta se mostrara la imagen, tambien tiene que tener nombre de "principal" y estar en formato jpg-->
                        <?php

                        $id = $row["id"];
                        $img = "./images/productos/" . $id . "/principal.jpg";
                        if (!file_exists($img))
                            $img = "./images/no-img.png"
                        ?>
                        <a href=""><img src="<?php echo $img; ?>"></a>
                    </section>
                    <section class="containerProductos_Cards_Txt">
                        <!--Aqui mostramos el nombre y precio del producto que traemos desde la base de dato-->
                        <h2>
                            <?php echo $row["nombre"]; ?>
                        </h2>
                        <article class="seccion_descuento">
                            <p class="pricess">
                                <?php echo number_format($row["precio"]); ?>$
                            </p>
                        </article>

                     
                        <article class="boton_videos boton_videos--b">
                            <!--El boton de ver mas va a redireccionar a la pagina de detalles de productos, que correspona al id del producto seleccionado-->
                            <button class="hidden-btn hidden-btn--a"><a href="detalleregalos.php?id=<?php echo $row["id"]; ?>&token=<?php echo hash_hmac("sha1", $row["id"], KEY_TOKEN); ?>">Ver
                                    Mas</a></button>
                            <!--El boton de agregar carrito va aagregar y mostrar la cantidad de productos agregados en el carrito del nav y detallara los productos en la subpagina de agregar carito-->
                            <button class="hidden-btn boton_comun--b" onclick="addProducto(<?php echo $row['id']; ?>, '<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>')">Agregar
                                al Carrito</button>


                        </article>
                    </section>

                </section>
            <?php } ?>



        </section>
        <button class="botonPagina"><a href="regalos.php" class="enlaceBoton">VER MAS</a></button>  

        <!--FIN Seccion Productos-->

    </div>

    <!--FIN SECCION DE MUESTRA DE PRODUCTOS-->





    <!-- fin del formulario de contacto -->
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


    <!--FIN Inicio footer-->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    <!-- Aqui tenemos el script para que los productos agregados se visualicen en el carrito al momento de dar click en el boton-->

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