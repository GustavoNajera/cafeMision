<?php  
include_once '../../Data/UserData.php';

class SessionBusiness{
    
    /*
     * Guarda la información del usuario en sesión
     */
    public function logIn($user,$password){
        //Se verifica en base de datos que los datos sean correctos
        $userData = new UserData();
        $userResult =  $userData->getUserSession($user, $password);
        
        if($userResult->user && $userResult->user != ""){
            if ( ! session_id() ) @ session_start();
            $_SESSION["user"]=$userResult->user;
            $_SESSION["id"]=$userResult->iduser;
            $_SESSION["role"]=$userResult->role;
            $_SESSION["language"] = "ingles";
            
            if($userResult->role == "administrador"){
                header("Location: ../../views/admin/adminIndex.php");
            }else{
                header("Location: ../../views/cliente/index.php");
            }
        }
        else{
            header("Location: ../../views/cliente/session.php");
        }
    }//Fin de logueo
    
    /*
     * Verifica si el usuario esta logueado
     */
    public function getUser(){
            if ( ! session_id() ) @ session_start();
            if (isset($_SESSION["user"]) && $_SESSION["user"] != ""){
                return true;
            }
            return false;
    }//Fin de logueo
    
    
    /*
     * Verifica si el usuario esta logueado
     */
    public function logOut(){
        if ( ! session_id() ) @ session_start();
            unset($_SESSION["user"]);
            unset($_SESSION["id"]);
            unset($_SESSION["language"]);
            header("Location: ../../views/cliente/session.php");
    }//Fin de logueo
    
    
}
    