<?php

switch ($action) {
    
    /*
     * Actualiza el lenguage a español
     */
    case "es":
        if ( ! session_id() ) @ session_start();
        $_SESSION["language"] = "spanish";
        header("Location: ./". $filtrado);
        break;
    
    /*
    * Actualiza el lenguage a ingles
    */
    case "in":
        if ( ! session_id() ) @ session_start();
        $_SESSION["language"] = "ingles";
        header("Location: ./". $filtrado);
        break;
       
    /*
     * En caso de que no se defina una acción se selecciona el ingles
     */
    default:
       header("Location: ./");
}