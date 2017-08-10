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

        $this->exeQuery("call insertarEtapaProceso('" . $nombre . "','" . $descripcion . "','" . $nombrein . "','" . $descripcionin . "')");
    }

    //retornar id
    public function retornarUltimoId() {
        $id = $this->exeQuery("select max(cf_id) as id from cf_proceso_produccion");
        $row = mysqli_fetch_array($id);
        return $row[0];
    }

    //retornar todas las etapas
    public function retornarEtapasProceso() {
        $result = $this->exeQuery("call obtenerEtapaProceso()");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $procesoProduccion = new ProcesoProduccion($row['cf_id'], $row['cf_nombre'], $row['cf_descripcion'], "", "");
            array_push($array, $procesoProduccion);
        }
        return $array;
    }

    public function retornarEtapasProcesoIngles() {
        $result = $this->exeQuery("call obtenerEtapaProcesoIngles()");
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $procesoProduccion = new ProcesoProduccion($row['cf_id'], "", "", $row['cf_nombre_in'], $row['cf_descripcion_in']);
            array_push($array, $procesoProduccion);
        }
        return $array;
    }

}

////test
//$id = new ProcesoProduccionDatos();
//$resultado = $id->retornarEtapasProcesoIngles();
//foreach ($resultado as $value) {
//    echo $value->nombrein . "</br>";
//}
//exit;
//var_dump($resultado);
