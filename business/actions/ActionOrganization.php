<?php
include_once './business/OrganizationBusiness.php';
include_once './domain/Organization.php';
$organizationBusiness = new OrganizationBusiness();

switch ($action) {
    
    /*
     * Actualiza la informacion de la organizacion
     */
    case "update":
        $organizationTem = new Organization($_POST["idorganization"], $_POST["mission"], $_POST["vission"], $_POST["production"],
            $_POST["socialresponsability"], $_POST["history"], $_POST["facebook"], $_POST["email"], $_POST["language"]);
        
        $organizationBusiness->updateOrganizationBusiness($organizationTem);
        header("Location: ./adminOrganization?filtrado=".$filtrado);
        break;
    
    default:
       header("Location: ./adminOrganization?filtrado=".$filtrado);
}