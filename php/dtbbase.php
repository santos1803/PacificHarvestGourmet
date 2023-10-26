<?php

//Conexion a la base de datos de Geomar en el localhost

 class Database {
    private $hostname = "localhost";
    // private $database = "geomar";
    private $database = "pacifig2_pacificharvest.session";
    // private $username = "root";
    private $username = "pacifig2_santos";
    // private $password = "";
    private $password = "santos24124706";
    private $charset = "utf8";


    //Funcion para conectar a la base de datos
    function conectar () { 
        try {
        $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        $pdo = new PDO($conexion, $this->username, $this->password, $options);
        
        return $pdo;
        
        } catch (PDOException $e) {
            echo "Error conexion" . $e->getMessage();
            exit;
        }
    }
 }