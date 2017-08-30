<?php

class Product {
    
    //atributos
    public $idproduct;
    public $description;
    public $image;
    public $language;
    public $nameproduct;
    
    function __construct($idproduct, $description, $image, $language, $nameproduct) {
        $this->idproduct = $idproduct;
        $this->description = $description;
        $this->image = $image;
        $this->language = $language;
        $this->nameproduct = $nameproduct;
    }


}
