<?php

class Gallery {
    
    //atributos
    public $idgallery;
    public $description;
    public $image;
    public $language;
    
    function __construct($idgallery, $description, $image, $language) {
        $this->idgallery = $idgallery;
        $this->description = $description;
        $this->image = $image;
        $this->language = $language;
    }

}