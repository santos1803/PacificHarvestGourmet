<?php

//En este documento se difinen funciones para usar en todo el proyecto



//Esta funcion se usa para determinar si algun parametro no esta correcto
function esNulo(array $parametros) {
    foreach ($parametros as $parametro) {
        if(strlen(trim($parametro)) < 1) {
            return true; 
        }
    }
    return false;
}

//Esta  funcion se utiliza para determinar si el correo que se esta ingresano es valido
function esEmail($email) {
   if  (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true; 
   }
   return false ;
}


//Esta funcion se usa para validar que las dos contraseñas coincidan
function validaPassword($password, $repassword) {
    if (strcmp($password, $repassword) === 0) {
        return true;
    }
    return false;
}

//Se utiliza esta funcion para generar un token de seguridad para el registro y momento de compra
function generarToken()
{
    return md5(uniqid(mt_rand(), false));
}


//Esta funcion se utiliza para validar de forma correcta todos los campos al momento del registro  e insertarlo en la tabla de clientes
function registraCliente(array $datos, $con)
{
    
    $sql = $con->prepare( "INSERT INTO clientes (nombres, direccion, email, telefono, dni, estatus, fecha_alta) VALUES (?,?,?,?,?,1,now())");
    if ($sql->execute($datos)) {
        return $con->lastInsertId();
    }
    return 0;
}

//Esta funcion se utiliza para validar de forma correcta todos los campos al momento del registro  e insertarlo en la tabla de usuarios
function registraUsuario(array $datos, $con) 
{

    $sql = $con->prepare("INSERT INTO usuarios (usuario, password, token, id_cliente) VALUES (?,?,?,?)");
    if($sql->execute($datos)) {
        return $con->lastInsertId();
    }
    return 0;
    
}

//Funcion para determinar que los nombres de usuarios sean unicos
function usuarioExiste($usuario, $con)
{
    
    $sql = $con->prepare("SELECT id FROM usuarios WHERE usuario LIKE ? LIMIT 1");
    $sql->execute([$usuario]);
    if($sql->fetchColumn()> 0) {
        return true;
    }
    return false;
       
}

//Funcion para determinar que los emails que se registren sean unicos
function emailExiste($email, $con)
{
    
    $sql = $con->prepare("SELECT id FROM clientes WHERE email LIKE ? LIMIT 1");
    $sql->execute([$email]);
    if($sql->fetchColumn()> 0) {
        return true;
    }
    return false;
       
} 

//Funcion que se usa para mostrar mensajes de acciones exitosas

function mostrarExito(array $exito) {
    if (count($exito) > 0) {
        echo '<div class="alert  alert-success alert-dismissible fade show" role="alert"><ul>';
        foreach($exito as $exito) {
            echo '<li>' . $exito . '</li>';
        }

        echo '</ul>';
        echo '  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      

    }
}

//Funcion que se usa para mostrar mensajes de error
function mostrarMensajes(array $errors) {
    if (count($errors) > 0) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><ul>';
        foreach($errors as $error) {
            echo '<li>' . $error . '</li>';
        }

        echo '</ul>';
        echo '  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      

    }
}

//Funcion para validar que un usuario ya activo su cuenta
function validaToken($id, $token, $con)
{
 
    $msg = "";
    $sql = $con->prepare("SELECT id FROM usuarios WHERE id = ? AND token LIKE ? LIMIT 1");
    $sql->execute([$id, $token]);
    if($sql->fetchColumn()> 0) {
       if (activarUsuario($id, $con)) { 
     
        $msg = "Cuenta Activada.";
       } else {
        $msg = "Error al activar cuenta."; 
       }
    } else {

        $msg = "No existe el registro del cliente";
    }
    return $msg;
       
}

function validaToken_english($id, $token, $con)
{
 
    $msg = "";
    $sql = $con->prepare("SELECT id FROM usuarios WHERE id = ? AND token LIKE ? LIMIT 1");
    $sql->execute([$id, $token]);
    if($sql->fetchColumn()> 0) {
       if (activarUsuario($id, $con)) { 
     
        $msg = "Account Activated.";
       } else {
        $msg = "Error activating account."; 
       }
    } else {

        $msg = "Customer registration does not exist";
    }
    return $msg;
       
}
//funcion que se usa para validar que es un usuario el que esta validando su cuenta
function activarUsuario($id, $con) {
    $sql = $con->prepare("UPDATE usuarios SET activacion = 1, token = ''  WHERE id = ? ");
    return $sql->execute([$id]);

}

//Funcion para que el usuario pueda loguearse

function login($usuario, $password, $proceso, $con) {
    $sql = $con->prepare("SELECT id, usuario, password, id_cliente FROM usuarios WHERE usuario LIKE ? LIMIT 1 ");
    $sql->execute([$usuario]);
    if($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        if(esActivo($usuario, $con)) {
           if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['usuario'];
                $_SESSION['user_cliente'] = $row['id_cliente'];
                if($proceso == 'pago') {
                    echo "<script>location.href='agregarcarrito.php';</script>";
                    // header("Location: agregarcarrito.php");
                } else {
                    echo "<script>location.href='producto.php';</script>";
                //   header("Location: producto.php");
                }
                exit;
           }
        } else {
            return 'El usuario no ha sido activado';
        }
    }
    return 'El usuario y/o contraseña son incorrectos';
}

function login_english($usuario, $password, $proceso, $con) {
    $sql = $con->prepare("SELECT id, usuario, password, id_cliente FROM usuarios WHERE usuario LIKE ? LIMIT 1 ");
    $sql->execute([$usuario]);
    if($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        if(esActivo($usuario, $con)) {
           if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['usuario'];
                $_SESSION['user_cliente'] = $row['id_cliente'];
                if($proceso == 'pago') {
                    echo "<script>location.href='agregarcarrito_english.php';</script>";
                    // header("Location: agregarcarrito_english.php");
                } else {
                    echo "<script>location.href='producto_english.php';</script>";
                //   header("Location: producto_english.php");
                }
                exit;
           }
        } else {
            return 'The user has not been activated';
        }
    }
    return 'Username and/or password are incorrect';
}

function esActivo($usuario, $con) {
    $sql = $con->prepare("SELECT activacion FROM usuarios WHERE usuario LIKE ? LIMIT 1 ");
    $sql->execute([$usuario]);
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    if($row['activacion'] == 1) {
        return true;
    }
    return false;
}

//Funcion para determinar que el usuario si esta activo
function solicitaPassword($user_id, $con) {
    $token = generarToken();

    $sql = $con->prepare("UPDATE usuarios SET token_password = ?, password_request = 1 WHERE id = ?");
    if($sql->execute([$token, $user_id])) {
        return $token;
    }
    return null;
}
//Funcion para saber que un usuario solicito cambio de clave
function verificaTokenRequest($user_id, $token, $con) {
    $sql = $con->prepare("SELECT id FROM usuarios WHERE id = ? AND token_password LIKE ? AND password_request=1 LIMIT 1");
    $sql->execute([$user_id, $token]);
    if($sql->fetchColumn() > 0) {
        return true;
    }
    return false;
}


//Funcion para actualizar la clave del usuario
function actualizaPassword($uder_id, $password, $con) {
    $sql = $con->prepare("UPDATE usuarios SET password=?, token_password = '', password_request = 0 WHERE id = ? ");
    if($sql->execute([$password, $uder_id])) {
        return true;
    }
    return false;
}








