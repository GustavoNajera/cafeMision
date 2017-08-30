<?php

include_once './data/OrganizationData.php';

class OrganizationBusiness extends OrganizationData{
    
    //retorna los datos de la empresa, en ambos idiomas
    public function getOrganizationBusiness() {
        return $this->getOrganizationData("ingles");
    }
}