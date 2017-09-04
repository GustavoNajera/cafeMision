<?php

class TextPage {
    
    //atributos
    public $idtextpage;
    public $keytext;
    public $language;
    public $page;
    public $text;
    
    function __construct($idtextpage, $keytext, $language, $page, $text) {
        $this->idtextpage = $idtextpage;
        $this->keytext = $keytext;
        $this->language = $language;
        $this->page = $page;
        $this->text = $text;
    }


}
