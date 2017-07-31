<?php

include '../negocios/EmpresaNegocio.php';
$procesoProduccionNegocio = new empresaNegocio();


if (isset($_POST['button1id'])) {

    $nombre = $_POST['historia'];
    $descripcion = $_POST['responsabilidad'];
    $nombrein = $_POST['produccion'];
    $descripcionin = $_POST['vision'];
    $mision = $_POST['mision'];
    $historiain = $_POST['historiain'];
    $responsabilidadin = $_POST['responsabilidadin'];
    $produccionin = $_POST['produccionin'];
    $visionin = $_POST['visionin'];
    $misionin = $_POST['misionin'];

    if (strlen($nombre) < 1 || strlen($descripcion) < 1 || strlen($nombrein) < 1 ||
            strlen($descripcionin) < 1 || strlen($mision) < 1 || strlen($historiain) < 1 || 
            strlen($produccionin) < 1 || strlen($visionin) < 1 || strlen($misionin) < 1 || 
            strlen($responsabilidadin) < 1
    ) {
        header("location: ../vistasAdm/administracion.php?resultado=vacios");
    } else {
        $procesoProduccionNegocio->actualizarEmpresaEspanol($nombre, $nombrein, $descripcionin, $mision, $descripcion);
        $procesoProduccionNegocio->actualizarEmpresaIngles($historiain, $produccionin, $visionin, $misionin, $responsabilidadin);
        header("location: ../vistasAdm/administracion.php?resultado=actualizado");
    }
} else {
    header("location: ../vistasAdm/administracion.php?resultado=noactualizado");
}
?>

