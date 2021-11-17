<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MecanoCars</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="icon" href="img/logo.png" >
    <link rel="stylesheet" href="css/register.css">
    <!-- <link rel="stylesheet" href="css/index.css"> -->
</head>

<body>

<?php include 'includes/nav.html'?>


    <!-- Login -->
    <div class="ContLogin">
        <form class="cajaLogin" action="" method="post">
            <h2>Registrarse</h2>
            <input type="text" name="nombre" placeholder="Nombre de Usuario" require>
            <input type="password" name="cont1" placeholder="Contraseña" require>
            <input type="password" name="cont2" placeholder="Confirmar Contraseña" require>
            <input type="email" name="email" placeholder="E-mail" require>
            <input type="submit" name="" value="registrarse">
        </form>
    </div>

    <!-- Login Fin -->
    
    <?php 
    /*
    include 'conexion.php';

    if (isset($_POST['ida'])) {

        //Recoger los valores del formulario de registro
        $nombre= $_POST['nombre'];
        $cont1= $_POST['cont1'];
        $cont2= $_POST['cont2'];
        $email= $_POST['email'];
        if ($cont1 == $cont2)
        {
            $contraseña = $cont2
            echo ("todo piola con vos");
        } else [

            echo ("todo mal con vos, las contraseñas no coinciden");
        ]
        //$contrasena_T_codificada=password_hash($contrasena_T, PASSWORD_DEFAULT);
        $consulta="INSERT INTO `logueo` (`nombre_usuario`, `contraseña`, `email`) VALUES ('$nombre', '$contraseña', '$email';";
        $resultado= mysqli_query($conexion, $consulta);

        header("Location: index.php");
        die();
    }
    


    
    
    
    */
    include 'includes/footer.html'?>

</body>

</html>