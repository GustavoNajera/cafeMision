<?php

include_once './domain/Process.php';
include_once './data/Connection.php';

class ProcessData {
    
    public $connection;
    function __construct() {
        $this->connection = new Connection();
    }

    /*
     * retorna los procesos en el idioma seleccionado
     */
    public function getAllProcessData($language) {
        $condition = "language = '" . $language . "'";
        $information = "*";
        
        $result = $this->connection->findAll($information, "process",$condition);
        $array = array();
        while ($processTem = mysqli_fetch_array($result)){
            $process = new Process($processTem["idprocess"], $processTem["description"], $processTem["image"],
                    $processTem["language"], $processTem["name"]);
            array_push($array, $process);
        }
        return $array;
    }    
}