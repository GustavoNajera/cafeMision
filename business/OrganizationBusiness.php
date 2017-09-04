<?php

include_once './data/OrganizationData.php';

class OrganizationBusiness extends OrganizationData{
    
    //retorna los datos de la empresa, en ambos idiomas
    public function getOrganizationBusiness() {
        if ( ! session_id() ) @ session_start();
        $language = isset($_SESSION["language"])?$_SESSION["language"] : "ingles";
        return $this->getOrganizationData($language);
    }
    
    //retorna los datos de la empresa, en el idioma elegido
    public function getOrganizationBusinessLan($language) {
        return $this->getOrganizationData($language);
    }
    
    //retorna los datos de la empresa, en el idioma elegido
    public function updateOrganizationBusiness($organization) {
        return $this->updateOrganizationData($organization);
    }
}