<?php

include_once '../../domain/User.php';
include_once '../../data/Connection.php';

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
                    $userTem["lastname"], $userTem["name"], $userTem["password"], $userTem["user"], $userTem["role"]);
    }  
    
    /*
     * retorna el usuario filtrado por username/email y la contraseña
     */
    public function getUserSession($user, $password) {
        $condition = "(user = '" . $user . "' || email = '" . $user . "') && password = '" . $password . "'";
        $userTem = $this->connection->findOne("*", "user",$condition);        
        
        return new User($userTem["iduser"], $userTem["email"], $userTem["idcard"], $userTem["image"],
                    $userTem["lastname"], $userTem["name"], $userTem["password"], $userTem["user"], $userTem["role"]);
    }    
    
    /*
     * Actualiza un usuario
     */
    public function updateUserData($user){
        $attributes = "name = '".$user->name . "',email = '".$user->email .
                "', idcard = '" . $user->idcard . "', image = '" . $user->image . "', " . " lastname = '" .
                $user->lastname . "', password = '" . $user->password . "', user = '" . $user->user . "'";
        
        $condition = "iduser = " . $user->iduser; 
        $table = "user";
        $this->connection->update($attributes, $table, $condition);
    }  
    
    /*
    * Inserta un elemento de galería
    */
    public function insertUserData($user){
        $attributes = "null,'". $user->name."','". $user->lastname."','". $user->idcard."','".$user->user."','".
                $user->email . "','".$user->password . "','". $user->image."','".$user->role."'";
        $table = "user";
        $this->connection->insert($attributes,$table);
    }
    
}