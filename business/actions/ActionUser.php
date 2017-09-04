<?php
include_once './business/UserBusiness.php';
include_once './domain/User.php';
$userBusiness = new UserBusiness();
//Se obtiene la ruta de las imágenes
$pathTem = json_decode(file_get_contents("./config.json"),true)["IMG"];
$pathUser = $pathTem["imgUser"];

switch ($action) {
    
    /*
     * Actualiza un producto
     */
    case "update":
        $image = "";
        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
             $ruta = $pathUser . $_FILES['image']['name'];
              $resultado = @move_uploaded_file($_FILES["image"]["tmp_name"], $ruta);
              unlink($pathUser . $_POST["imageOriginal"]);//Eliminar imagen original
               if ($resultado) {
                   $image = $_FILES['image']['name'];
               }
        }
        else{
            $image = $_POST["imageOriginal"];
        }
        $user = new User($_POST["iduser"], $_POST["email"], $_POST["idcard"], $image,
                $_POST["lastname"], $_POST["name"], $_POST["password"], $_POST["user"], $_POST["role"]);
        
        $userBusiness->updateUserBusiness($user);
        header("Location: ./adminUser");
        break;
        
    /*
    * Inserta un producto
    */
    case "insert":
        $image = "";
        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
             $ruta = $pathUser . $_FILES['image']['name'];
              $resultado = @move_uploaded_file($_FILES["image"]["tmp_name"], $ruta);
               if ($resultado) {
                   $image = $_FILES['image']['name'];
               }
        }
        else{
            $image = "";
        }
        $user = new User(0, $_POST["email"], $_POST["idcard"], $image,
                $_POST["lastname"], $_POST["name"], $_POST["password"], $_POST["user"], "empleado");
        
        $userBusiness->insertUserBusiness($user);
        header("Location: ./SessionLogIn");
        break;
        
    /*
     * En caso de que no se logre saber la accion se vuelve a la vista sin hacer ningun cambio.
     */
    
    default:
       header("Location: ./SessionLogIn");
}