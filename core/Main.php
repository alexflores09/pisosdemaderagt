<?php
/**
 * Created by PhpStorm.
 * User: Alex Flores
 * Date: 26/05/2017
 * Time: 10:02 PM
 */

namespace main;


class Main{

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
        </head>
        <body>
            <header>
                <div class="banner valign-wrapper">
                </div>
                <nav>
                    <div class="nav-wrapper">
                        <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
                        <ul id="nav-mobile" class="hide-on-med-and-down">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="index.php?page=Servicios">Servicios</a></li>
                            <li><a href="index.php?page=Galeria">Galería</a></li>
                            <li><a href="index.php?page=Contacto">Contacto</a></li>
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
                        <div class="col s12 center">
                            <p class="grey-text text-lighten-4">Para mayor información contáctanos al <br>Teléfono: 5250-2975 <br> Correo: decorwoodgt@gmail.com</p>
                        </div>
                    </div>
                </div>
            </footer>
            <!--Import jQuery before materialize.js-->
            <script type="text/javascript" src="core/js/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="core/js/materialize.min.js"></script>
            <script type="text/javascript" src="core/js/script.js"></script>
        </body>
        </html>
        <?php
    }
}

interface Object{
    public function draw();
}