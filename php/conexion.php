<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "practicaphp";
    $port = "33065";

    // $conexion = new mysqli ($servername, $username, $password, $dbname);

    // if($conexion -> connect_error){
    //     die("Falló la conexión: (". $mysqli -> mysqli_connect_erno()." )".$mysqli -> mysqli_connect_erno());

    // }


    try {
        $conexion = new PDO("mysql:host=$servername; dbname=$dbname"
                    , $username
                    , $password
                    , array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));        
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      

    } catch(PDOException $e){
        echo "La conexión falló: " . $e->getMessage(). "<br/>";  
        exit;
    }
?>
