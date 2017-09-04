<?php
include_once './Business/SessionBusiness.php';
$ruta = explode("?",(explode("/", $_SERVER["REQUEST_URI"])[2]))[0];

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
    "adminProduct" => $ruteView . "admin/adminProduct.php",
    "adminGallery" => $ruteView . "admin/adminGallery.php",
    "actionGallery" => $ruteActions . "ActionGallery.php",
    "adminProcess" => $ruteView . "admin/adminProcess.php",
    "actionProcess" => $ruteActions . "ActionProcess.php",
    "adminTextPage" => $ruteView . "admin/adminTextPage.php",
    "actionTextPage" => $ruteActions . "ActionTextPage.php",
    "adminUser" => $ruteView . "admin/adminUser.php",
    "actionUser" => $ruteActions . "ActionUser.php",
    "adminPartner" => $ruteView . "admin/adminPartner.php",
    "actionPartner" => $ruteActions . "ActionPartner.php",
    "register" => $ruteView . "cliente/register.php",
    "actionComment" => $ruteActions . "ActionComment.php",
    "languageClient" => $ruteActions . "ActionLanguage.php"
];

$filtrado = (isset($_GET["filtrado"]))? $_GET["filtrado"] : "";

$action = (isset($_GET["action"]))? $_GET["action"] : "";

include_once "./" . $routes[$ruta];

