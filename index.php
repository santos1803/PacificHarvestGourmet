<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./responsive_css/nav.css">
    <title>Pacific Harvest Gourmet</title>
    <link rel="website icon" type="svg" href="./recursos/SVGLogo.svg">


</head>

<body>

    <!--Inicio de nav-->

    <header>


        <!-- nav responsive -->
        <nav class="nav_responsive">

            <div class="nav__container">

                <!-- imagen de logo  -->

                <a href="./index.php">
                    <img class="nav__title" src="./recursos/SVGLogo.svg" alt="">
                </a>

                <!-- imagen de hamburguesa responsive con cierre  -->
                <a href="#menu" class="nav__menu">

                    <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" height="1.8em" viewBox="0 0 50 50">
                        <path d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 L 0 7.5 z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 L 0 22.5 z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 L 0 37.5 z"></path>
                    </svg>
                </a>

                <a href="#" class="nav__menu nav__menu--second">
                    <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                        <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z" />
                    </svg>
                </a>

                <!-- carrito de compras -->

                <a href="./agregarcarrito.php" class="nav__cart">
                    <svg style="fill: #1c3a6b;"  xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32H360V134.1l23-23c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-64 64c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l23 23V32H120.1C111 12.8 91.6 0 69.5 0H24zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                </a>

                <!-- menu desplegable -->

                <ul class="dropdown" id="menu">

                    <!-- Inicio  -->

                    <li class="dropdown__list">
                        <a href="./index.php" class="dropdown__link">
                            <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 576 512">
                                <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                            </svg>
                            <span class="dropdown__span">Inicio</span>
                        </a>
                    </li>

                    <!-- login  -->

                    <li class="dropdown__list">
                        <a href="./login.php" class="dropdown__link">
                            <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
                                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                            <span class="dropdown__span">Login</span>
                        </a>
                    </li>

                    <!-- Productos  -->

                    <li class="dropdown__list">
                        <a href="#" class="dropdown__link">
                            <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 576 512">
                                <path d="M0 96C0 60.7 28.7 32 64 32H512c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM128 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm32-128a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM128 384a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm96-248c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H448c13.3 0 24-10.7 24-24s-10.7-24-24-24H224z" />
                            </svg>
                            <span class="dropdown__span">Productos</span>
                            <img src="./recursos/down.svg" class="dropdown__arrow">

                            <input type="checkbox" class="dropdown__check">
                        </a>

                        <div class="dropdown__content">

                            <!-- sub-menu desplegable productos-->

                            <ul class="dropdown__sub">

                                <li class="dropdown__li">
                                    <a href="./producto.php" class="dropdown__anchor">General</a>
                                </li>
                                <li class="dropdown__li">
                                    <a href="./alimentos.php" class="dropdown__anchor">Alimentos</a>
                                </li>
                                <li class="dropdown__li">
                                    <a href="./condimentos.php" class="dropdown__anchor">Condimentos</a>
                                </li>
                                <li class="dropdown__li">
                                    <a href="./dulces.php" class="dropdown__anchor">Dulces</a>
                                </li>
                                <li class="dropdown__li">
                                    <a href="./mariscos" class="dropdown__anchor">Mariscos en conserva</a>
                                </li>
                                <li class="dropdown__li">
                                    <a href="./ofertas" class="dropdown__anchor">Ofertas</a>
                                </li>
                                <li class="dropdown__li">
                                    <a href="./regalos" class="dropdown__anchor">Regalos</a>
                                </li>

                            </ul>

                        </div>
                    </li>

                    <!-- envios  -->

                    <li class="dropdown__list">
                        <a href="./envios.php" class="dropdown__link">
                            <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 640 512">
                                <path d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z" />
                            </svg>
                            <span class="dropdown__span">Envios</span>
                        </a>
                    </li>

                    <!-- lenguaje  -->

                    <li class="dropdown__list">
                        <a href="#" class="dropdown__link">
                            <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512">
                                <path d="M352 256c0 22.2-1.2 43.6-3.3 64H163.3c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64H348.7c2.2 20.4 3.3 41.8 3.3 64zm28.8-64H503.9c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64H380.8c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32H376.7c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0H167.7c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0H18.6C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192H131.2c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64H8.1C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6H344.3c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352H135.3zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6H493.4z" />
                            </svg>
                            <span class="dropdown__span">Lenguaje</span>
                            <img src="./recursos/down.svg" class="dropdown__arrow">

                            <input type="checkbox" class="dropdown__check">
                        </a>

                        <div class="dropdown__content">

                            <!--sub-menu lenguaje  -->

                            <ul class="dropdown__sub">

                                <li class="dropdown__li">
                                    <img class="flags" src="./recursos/espana.png" alt="">
                                    <a href="./index.php" class="dropdown__anchor"> Español</a>
                                </li>
                                <li class="dropdown__li">
                                    <img class="flags" src="./recursos/estados-unidos.png" alt="">
                                    <a href="./index_english" class="dropdown__anchor">Ingles</a>
                                </li>


                            </ul>

                        </div>
                    </li>

                    <!-- contactos  -->

                    <li class="dropdown__list">
                        <a href="./contactos.php" class="dropdown__link">
                            <svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512">
                                <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>
                            <span class="dropdown__span">Contacto</span>
                        </a>
                    </li>

                </ul>

            </div>

        </nav>

        <!-- final nav responsive -->

        <!-- inicio nav -->

        <nav class="nav_desktop">
            <div class="nav__container_desktop">
                <section class="logo_index">
                    <a href="./index.php">
                        <img class="nav__title" src="./recursos/SVGLogo.svg" alt="">
                    </a>
                </section>

                <section class="items_nav">
                    <ul class="cont_ul">
                        <a href="./index.php">
                            <li class="menu_nav">Inicio</li>
                        </a>
                        <a href="./login.php">
                            <li class="menu_nav">Login</li>
                        </a>

                        <li class="dropdown_menu" class="menu_nav">Productos
                            <ul class="ul_second">
                                <a href="./producto.php">
                                    <li>General</li>
                                </a>
                                <a href="./alimentos.php">
                                    <li>Alimentos</li>
                                </a>
                                <a href="./condimentos.php">
                                    <li>Condimentos</li>
                                </a>
                                <a href="./dulces.php">
                                    <li>Dulces</li>
                                </a>
                                <a href="./mariscos.php">
                                    <li>Mariscos en conserva</li>
                                </a>
                                <a href="./ofertas.php">
                                    <li>Ofertas</li>
                                </a>
                                <a href="./regalos.php">
                                    <li>Regalos</li>
                                </a>
                            </ul>
                        </li>

                        <a href="./envios.php">
                            <li class="menu_nav">Envios</li>
                        </a>

                        <li class="dropdown_menu dropdown_language" class="menu_nav">Lenguaje
                            <ul class="ul_second ul_second_language">
                                <a href="./index.php">
                                    <li>Español</li>
                                </a>
                                <a href="./index_english.php">
                                    <li>Ingles</li>
                                </a>
                            </ul>
                        </li>

                        <a href="./contactos.php">
                            <li class="menu_nav">Contactos</li>
                        </a>

                        <a href="./agregarcarrito.php">
                            <li class="menu_nav"><svg style="fill: #1c3a6b;" xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32H360V134.1l23-23c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-64 64c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l23 23V32H120.1C111 12.8 91.6 0 69.5 0H24zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg></li>
                        </a>
                    </ul>
                </section>



            </div>

        </nav>

    </header>



    <!-- 
    final nav 
