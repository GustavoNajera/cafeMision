<?php

include '../negocios/EmpresaNegocio.php';
$empresaNegocio = new empresaNegocio();

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['button1id'])) {

// get form data, making sure it is valid
    $historia = $_POST['historia'];
    $responsabilidad = $_POST['responsabilidad'];
    $produccion = $_POST['produccion'];
    $vision = $_POST['vision'];
    $mision = $_POST['mision'];

    $historiain = $_POST['historiain'];
    $responsabilidadin = $_POST['responsabilidadin'];
    $produccionin = $_POST['produccionin'];
    $visionin = $_POST['visionin'];
    $misionin = $_POST['misionin'];

    $empresaNegocio->actualizarEmpresaEspanol($historia, $produccion, $vision, $mision, $responsabilidad);
    $empresaNegocio->actualizarEmpresaIngles($historiain, $produccionin, $visionin, $misionin, $responsabilidadin);
    header("location: ../vistasAdm/administracion.php?resultado=actualizado");
} else {
    header("location: ../vistasAdm/administracion.php?resultado=noactualizado");
}
?>

