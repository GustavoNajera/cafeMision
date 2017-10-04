<?php

include_once '../../domain/Gallery.php';
include_once '../../data/Connection.php';

class GalleryData {
    
    public $connection;
    function __construct() {
        $this->connection = new Connection();
    }

    /*
     * retorna todas las imagenes de galería
     */
    public function getAllGalleryData() {
        $condition = "";
        $result = $this->connection->findAll("*", "gallery",$condition);
        $array = array();
        while ($element = mysqli_fetch_array($result)){
            $imageTem = new Gallery($element["idgallery"], $element["image"], $element["descriptionEs"], $element["descriptionIn"]);
            array_push($array, $imageTem);
        }
        return $array;
    }

    /*
     * Actualiza un objeto de galería.
     */
    public function updateGalleryData($gallery){
        $attributes = "descriptionIn = '".$gallery->descriptionIn ."', image = '".$gallery->image . 
                "',descriptionEs = '".$gallery->descriptionEs . "'";
        
        $condition = "idgallery = " . $gallery->idgallery; 
        $table = "gallery";
        $this->connection->update($attributes, $table, $condition);
    }
    
    /*
     * Elimina un elemento
     */
    public function deleteGalleryData($gallery){
        $condition = "idgallery = " . $gallery;
        $this->connection->delete("gallery", $condition);
    }
}