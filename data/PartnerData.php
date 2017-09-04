<?php

include_once './domain/Partner.php';
include_once './data/Connection.php';

class PartnerData {
    
    public $connection;
    function __construct() {
        $this->connection = new Connection();
    }

    /*
     * retorna todos los socios
     */
    public function getAllPartnerData() {
        $condition = "";
        $information = "*";
        
        $result = $this->connection->findAll($information, "partners",$condition);
        $array = array();
        while ($partnerTem = mysqli_fetch_array($result)){
            $partner = new Partner($partnerTem["idpartner"], $partnerTem["link"], $partnerTem["name"]);
            array_push($array, $partner);
        }
        return $array;
    }    
    
    /*
     * Actualiza un socio recibido
     */
    public function updatePartnerData($partner){
        $attributes = "link = '".$partner->link . "', name = '".$partner->name . "'";
        $condition = "idpartner = " . $partner->idpartner; 
        $table = "partners";
        $this->connection->update($attributes, $table, $condition);
    }
    
    /*
     * Inserta un socio recibido
     */
    public function insertPartnerData($partner){
        $attributes = "null, '".$partner->link . "', '".$partner->name . "'";
        $table = "partners";
        $this->connection->insert($attributes,$table);
    }
    
    /*
     * Elimina un elemento
     */
    public function deletePartnerData($partner){
        print_r($partner);
        $condition = "idpartner = " . $partner;
        $this->connection->delete("partners", $condition);
    }
}