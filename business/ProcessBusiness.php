<?php

include_once './data/ProcessData.php';

class ProcessBusiness extends ProcessData{
    
    //retorna los procesos en el lenguaje elegido
    public function getAllprocessBusiness() {
        return $this->getAllProcessData("ingles");
    }
    
}