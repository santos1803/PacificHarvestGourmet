<?php
//En este documento hacemos consultas ajax para saber en tiempo real si un email y usuario ya existen registrados en la base de datos 


require '../php/dtbbase.php';
require_once 'clienteFunciones.php';

$datos = [];

if(isset($_POST['action'])){
    $action = $_POST['action'];
    $db = new Database();
    $con = $db->conectar(); 

    if($action == 'existeUsuario') {
        
       $datos ['ok'] =  usuarioExiste($_POST['usuario'], $con);
    } else if ($action = 'existeEmail') {
        $datos ['ok'] = emailExiste($_POST['email'], $con);
    }
}

echo json_encode($datos);