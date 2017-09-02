<?php
include_once './Business/SessionBusiness.php';
$ruta = explode("/", $_SERVER["REQUEST_URI"])[2];

//Se configura la ruta de las vistas
$ruteView = "views/";
$ruteActions = "business/actions/";

//Se configuran las rutas
$routes = [
    "" => $ruteView . "cliente/index.php",
    "service" => $ruteView . "cliente/service.php",
    "about" => $ruteView . "cliente/about.php",
    "product" => $ruteView . "cliente/detalle.php",
    "testimonials" => $ruteView . "cliente/testimonials.php",
    "contact" => $ruteView . "cliente/contact.php",
    "session" => $ruteView . "cliente/session.php",
    "gallery" => $ruteView . "cliente/gallery.php",
    "products" => $ruteView . "cliente/products.php",
    "SessionLogIn" => $ruteActions . "ActionLogIn.php",
    "SessionLogOut" => $ruteActions . "ActionLogOut.php",
    "admin" => $ruteView . "admin/adminIndex.php",
    "adminOrganization" => $ruteView . "admin/adminOrganization.php",
    "actionOrganization" => $ruteActions . "ActionOrganization.php",
    "actionProduct" => $ruteActions . "ActionProduct.php",
    "adminProduct" => $ruteView . "admin/adminProduct.php"
];


$action = "";
if(count(explode("-",$ruta)) > 2){
    $action = explode("-",$ruta)[2];
}

$filtrado = "";
if(count(explode("-",$ruta)) > 1){
    $filtrado = explode("-",$ruta)[1];
    $ruta = explode("-",$ruta)[0];
}


include_once "./" . $routes[$ruta];