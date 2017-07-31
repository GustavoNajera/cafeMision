<?php

include '../negocios/ProcesoProduccionNegocio.php';
$procesoProduccionNegocio = new procesoProduccionNegocio();

if (isset($_POST['button1id'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $nombrein = $_POST['nombrein'];
    $descripcionin = $_POST['descripcionin'];
//    print_r($descripcionin);
//    $mision = $_POST['mision'];
//    $historiain = $_POST['historiain'];
//    $responsabilidadin = $_POST['responsabilidadin'];
//    $produccionin = $_POST['produccionin'];
//    $visionin = $_POST['visionin'];
//    $misionin = $_POST['misionin'];

    if (strlen($nombre) < 1 || strlen($descripcion) < 1 || strlen($nombrein) < 1 ||
            strlen($descripcionin) < 1
    ) {
        header("location: ../vistasAdm/administracion.php?resultado=vacios&seccion=ingresarproceso");
    } else {
        $procesoProduccionNegocio->ingresarProceso($nombre, $descripcion, $nombrein, $descripcionin);
        header("location: ../vistasAdm/administracion.php?resultado=ingresado&seccion=ingresarproceso");
    }
} else {
    header("location: ../vistasAdm/administracion.php?resultado=noingresado&seccion=ingresarproceso");
}
?>

