<?php

//Datos recibidos
$action = (isset($_GET["action"]))? $_GET["action"] : "";
$filtrado = (isset($_GET["filtrado"]))? $_GET["filtrado"] : "";

switch ($action) {
    
    /*
     * Actualiza el lenguage a español
     */
    case "es":
        if ( ! session_id() ) @ session_start();
        $_SESSION["language"] = "spanish";
        header("Location: ../../views/cliente/index.php");
        break;
    
    /*
    * Actualiza el lenguage a ingles
    */
    case "in":
        if ( ! session_id() ) @ session_start();
        $_SESSION["language"] = "ingles";
        header("Location: ../../views/cliente/index.php");
        break;
       
    /*
     * En caso de que no se defina una acción se selecciona el ingles
     */
    default:
       header("Location: ../../views/cliente/index.php");
}