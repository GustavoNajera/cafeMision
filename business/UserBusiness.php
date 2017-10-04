<?php

include_once '../../data/UserData.php';

class UserBusiness extends UserData{
    
    //retorna los usuerioa
    public function getUserByIdBusiness() {
        if ( ! session_id() ) @ session_start();
        return $this->getUserByIdData($_SESSION["id"]);
    }
    
    //Actualiza userBusiness
    public function updateUserBusiness($user) {
        return $this->updateUserData($user);
    }
    
    //Insert userBusiness
    public function insertUserBusiness($user) {
        return $this->insertUserData($user);
    }
}