<?php

class User {
    
    //atributos
    public $iduser;
    public $email;
    public $idcard;
    public $image;
    public $lastname;
    public $name;
    public $password;
    public $user;
    public $role;
    
    function __construct($iduser, $email, $idcard, $image, $lastname, $name, $password, $user, $role) {
        $this->iduser = $iduser;
        $this->email = $email;
        $this->idcard = $idcard;
        $this->image = $image;
        $this->lastname = $lastname;
        $this->name = $name;
        $this->password = $password;
        $this->user = $user;
        $this->role = $role;
    }

    

}