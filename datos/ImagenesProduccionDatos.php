<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../conexion/Conexion.php';
include_once '../dominio/ProcesoProduccion.php';

/**
 * Description of ProcesoProduccionDatos
 *
 * @author Edwin
 */
class ImagenesProduccionDatos extends Conexion {

    //actualizar empresa ingles
    public function ingresarImagen($idproceso, $nombre, $ruta) {

        $this->exeQuery("call insertarImagenesProceso('" . $idproceso . "','" . $nombre . "','" . $ruta. "')");
    }

}
