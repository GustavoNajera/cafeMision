<?php

class Partner {
    
    //atributos
    public $idpartner;
    public $link;
    public $name;
    
    function __construct($idpartner, $link, $name) {
        $this->idpartner = $idpartner;
        $this->link = $link;
        $this->name = $name;
    }

    

}