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
class ProcesoProduccionDatos extends Conexion {

    //actualizar empresa ingles
    public function ingresarProceso($nombre, $descripcion, $nombrein, $descripcionin) {
        print_r($nombre);
        
        $this->exeQuery("call insertarEtapaProceso('" . $nombre . "','" . $descripcion . "','" . $nombrein . "','" . $descripcionin . "')");
    }

    //retornar id
    public function retornarUltimod($historia, $produccion, $vision, $mision, $responsabilidad) {
        $this->exeQuery("select max(cf_id) from cf_proceso_produccion");
    }

}
