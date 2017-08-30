<?php

class Process {
    
    //atributos
    public $idprocess;
    public $description;
    public $image;
    public $language;
    public $name;

    function __construct($idprocess, $description, $image, $language, $name) {
        $this->idprocess = $idprocess;
        $this->description = $description;
        $this->image = $image;
        $this->language = $language;
        $this->name = $name;
    }
}