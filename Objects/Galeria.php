<?php

/**
 * Created by PhpStorm.
 * User: Alex Flores
 * Date: 27/05/2017
 * Time: 7:58 PM
 */
use main\Object;

class Galeria implements Object {
    private $arrParams = array();
    function __construct($arrParams){
        $this->arrParams = $arrParams;
    }

    public function draw(){
        $strTipo = $this->arrParams["tipo"] ?? "";
        if($strTipo == "floor"){
            $this->draw_galery_floors();
        }
        else if($strTipo == "stairs"){
            $this->draw_galery_stairs();
        }
        else if($strTipo == "others"){
            $this->draw_galery_others();
        }
        else{
            ?>
            <h2 class="center">Galería</h2>

            <div class="row">

                <div class="col s12 m12 xl4">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/pisos/piso-28.jpg">
                            <span class="card-title">Pisos</span>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="index.php?page=Galeria&tipo=floor">Ver galería de pisos</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 xl4">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/escaleras/escaleras-2.jpg">
                            <span class="card-title">Escaleras</span>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="index.php?page=Galeria&tipo=stairs">Ver galería de escaleras</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 xl4">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/otros/otros-1.jpg">
                            <span class="card-title">Otros servicios</span>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="index.php?page=Galeria&tipo=others">Ver galería de otros servicios</a>
                        </div>
                    </div>
                </div>

            </div>
            <?php
        }
    }

    private function draw_galery_floors(){
        ?>
        <h2 class="center">Pisos</h2>
        <div class="row">
            <?php
            for($i = 1;$i <= 38; $i++){
                ?>
                <div class="col s4 m4 xl4">
                    <div class="card medium">
                        <div class="card-image">
                            <img class="materialboxed" src="img/pisos/piso-<?php print $i; ?>.jpg">
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.materialboxed').materialbox();
            });
        </script>
        <?php
    }

    private function draw_galery_stairs(){
       ?>
        <h2 class="center">Escaleras</h2>
        <div class="row">
            <?php
            for($i = 1;$i <= 8; $i++){
                ?>
                <div class="col s4 m4 xl4">
                    <div class="card medium">
                        <div class="card-image">
                            <img class="materialboxed" src="img/escaleras/escaleras-<?php print $i; ?>.jpg">
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.materialboxed').materialbox();
            });
        </script>
        <?php
    }

    private function draw_galery_others(){
        ?>
        <h2 class="center">Mantenimiento y restauración</h2>
        <div class="row">
            <?php
            for($i = 1;$i <= 4; $i++){
                ?>
                <div class="col s4 m4 xl4">
                    <div class="card medium">
                        <div class="card-image">
                            <img class="materialboxed" src="img/otros/otros-<?php print $i; ?>.jpg">
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.materialboxed').materialbox();
            });
        </script>
        <?php
    }
}