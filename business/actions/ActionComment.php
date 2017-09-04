<?php
include_once './business/CommentBusiness.php';
include_once './domain/Comment.php';
$commentBusiness = new CommentBusiness();

switch ($action) {
    
    /*
    * Inserta un comentario
    */
    case "insert":
        $comment = new Comment(0, $_POST["comment"], $_POST["iduser"]);
        $commentBusiness->insertCommentBusiness($comment);
        header("Location: ./testimonials");
        break;
        
    /*
     * En caso de que no se defina una acción se vuelve a la vista sin hacer ninguna acción 
     */
    default:
       header("Location: ./testimonials");
}