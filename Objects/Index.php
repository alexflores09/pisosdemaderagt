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
            .carousel a img{
                height: 400px!important;
            }
        </style>
        <div class="row">
            <div class="col s12">
                <h2 class="center">Bienvenido</h2>
                <p class="flow-text">
                    Contamos con mas de 20 años de experiencia, brindando asesoría, soluciones y presentándoles las mejores opciones a nuestros clientes, desarrollando proyectos grandes, desde edificios completos hasta una sola habitación, dándole a cada uno de ellos la mas alta y fina calidad, con esto hemos logrado ganarnos la confianza de nuestros clientes.<br>
                </p>
            </div>
            <div class="col s12">
                <div class="carousel carousel-slider">
                    <a class="carousel-item"><img src="img/slider_1.png"></a>
                    <a class="carousel-item"><img src="img/slider_2.png"></a>
                    <a class="carousel-item"><img src="img/slider_3.png"></a>
                    <a class="carousel-item"><img src="img/slider_4.png"></a>
                    <a class="carousel-item"><img src="img/slider_5.png"></a>
                </div>
            </div>
            <div class="col s4">
                <div class="card brown card-main valign-wrapper center">
                    <div class="card-content white-text center">
                        <p class="flow-text">Materiales de cladidad</p>
                    </div>
                </div>
            </div>
            <div class="col s4">
                <div class="card brown card-main valign-wrapper center">
                    <div class="card-content white-text center">
                        <p class="flow-text">Satisfacción garantizada</p>
                    </div>
                </div>
            </div>
            <div class="col s4">
                <div class="card brown card-main valign-wrapper center">
                    <div class="card-content white-text center">
                        <p class="flow-text">Precios accesibles</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('.carousel').carousel({
                    dist:0,
                    shift:30,
                    padding:20,
                    fullWidth:true,
                });
                window.setInterval(function(){$('.carousel').carousel('next')},3000);
            });
        </script>
        <?php
    }
}