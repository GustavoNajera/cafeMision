<?php

include_once './domain/Comment.php';
include_once './data/UserData.php';
include_once './data/Connection.php';

class CommentData {
    
    public $connection;
    function __construct() {
        $this->connection = new Connection();
    }

    /*
     * retorna todos los comentarios
     */
    public function getAllCommentData() {        
        $userData = new UserData();
        $result = $this->connection->findAll("*", "comment","");
        
        $array = array();
        while ($comment = mysqli_fetch_array($result)){
            $user = $userData->getUserByIdData($comment["userfk"]);//Se obtiene la info del usuario
            $commentTem = new Comment($comment["idcomment"], $comment["comment"], $user);
            array_push($array, $commentTem);
        }
        return $array;
    }
}