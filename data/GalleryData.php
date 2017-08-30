<?php

include_once './domain/Gallery.php';
include_once './data/Connection.php';

class GalleryData {
    
    public $connection;
    function __construct() {
        $this->connection = new Connection();
    }

    /*
     * retorna todas las imagenes de galería
     */
    public function getAllGalleryData($language) {
        $condition = "language = '" . $language . "'";
        $result = $this->connection->findAll("*", "gallery",$condition);
        $array = array();
        while ($image = mysqli_fetch_array($result)){
            $path = $this->connection->findOne("path","image","idimage = " . $image["image"]);
            
            $imageTem = new Gallery($image["idgallery"], $image["description"], $path["path"], $image["language"]);
            array_push($array, $imageTem);
        }
        return $array;
    }
}