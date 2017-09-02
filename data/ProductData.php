<?php

include_once './domain/Product.php';
include_once './data/Connection.php';

class ProductData {
    
    public $connection;
    function __construct() {
        $this->connection = new Connection();
    }

    /*
     * retorna los productos en el idioma seleccionado
     */
    public function getAllProductData($language) {
        $condition = "language = '" . $language . "'";
        $information = "*";
        
        $result = $this->connection->findAll($information, "product",$condition);
        $array = array();
        while ($productTem = mysqli_fetch_array($result)){
            $productTem = new Product($productTem["idproduct"], $productTem["description"], $productTem["image"], $productTem["language"], $productTem["nameproduct"]);
            array_push($array, $productTem);
        }
        return $array;
    }    
    
    /*
     * retorna un producto en el idioma seleccionado
     */
    public function getOneProductData($language,$product) {
        $condition = "language = '" . $language . "' AND UPPER(nameproduct) = UPPER('" . $product . "')";
        $productTem = $this->connection->findOne("*", "product", $condition);
        return new Product($productTem["idproduct"], $productTem["description"], $productTem["image"],
                $productTem["language"], $productTem["nameproduct"]);
    }
    
    /*
     * Actualiza la información de la empresa
     */
    public function updateProductData($product){
        $attributes = "description = '".$product->description . "', image = '" . $product->image .
                "', nameproduct = '" . $product->nameproduct . "'";
        
        $condition = "idproduct = " . $product->idproduct . " && language = '" . $product->language . "'"; 
        $table = "product";
        $this->connection->update($attributes, $table, $condition);
    }
}