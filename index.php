<?php
/**
 * Created by PhpStorm.
 * User: Alex Flores
 * Date: 26/05/2017
 * Time: 9:34 PM
 */

use main\Main;

include_once("core/Main.php");
$strPage = $_GET["page"] ?? "Index";

$objMain = new Main();
$strFile = "Objects/{$strPage}.php";
if(file_exists($strFile)){
    include_once($strFile);
    if(class_exists($strPage)){
        $objMain->header();
        $objController = new $strPage();
        if(method_exists($objController,"draw")){
            $objController->draw();
        }
        $objMain->footer();
    }
    die;
}
//Mostar pagina 404
print "Error404";