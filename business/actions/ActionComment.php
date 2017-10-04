<?php
include_once '../../business/CommentBusiness.php';
include_once '../../domain/Comment.php';
$commentBusiness = new CommentBusiness();
$action = (isset($_GET["action"]))? $_GET["action"] : "";

switch ($action) {
    
    /*
    * Inserta un comentario
    */
    case "insert":
        $comment = new Comment(0, $_POST["comment"], $_POST["iduser"]);
        $commentBusiness->insertCommentBusiness($comment);
        header("Location: ../../views/cliente/testimonials.php");
        break;
        
    /*
     * En caso de que no se defina una acción se vuelve a la vista sin hacer ninguna acción 
     */
    default:
       header("Location: ../../views/cliente/testimonials.php");
}