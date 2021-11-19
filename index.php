<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MecanoCars</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="icon" href="img/logo.png" >
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php include 'includes/nav.php'?>

    <div class="separador"></div>

    <div class="container">

        <!-- Seccion Boton Jugar -->
        <div class="row">
                <div class="contenedorbtn ">
                    <div class="marcobtn">
                        <a href="login.php">
                            <span id="span4"></span> Jugar Ahora
                        </a>
                    </div>
                </div>
        </div>

        <!-- Seccion Boton Jugar Fin-->

        <!-- IMG HOVER -->
        <div class="row">
            <div class="">
                <div class="IMG-ALL">
                    <div class="subtitle">
                        <h2>DESBLOQUEA TODO TIPO DE VEHICULOS</h2>
                        <P>¡Desbloquea todos los tipos de vehiculos disponibles a medida que avanzas en el juego!</P>
                    </div>
                    <div class="contenedorIMG">
                        <div class="caja">
                            <img src="img/img-hover/bettle/BRojo.jpeg">
                            <span>Bettle</span>
                        </div>
                        <div class="caja">
                            <img src="img/img-hover/f100/FCeleste.jpeg">
                            <span>f100</span>
                        </div>
                        <div class="caja">
                            <img src="img/img-hover/r12/RAzul.jpeg">
                            <span>Renault12</span>
                        </div>
                        <div class="caja">
                            <img src="img/img-hover/Eliminado.jpg">
                            <span>Auto eliminado</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider  -->

            <div class="slider">
            <div id="carouselExampleCaptions" class="carousel slide slider" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/Autos/ARojo.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/Autos/BNegro.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/Autos/MMarron.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/Autos/AAmarilloO.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
        </div>


        <div class="separador"></div>
        

        <!-- IMG HOVER FIN -->


        <!-- marco info -->
        
        <div class="container">
            <div class="col">
                <div class="DESCRIP-ALL">
                    <div class="Descrip-img ">
                        <img src="img/Decoracion/BannerBruce.png" alt=" ">
                    </div>
                    <div class="Descrip ">
                        <span class="small ">Acepta el desafio</span>
                        <span class="big ">MECANOCARS</span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut repudiandae accusamus dolorem sit quia quaerat debitis aliquam distinctio repellat facere, corporis quas alias quisquam laborum ab, quos quibusdam rerum animi!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include 'includes/footer.html'?>

</body>

</html>