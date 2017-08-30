<?php

include_once './domain/TextPage.php';
include_once './data/Connection.php';

class TextPageData {
    
    public $connection;
    function __construct() {
        $this->connection = new Connection();
    }

    /*
     * retorna los textos de la pagina reciida y en el lenguaje recibido
     */
    public function getTextByPageData($language,$page) {
        $condition = "language = '" . $language . "' AND page = '" . $page . "'";
        $information = "keytext, text";
        
        $result = $this->connection->findAll($information, "textpage",$condition);
        $array = array();
        while ($tem = mysqli_fetch_array($result)){
            $array[$tem["keytext"]] =  $tem["text"];
        }
        return $array;
    }    
}