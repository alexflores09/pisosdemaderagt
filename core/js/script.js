/**
 * Created by Alex Flores on 26/05/2017.
 */

$(document).ready(function(){
    $(".button-collapse").sideNav();
    $('#mdlMainModal').modal();
});

function debug(variable){
    console.log("-------------------------")
    console.log(variable);
    console.log("-------------------------")
}

function mainLoading(boolClose = false){
    if(boolClose){
        $(".mainLoading").addClass("scale-out");
    }
    else{
        $(".mainLoading").removeClass("scale-out");
    }
}

function mainModal(msj = "", title = "Mensaje del sistema", boolClose = false){
    if(boolClose){
        $('#mdlMainModal').modal('close');
    }
    else{
        $('#mdlMainModal .modal-content h4').html(title);
        $('#mdlMainModal .modal-content p').html(msj);
        $('#mdlMainModal').modal('open');
    }
}

function validateFields(strForm = false){
    if(strForm){
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var boolOk = true;
        $("#"+strForm+" input").each(function(){
            if($(this).hasClass("validate")){
                var type = $(this).attr("type");
                var value = $(this).val();
                if(value.trim() == ""){
                    boolOk = false;
                    $(this).addClass("invalid");
                }
                if(type == "email"){
                    if(!re.test(value)){
                        boolOk = false;
                        $(this).addClass("invalid");
                    }
                }
            }
        });

        $("#"+strForm+" textarea").each(function(){
            if($(this).hasClass("validate")){
                var value = $(this).val();
                if(value.trim() == ""){
                    boolOk = false;
                    $(this).addClass("invalid");
                }
            }
        });
        return boolOk;
    }
    return false;
}