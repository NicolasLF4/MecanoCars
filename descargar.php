<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MecanoCars</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="icon" href="img/logo.png" >
    <link rel="stylesheet" href="css/descargar.css">
    
</head>

<body>
    <?php include 'includes/nav.php'?>

    <?php
	//session_start();
	if (!isset($_SESSION['nombre_usuario'])) {
        header("location:index.php");
    }
    ?>
    
    <div class="separador"></div>

    <div class="container">

        <!-- Seccion Boton Jugar -->
        <div class="row">
            <div class="col-lg-12 col-sm-3">
                <div class="contenedorbtn col-sm-12">
                    <div class="marcobtn">
                        <button type="button" onclick="window.open('MecanoCars 2021 0.2.2 x64.rar')">
                            <span id="span4"></span> Descargar
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Seccion Boton Jugar Fin-->
    </div>

    <div class="separador"></div> 

    <?php include 'includes/footer.html'?>

</body>

</html>