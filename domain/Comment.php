<?php

class Comment {
    
    //atributos
    public $idcomment;
    public $comment;
    public $user;
    
    function __construct($idcomment, $comment, $user) {
        $this->idcomment = $idcomment;
        $this->comment = $comment;
        $this->user = $user;
    }
}
