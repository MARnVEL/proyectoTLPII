<?php
include '../php/conexion.php';
// require "conexion.php";

$nombreUsuario = $_POST['nombreUsuario'];
$apellidoUsuario = $_POST['apellidoUsuario'];
$email = $_POST['email'];
$contra = $_POST['password'];
$confirmarContra = $_POST['passwordConfirm'];



$erroresRegistro = array();
if ($nombreUsuario == "") {
    array_push($erroresRegistro, "El campo de nombre no puede estar vacío");
}
if ($apellidoUsuario == "") {
    array_push($erroresRegistro, "El campo apellido no puede estar vacío");
}
if ($contra == "") {
    array_push($erroresRegistro, "El campo de contraseña no puede estar vacía");
}
if ($confirmarContra != $contra) {
    array_push($erroresRegistro, "Las contraseñas no coinciden");
}


if (count($erroresRegistro) > 0) {
    echo "<div class='errror'>";
    for ($i = 0; $i < count($erroresRegistro); $i++) {
        # code...
        $titulo = "Error";
        $ListaError = "<li>" . $erroresRegistro[$i] . "</li></div>";
    }
} else {
    # code...
    $consulta = "SELECT * FROM usuarios WHERE usuario_nombre = '$nombreUsuario' or usuario_correo = '$email'";
    $usuarioExiste = $conexion -> query($consulta);
    $count = $usuarioExiste -> rowCount();
    
    if ($count > 0){
        //Esto me debería evitar que me registre un usuario ya existente 
        $titulo = "ERROR";
        $ListaError = "El usuario ya existe";
    }else{        
        $consulta = "INSERT INTO `usuarios`(`id_usuario`, `usuario_nombre`, `usuario_pass`, `usuario_correo`, `usuario_fecha_alta`, `usuario_ultimo_acceso`, `usuario_intentos`, `usuario_privilegios`) 
            VALUES ('','$nombreUsuario','$contra','$email', '', '','','')";
            
        $resultado = $conexion->query($consulta);
        header('Location: ../Carousel Template · Bootstrap v5.1.php');
    }
}







// if (($nombreUsuario == '') || ($apellidoUsuario == '')) {
//     # code...
//     // echo json_encode("Llena todos los campos");
//     echo json_encode("Error");
// } else {
//     echo json_encode('Correcto: <br> Usuario: ' . $usuario . '<br>Pass: ' . $contra);
// }


// try {
//     //code...
//     $conexion ->beginTransaction();

//     // $sql = "INSERT INTO `usuarios`(`usuario_nombre`, `usuario_pass`, `usuario_correo`) 
//     // VALUES ('$nombreUsuario','$contra','$email')";

//     $sql="INSERT INTO
//     `usuario`(`usuario_nombre`, `usuario_pass`, `usuario_correo`, `usuario_fecha_alta`, `usuario_intentos`)
//     VALUES (:nombreUsuario, :contra, :email, :'', :'')";

//     $sqlInsert = $conexion->prepare($sql);
//     $sqlInsert->execute(array(":usuario"=>$usuario
//                             ,":contra"=>$contra
//                             ));
//     if ($sqlInsert->rowCount()==1) {
//         # code...
//         $conexion->commit();
//         echo json_encode("Usuario cargado correctamente");
//     } else {
//         # code...
//         $conexion->rollBack();
//         echo json_encode("No se pudo cargar el usuario, intente más tarde...");
//     }
// } catch (PDOException $e) {
//     //throw $th;
//     echo json_encode("Hubo un error, intente más tarde...: $e");
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="mx-auto">
            <div class="card mx-auto d-block" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $titulo;?></h5>
                    <p class="card-text"><?php echo $ListaError;?></p>
                    <a href="../Carousel Template · Bootstrap v5.1.php" class="btn btn-primary"> Volver a la Pagina</a>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>