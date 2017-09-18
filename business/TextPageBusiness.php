<?php

include_once '../../data/TextPageData.php';

class TextPageBusiness extends TextPageData{
    
    //retorna los textos de la pagina recibida por parametros en el lenguaje elegido
    public function getTextByPageBusiness($page) {
        if ( ! session_id() ) @ session_start();
        $language = isset($_SESSION["language"])?$_SESSION["language"] : "spanish";
        return $this->getTextByPageData($language, $page);
    }
    
    //retorna los textos de la pagina recibida por parametros en el lenguaje elegido
    public function getTextByLanguageBusiness($language) {
        return $this->getTextByLanguageData($language);
    }
    
     //Actualiza el producto recibido
    public function updateTextPageBusiness($textPage) {
        return $this->updateTextPageData($textPage);
    }
    
    //retorna los textos de la pagina recibida por parametros en el lengage elegido
    public function getTextByPageAdminBusiness($page, $language) {
        return $this->getTextByPageData($language, $page);
    }
}