<?php

/**
 * Created by PhpStorm.
 * User: Alex Flores
 * Date: 27/05/2017
 * Time: 7:58 PM
 */
use main\Main;
use main\Object;
use main\Response;

class Contacto extends Main implements Object {

    private $params= array();

    function __construct($params = array()){
        $this->params = $params;
    }

    public function ajax():array {
        if(isset($this->params["op"])){
            $strOp = $this->params["op"];
            if($strOp == "send"){
                $copy = $this->params["txtEmail"] ?? "";
                $subject = $this->params["txtSubject"] ?? "Información";
                $userMessage = $this->params["txtMessage"] ?? "";
                $message = $this->getMessageEmail($userMessage);
                if($this->sendMailAdmin($copy,$subject,$message)){
                    return Response::standard(1,"Su mensaje ah sido enviado correctamente, muy pronto nos contactaremos contigo.");
                }
                else{
                    return Response::standard(0,"No se puedo enviar tu correo, intentalo de nuevo.");
                }
            }
        }
        return Response::standard(0,"Operación inválida");
    }

    public function draw(){
        ?>
        <h2 class="center">Contacto</h2>
        <div class="row">
            <div class="col s12" id="divMaps"></div>
        </div>
        <div class="row">
            <div class="col l6 m6 s12">
                <p class="flow-text">¿Quieres hacer algunas renovaciones? Escríbenos o llámanos. Tenemos la mejor disposición para proveerte toda la información que necesites y ayudarte con cualquier pregunta que puedas tener.</p>
                <p class="flow-text">
                    <b>¡Contáctanos!</b><br>
                    +502 5250-2975  //  donismaderas@gmail.com

                </p>
            </div>
            <div class="col s12 m6 l6">
                <form class="col s12" id="frmContact">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="txtName" name="txtName" type="text" class="validate" required>
                            <label for="txtName">Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="txtSubject" name="txtSubject" type="text" class="validate" required>
                            <label for="txtSubject">Asunto</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="txtEmail" name="txtEmail" type="email" class="validate" required>
                            <label for="txtEmail">Correo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="txaMessage" name="txaMessage" class="materialize-textarea validate" required></textarea>
                            <label for="txaMessage">Mensaje</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 center">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('#frmContact').on('submit',function(e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url : "index.php?page=Contacto&ajax=true&op=send",
                        data: new FormData(this),
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend : function(){
                            mainLoading();
                        },
                        success: function(data) {
                            mainLoading(true);
                            if(data.status == 1){
                                mainModal(data.msj,"¡Muchas gracias por contactarnos!");
                            }
                            else{
                                mainModal(data.msj,"¡Lo sentimos!");
                            }
                        },
                        error: function(){
                            mainLoading(true);
                        }
                    });
                });
            });
            function initMap() {
                var uluru = {lat: 14.5351907, lng: -90.5544423};
                var map = new google.maps.Map(document.getElementById('divMaps'), {
                    zoom: 18,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD92-WC7eA06-I4v-Pyk6vzvjf266KfRSg&callback=initMap"></script>
        <?php
    }

    private function getMessageEmail(string $userMessage = ""):string {
        $msj = "";
        $msj .= <<<EOD
        <p>Gracias por contactarnos, muy pronto pronto uno de nuestros asesores hablara contigo para birndarte mayor información.</p>
        <p>
        Pisos De Madera GT<br>
        Teléfono: +502 5250-2975<br>
        Correo: donismaderas@gmail.com
        </p>
EOD;
        return $msj;
    }
}