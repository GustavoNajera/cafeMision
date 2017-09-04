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

    /*
     * retorna los textos de la pagina reciida y en el lenguaje recibido
     */
    public function getTextByLanguageData($language) {
        $condition = "language = '" . $language . "'";
        $information = "*";
        
        $result = $this->connection->findAll($information, "textpage",$condition);
        $array = array();
        while ($tem = mysqli_fetch_array($result)){
            $textPageTem = new TextPage($tem["idtextpage"], $tem["keytext"], $tem["language"], $tem["page"], $tem["text"]);
            
            array_push($array, $textPageTem);
        }
        return $array;
    }
    
    
    /*
     * Actualiza el texto de la página
     */
    public function updateTextPageData($textPage){
        $attributes = "keytext = '".$textPage->keytext . "'," .
                "text = '" . $textPage->text . "', language = '" . $textPage->language . "'";
        
        $condition = "idtextpage = " . $textPage->idtextpage; 
        $table = "textpage";
        $this->connection->update($attributes, $table, $condition);
    }
}