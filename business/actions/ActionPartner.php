<?php
include_once '../../business/PartnerBusiness.php';
include_once '../../domain/Partner.php';
$partnerBusiness =  new PartnerBusiness();

$action = (isset($_GET["action"]))? $_GET["action"] : "";

switch ($action) {
    
    /*
     * Actualiza un socio
     */
    case "update":
        $partner = new Partner($_POST["idpartner"], $_POST["link"], $_POST["name"]);        
        $partnerBusiness->updatePartnerBusiness($partner);
        header("Location: ../../views/admin/adminPartner.php");
        break;
    
    /*
     * Inserta un socio
     */
    case "insert":
        $partner = new Partner(0, $_POST["link"], $_POST["name"]);        
        $partnerBusiness->insertPartnerBusiness($partner);
        header("Location: ../../views/admin/adminPartner.php");
        break;
    
    /*
     * Elimina un socio
     */
    case "delete":
        $partnerBusiness->deletePartnerBusiness($_GET["idpartner"]);
        header("Location: ../../views/admin/adminPartner.php");
        break;
    
    
    /*
     * En caso de que no se logre saber la accion se vuelve a la vista sin hacer ningun cambio.
     */
    
    default:
       header("Location: ../../views/admin/adminPartner.php");
}