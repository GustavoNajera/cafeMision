<?php
    class Connection{
        
        /*
        * Se hacen global la conección a la Base de datos en el constructor
        */
       public $link;
       function __construct() {
            //Se obtienen las credenciales de la conección desde el archivo config.json
            $credenciales = json_decode(file_get_contents("./config.json"),true)["BD"];
            
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
            return mysqli_query($this->link, $query);
       }
       

    }

