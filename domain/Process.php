<?php

class Process {
    
    //atributos
    public $idprocess;
    public $descriptiones;
    public $descriptionin;
    public $image;
    public $namees;
    public $namein;

    function __construct($idprocess, $descriptiones, $descriptionin, $image, $namees, $namein) {
        $this->idprocess = $idprocess;
        $this->descriptiones = $descriptiones;
        $this->descriptionin = $descriptionin;
        $this->image = $image;
        $this->namees = $namees;
        $this->namein = $namein;
    }


}