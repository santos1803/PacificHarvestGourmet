<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./responsive_css/nav.css">
    <link rel="stylesheet" href="./scss/style.scss">
    <title>Pacific Harvest Gourmet</title>
    <link rel="website icon" type="svg" href="./recursos/SVGLogo.svg">


</head>

<body>

    <!--Inicio de nav-->

    <!--=============== HEADER ===============-->
    <header class="header">
         <nav class="nav container">
            <div class="nav__data">
               <a href="#" class="nav__logo">
                  <i class="ri-planet-line"></i> Company
               </a>
               
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line nav__burger"></i>
                  <i class="ri-close-line nav__close"></i>
               </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li><a href="#" class="nav__link">Home</a></li>

                  <li><a href="#" class="nav__link">Company</a></li>

                  <!--=============== DROPDOWN 1 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Analytics <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-pie-chart-line"></i> Overview
                           </a>                          
                        </li>

                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-arrow-up-down-line"></i> Transactions
                           </a>
                        </li>

                        <!--=============== DROPDOWN SUBMENU ===============-->
                        <li class="dropdown__subitem">
                           <div class="dropdown__link">
                              <i class="ri-bar-chart-line"></i> Reports <i class="ri-add-line dropdown__add"></i>
                           </div>

                           <ul class="dropdown__submenu">
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-file-list-line"></i> Documents
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-cash-line"></i> Payments
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-refund-2-line"></i> Refunds
                                 </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  
                  <li><a href="#" class="nav__link">Products</a></li>

                  <!--=============== DROPDOWN 2 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Users <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-user-line"></i> Profiles
                           </a>                          
                        </li>

                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-lock-line"></i> Accounts
                           </a>
                        </li>

                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-message-3-line"></i> Messages
                           </a>
                        </li>
                     </ul>
                  </li>

                  <li><a href="#" class="nav__link">Contact</a></li>
               </ul>
            </div>
         </nav>
      </header>





    <!-- final nav -->

    
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
    <script src="./js/main.js"></script>
</body>

</html>