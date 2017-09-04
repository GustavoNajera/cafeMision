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
    public function getAllProductData() {
        $condition = "";
        $information = "*";
        
        $result = $this->connection->findAll($information, "product",$condition);
        $array = array();
        while ($productTem = mysqli_fetch_array($result)){
            $productTem2 = new Product($productTem["idproduct"], $productTem["descriptiones"], $productTem["descriptionin"],
                    $productTem["image"], $productTem["namees"], $productTem["namein"]);
            array_push($array, $productTem2);
        }
        return $array;
    }    
    
    /*
     * retorna un producto en el idioma seleccionado
     */
    public function getOneProductData($product) {
        $condition = "UPPER(namees) = UPPER('" . $product . "') or UPPER(namein) = UPPER('" . $product . "')";
        $productTem = $this->connection->findOne("*", "product", $condition);
        return new Product($productTem["idproduct"], $productTem["descriptiones"], $productTem["descriptionin"],
                    $productTem["image"], $productTem["namees"], $productTem["namein"]);
    }
    
    /*
     * Actualiza un producto recibido
     */
    public function updateProductData($product){
        $attributes = "descriptionin = '".$product->descriptionin . "',descriptiones = '".$product->descriptiones .
                "', image = '" . $product->image . "', namees = '" . $product->namees . "', " .
                " namein = '" . $product->namein . "'";
        
        $condition = "idproduct = " . $product->idproduct; 
        $table = "product";
        $this->connection->update($attributes, $table, $condition);
    }
    /*
    * Inserta un elemento de galería
    */
    public function insertProductData($product){
        $attributes = "null, '". $product->namein . "','". $product->namees ."','".$product->descriptiones.
                "','".$product->descriptionin."','".$product->image."'";
        $table = "product";
        $this->connection->insert($attributes,$table);
    }
    
    /*
     * Elimina un elemento
     */
    public function deleteProductData($product){
        $condition = "idproduct = " . $product;
        $this->connection->delete("product", $condition);
    }
    
    
}