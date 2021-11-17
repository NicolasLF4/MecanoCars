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

<?php include 'includes/nav.php'?>
<?php
if(isset($_REQUEST["distinto"])){
	echo '<script type="text/javascript">alert("las contraseñas no coinciden");</script>';
}
?>

    <!-- Login -->
    <div class="ContLogin">
        <form class="caja" action="" method="post">
            <h2>Registrarse</h2>
            <input type="text" name="nombre" placeholder="Nombre de Usuario" required>
            <input type="password" name="cont" placeholder="Contraseña" required>
            <input type="password" name="contTemp" placeholder="Confirmar Contraseña" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="submit" name="ida" value="registrarse">
        </form>
    </div>

    <!-- Login Fin -->
    
    <?php 
    include 'conexion.php';

    if (isset($_POST['ida'])) {

        //Recoger los valores del formulario de registro
        $nombre= $_POST['nombre'];
        $cont1= $_POST['cont'];
        $cont2= $_POST['contTemp'];
        $email= $_POST['email'];
        if ($cont1 == $cont2)
        {
            $consulta="INSERT INTO logueo (nombre_usuario, contraseña, email) VALUES ('$nombre', '$cont1', '$email')";
            $resultado= mysqli_query($conexion, $consulta);
            header("Location: index.php");
        } else {
            header("Location:register.php?distinto=si");
        }
        //die();
    }
    

    include 'includes/footer.html'?>

</body>

</html>