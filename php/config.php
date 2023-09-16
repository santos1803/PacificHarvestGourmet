<?php

//Aqui se definen ciertas variables para ser usado posteriormente en el resto del proyecto


//ClIENT_ID toma el parametro del token de paypal
    define("CLIENT_ID", "Ajdsdjfsjdnjsdnsjdnjs");

    
// //ClIENT_ID toma el parametro del token de paypal
// define("CLIENT_ID", "Acmruvy51w90R7yfdzmn3j2oZSYIpFpzKztFOU0twdW6XWPBXFpcWv3459JxB0IYGG2MnyPkQyY38USf");

//CURRENCY define el tipo de moneda que va a usar paypal
    define("CURRENCY", "USD");

//KEY_TOKEN es un token cifrado que se usa para agregar seguridad a las consultas de la base de datos
    define("KEY_TOKEN", "APR-rap.1234");

//MONEDA se usa para agregar el simbolo $ a los productos
    define("MONEDA", "$");


// Aqui definimos parametros para enviar email
    define("MAIL_HOST", "smtp-mail.outlook.com");
    define("MAIL_USER", "santosmartinez3@hotmail.com");
    define("MAIL_PASS", "s-a-n-t-o-s");
    define("MAIL_PORT", "587");
    define("SITE_URL", "http://localhost/Proyecto_Somos2");


//Inicio de Sesion
    session_start();


//Esta variable y validacion se usa para activar la cantidad de productos en el carrito
    $num_cart = 0;

    if(isset( $_SESSION['carrito']['productos'])) {
        $num_cart= count( $_SESSION['carrito']['productos']);
    }
?> 