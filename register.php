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
</head>

<body>

    <!-- NavBar -->

    <!-- Logo -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" alt="" width="34" height="34">MecanoCars</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <!-- Menu de Navegacion -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Requisitos.php">Requisitos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Informacion.php">Informacion del Juego</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mobile.php">MC Mobile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- NavBar Fin -->


    <!-- Header Welcome -->

    <div class="header-component">
        <a class="logo" href=""><img src="" alt="">
        </a>
    </div>

    <!-- Header Welcome Fin -->

    <!-- Registro -->

    <div class="welcome-container">

        <div class="welcome">
            <H1>AQUI COMIENZA LA AVENTURA</H1>
        </div>
        <div class="ContLogin">
            <form class="caja" action="" method="post">
                <h2>Registrate</h2>
                <input type="text" name="" placeholder="Usuario">
                <input type="password" name="" placeholder="Contraseña">
                <input type="submit" name="" value="Registarme">
            </form>
        </div>
    </div>
    <!-- Registro Fin -->


    <?php include 'includes/footer.html'?>
    
</body>

</html>