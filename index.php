<?php
        
$ruta = explode("/", $_SERVER["REQUEST_URI"])[2];

//Se configura la ruta de las vistas
$ruteView = "views";

//Se configuran las rutas
$routes = [
    "" => "cliente/index.php",
    "service" => "cliente/service.php",
    "about" => "cliente/about.php",
    "product" => "cliente/detalle.php",
    "testimonials" => "cliente/testimonials.php",
    "contact" => "cliente/contact.php",
    "session" => "cliente/session.php",
    "gallery" => "cliente/gallery.php",
    "products" => "cliente/products.php",
];

$filtrado = "";
if(count(explode("-",$ruta)) > 1){
    $filtrado = explode("-",$ruta)[1];
    $ruta = explode("-",$ruta)[0];
}

include_once "./" . $ruteView. "/" . $routes[$ruta];