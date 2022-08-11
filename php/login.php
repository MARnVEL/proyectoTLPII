<?php

require "conexion.php";

$email = $_POST['email'];
$contra = $_POST['password'];

if (trim($email) == '' or trim($contra) == '')
    header('Location: ../Carousel Template · Bootstrap v5.1.php');

 $usuarioExiste = $conexion -> query("SELECT * FROM usuarios WHERE usuario_correo = '$email' and usuario_pass = '$contra' ");

 if ($usuarioExiste->rowCount() == 1){
    session_start();
    $_SESSION['email'] = $email;
    header('Location: ../sesionConductores.php');
 }else{
    echo "usuario no existe";
     header('Location: ../Carousel Template · Bootstrap v5.1.php');
 }
?>