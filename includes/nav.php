    <!-- NavBar -->

    <!-- Logo -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" alt="" width="30" height="34">  MecanoCars</a>
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
                        <a class="nav-link" href="estadisticas.php">Estadisticas</a>
                    </li>
                </ul>
                <!-- Inicio de Sesion -->
                <?php
                session_start();
                if (isset($_SESSION['nombre_usuario'])) {
                    echo "<div class='dropdown'>";
                    echo "<a class='btn btn-secondary dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'>".$_SESSION['nombre_usuario']."</a>";
                    echo "<ul class='dropdown-menu' aria-labelledby='dropdownMenuLink'>";
                    echo "<li><a class='dropdown-item' href='#'>Estadisticas</a></li>";
                    echo "<li><a class='dropdown-item' href='includes/cerrar.php'>Cerrar sesión</a></li>";
                    echo "</ul>";
                    echo "</div>";
                }else{
                echo"<a class='btn btn-warning' href='login.php'>Jugar Ahora</a>";
                
                }
                ?>
            </div>
        </div>
    </nav>
    <!-- NavBar Fin -->