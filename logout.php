<?php

//Esta pagina se configuro para que el usuario sea redirigido aqui cuando cierre la sesion, y una vez aqui sea redirigido al index de la pagina

require './php/config.php';

session_destroy();

// echo "<script>location.href='login.php';</script>";

header("Location: /login.php")

?>