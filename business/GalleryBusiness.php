<?php

include_once './data/GalleryData.php';

class GalleryBusiness extends GalleryData{
    
    //retorna todas las imagenes de galeria
    public function getAllGalleryBusiness() {
        return $this->getAllGalleryData();
    }
    
    //retorna los elementos de la galería en el lenguaje especificado
    public function getAllGalleryLenBusiness() {
        return $this->getAllGalleryData();
    }
    
    //retorna los elementos de la galería en el lenguaje especificado
    public function updateGalleryBusiness($gallery) {
        return $this->updateGalleryData($gallery);
    }
    
    /*
    * Inserta un elemento de galería
    */
    public function insertGalleryBusiness($gallery){
        $attributes = "null, '". $gallery->image . "','". $gallery->descriptionEs ."','".$gallery->descriptionIn."'";
        $table = "gallery";
        $this->connection->insert($attributes,$table);
    }
    
    
    /*
    * Inserta un elemento de galería
    */
    public function deleteGalleryBusiness($gallery){
        $this->deleteGalleryData($gallery);
    }
}