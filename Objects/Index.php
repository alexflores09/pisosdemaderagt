<?php
/**
 * Created by PhpStorm.
 * User: Alex Flores
 * Date: 26/05/2017
 * Time: 10:18 PM
 */
use main\Object;

class Index implements Object {
    function __construct(){

    }

    public function draw(){
        ?>
        <div class="col s12 center">
            <h4 style="color: #B71C1C">Bienvenido a Pisos de Madera GT</h4>
            <p>Contamos con mas de 20 años de experiencia , brindando asesoría, soluciones y presentándoles las mejores opciones a nuestros clientes, desarrollando proyectos grandes, desde edificios completos hasta una sola habitación, dándole a cada uno de ellos la mas alta y fina calidad, con esto hemos logrado ganarnos la confianza de nuestros clientes.</p>
        </div>
        <div class="container">
            <div class="carousel carousel-slider">
            <!-- Prueba -->
                <a class="carousel-item" style="cursor: pointer;"><img src="img/logo.jpg" alt=""></a>
                <a class="carousel-item" style="cursor: pointer;"><img src="img/logo.png" alt=""></a>
                <a class="carousel-item" style="cursor: pointer;"><img src="img/construccion.jpg" alt=""></a>
                <!--Despues de arreglar Imagenes
                <a class="carousel-item" style="cursor: pointer;"><img src="img/escaleras/escaleras-1.jpg" alt=""></a>
                <a class="carousel-item" style="cursor: pointer;"><img src="img/pisos/piso-1.jpg" alt=""></a>
                <a class="carousel-item" style="cursor: pointer;"><img src="img/otros/otros-1.jpg" alt=""></a>-->
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('.carousel').carousel();
                $('.carousel.carousel-slider').carousel({fullWidth: true});
            });
        </script>
        <?php
    }
}