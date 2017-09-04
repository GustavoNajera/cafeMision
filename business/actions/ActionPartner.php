<?php
include_once './business/PartnerBusiness.php';
include_once './domain/Partner.php';
$partnerBusiness =  new PartnerBusiness();

switch ($action) {
    
    /*
     * Actualiza un socio
     */
    case "update":
        $partner = new Partner($_POST["idpartner"], $_POST["link"], $_POST["name"]);        
        $partnerBusiness->updatePartnerBusiness($partner);
        header("Location: ./adminPartner");
        break;
    
    /*
     * Inserta un socio
     */
    case "insert":
        $partner = new Partner(0, $_POST["link"], $_POST["name"]);        
        $partnerBusiness->insertPartnerBusiness($partner);
        header("Location: ./adminPartner");
        break;
    
    /*
     * Elimina un socio
     */
    case "delete":
        $partnerBusiness->deletePartnerBusiness($_GET["idpartner"]);
        header("Location: ./adminPartner");
        break;
    
    
    /*
     * En caso de que no se logre saber la accion se vuelve a la vista sin hacer ningun cambio.
     */
    
    default:
       header("Location: ./adminPartner");
}