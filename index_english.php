<?php

//Configuracion para mostrar en la pagina solo los productos de la base de datos de la tabla producto cuyo valor de su fila activo sea igual a uno, sin importar la categoria

require './php/config.php';
require './php/dtbbase.php';
$db = new Database();
$con = $db->conectar();







?>

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


    <!-- 
    final nav 
-->

    
    <!-- <div class="vacio">

    </div> -->
    <main class="containerPrincipal">
        <article class="txt">
            <h1>One click</h1>
            <p>Discover the taste of the canned ocean, with authentic culinary treasures from Colombia and Chile. Immerse yourself in a world of canned marine flavors, carefully selected to offer you the freshness and quality you deserve.</p>
            <button class="botonPagina">View More</button>
        </article>
    </main>
    <div class="containerSecundario">
        <section class="flotante">
            <article class="flotanteTxt">
                <h1>5</h1>
                <p>years</p>
                <p>of experience</p>
            </article>
            <span class="separador"></span>
            <article class="flotanteTxt">
                <h1>1</h1>
                <p>places </p>
                <p>in sales</p>
            </article>
            <span class="separador"></span>
            <article class="flotanteTxt">
                <h1>+1</h1>
                <p>million people</p>
                <p>reached</p>
            </article>
            <span class="separador"></span>
            <article class="flotanteTxt">
                <h1>200</h1>
                <p>products</p>
                <p>available</p>
            </article>
        </section>

    </div>
    <div class="containerTres">
        <article>
            <h2>Popular Categories</h2>
        </article>
        <section class="cardCategoria">
            <article class="cardProducto">
                <a href="./mariscos_english.php"><img src="./recursos/principal.jpg" alt="">
                <h5>Seafood</h5></a>
                

            </article>
            <article class="cardProducto">
                <a href="./alimentos_english.php"><img src="./recursos/principal1.jpg" alt="">
                <h5>Food</h5></a>
                

            </article>
            <article class="cardProducto">
                <a href="./regalos_english.php"><a href="">  <img src="./recursos/principal2.jpg" alt="">
                <h5>Gifts</h5></a></a>
                
              

            </article>
            <article class="cardProducto">
                <a href="./dulces_english">  <img src="./recursos/principal3.jpg" alt="">
                <h5>Candys</h5></a>
              

            </article>

        </section>
    </div>

    <div class="containerCuatro">
        <article class="articleImg">
            <img src="./recursos/pexels-photo-8389882.jpeg" alt="">
        </article>
        <section class="textoExclusivo">
            <article class="articleTitulo">
                <h2>We are synonymous with exclusivity.</h2>
            </article>
            <article class="articleParrafo">
                <p>The brand has earned an outstanding reputation for its commitment to sustainability and responsible fishing. Pacific Harvest works closely with local fishermen and uses selective fishing methods.</p>
            </article>
            <section class="listText">
                <article class="containerSvg">
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                    </svg>
                </article>
                <article class="containerParrafos">
                    <h4>Value Service</h4>
                    <p>Pacific Harvest's product range is wide and varied. They offer a selection of fresh seafood, such as shrimp, prawns, crabs, mussels and oysters.</p>
                </article>

            </section>
            <section class="listText">
                <article class="containerSvg">
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                    </svg>
                </article>
                <article class="containerParrafos">
                    <h4>High Gamma Products</h4>
                    <p>Pacific Harvest's product range is wide and varied. They offer a selection of fresh seafood, such as shrimp, prawns, crabs, mussels and oysters. </p>
                </article>

            </section>

            <section class="listText">
                <article class="containerSvg">
                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                    </svg>
                </article>
                <article class="containerParrafos">
                    <h4>For you only the best</h4>
                    <p>Pacific Harvest's product range is wide and varied. They offer a selection of fresh seafood, such as shrimp, prawns, crabs, mussels and oysters.</p>
                </article>

            </section>

        </section>

    </div>
    <div class="containerPrincipal containerCinco">
        <article class="txt txt2">
            <h1>We come to you</h1>
            <p>Shipping can be carried out by different means of transport, such as ships, planes, trucks or trains, depending on the distance and urgency of the shipment.</p>
            <button class="botonPagina">View More</button>
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