-->

    <!--     <header>
        <nav class="nav">

            <article class="sectionTitle">
                <img src="./recursos/SVGLogo.svg" alt="">
            </article>
            <article class="sectionEnlace">
                <a href="">Productos</a>
                <a href="">Shipping</a>
                <a href="">Contactos</a>
                <a href="">Lenguaje</a>
            </article>
        </nav>
    </header> -->
    <div class="vacio">

    </div>
    <main class="containerPrincipal">
        <article class="txt">
            <h1>Todo un click</h1>
            <p>Descubre el sabor del océano enlatado, con auténticos tesoros culinarios de Colombia y Chile. Sumérgete en un mundo de sabores marinos enlatados, cuidadosamente seleccionados para ofrecerte la frescura y calidad que mereces. </p>
            <button>LEER MAS</button>
        </article>
    </main>
    <div class="containerSecundario">
        <section class="flotante">
            <article class="flotanteTxt">
                <h1>5</h1>
                <p>años</p>
                <p>de experiencia</p>
            </article>
            <span class="separador"></span>
            <article class="flotanteTxt">
                <h1>1</h1>
                <p>lugar </p>
                <p>en ventas</p>
            </article>
            <span class="separador"></span>
            <article class="flotanteTxt">
                <h1>+1</h1>
                <p> millon personas </p>
                <p>alcanzadas</p>
            </article>
            <span class="separador"></span>
            <article class="flotanteTxt">
                <h1>200</h1>
                <p> productos </p>
                <p>disponibles</p>
            </article>
        </section>

    </div>
    <div class="containerTres">
        <article>
            <h2>Categorias Populares</h2>
        </article>
        <section class="cardCategoria">
            <article class="cardProducto">
                <img src="./recursos/principal.jpg" alt="">
                <h5>Mariscos</h5>

            </article>
            <article class="cardProducto">
                <img src="./recursos/principal1.jpg" alt="">
                <h5>Pescados</h5>

            </article>
            <article class="cardProducto">
                <img src="./recursos/principal2.jpg" alt="">
                <h5>Regalos</h5>

            </article>
            <article class="cardProducto">
                <img src="./recursos/principal3.jpg" alt="">
                <h5>Exclusivos</h5>

            </article>

        </section>
    </div>

    <div class="containerCuatro">
        <article class="articleImg">
            <img src="./recursos/pexels-photo-8389882.jpeg" alt="">
        </article>
        <section class="textoExclusivo">
            <article class="articleTitulo">
                <h2>Somos sinonimo de exclusividad.</h2>
            </article>
            <article class="articleParrafo">
                <p>La marca se ha ganado una reputación destacada por su compromiso con la sostenibilidad y la pesca responsable. Pacific Harvest trabaja en estrecha colaboración con pescadores locales y utiliza métodos de pesca selectivos.</p>
            </article>
            <section class="listText">
                <article class="containerSvg">
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                    </svg>
                </article>
                <article class="containerParrafos">
                    <h4>Servicio de Valor</h4>
                    <p>La gama de productos de Pacific Harvest es amplia y variada. Ofrecen una selección de mariscos frescos, como camarones, langostinos, cangrejos, mejillones y ostras. </p>
                </article>

            </section>
            <section class="listText">
                <article class="containerSvg">
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                    </svg>
                </article>
                <article class="containerParrafos">
                    <h4>Productos de Alta Gamma</h4>
                    <p>La gama de productos de Pacific Harvest es amplia y variada. Ofrecen una selección de mariscos frescos, como camarones, langostinos, cangrejos, mejillones y ostras. </p>
                </article>

            </section>

            <section class="listText">
                <article class="containerSvg">
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                    </svg>
                </article>
                <article class="containerParrafos">
                    <h4>Para ti solo lo mejor</h4>
                    <p>La gama de productos de Pacific Harvest es amplia y variada. Ofrecen una selección de mariscos frescos, como camarones, langostinos, cangrejos, mejillones y ostras. </p>
                </article>

            </section>

        </section>

    </div>
    <div class="containerPrincipal containerCinco">
        <article class="txt txt2">
            <h1>Llegamos a ti</h1>
            <p>El shipping puede ser realizado por diferentes medios de transporte, como barcos, aviones, camiones o trenes, dependiendo de la distancia y la urgencia del envío</p>
            <button>LEER MAS</button>
        </article>
    </div>
    <!-- 
    <footer class="footer">
        <img src="./recursos/SVGLogo.svg" alt="">
        <form action="">
            <h1>Contactanos</h1>
        </form>

    </footer> -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>