<?php

include_once './data/ProductData.php';

class ProductBusiness extends ProductData{
    
    //retorna los productos en el lenguaje elegido
    public function getAllproductBusiness() {
        return $this->getAllproductData("ingles");
    }
    
    //retorna un producto en el lenguaje elegido
    public function getOneproductBusiness($product) {
        return $this->getOneProductData("ingles",$product);
    }
    
    //retornalos productos en el lenguaje elegido
    public function getAllproductLenBusiness($language) {
        return $this->getAllproductData($language);
    }
    
    //Actualiza el producto recibido
    public function updateProductBusiness($product) {
        return $this->updateProductData($product);
    }
}