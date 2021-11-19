        <div class="container">
            <div class="col">
                <div class="DESCRIP-ALL">
                    <div class="Descrip-img ">
                        <img src="img/Decoracion/BannerBruce.png" alt=" ">
                    </div>
                    <div class="Descrip ">
                        <span class="small ">Acepta el desafio</span>
                        <span class="big ">MECANOCARS</span>
                        <p>Una herramienta didáctica en forma de juego de velocidad de escritura, que mejorará tus habilidades de tecleo, lectura y ortografia, explotando todos los beneficios de la ludopedagogía, la mejor metodologia de enseñanza, aprender jugando. </p>
                        <?php
                        session_start();
                        if (isset($_SESSION['nombre_usuario'])) {
                            echo"<a class='btn btn-warning' href='descargar.php'>Descargar</a>";
                        }else{
                            echo"<a class='btn btn-warning' href='login.php'>Jugar Ahora</a>";
                        }
                        ?>  
                    </div>
                </div>
            </div>
        </div>