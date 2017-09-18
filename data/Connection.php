<?php
    class Connection{
        
        /*
        * Se hacen global la conección a la Base de datos en el constructor
        */
       public $link;
       function __construct() {
            //Se obtienen las credenciales de la conección desde el archivo config.json
            $credenciales = json_decode(file_get_contents("../../config.json"),true)["BD"];
            
            //Se hace la conección
            $link = mysqli_connect($credenciales['server'], $credenciales['user'], $credenciales['password'],$credenciales['db']);
            mysqli_query($link,"SET NAMES 'utf8'");
            mysqli_select_db($link, $credenciales['db']);
            $this->link = $link;
       }
       
       
       /*
        * Obtiene un registro de la Base de la tabla recibida
        */
       public function findOne($attributes, $table,$condition){
            if($condition != ""){
                $condition =  " where " . $condition;
            }
            $query = "SELECT ". $attributes ." FROM " . $table . $condition;
            $result = mysqli_query($this->link, $query);
            return mysqli_fetch_array($result);
       }
       
       /*
        * Obtiene todos los registros de la Base de la tabla recibida
        */
       public function findAll($attributes, $table,$condition){
            if($condition != ""){
                $condition =  " where " . $condition;
            }
            $query = "SELECT ". $attributes ." FROM " . $table . $condition;
//            var_dump($query);
//            exit;
            return mysqli_query($this->link, $query);
       }
       
       /*
        * Actualiza registros de una tabla
        */
       public function update($attributes, $table,$condition){
             $sql = "UPDATE ".$table." SET " . $attributes . " WHERE " . $condition;
            return mysqli_query($this->link, $sql);
       }
       
       /*
        * Inserta registros de una tabla
        */
       public function insert($attributes, $table){
             $sql = "insert into ".$table." values(" . $attributes . ")";
            return mysqli_query($this->link, $sql);
       }
       
       /*
        * Elimina registro de una tabla
        */
       public function delete($table,$condition){
             $sql = "DELETE FROM ".$table." WHERE " . $condition;
            return mysqli_query($this->link, $sql);
       }
       

    }

