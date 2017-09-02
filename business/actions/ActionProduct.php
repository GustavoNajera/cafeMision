<?php
include_once './business/ProductBusiness.php';
include_once './domain/Product.php';
$productBusiness = new ProductBusiness();

switch ($action) {
    
    case "update":
        $image = "";
        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
             $ruta = "public/images/" . $_FILES['image']['name'];
              $resultado = @move_uploaded_file($_FILES["image"]["tmp_name"], $ruta);
               if ($resultado) {
                   $image = $_FILES['image']['name'];
               }
        }
        else{
            $image = $_POST["imageOriginal"];
        }
        //Se crea el objeto
        $productTem = new Product($_POST["idproduct"], $_POST["description"],
                $image, $_POST["language"], $_POST["nameproduct"]);
        
        $productBusiness->updateProductBusiness($productTem);
        header("Location: ./adminProduct-".$filtrado);
        break;
    
    default:
       header("Location: ./adminProduct-".$filtrado);
}