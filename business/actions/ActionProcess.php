<?php
include_once './business/ProcessBusiness.php';
include_once './domain/Process.php';
$processBusiness =  new ProcessBusiness();
//Se obtiene la ruta de las imágenes
$pathTem = json_decode(file_get_contents("./config.json"),true)["IMG"];
$pathProcess = $pathTem["imgProcess"];

switch ($action) {
    
    /*
     * Actualiza un proceso
     */
    case "update":
        $image = "";
        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
             $ruta = $pathProcess . $_FILES['image']['name'];
              $resultado = @move_uploaded_file($_FILES["image"]["tmp_name"], $ruta);
              unlink($pathProcess . $_POST["imageOriginal"]);//Eliminar imagen original
               if ($resultado) {
                   $image = $_FILES['image']['name'];
               }
        }
        else{
            $image = $_POST["imageOriginal"];
        }
        
        $processTem = new Process($_POST["idprocess"], $_POST["descriptiones"], $_POST["descriptionin"],
                $image, $_POST["namees"], $_POST["namein"]);
        
        $processBusiness->updateProcessBusiness($processTem);
        header("Location: ./adminProcess");
        break;
        
     /*
     * Inserta un proceso
     */
    case "insert":
        $image = "";
        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
             $ruta = $pathProcess . $_FILES['image']['name'];
              $resultado = @move_uploaded_file($_FILES["image"]["tmp_name"], $ruta);
               if ($resultado) {
                   $image = $_FILES['image']['name'];
               }
        }
        else{
            $image = "";
        }
        
        $processTem = new Process(0, $_POST["descriptiones"], $_POST["descriptionin"],
                $image, $_POST["namees"], $_POST["namein"]);
        
        $processBusiness->insertProcessBusiness($processTem);
        header("Location: ./adminProcess");
        break;
        
    /*
    * Inserta un socio
    */
    case "delete":
        $processBusiness->deleteProcessBusiness($_GET["idprocess"]);
        unlink($pathProcess . $_GET["image"]);//Eliminar imagen original
        header("Location: ./adminProcess");
        break;
        
        
    /*
     * En caso de que no se logre saber la accion se vuelve a la vista sin hacer ningun cambio.
     */
    
    default:
       header("Location: ./adminProcess");
}