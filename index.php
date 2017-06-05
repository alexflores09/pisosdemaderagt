<?php
/**
 * Created by PhpStorm.
 * User: Alex Flores
 * Date: 26/05/2017
 * Time: 9:34 PM
 */

use main\Main;
use main\Response;
use main\Theme;

include_once("core/Main.php");
$strPage = $_GET["page"] ?? "Index";
if(isset($_GET["ajax"])){
    $arrResponse = Response::standard(0,"");
    $strFile = "Objects/{$strPage}.php";
    if(file_exists($strFile)){
        include_once($strFile);
        if(class_exists($strPage)){
            $objController = new $strPage($_REQUEST);
            if(method_exists($objController,"ajax")){
                $arrResponse = $objController->ajax();
            }
        }
    }

    header("Content-Type: application/json");
    print json_encode($arrResponse);
    die;
}

$objTheme = new Theme();
$strFile = "Objects/{$strPage}.php";
if(file_exists($strFile)){
    include_once($strFile);
    if(class_exists($strPage)){
        $objTheme->header();
        $objController = new $strPage($_REQUEST);
        if(method_exists($objController,"draw")){
            $objController->draw();
        }
        $objTheme->footer();
    }
    die;
}
//Mostar pagina 404
print "Error404";