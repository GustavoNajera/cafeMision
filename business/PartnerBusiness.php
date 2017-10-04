<?php

include_once '../../data/PartnerData.php';

class PartnerBusiness extends PartnerData{
    
    public function getAllPartenrBusiness() {
        return $this->getAllPartnerData();
    }
    
    //Actualiza el registro recibido
    public function updatePartnerBusiness($partner) {
        return $this->updatePartnerData($partner);
    }
    
    //Inserta el registro recibido
    public function insertPartnerBusiness($partner) {
        return $this->insertPartnerData($partner);
    }
    
    //Inserta el registro recibido
    public function deletePartnerBusiness($partner) {
        return $this->deletePartnerData($partner);
    }
    
}