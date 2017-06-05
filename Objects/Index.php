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
                    <a class="carousel-item"><img src="img/escaleras/escaleras-1.jpg"></a>
                    <a class="carousel-item"><img src="img/pisos/piso-7.jpg"></a>
                    <a class="carousel-item"><img src="img/otros/otros-1.jpg"></a>
                </div>
            </div>
            <div class="col s4">
                <div class="card brown">
                    <div class="card-content white-text center">
                        <p class="flow-text">Materiales de cladidad &nbsp;<i class="material-icons">done</i></p>
                    </div>
                </div>
            </div>
            <div class="col s4">
                <div class="card brown">
                    <div class="card-content white-text center">
                        <p class="flow-text">Satisfacción garantizada &nbsp;<i class="material-icons">done</i></p>
                    </div>
                </div>
            </div>
            <div class="col s4">
                <div class="card brown">
                    <div class="card-content white-text center">
                        <p class="flow-text">Precios accesibles &nbsp;<i class="material-icons waves-green">done</i></p>
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
                    full_width:true,
                });
                $('.carousel.carousel-slider').carousel({fullWidth: true});
                window.setInterval(function(){$('.carousel').carousel('next')},3000);
            });
        </script>
        <?php
    }
}