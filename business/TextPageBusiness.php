<?php

include_once './data/TextPageData.php';

class TextPageBusiness extends TextPageData{
    
    //retorna los textos de la pagina recibida por parametros en el lenguaje elegido
    public function getTextByPageBusiness($page) {
        return $this->getTextByPageData("ingles", $page);
    }
}