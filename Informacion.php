<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MecanoCars</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="icon" href="img/logo.png" >
    <link rel="stylesheet" href="css/SliderPersonaje/CSS/FontAwesome.css">
    <link rel="stylesheet" href="css/SliderPersonaje/CSS/FontGoogle.css">
    <link rel="stylesheet" href="css/SliderPersonaje/CSS/style.css">
    <link rel="stylesheet" href="css/SliderPersonaje/CSS/estiloInfo.css">
</head>

<body>
<?php include 'includes/nav.html'?>

    <!-- Main -->
    
    <div class="separador"></div>
    <div class="container">
        <div class="contenedorTexto">
            <div class="subtitle">
                <h2>¿¡QUE ES Y COMO FUNCIONA MECANOCARS!?</h2>
                <div class="separador"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, suscipit laborum natus labore voluptatibus quam quis deserunt esse, corporis eum vero distinctio a quas omnis doloribus recusandae corrupti ducimus tenetur.</p>
            </div>
        </div>

        <div class="separador"></div>
        <div class="separador"></div>

        <div class="container-tutorial">
            <div class="contenedor-tarjeta">
                <div class="tarjeta">
                    <img src="img/Decoracion/teclea2.jpg" alt="">
                    <h4>Teclea</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea illum quas quae, saepe accusantium natus deleniti unde ducimus adipisci ab maxime cumque molestias! Aliquam ipsa impedit voluptatem culpa consectetur at!</p>
                </div>
                <div class="tarjeta"><img src="img/Decoracion/carretera.jpg" alt="">
                    <h4>Acierta</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam non cupiditate eius. Dolor, quasi ex. Neque eos alias, odit consequatur autem repellat optio. Adipisci ab ipsum labore amet explicabo harum?</p>
                </div>
                <div class="tarjeta"><img src="img/Decoracion/acelera.jpg" alt="">
                    <h4>Acelera</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi assumenda quas fugiat dolores natus ea qui voluptatibus pariatur placeat nisi laborum est, atque veniam modi iure ab ipsam repudiandae cumque!</p>
                </div>
            </div>
        </div>
        <div class="separador"></div>
        <div class="contenedorTexto"></div>
        <div class="separador"></div>

        <!-- Slider pj -->

        <div class="containerPJ">
            <div class="subtitle">
                <h2>¡ JUEGA CONTRA LAS LEYENDAS DE MECANOCARS !</h2>
            </div>
            <div class="app">
                <div class="cardList">
                    <button class="cardList__btn btn btn--left">
                        <div class="icon">
                            <svg>
                                <use xlink:href="#arrow-left"></use>
                            </svg>
                        </div>
                    </button>
                    <div class="cards__wrapper">
                        <div class="card current--card">
                            <div class="card__image">
                                <img src="img/personajes/Astrid.png" alt="" />
                            </div>
                        </div>
                        <div class="card next--card">
                            <div class="card__image">
                                <img src="img/personajes/pj" alt="" />
                            </div>
                        </div>
                        <div class="card previous--card">
                            <div class="card__image">
                                <img src="" alt="" />
                            </div>
                        </div>
                    </div>
                    <button class="cardList__btn btn btn--right">
                        <div class="icon">
                            <svg>
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </div>
                    </button>
                </div>
                <div class="infoList">
                    <div class="info__wrapper">
                        <div class="info current--info">
                            <h1 class="text name">Astrid</h1>
                            <h4 class="text location">BEATLE</h4>
                            <p class="text description">Frase copada</p>
                        </div>
                        <div class="info next--info">
                            <h1 class="text name">Mario</h1>
                            <h4 class="text location">Renault 12</h4>
                            <p class="text description">Frase copada </p>
                        </div>
                        <div class="info previous--info">
                            <h1 class="text name">Bobbi</h1>
                            <h4 class="text location">F-100</h4>
                            <p class="text description">Frase copada</p>
                        </div>
                    </div>
                </div>
                <div class="app__bg">
                    <div class="app__bg__image current--image">
                        <img src="img/personajes/fonopj.jpg" alt="" />
                    </div>
                    <div class="app__bg__image next--image">
                        <img src="2.jpeg" alt="" />
                    </div>
                    <div class="app__bg__image previous--image">
                        <img src="img/personajes/fonopj.jpg" alt="" />
                    </div>
                </div>
            </div>
            <!--div class="loading__wrapper">
                <div class="loader--text">Cargando...</div>
                <div class="loader">
                    <span></span>
                </div>
            </div-->
            <!-- SVG start -->
            <svg class="icons" style="display: none;">
                <symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
                    <polyline points='328 112 184 256 328 400' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
                </symbol>
                <symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
                    <polyline points='184 112 328 256 184 400' style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
                </symbol>
            </svg>
            <!-- SVH end -->


            <!-- Slider pj end -->



        </div>

        <div class="separador"></div>

        <div class="contenedorTexto">
            <!-- marco info -->
            <div class="container">
                <div class="col">
                    <div class="DESCRIP-ALL">
                        <div class="Descrip-img">
                            <img src="/img/Decoracion/BannerBruce.png" alt="">
                        </div>
                        <div class="Descrip">
                            <span class="small">Acepta el desafio</span>
                            <span class="big">MECANOCARS</span>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut repudiandae accusamus dolorem sit quia quaerat debitis aliquam distinctio repellat facere, corporis quas alias quisquam laborum ab, quos quibusdam rerum animi!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="separador"></div>

        <!-- Main end -->

        <!-- js -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
        <script src="/css/SliderPersonaje/JS/gsap.min.js"></script>
        <script src="/css/SliderPersonaje/JS/Slider.js"></script>
        <script src="/css/SliderPersonaje/JS/script.js"></script>

    </div>
    
    <?php include 'includes/footer.html'?>

</body>

</html>