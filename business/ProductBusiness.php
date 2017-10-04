<?php

include_once '../../data/ProductData.php';

class ProductBusiness extends ProductData{
    
    //retorna los productos en el lenguaje elegido
    public function getAllproductBusiness() {
        return $this->getAllproductData();
    }
    
    //retorna un producto en el lenguaje elegido
    public function getOneproductBusiness($product) {
        return $this->getOneProductData($product);
    }
    
    //retornalos productos en el lenguaje elegido
    public function getAllproductLenBusiness() {
        return $this->getAllproductData();
    }
    
    //Actualiza el producto recibido
    public function updateProductBusiness($product) {
        return $this->updateProductData($product);
    }
    //Inserta el producto recibido
    public function insertProductBusiness($product) {
        return $this->insertProductData($product);
    }
    
    //Inserta el producto recibido
    public function deleteProductBusiness($product) {
        return $this->deleteProductData($product);
    }
    
}