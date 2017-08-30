<?php

include_once './data/CommentData.php';

class CommentBusiness extends CommentData{
    
    //retorna todos los comentarios
    public function getAllCommentBusiness() {
        return $this->getAllCommentData();
    }
}