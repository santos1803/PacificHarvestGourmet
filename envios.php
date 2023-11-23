<?php

//Configuracion para mostrar en la pagina solo los productos de la base de datos de la tabla producto cuyo valor de su fila activo sea igual a uno, sin importar la categoria

require './php/config.php';
require './php/dtbbase.php';
$db = new Database();
$con = $db->conectar();







?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./scss/style.scss">
    <link rel="stylesheet" href="./css/envios.css">
    <link rel="stylesheet" href="./responsive_css/envios.css">
    <title>Pacific Harvest Gourmet</title>
    <link rel="website icon" type="svg" href="./recursos/SVGLogo.svg">


</head>

<body>

    <!--Inicio de nav-->


    <!--=============== HEADER ===============-->

    <!--=============== logo ===============-->
    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <section class="nav__logo_cart">
                    <a href="./index.php" class="nav__logo">
                        <img src="./recursos/SVGLogo.svg" alt="">
                    </a>

                    <!-- <a href="./agregarcarrito.php" class="carrito ">
                        <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 576 512">
                            <path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32H360V134.1l23-23c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-64 64c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l23 23V32H120.1C111 12.8 91.6 0 69.5 0H24zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z" />
                        </svg>
                        <?php if ($num_cart > 0) { ?>
                            <span id="num_cart" class="badge bg-secondary carritosss">
                                <?php echo $num_cart; ?>
                            </span>
                        <?php } else { ?>
                            <span id="num_cart" class="badge bg-secondary carritosss"></span>
                        <?php } ?>
                    </a> -->

                </section>

                <!--=============== menu hamburguesa ===============-->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
                <!--=============== Carro de compras responsive ===============-->

            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <!-- <li><a href="./index.php" class="nav__link"><svg style="fill: #1c3a6b; margin-right: 7px" xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 576 512">
                                <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                            </svg> Inicio</a></li> -->



                    <!--=============== login ===============-->
                    <li>

                        <?php if (isset($_SESSION['user_id'])) { ?>


                    <li class="dropdown__item">
                        <div class="nav__link">
                            <svg style="fill: #1c3a6b; margin-right: 7px" xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 448 512">
                                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                            <?php echo $_SESSION['user_name']; ?><i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu dropdown_login">
                            <li>
                                 <!-- <a href="./compras.php" class="dropdown__link">
                                    Mis Compras
                                </a>
                            </li>

                            <li>
                                <a href="./logout.php" class="dropdown__link">
                                    Cerrar Sesion
                                </a>
                            </li>


                        </ul>
                    </li>



                <?php } else { ?>
                    <a href="./login.php" class="nav__link"><svg style="fill: #1c3a6b; margin-right: 7px" xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 448 512">
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg>Login</a>
                <?php } ?>
                </li>




                <!--=============== DROPDOWN 1 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link">
                        <svg style="fill: #1c3a6b; margin-right: 7px" xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 512 512">
                            <path d="M64 144a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM64 464a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm48-208a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z" />
                        </svg>Productos <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        <li>
                            <a href="./producto.php" class="dropdown__link">
                                <i class="fa-solid fa-rectangle-list"></i> General
                            </a>
                        </li>

                        <li>
                            <a href="./alimentos.php" class="dropdown__link">
                                <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 512 512">
                                    <path d="M0 192c0-35.3 28.7-64 64-64c.5 0 1.1 0 1.6 0C73 91.5 105.3 64 144 64c15 0 29 4.1 40.9 11.2C198.2 49.6 225.1 32 256 32s57.8 17.6 71.1 43.2C339 68.1 353 64 368 64c38.7 0 71 27.5 78.4 64c.5 0 1.1 0 1.6 0c35.3 0 64 28.7 64 64c0 11.7-3.1 22.6-8.6 32H8.6C3.1 214.6 0 203.7 0 192zm0 91.4C0 268.3 12.3 256 27.4 256H484.6c15.1 0 27.4 12.3 27.4 27.4c0 70.5-44.4 130.7-106.7 154.1L403.5 452c-2 16-15.6 28-31.8 28H140.2c-16.1 0-29.8-12-31.8-28l-1.8-14.4C44.4 414.1 0 353.9 0 283.4z" />
                                </svg> Alimentos
                            </a>
                        </li>

                        <li>
                            <a href="./condimentos.php" class="dropdown__link">
                                <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 320 512">
                                    <path d="M32 32C32 14.3 46.3 0 64 0H256c17.7 0 32 14.3 32 32s-14.3 32-32 32H64C46.3 64 32 49.7 32 32zM0 160c0-35.3 28.7-64 64-64H256c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V160zm96 64c-17.7 0-32 14.3-32 32v96c0 17.7 14.3 32 32 32H224c17.7 0 32-14.3 32-32V256c0-17.7-14.3-32-32-32H96z" />
                                </svg> Condimentos
                            </a>
                        </li>

                        <li>
                            <a href="./snacks.php" class="dropdown__link">
                                <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 512 512">
                                    <path d="M257.5 27.6c-.8-5.4-4.9-9.8-10.3-10.6c-22.1-3.1-44.6 .9-64.4 11.4l-74 39.5C89.1 78.4 73.2 94.9 63.4 115L26.7 190.6c-9.8 20.1-13 42.9-9.1 64.9l14.5 82.8c3.9 22.1 14.6 42.3 30.7 57.9l60.3 58.4c16.1 15.6 36.6 25.6 58.7 28.7l83 11.7c22.1 3.1 44.6-.9 64.4-11.4l74-39.5c19.7-10.5 35.6-27 45.4-47.2l36.7-75.5c9.8-20.1 13-42.9 9.1-64.9c-.9-5.3-5.3-9.3-10.6-10.1c-51.5-8.2-92.8-47.1-104.5-97.4c-1.8-7.6-8-13.4-15.7-14.6c-54.6-8.7-97.7-52-106.2-106.8zM208 144a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM144 336a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm224-64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                </svg>
                                Snacks
                            </a>
                        </li>

                        <li>
                           <!-- <a href="./bebidas.php" class="dropdown__link">
                                <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 320 512">
                                    <path d="M120 0h80c13.3 0 24 10.7 24 24V64H96V24c0-13.3 10.7-24 24-24zM32 151.7c0-15.6 9-29.8 23.2-36.5l24.4-11.4c11-5.1 23-7.8 35.1-7.8h90.6c12.1 0 24.1 2.7 35.1 7.8l24.4 11.4c14.1 6.6 23.2 20.8 23.2 36.5c0 14.4-7.5 27-18.9 34.1c11.5 8.8 18.9 22.6 18.9 38.2c0 16.7-8.5 31.4-21.5 40c12.9 8.6 21.5 23.3 21.5 40s-8.5 31.4-21.5 40c12.9 8.6 21.5 23.3 21.5 40s-8.5 31.4-21.5 40c12.9 8.6 21.5 23.3 21.5 40c0 26.5-21.5 48-48 48H80c-26.5 0-48-21.5-48-48c0-16.7 8.5-31.4 21.5-40C40.5 415.4 32 400.7 32 384s8.5-31.4 21.5-40C40.5 335.4 32 320.7 32 304s8.5-31.4 21.5-40C40.5 255.4 32 240.7 32 224c0-15.6 7.4-29.4 18.9-38.2C39.5 178.7 32 166.1 32 151.7zM96 240c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16s-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zm16 112c-8.8 0-16 7.2-16 16s7.2 16 16 16h96c8.8 0 16-7.2 16-16s-7.2-16-16-16H112z" />
                                </svg>
                                Bebidas
                            </a> -->
                        </li>

                        <li>
                            <a href="./delicias.php" class="dropdown__link">
                                <i class="ri-cake-3-fill"></i> delicias
                            </a>
                        </li>

                        <li>
                            <a href="./mariscos.php" class="dropdown__link">
                                <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 512 512">
                                    <path d="M64 32C28.7 32 0 60.7 0 96s28.7 64 64 64h1c3.7 88.9 77 160 167 160h56V128H264 88.8 64c-17.7 0-32-14.3-32-32s14.3-32 32-32H464c8.8 0 16-7.2 16-16s-7.2-16-16-16H64zM224 456c0 13.3 10.7 24 24 24h72V407.8l-64.1-22.4c-12.5-4.4-26.2 2.2-30.6 14.7s2.2 26.2 14.7 30.6l4.5 1.6C233 433.9 224 443.9 224 456zm128 23.3c36.4-3.3 69.5-17.6 96.1-39.6l-86.5-34.6c-3 1.8-6.2 3.2-9.6 4.3v69.9zM472.6 415c24.6-30.3 39.4-68.9 39.4-111c0-12.3-1.3-24.3-3.7-35.9L382.8 355.1c.8 3.4 1.2 7 1.2 10.6c0 4.6-.7 9-1.9 13.1L472.6 415zM336 128H320V320h18.3c9.9 0 19.1 3.2 26.6 8.5l133.5-92.4C471.8 172.6 409.1 128 336 128zM168 192a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z" />
                                </svg> Mariscos
                            </a>
                        </li>

                        <li>
                            <a href="./accesorios.php" class="dropdown__link">
                                <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 384 512">
                                    <path d="M374.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-320 320c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l320-320zM128 128A64 64 0 1 0 0 128a64 64 0 1 0 128 0zM384 384a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z" />
                                </svg> accesorios
                            </a>
                        </li>




                    </ul>
                </li>

                <li><a href="./envios.php" class="nav__link"><svg style="fill: #1c3a6b; margin-right: 7px" xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 640 512">
                            <path d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z" />
                        </svg>Envios</a></li>

                <!--=============== DROPDOWN 2 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link">
                        <svg style="fill: #1c3a6b; margin-right: 7px" xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 512 512">
                            <path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z" />
                        </svg>Lenguaje <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        <li>
                            <a href="./envios.php" class="dropdown__link">
                                <img class="flag_language" src="./recursos/espana.png" alt=""> Español
                            </a>
                        </li>

                        <li>
                            <a href="./envios_english.php" class="dropdown__link">
                                <img class="flag_language" src="./recursos/estados-unidos.png" alt=""> Ingles
                            </a>
                        </li>


                    </ul>
                </li>

                <li><a href="./contactos.php" class="nav__link"><svg style="fill: #1c3a6b; margin-right: 7px" xmlns="http://www.w3.org/2000/svg" height="1.2em" viewBox="0 0 512 512">
                            <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                        </svg>Contactos</a></li>

                <!--=============== carro de compras desktop ===============-->

                </ul>
            </div>

        </nav>
    </header>


    <!-- final nav -->


    <div class="vacio">

    </div>

    <main class="containerPrincipal containerPrincipal--env">
        <article class="txt txt--env">
            <h1>Tus Envíos Rápidos y Seguros</h1>
            <p>Te garantizamos una experiencia de entrega sin preocupaciones. Nos enorgullece ofrecer un servicio de envío rápido, seguro y confiable. </p>

        </article>

    </main>

    <main class="containerPrincipal containerPrincipal--a containerPrincipal--b">

        <article class="prueba">
            <h1>Tus Envíos Rápidos y Seguros</h1>
            <p>Te garantizamos una experiencia de entrega sin preocupaciones. Nos enorgullece ofrecer un servicio de envío rápido, seguro y confiable.</p>

        </article>
    </main>

    <div class="title">
        <section class="container_envios">
            <article class="title_envios">
                <h1>Envios</h1>
            </article>
            <article class="title_description">
                <h3>NUESTROS SERVICIOS DE ENVÍO:</h3>
                <p>Pacific Harvest Gourmet Products realiza envíos a todo el mundo. Utilizamos DHL International GmbH (DHL), United Parcel Service (UPS) y United States Postal Service (USPS) para entregar nuestros productos. Puedes obtener más información sobre DHL, UPS y USPS visitando sus sitios web en <a href="https://www.dhl.com/us-en/home.html">dhl.com</a> , <a href="https://www.ups.com/us/en/Home.page?loc=en_US">ups.com</a> y <a href="https://www.usps.com/">usps.com</a>.</p>
            </article>
            <article class="title_description">
                <h3>ZONAS DE ENVÍO DE PRODUCTOS DE PACIFIC HARVEST GOURMET:</h3>
                <p>Todos los servicios de entrega que utilizamos tienen zonas designadas para determinar sus tarifas. Pacific Harvest Gourmet Products NO determina el precio del envío. Todas las tarifas de envío se calculan al finalizar la compra utilizando el peso total de tu pedido y el código postal de tu dirección de envío.</p>
                <p>Si bien las zonas y tarifas de envío cambian constantemente, hemos creado la siguiente lista para darte una idea general de las tarifas de envío para un pedido de tamaño promedio (3.3 libras) a través de UPS Ground o USPS Priority Mail.</p>

            </article>
        </section>
    </div>

    <div class="zone__galery">
        <section class="coontainer_galery">
            <article class="galery__items">
                <img src="./recursos/zona_envios3.jpg" alt="" class="galery__img">
                <h2 class="img__title">Zona Tres (Aproximadamente $9.63)</h2>
                <article class="text__hover">

                    <ul>
                        <li>
                            Arkansas
                        </li>

                        <li>
                            Delaware
                        </li>

                        <li>
                            Kentucky
                        </li>

                        <li>
                            Luisiana
                        </li>

                        <li>
                            Maryland
                        </li>

                        <li>
                            Misisipi
                        </li>

                        <li>
                            Carolina del Norte
                        </li>

                        <li>
                            Ohio
                        </li>

                        <li>
                            Pensilvania
                        </li>

                        <li>
                            Tennessee
                        </li>

                        <li>
                            Virginia
                        </li>

                        <li>
                            Washington DC
                        </li>

                        <li>
                            Virginia Occidental
                        </li>

                        <li>
                            Indiana
                        </li>
                    </ul>
                </article>
            </article>
            <article class="galery__items">
                <img src="./recursos/zona_envios1.webp" alt="" class="galery__img">
                <h2 class="img__title">Zona Uno (Aproximadamente $7.86)</h2>
                <article class="text__hover">

                    <ul>
                        <li>
                            Florida
                        </li>


                    </ul>
                </article>
            </article>
            <article class="galery__items">
                <img src="./recursos/zona_envios2.webp" alt="" class="galery__img">
                <h2 class="img__title">Zona Dos (Aproximadamente $8.83)</h2>
                <article class="text__hover">

                    <ul>
                        <li>
                            Alabama
                        </li>

                        <li>
                            Georgia
                        </li>

                        <li>
                            Carolina del Sur
                        </li>
                    </ul>
                </article>
            </article>
            <article class="galery__items">
                <img src="./recursos/zona_envios5.webp" alt="" class="galery__img">
                <h2 class="img__title">Zona Cinco (Aproximadamente $12.40)</h2>
                <article class="text__hover">

                    <ul>
                        <li>
                            Iowa
                        </li>

                        <li>
                            Nebraska
                        </li>

                        <li>
                            Wisconsin
                        </li>
                    </ul>
                </article>
            </article>
            <article class="galery__items">
                <img src="./recursos/zona_envios4.webp" alt="" class="galery__img">
                <h2 class="img__title">Zona Cuatro (Aproximadamente $11.16)</h2>
                <article class="text__hover">

                    <ul>
                        <li>
                            Connecticut
                        </li>

                        <li>
                            Illinois
                        </li>

                        <li>
                            Kansas
                        </li>

                        <li>
                            Maine
                        </li>

                        <li>
                            Massachusetts
                        </li>

                        <li>
                            Míchigan
                        </li>

                        <li>
                            Misuri
                        </li>

                        <li>
                            Nuevo Hampshire
                        </li>

                        <li>
                            Nueva Jersey
                        </li>

                        <li>
                            Nueva York
                        </li>

                        <li>
                            Oklahoma
                        </li>

                        <li>
                            Rhode Island
                        </li>

                        <li>
                            Texas
                        </li>

                        <li>
                            Vermont
                        </li>
                    </ul>
                </article>
            </article>
            <article class="galery__items">
                <img src="./recursos/zona_envios6.webp" alt="" class="galery__img">
                <h2 class="img__title">Zona Seis (Aproximadamente $11.75)</h2>
                <article class="text__hover">

                    <ul>
                        <li>
                            Colorado
                        </li>

                        <li>
                            Minnesota
                        </li>

                        <li>
                            Dakota del Norte
                        </li>

                        <li>
                            Dakota del Sur
                        </li>

                        <li>
                            Wyoming
                        </li>

                        <li>
                            Nuevo México
                        </li>

                    </ul>
                </article>
            </article>
            <article class="galery__items">
                <img src="./recursos/zona_envios7.jpg" alt="" class="galery__img">
                <h2 class="img__title">Zona Siete (Aproximadamente $12.43)</h2>
                <article class="text__hover">

                    <ul>
                        <li>
                            Arizona
                        </li>

                        <li>
                            California
                        </li>

                        <li>
                            Montana
                        </li>

                        <li>
                            Oregón
                        </li>

                        <li>
                            Utah
                        </li>

                        <li>
                            Washington
                        </li>

                        <li>
                            Nevada
                        </li>
                    </ul>
                </article>
            </article>
            <article class="galery__items">
                <img src="./recursos/zona_envios8.jpg" alt="" class="galery__img">
                <h2 class="img__title">Zona Ocho (Aproximadamente $16.65)</h2>
                <article class="text__hover">

                    <ul>
                        <li>
                            Alaska
                        </li>

                        <li>
                            Hawái
                        </li>

                        <li>
                            Idaho
                        </li>
                    </ul>
                </article>
            </article>
        </section>
    </div>

    <div class="zone__options">
        <section class="opciones__envio">
            <article class="options__title">
                <h2>OPCIONES DE ENVÍO</h2>
                <p>Pacific Harvest Gourmet Products ofrece muchas opciones de envío para que tus paquetes lleguen cuando los necesitas. A continuación, te presentamos una lista de todos los servicios de envío que tenemos disponibles.</p>
            </article>
            <section class="grid__company">
                <article class="galery__items">
                    <img src="./recursos/dhl_logo.png" alt="" class="galery__img">
                    <h2 class="img__title">DHL</h2>
                    <article class="text__hover">

                        <ul>
                            <li>
                                DHL Express
                            </li>


                        </ul>
                    </article>
                </article>

                <article class="galery__items">
                    <img src="./recursos/UPS-logo.png" alt="" class="galery__img">
                    <h2 class="img__title">UPS</h2>
                    <article class="text__hover">

                        <ul>
                            <li>
                                UPS Standard
                            </li>

                            <li>
                                UPS Ground
                            </li>

                            <li>
                                UPS 3 Day Select
                            </li>

                            <li>
                                UPS 2nd Day Air
                            </li>

                            <li>
                                UPS Next Day Air

                            </li>


                        </ul>
                    </article>
                </article>

                <article class="galery__items">
                    <img src="./recursos/usps_logo.png" alt="" class="galery__img">
                    <h2 class="img__title">USPS</h2>
                    <article class="text__hover">

                        <ul>
                            <li>
                                Priority Mail
                            </li>

                            <li>
                                Priority Mail Express
                            </li>

                            <li>
                                First Class Package
                            </li>

                            <li>
                                First Class Mail
                            </li>


                        </ul>
                    </article>
                </article>




            </section>
            <article class="galery__items cuadro__x">
                <p>*No todos los servicios están disponibles en cada pedido.</p>

            </article>
        </section>


    </div>

    <div class="zone__time">
        <section class="time__shipping">
            <article class="options__title">
                <h2>TIEMPOS DE ENVÍO</h2>
                <p>Los tiempos de envío se calculan una vez que un pedido se marca como "cumplido", no cuando se realiza un pedido. En Pacific Harvest Gourmet Products, hacemos todo lo posible para cumplir con los pedidos el mismo día en que se realizan; sin embargo, no podemos garantizar el cumplimiento el mismo día. Los tiempos de envío están sujetos a cambios, especialmente durante las temporadas ocupadas.</p>
            </article>
        </section>

    </div>

    <div class="zone__time">
        <section class="time__shipping">
            <article class="options__title">
                <h2>CONTÁCTANOS</h2>
                <p>Si tienes alguna pregunta sobre nuestra política de envío, puedes contactarnos por correo electrónico a <a href="mailto:gnavarro@pacificharvestgourmet.com">gnavarro@pacificharvestgourmet.com</a></p>
            </article>
        </section>

    </div>

    
    <footer class="footer">
        <hr class="hrFooter">
        <img src="./recursos/SVGLogo.svg" alt="">


    </footer>



    <script src="./js/main.js"></script>
    <script src="https://kit.fontawesome.com/5d15e4e334.js" crossorigin="anonymous"></script>
</body>

</html>