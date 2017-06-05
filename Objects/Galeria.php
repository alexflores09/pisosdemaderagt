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
        if($strTipo == "piso"){
            $this->draw_galery_floors();
        }
        else if($strTipo == "escaleras"){
            $this->draw_galery_stairs();
        }
        else if($strTipo == "otros"){
            $this->draw_galery_others();
        }
        else{
            ?>
            <h2 class="center">Galería</h2>

            <div class="row">
                <div class="col s12">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="img/piso.jpg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                                <a href="index.php?page=Galeria&tipo=piso">Ver galería de pisos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="img/piso.jpg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                                <a href="index.php?page=Galeria&tipo=escaleras">Ver galería de escaleras</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="img/piso.jpg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                                <a href="index.php?page=Galeria&tipo=otros">Ver galería de mantenimiento</a>
                            </div>
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
            <div class="col s12 m4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img  class="materialboxed" src="img/piso.jpg">
                    </div>
                </div>
            </div>
            <div class="col s12 m4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img  class="materialboxed" src="img/piso.jpg">
                    </div>
                </div>
            </div>
            <div class="col s12 m4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img  class="materialboxed" src="img/piso.jpg">
                    </div>
                </div>
            </div>
            <div class="col s12 m4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img  class="materialboxed" src="img/piso.jpg">
                    </div>
                </div>
            </div>
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
            <div class="col s12 m4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img  class="materialboxed" src="img/piso.jpg">
                    </div>
                </div>
            </div>
            <div class="col s12 m4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img  class="materialboxed" src="img/piso.jpg">
                    </div>
                </div>
            </div>
            <div class="col s12 m4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img  class="materialboxed" src="img/piso.jpg">
                    </div>
                </div>
            </div>
            <div class="col s12 m4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img  class="materialboxed" src="img/piso.jpg">
                    </div>
                </div>
            </div>
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
            <div class="col s12 m4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img  class="materialboxed" src="img/piso.jpg">
                    </div>
                </div>
            </div>
            <div class="col s12 m4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img  class="materialboxed" src="img/piso.jpg">
                    </div>
                </div>
            </div>
            <div class="col s12 m4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img  class="materialboxed" src="img/piso.jpg">
                    </div>
                </div>
            </div>
            <div class="col s12 m4 xl4">
                <div class="card">
                    <div class="card-image">
                        <img  class="materialboxed" src="img/piso.jpg">
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.materialboxed').materialbox();
            });
        </script>
        <?php
    }
}