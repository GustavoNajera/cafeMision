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
    public function getAllProcessData() {
        $information = "*";
        
        $result = $this->connection->findAll($information, "process","");
        $array = array();
        while ($processTem = mysqli_fetch_array($result)){
            $process = new Process($processTem["idprocess"], $processTem["descriptiones"], $processTem["descriptionin"],
                    $processTem["image"], $processTem["namees"], $processTem["namein"]);
            array_push($array, $process);
        }
        return $array;
    }    
    
    /*
     * Actualiza un proceso
     */
    public function updateProcessData($process){
        $attributes = "descriptionin = '".$process->descriptionin ."', image = '".$process->image . 
                "',descriptiones = '".$process->descriptiones . "',".
                "namees = '".$process->namees . "',namein = '".$process->namein . "'";
        
        $condition = "idprocess = " . $process->idprocess; 
        $table = "process";
        $this->connection->update($attributes, $table, $condition);
    }
    
    /*
    * Inserta un proceso
    */
    public function insertProcessData($process){
        $attributes = "null,'" . $process->namees . "','" . $process->namein . "','" . $process->descriptiones
                . "','" . $process->descriptionin . "','" . $process->image . "'";
        $table = "process";
        $this->connection->insert($attributes,$table);
    }
    
    /*
     * Elimina un elemento
     */
    public function deleteProcessData($process){
        $condition = "idprocess = " . $process;
        $this->connection->delete("process", $condition);
    }

}