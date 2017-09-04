<?php

class Gallery {
    
    //atributos
    public $idgallery;
    public $image;
    public $descriptionEs;
    public $descriptionIn;
    
    function __construct($idgallery, $image, $descriptionEs, $descriptionIn) {
        $this->idgallery = $idgallery;
        $this->image = $image;
        $this->descriptionEs = $descriptionEs;
        $this->descriptionIn = $descriptionIn;
    }

}