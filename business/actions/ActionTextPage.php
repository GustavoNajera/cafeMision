<?php
include_once '../../business/TextPageBusiness.php';
include_once '../../domain/TextPage.php';
$textPageBusiness = new TextPageBusiness();

//Datos recibidos
$action = (isset($_GET["action"]))? $_GET["action"] : "";
$filtrado = (isset($_GET["filtrado"]))? $_GET["filtrado"] : "";

switch ($action) {
    
    /*
     * Actualiza un texto de la página
     */
    case "update":
        $textPageTem = new TextPage($_POST["idtextpage"], $_POST["keytext"], $_POST["language"],
                $_POST["page"], $_POST["text"]);
        
        $textPageBusiness->updateTextPageBusiness($textPageTem);
        header("Location: ../../views/admin/adminTextPage.php?filtrado=".$filtrado);
        break;
        
    /*
     * En caso de que no se logre saber la accion se vuelve a la vista sin hacer ningun cambio.
     */
    
    default:
       header("Location: ../../views/admin/adminProduct");
}