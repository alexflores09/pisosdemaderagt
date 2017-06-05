<?php

/**
 * Created by PhpStorm.
 * User: Alex Flores
 * Date: 27/05/2017
 * Time: 7:58 PM
 */
use main\Object;

class Servicios implements Object {
    function __contruct(){

    }

    public function draw(){
        ?>
        <h2 class="center">Servicios</h2>
        <div class="row">
            <p class="flow-text">
                Instalamos y restauramos todo tipo de pisos de madera, le
                devolvemos la vida y el aspecto a sus finos pisos con
                tratamiento de restaurado a base de maquinaria industrial y
                los mejores productos en acabado final.
                Nos encargamos de encontrar la mejor solución para tus necesidades.
            </p>
            <div class="col s12">
                <div class="collection">
                    <a href="#!" class="collection-item black-text"><i class="material-icons">gavel</i>&nbsp;Instalación de pisos de madera</a>
                    <a href="#!" class="collection-item black-text"><i class="material-icons">gavel</i>&nbsp;Instalación de pisos de madera de ingeniería y flotante</a>
                    <a href="#!" class="collection-item black-text"><i class="material-icons">gavel</i>&nbsp;Instalación de pisos laminados</a>
                    <a href="#!" class="collection-item black-text"><i class="material-icons">gavel</i>&nbsp;Instalación de zócalos</a>
                    <a href="#!" class="collection-item black-text"><i class="material-icons">gavel</i>&nbsp;Instalación de Deck</a>
                    <a href="#!" class="collection-item black-text"><i class="material-icons">gavel</i>&nbsp;Mantenimiento y restauración de los mismos</a>
                </div>
            </div>
        </div>
        <?php
    }

}