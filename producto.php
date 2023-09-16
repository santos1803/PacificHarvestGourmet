<?php

//Configuracion para mostrar en la pagina solo los productos de la base de datos de la tabla producto cuyo valor de su fila activo sea igual a uno, sin importar la categoria

require './php/config.php';
require './php/dtbbase.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio, descuento FROM productos WHERE activo=1 ");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);




// session_destroy();
// print_r($_SESSION);
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
    <link rel="stylesheet" href="../css/productos.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../medias_css/productos.css">
    <link rel="stylesheet" href="../medias_css/registro.css">
    <link rel="stylesheet" href="../medias_css/navmedia.css">
    <link rel="stylesheet" href="../medias_css/tarjetasbuttom.css">
    <link rel="stylesheet" href="../medias_css/index.css">

</head>

<body>
    <!--Cabecera de la pagina-->

    <header>
        <nav id="nave">


            <!-- menu responsivo -->
            <header class="hero">

                <nav class="nav containerr" id="nav">

                    <!-- logo responsivo -->
                    <a href="../index.php" id="imagen__link"><img src="../recursos/SVGLogo.svg" class="nav__logo" id="logo"></a>
                    <!-- fin logo responsivo -->

                    <!-- Opciones del menú responsivo -->
                    <ul class="nav__links">

                        <!-- Productos menú responsivo -->
                        <div class="primary-navigation3">

                            <ul>
                                <li class="nav__item"><a href="../productos/producto.php" style="display: inline-block;">Productos</a>
                                    <!-- <ul class="dropdown4"> -->

                                    <!---Links comoentados a la espera de aprobacion de la pagina-->

                                    <!-- <li class="nav__link"><a href="../productos/mariscos.php">Mariscos</a></li> -->
                                    <!--  <li class="nav__link"><a href="../productos/pescados.php">Pescados</a></li> -->
                                    <!-- <li class="nav__link"><a href="../productos/congelado.php">Congelados</a></li>
                                        <li class="nav__link"><a href="../productos/exportacion.php"> Seleccion de
                                                Exportacion</a></li>
                                        <li class="nav__link"><a href="../productos/sopa.php">Sopas</a></li>
                                        <li class="nav__link"><a href="../productos/saludable.php">Lo mas Saludable</a>
                                        </li> -->
                                    <!-- <li class="nav__link"><a href="../productos/pack.php">Pack</a></li> -->
                                    <!-- <li class="nav__link"><a href="../productos/regalo.php">Regalos</a></li> -->
                                    <!-- <li class="nav__link"><a href="../php/productoautomotive.php">Para
                                                Mayoristas</a></li>
                                        <li class="nav__link"><a href="../productos/paracompartir.php">Para
                                                Compartir</a></li> -->



                                    <!-- </ul> -->

                                </li>

                            </ul>

                        </div>
                        <!-- Final Productos menú responsivo -->

                        <!-- Somos Geomar menú responsivo -->
                        <div class="primary-navigation3">

                            <ul>
                                <li class="nav__item"><a href="../html/beneficios_enlatados.php">Benefecios de los enlatados </a>
                                    <!-- <ul class="dropdown">

                                        <li class="nav__link"><a href="../html/nuestra_historia.php">Nosotros</a></li>
                                        <li class="nav__link"><a href="../html/faqs.php">Faqs</a></li>
                                        <li class="nav__link"><a href="../html/beneficios_enlatados.php">Beneficios de
                                                los enlatados</a></li>


                                    </ul> -->

                                </li>


                            </ul>

                        </div>
                        <!-- Final Somos Geomar menú responsivo -->

                        <!-- Sustentabilidad menú responsivo -->
                        <div class="soloRes">

                            <ul>
                                <li class="nav__item" id="item"><a href="../html/sustentabilidad.php">Sustentabilidad</a>
                                    <ul class="dropdown2">

                                        <li class="nav__link"><a href="../html/nuestra_historia.php">Nosotros</a></li>

                                    </ul>

                                </li>


                            </ul>


                        </div>
                        <!-- Final Sustentabilidad menú responsivo -->

                        <!-- Recetas menú responsivo -->
                        <div class="soloRes">

                            <ul>
                                <li class="nav__item"><a href="../html/recetas.php">Recetas</a>
                                    <ul class="dropdown2">

                                        <li class="nav__link"><a href="../html/nuestra_historia.php">Nosotros</a></li>



                                    </ul>

                                </li>


                            </ul>


                        </div>
                        <!-- Final Recetas menú responsivo -->

                        <!-- Miembros exclusivos menú responsivo -->
                        <!-- <div class="primary-navigation3">
                            <ul>
                                <li class="nav__item">Miembros Exclusivos &dtrif;
                                    <ul class="dropdown" id="exclusivo">

                                        <li class="nav__link"><a href="../html/miembros_exclusivos.php">Revisa los
                                                precios de suscripcion</a></li>




                                    </ul>

                                </li>


                            </ul>
                        </div> -->
                        <!--  Final Miembros exclusivos menú responsivo -->

                        <!-- Contacto menú responsivo -->
                        <div class="soloRes">

                            <ul>
                                <li class="nav__item" id="item"><a href="../html/contact.php">Contacto</a>
                                    <ul class="dropdown2">

                                        <li class="nav__link"><a href="">Nosotros</a></li>



                                    </ul>

                                </li>


                            </ul>


                        </div>
                        <!-- Final Contacto menú responsivo -->

                         <!-- Fletes menú responsivo -->

                        <div class="soloRes">

                            <ul>
                                <li class="nav__item" id="item"><a href="../html/fletes.php">Fletes</a>
                                    <ul class="dropdown2">

                                        <li class="nav__link"><a href="../html/nuestra_historia.php">Nosotros</a></li>

                                    </ul>

                                </li>


                            </ul>


                        </div>
                        <!-- Final Fletes menú responsivo -->

                        <!-- Log in menú responsivo -->
                        <div class="soloRes">

                            <ul>
                                <?php if (isset($_SESSION['user_id'])) { ?>

                                    <div class="dropdown mb-1">
                                        <button class="btn btn-ligth btn-sm dropdown-toggle" type="button" id="btn_session" data-bs-toggle="dropdown" aria-expanded="false">

                                            <h6>
                                                <?php echo $_SESSION['user_name']; ?>
                                            </h6>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="btn_session">
                                            <li><a class="dropdown-item" href="../productos/compras.php">Mis compras</a>
                                            </li>
                                            <li><a class="dropdown-item" href="../productos/logout.php">Cerrar sesion</a>
                                            </li>
                                        </ul>
                                    </div>

                                <?php } else { ?>
                                    <li class="nav__item" id="item" style="height: 71px;"> <a href="../productos/login.php" class="btn mt-3">Login</a> </li>
                                <?php } ?>



                            </ul>




                        </div>
                        <!-- Final Log in menú responsivo -->

                        <!-- Lenguaje menú responsivo -->

                        <div class="primary-navigation3">

                            <ul>
                                <li class="nav__item">Lenguaje &dtrif;
                                    <ul class="dropdown" id="len__link">

                                        <li class="nav__link"><a href="../productos/producto.php">Español</a></li>
                                        <li class="nav__link"><a href="../productos/products_english.php">Ingles</a></li>



                                    </ul>

                                </li>


                            </ul>

                        </div>
                        <!-- Final Lenguaje menú responsivo -->

                    </ul>
                    <!-- Final Opciones del menú responsivo -->

                    <!-- Icono de hamburguesa menú responsivo -->

                    <a href="#nav" class="nav__hamburguer">

                        <img src="../recursos/burger_menu.png" style="width: 30px; height: 30px;" class="nav__icon">

                    </a>

                    <a href="#" class="nav__close">

                        <img src="../recursos/letterx_83737.png" style="width: 30px; height: 30px;" class="nav__icon">

                    </a>
                    <!-- Final Icono de hamburguesa menú responsivo -->



                </nav>




            </header>
            <!-- final menu responsivo -->

            <!-- Inicio menu desktop -->
            <!-- logo -->
            <div class="logo">

                <a href="../index.php"><img src="../recursos/SVGLogo.svg" alt=""></a>

            </div>

            <!-- Final logo -->

            <!-- barra de busqueda -->
            <div class="busqueda">
                <!-- <section class="search">
                    <input type="text" class="search__input" placeholder="Buscar">
                    <button class="search__button">
                        <svg class="search__icon" aria-hidden="true" viewBox="0 0 24 24">
                            <g>
                                <path
                                    d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                </path>
                            </g>
                        </svg>
                    </button>
                </section> -->

            </div>

            <!-- Final barra de busqueda -->

            <!-- Seccion de log in, lenguaje y carrito -->
            <div class="navi">

                <!-- log in -->
                <section class="" id="iniciarSesion">
                    <?php if (isset($_SESSION['user_id'])) { ?>

                        <div class="dropdown mb-1">
                            <button class="btn btn-ligth btn-sm dropdown-toggle" type="button" id="btn_session" data-bs-toggle="dropdown" aria-expanded="false">

                                <?php echo $_SESSION['user_name']; ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btn_session">
                                <li><a class="dropdown-item" href="../productos/compras.php">Mis compras</a></li>
                                <li><a class="dropdown-item" href="../productos/logout.php">Cerrar sesion</a></li>
                            </ul>
                        </div>

                    <?php } else { ?>
                        <a href="../productos/login.php" class="btn ms-2" style="margin: 0 15px 5px 0"><img src="../recursos/icons8-account-64.png" alt="" width="35px"></a>
                    <?php } ?>

                </section>
                <!-- Final log in -->

                <!-- Lenguaje -->

                <nav role="navigation" class="primary-navigation" id="leng">
                    <ul>

                        <li id="menul"><a href="#" style="margin-top: 8xp;">Lenguaje &dtrif;</a>
                            <ul class="dropdown">
                                <li><a href="../productos/producto.php">Español</a></li>
                                <li><a href="../productos/products_english.php">English</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- Final Lenguaje -->


                <!-- Carrito -->
                <section id="carrito">


                    <a href="../productos/agregarcarrito.php" id="log2"><img src="https://img.icons8.com/ios/50/000000/shopping-bag--v1.png" alt="shopping-bag--v1" /></a>
                    <?php if ($num_cart > 0) { ?>
                        <span id="num_cart" class="badge bg-secondary carritosss">
                            <?php echo $num_cart; ?>
                        </span>
                    <?php } else { ?>
                        <span id="num_cart" class="badge bg-secondary carritosss"></span>
                    <?php } ?>
                </section>
                <!-- Final Carrito -->


            </div>
            <!-- Final Seccion de log in, lenguaje y carrito -->

        </nav>

        <!-- navegador links desktop -->

        <div class="navegador">

            <section class="contenedorNavegador">
                <!-- Productos -->

                <div class="primary-navigation3">
                    <ul>

                        <!---Links comoentados a la espera de aprobacion de la pagina-->

                        <li id="menulen2"><a href="../productos/producto.php" id="a">Productos</a>
                            <!-- <ul class="dropdown"> -->
                            <!-- <li>
                                    <a href="../productos/mariscos.php">
                                        Mariscos
                                    </a>
                                </li> -->
                            <!-- <li>
                                    <a href="../productos/pescados.php">
                                        Pescados
                                    </a>
                                </li> -->
                            <!-- <li>
                                    <a href="../productos/congelado.php">
                                        Congelados
                                    </a>
                                </li>
                                <li>
                                    <a href="../productos/exportacion.php">
                                        Seleccion de Exportacion
                                    </a>
                                </li>
                                <li>
                                    <a href="../productos/sopa.php">
                                        Sopas
                                    </a>
                                </li>
                                <li>
                                    <a href="../productos/saludable.php">
                                        Lo mas Saludable
                                    </a>
                                </li> -->
                            <!-- <li>
                                    <a href="../productos/pack.php">
                                        Pack
                                    </a>
                                </li> -->
                            <!-- <li>
                                    <a href="../productos/regalo.php">
                                        Regalos
                                    </a>
                                </li> -->
                            <!-- <li>
                                    <a href="../php/productoautomotive.php">
                                        Para Mayoristas
                                    </a>
                                </li>
                                <li>
                                    <a href="../productos/paracompartir.php">
                                        Para Compartir
                                    </a>
                                </li> -->
                            <!-- </ul> -->
                        </li>

                    </ul>
                </div>
                <!-- Final Productos -->

                <!-- Somos geomar -->
                <div class="primary-navigation3">
                    <ul>

                        <li id="menulen2"><a href="../html/beneficios_enlatados.php" id="a"> Beneficios de los enlatados</a>
                            <!-- <ul class="dropdown">

                                <li>
                                    <a href="../html/nuestra_historia.php">
                                        Nosotros
                                    </a>
                                </li>
                                <li>
                                    <a href="../html/faqs.php">
                                        Faqs
                                    </a>
                                </li>
                                <li>
                                    <a href="../html/beneficios_enlatados.php">
                                        Beneficios de los enlatados
                                    </a>
                                </li>

                            </ul> -->
                        </li>

                    </ul>
                </div>
                <!-- Final Somos geomar -->

                <!-- Sustentabilidad -->
                <div class="solo">
                    <ul>

                        <li id="menulen2"><a href="../html/sustentabilidad.php" id="a">Sustentabilidad</a>
                            <ul class="dropdown2">

                                <li>
                                    <a href="../html/miembros_exclusivos.php">
                                        Revisa los precios de suscripcion
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>


                </div>
                <!-- Final Sustentabilidad -->

                <!-- Recetas -->
                <div class="solo">

                    <ul>

                        <li id="menulen2"><a href="../html/recetas.php" id="a">Recetas</a>
                            <ul class="dropdown2">

                                <li>
                                    <a href="../html/miembros_exclusivos.php">
                                        Revisa los precios de suscripcion
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>


                </div>
                <!-- Final Recetas -->

                <!-- Miembros Exclusivos -->
                <!-- <div class="primary-navigation3">
                    <ul>

                        <li id="menulen2"><a href="#" id="a">Miembros Exclusivos</a>
                            <ul class="dropdown">

                                <li>
                                    <a href="../html/miembros_exclusivos.php">
                                        Revisa los precios de suscripcion
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </div> -->
                <!--Final Miembros Exclusivos -->

                <!-- Fletes-->
                <div class="solo">

                    <ul>

                        <li id="menulen2"><a href="../html/fletes.php" id="a">Fletes</a>
                            <ul class="dropdown2">

                                <li>
                                    <a href="../html/miembros_exclusivos.php">
                                        Revisa los precios de suscripcion
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>


                </div>
                <!-- Final Fletes-->

                <!-- Contactos -->
                <div class="solo">

                    <ul>

                        <li id="menulen2"><a href="../html/contact.php" id="a">Contactos</a>
                            <ul class="dropdown2">

                                <li>
                                    <a href="../html/miembros_exclusivos.php">
                                        Revisa los precios de suscripcion
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>


                </div>
                <!-- Final Contactos -->


        </div>

        <!-- fin navegador links desktop -->



    </header>
    <!--FIN Cabecera de la pagina-->


    <!--Contenedor vacio para espacio entre el header y banner principal-->

    <div id="vacio">

    </div>
    <!--FIN Contenedor vacio para espacio entre el header y banner principal-->




    <!--BANNER PRINCIPAL PARA LA SECCION DE MARISCOS-->

    <div class="containerMariscos containerMariscos--s">


        <article class="containerMariscos_Txt">
            <h1>LISTO PARA SERVIR</h1>
        </article>
    </div>

    <!--FIN BANNER PRINCIPAL PARA LA SECCION DE MARISCOS-->



    <!--SECCION DE MUESTRA DE PRODUCTOS-->

    <div class="containerProductos">
        <article class="containerProductos_Txt">
            <h2>Productos</h2>
            <p>Se muestran todos los productos</p>
        </article>

        <!-- <article class="containerProductos_Select">
            <select class="containerProductos_Select_input" name="select">
                <option value="value1">Orden predeterminado</option>
                <option value="value2">Ordenar por popularidad</option>
                <option value="value2">Ordenar por las ultimas</option>
                <option value="value3">Ordenar por precio: Menor a Mayor</option>
                <option value="value4">Ordenar por precio: Mayor a Menor</option>
            </select>
            <i></i>
        </article> -->

        <!--Carta del producto que se autocreara desde la base de datos, siempre y cuando cumpla con los parametros de la consulta-->

        <section class="containerProductos_Cards">
            <?php foreach ($resultado as $row) { ?>

                <section class="trajeta">


                    <section class="containerProductos_Cards_Img containerProductos_Cards_Img--a">

                        <!--Aqui se define la url de la imagen, la imagen que se muestra se muestra por el id, si el id del producto coincide con el numero de la carpeta se mostrara la imagen, tambien tiene que tener nombre de "principal" y estar en formato jpg-->
                        <?php

                        $id = $row["id"];
                        $img = "../images/productos/" . $id . "/principal.jpg";
                        if (!file_exists($img))
                            $img = "../images/no-img.png"
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

                        <!-- <div class="quantity">
                        <input class="minus" type="button" value="-">
                        <input type="number" id="quantity_64db94d8976a0" class="input-text qty text" step="1" min="0" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="Centolla quantity">
                        <input class="plus" type="button" value="+">
                    </div> -->
                        <article class="boton_videos boton_videos--b">
                            <!--El boton de ver mas va a redireccionar a la pagina de detalles de productos, que correspona al id del producto seleccionado-->
                            <button class="hidden-btn hidden-btn--a"><a href="detalleproducto.php?id=<?php echo $row["id"]; ?>&token=<?php echo hash_hmac("sha1", $row["id"], KEY_TOKEN); ?>">Ver
                                    Mas</a></button>
                            <!--El boton de agregar carrito va aagregar y mostrar la cantidad de productos agregados en el carrito del nav y detallara los productos en la subpagina de agregar carito-->
                            <button class="hidden-btn boton_comun--b" onclick="addProducto(<?php echo $row['id']; ?>, '<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>')">Agregar
                                al Carrito</button>


                        </article>
                    </section>

                </section>
            <?php } ?>



        </section>


        <!--FIN Seccion Productos-->

    </div>

    <!--FIN SECCION DE MUESTRA DE PRODUCTOS-->





    <!-- fin del formulario de contacto -->
    <footer>

        <div class="container">

            <!--             <div class="footer">

                <div class="Copyright">
                    <a href="#">Copyright © Geomar.cl 2020</a>

                </div>
                <div class="footer_redes_sociales">
                    <a id="rs_footer" href=""><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg></i></a>
                    <a id="rs_footer" href=""><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512">
                            <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                        </svg></i></a>
                    <a id="rs_footer" href=""><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 576 512">
                            <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
                        </svg></a>
                    <a id="rs_footer" href=""><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
                            <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                        </svg></a>
                </div>
                <div class="terms_conditios">
                    <a href="terminos_condiciones_english.php">Terms and Conditions</a>
                </div>
            </div> -->
            <!--             <div class="footer2">


                <div>
                    <p>Somos Academia / Web Development Department </p>
                </div>

                <div>
                    <p></p>
                </div>

                <div>
                    <p>Address: 1000 S. Ocean Blvd. Suite PH-D, Pompano Beach, Florida 33062</p>
                </div>


            </div> -->
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




    <script src="https://kit.fontawesome.com/60bf69d95c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    <!-- Aqui tenemos el script para que los productos agregados se visualicen en el carrito al momento de dar click en el boton-->

    <script>
        function addProducto(id, token) {

            let url = '../clases/carrito.php'
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