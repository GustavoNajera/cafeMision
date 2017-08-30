<?php

include_once './data/GalleryData.php';

class GalleryBusiness extends GalleryData{
    
    //retorna todas las imagenes de galeria
    public function getAllGalleryBusiness() {
        return $this->getAllGalleryData("ingles");
    }
}