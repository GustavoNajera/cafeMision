<?php
include_once './business/TextPageBusiness.php';
include_once './domain/TextPage.php';
$textPageBusiness = new TextPageBusiness();

switch ($action) {
    
    /*
     * Actualiza un texto de la página
     */
    case "update":
        $textPageTem = new TextPage($_POST["idtextpage"], $_POST["keytext"], $_POST["language"],
                $_POST["page"], $_POST["text"]);
        
        $textPageBusiness->updateTextPageBusiness($textPageTem);
        header("Location: ./adminTextPage?filtrado=".$filtrado);
        break;
        
    /*
     * En caso de que no se logre saber la accion se vuelve a la vista sin hacer ningun cambio.
     */
    
    default:
       header("Location: ./adminProduct");
}