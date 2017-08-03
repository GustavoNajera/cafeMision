<?php

include_once './Validaciones.php';
include '../negocios/ProcesoProduccionNegocio.php';
include '../negocios/ImagenesProduccionNegocio.php';
$procesoProduccionNegocio = new procesoProduccionNegocio();
$instValidaciones = new Validaciones();


if (isset($_POST['button1id'])) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $nombrein = $_POST['nombrein'];
    $descripcionin = $_POST['descripcionin'];
//    $imagen1 = $_POST['imagen1'];
//    $imagen2 = $_POST['imagen2'];
//    $imagen3 = $_POST['imagen3'];

    if (strlen($nombre) < 1 || strlen($descripcion) < 1 || strlen($nombrein) < 1 ||
            strlen($descripcionin) < 1 || strlen($_FILES['imagen1']['name']) < 1 ||
            strlen($_FILES['imagen2']['name']) < 1 || strlen($_FILES['imagen3']['name']) < 1
    ) {
        header("location: ../vistasAdm/administracion.php?resultado=vacios&seccion=ingresarproceso");
    } else {
        $procesoProduccionNegocio->ingresarProceso($nombre, $descripcion, $nombrein, $descripcionin);
        $id = $procesoProduccionNegocio->retornarUltimoId();
       
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
        if (in_array($_FILES['imagen1']['type'], $permitidos) && in_array($_FILES['imagen2']['type'], $permitidos) && in_array($_FILES['imagen2']['type'], $permitidos)) {
            $ruta = "../publico/imagenes/proceso/" . $_FILES['imagen1']['name'];
            $ruta2 = "../publico/imagenes/proceso/" . $_FILES['imagen2']['name'];
            $ruta3 = "../publico/imagenes/proceso/" . $_FILES['imagen3']['name'];
            if (!file_exists($ruta) && !file_exists($ruta2) && !file_exists($ruta3)) {
                $resultado1 = @move_uploaded_file($_FILES['imagen1']['tmp_name'], $ruta);
                $resultado2 = @move_uploaded_file($_FILES['imagen2']['tmp_name'], $ruta2);
                $resultado3 = @move_uploaded_file($_FILES['imagen3']['tmp_name'], $ruta3);
                if ($resultado1 && $resultado2 && $resultado3) {

                    $inst = new ImagenesProduccionNegocio();


                    $inst->ingresarImagen($id, $_FILES['imagen1']['name'], $ruta);
                    $inst->ingresarImagen($id, $_FILES['imagen2']['name'], $ruta2);
                    $inst->ingresarImagen($id, $_FILES['imagen3']['name'], $ruta3);


//                    $galeria = new Galeria(0, $_FILES['archivo']['name'], $descripcion, 0, 0);
//                    $galeriain = new Galeria(0, $_FILES['archivo']['name'], $descripcionin, 1, 0);

                    header("location: ../vistasAdm/administracion.php?resultado=ingresado&seccion=ingresarproceso");
//                    header("location: ../../Presentation/Admin/imagenesGaleria.php?result=success&msg=Inserción realizada con éxito.");
                }
            } else {
                header("location: ../vistasAdm/administracion.php?resultado=yaexiste&seccion=ingresarproceso");
            }
        }
    }
} else {
    header("location: ../vistasAdm/administracion.php?resultado=noingresado&seccion=ingresarproceso");
}
?>
