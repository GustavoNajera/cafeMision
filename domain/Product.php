<?php

class Product {
    
    //atributos
    public $idproduct;
    public $descriptiones;
    public $descriptionin;
    public $image;
    public $namees;
    public $namein;
    
    function __construct($idproduct, $descriptiones, $descriptionin, $image, $namees, $namein) {
        $this->idproduct = $idproduct;
        $this->descriptiones = $descriptiones;
        $this->descriptionin = $descriptionin;
        $this->image = $image;
        $this->namees = $namees;
        $this->namein = $namein;
    }


}
