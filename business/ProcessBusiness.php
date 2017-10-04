<?php

include_once '../../data/ProcessData.php';

class ProcessBusiness extends ProcessData{
    
    //retorna los procesos en el lenguaje elegido
    public function getAllprocessBusiness() {
        return $this->getAllProcessData();
    }
    
    //Actualiza el proceso recibido
    public function updateProcessBusiness($process) {
        return $this->updateProcessData($process);
    }
    
    //Insertar el proceso recibido
    public function insertProcessBusiness($process) {
        return $this->insertProcessData($process);
    }
    
    //Elimina el proceso recibido
    public function deleteProcessBusiness($process) {
        return $this->deleteProcessData($process);
    }
    
}