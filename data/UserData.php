<?php

include_once './domain/User.php';
include_once './data/Connection.php';

class UserData {
    
    public $connection;
    function __construct() {
        $this->connection = new Connection();
    }

    /*
     * retorna el usuario filtrado por el id
     */
    public function getUserByIdData($iduser) {
        $condition = "iduser = " . $iduser;
        $userTem = $this->connection->findOne("*", "user",$condition);        
        
        return new User($userTem["iduser"], $userTem["email"], $userTem["idcard"], $userTem["image"],
                    $userTem["lastname"], $userTem["name"], $userTem["password"], $userTem["user"]);
    }  
    
    /*
     * retorna el usuario filtrado por username/email y la contraseña
     */
    public function getUserSession($user, $password) {
        $condition = "(user = '" . $user . "' || email = '" . $user . "') && password = '" . $password . "'";
        $userTem = $this->connection->findOne("*", "user",$condition);        
        
        return new User($userTem["iduser"], $userTem["email"], $userTem["idcard"], $userTem["image"],
                    $userTem["lastname"], $userTem["name"], $userTem["password"], $userTem["user"]);
    }    
    
}