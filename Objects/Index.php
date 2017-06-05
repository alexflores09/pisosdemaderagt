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
        <style>
            footer {
                margin-top: 50px;
            }
            .divFLoatSlider{
                background: #EFEFEF;
                height: 290px;
                color: #B71C1C;
            }
            .slider-reponsive{
                width: 85%;
            }
            .carousel{
                height: 400px!important;
            }
            @media screen and (max-width: 768px){
                .slider-reponsive{
                    width: 80%;
                }
            }
        </style>
        <div class="col s12 center" style="margin-top: 50px;">
            <h3 style="color: #B71C1C;"><strong>Bienvenido a Pisos de Madera GT</strong></h3>
            <p class="flow-text" style="text-align: justify;">Contamos con mas de 20 años de experiencia , brindando asesoría, soluciones y presentándoles las mejores opciones a nuestros clientes, desarrollando proyectos grandes, desde edificios completos hasta una sola habitación, dándole a cada uno de ellos la mas alta y fina calidad, con esto hemos logrado ganarnos la confianza de nuestros clientes.</p>
        </div>
        <div style="display: flex;">
            <div class="carousel carousel-slider center slider-reponsive">
                <a class="carousel-item" style="cursor: pointer;"><img src="img/escaleras/escaleras-1.jpg" alt=""></a>
                <a class="carousel-item" style="cursor: pointer;"><img src="img/pisos/piso-7.jpg" alt=""></a>
                <a class="carousel-item" style="cursor: pointer;"><img src="img/otros/otros-1.jpg" alt=""></a>
            </div>
            <div class="divFLoatSlider" style="margin-bottom: 50px;">
                <h5 style="padding: 50px 5px;" class="flox-text center"><strong>Materiales <br>de<br> Calidad</strong></h5>
                <hr style="border: 3px solid #FFFFFF;">
                <h5 style="padding: 50px 5px;" class="flox-text center"><strong>Satisfacción <br> Garantizada</strong></h5>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('.carousel').carousel({dist:0});
                $('.carousel.carousel-slider').carousel({fullWidth: true});
                window.setInterval(function(){$('.carousel').carousel('next')},4000);
            });
        </script>
        <?php
    }
}