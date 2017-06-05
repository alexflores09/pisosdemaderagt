<?php
/**
 * Created by PhpStorm.
 * User: Alex Flores
 * Date: 26/05/2017
 * Time: 10:02 PM
 */

namespace main;


abstract class Main{

    function __construct(){

    }

    public function sendMailAdmin(string $copy, string $subject, string $message):bool {
        $headers = "MIME-Version: 1.0";
        $headers .= "\r\n"."Content-type:text/html;charset=UTF-8";
        $headers .= "\r\n"."From: noreply@pisosdemadera.com.gt";
        if(!empty($copy))$headers .= "\r\n"."Cc: {$copy}";

        if(@mail("",$subject,$message,$headers)){
            return true;
        }
        else{
            return false;
        }
    }
}

class Theme{

    function __construct(){

    }

    public function header(){
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <!--Import Google Icon Font-->
            <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link type="text/css" rel="stylesheet" href="core/css/materialize.min.css"  media="screen,projection"/>
            <link type="text/css" rel="stylesheet" href="core/css/style.css"  media="screen,projection"/>

            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <script type="text/javascript" src="core/js/jquery-3.2.1.min.js"></script>
        </head>
        <body>
        <div class="mainLoading valign-wrapper scale-transition scale-out">
            <div class="preloader-wrapper medium active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <div class="flow-text">Cargando...</div>
        </div>
        <header>
            <div class="row banner">
                <div>
                    <img src="img/logo.png">
                </div>
            </div>
            <nav class="red darken-4">
                <div class="nav-wrapper">
                    <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="hide-on-med-and-down brand-logo center">
                        <li><a href="index.php"><i class="material-icons left">home</i>Inicio</a></li>
                        <li><a href="index.php?page=Servicios"><i class="material-icons left">work</i>Servicios</a></li>
                        <li><a href="index.php?page=Galeria"><i class="material-icons left">perm_media</i>Galería</a></li>
                        <li><a href="index.php?page=Contacto"><i class="material-icons left">email</i>Contacto</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="index.php"><i class="material-icons left">home</i>Inicio</a></li>
                        <li><a href="index.php?page=Servicios"><i class="material-icons left">work</i>Servicios</a></li>
                        <li><a href="index.php?page=Galeria"><i class="material-icons left">perm_media</i>Galería</a></li>
                        <li><a href="index.php?page=Contacto"><i class="material-icons left">email</i>Contacto</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
        <div class="container">
        <?php
    }

    public function footer(){
        ?>
        </div>
        </main>
        <footer class="page-footer red darken-4">
            <div class="container">
                <div class="row">
                    <div class="center">
                        <p class="grey-text text-lighten-4 flow-text">
                            Para mayor información contáctanos al <br>
                            <i class="material-icons">phone</i> +502 5250-2975 <br>
                            <i class="material-icons">email</i> donismaderas@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal Structure -->
        <div id="mdlMainModal" class="modal">
            <div class="modal-content">
                <h4></h4>
                <p class="flow-text"></p>
            </div>
            <div class="modal-footer">
                <button class="modal-action modal-close waves-effect waves-green btn-flat" onclick="$('#mdlMainModal').modal('close')">Entendido</button>
            </div>
        </div>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="core/js/materialize.min.js"></script>
        <script type="text/javascript" src="core/js/script.js"></script>
        </body>
        </html>
        <?php
    }
}

class Response{

    public static function standard(int $status, string $msj):array{
        $arrResponse = array();
        $arrResponse["status"] = $status ?? 0;
        $arrResponse["msj"] = !empty($msj)?$msj:"Hubo un problema de comunicación, intente de nuevo";

        return $arrResponse;
    }
}

interface Object{
    public function draw();
}