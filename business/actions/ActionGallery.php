<?php
include_once './business/GalleryBusiness.php';
include_once './domain/Gallery.php';
$galleryBusiness = new GalleryBusiness();
//Se obtiene la ruta de las imágenes
$pathTem = json_decode(file_get_contents("./config.json"),true)["IMG"];
$pathGallery = $pathTem["imgGallery"];
switch ($action) {
    
    /*
     * Actualiza la información de una imagen de galería
     */
    case "update":
        $image = "";
        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
             $ruta = $pathGallery . $_FILES['image']['name'];
              $resultado = @move_uploaded_file($_FILES["image"]["tmp_name"], $ruta);
              unlink($pathGallery . $_POST["imageOriginal"]);//Eliminar imagen original
               if ($resultado) {
                   $image = $_FILES['image']['name'];
               }
        }
        else{
            $image = $_POST["imageOriginal"];
        }
        //Se crea el objeto
        $galleryTem = new Gallery($_POST["idgallery"], $image, $_POST["descriptionEs"], $_POST["descriptionIn"]);
        
        $galleryBusiness->updateGalleryBusiness($galleryTem);
        header("Location: ./adminGallery");
        break;
    
    /*
    * Inserta un socio
    */
    case "insert":
        
         $image = "";
        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
             $ruta = $pathGallery . $_FILES['image']['name'];
              $resultado = @move_uploaded_file($_FILES["image"]["tmp_name"], $ruta);
               if ($resultado) {
                   $image = $_FILES['image']['name'];
               }
        }
        else{
            $image = "";
        }
        //Se crea el objeto
        $galleryTem = new Gallery(0, $image, $_POST["descriptionEs"], $_POST["descriptionIn"]);
        
        $galleryBusiness->insertGalleryBusiness($galleryTem);
        header("Location: ./adminGallery");
        break;
        
    /*
    * Inserta un socio
    */
    case "delete":
        $galleryBusiness->deleteGalleryBusiness($_GET["idgallery"]);
        unlink($pathGallery . $_GET["image"]);//Eliminar imagen original
        header("Location: ./adminGallery");
        break;
        
    /*
     * En caso de que no se defina una acción se vuelve a la vista sin hacer ninguna acción 
     */
    default:
       header("Location: ./adminGallery");
}