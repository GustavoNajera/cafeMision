<?php
include_once './business/ProductBusiness.php';
include_once './domain/Product.php';
$productBusiness = new ProductBusiness();
//Se obtiene la ruta de las imágenes
$pathTem = json_decode(file_get_contents("./config.json"),true)["IMG"];
$pathProduct = $pathTem["imgProduct"];

switch ($action) {
    
    /*
     * Actualiza un producto
     */
    case "update":
        $image = "";
        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
             $ruta = $pathProduct . $_FILES['image']['name'];
              $resultado = @move_uploaded_file($_FILES["image"]["tmp_name"], $ruta);
              unlink($pathProduct . $_POST["imageOriginal"]);//Eliminar imagen original
               if ($resultado) {
                   $image = $_FILES['image']['name'];
               }
        }
        else{
            $image = $_POST["imageOriginal"];
        }
        $productTem = new Product($_POST["idproduct"], $_POST["descriptiones"], $_POST["descriptionin"],
                $image, $_POST["namees"], $_POST["namein"]);
        
        $productBusiness->updateProductBusiness($productTem);
        header("Location: ./adminProduct");
        break;
        
        
    /*
     * Actualiza un producto
     */
    case "insert":
        $image = "";
        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
             $ruta = $pathProduct . $_FILES['image']['name'];
              $resultado = @move_uploaded_file($_FILES["image"]["tmp_name"], $ruta);
               if ($resultado) {
                   $image = $_FILES['image']['name'];
               }
        }
        else{
            $image = "";
        }
        $productTem = new Product(0, $_POST["descriptiones"], $_POST["descriptionin"],
                $image, $_POST["namees"], $_POST["namein"]);
        
        $productBusiness->insertProductBusiness($productTem);
        header("Location: ./adminProduct");
        break;
        
         /*
    * Inserta un socio
    */
    case "delete":
        $productBusiness->deleteProductBusiness($_GET["idproduct"]);
        unlink($pathProduct . $_GET["image"]);//Eliminar imagen original
        header("Location: ./adminProduct");
        break;
        
            
    /*
     * En caso de que no se logre saber la accion se vuelve a la vista sin hacer ningun cambio.
     */
    
    default:
       header("Location: ./adminProduct");
}