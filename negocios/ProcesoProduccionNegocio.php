<?php

include '../datos/ProcesoProduccionDatos.php';

class ProcesoProduccionNegocio {

    public $procesoData;

    //construtor
    public function ProcesoProduccionNegocio() {
        $this->procesoData = new ProcesoProduccionDatos();
    }

//
    //retorna ultimo id
    public function retornarUltimoId() {
        return $this->procesoData->retornarUltimoId();
    }

//
    //retorna los datos de la empresa, en ambos espanol
    public function ingresarProceso($nombre, $descripcion, $nombrein, $descripcionin) {
        return $this->procesoData->ingresarProceso($nombre, $descripcion, $nombrein, $descripcionin);
    }

//
//    //retorna los datos de la empresa, en ambos ingles
//    public function retornarInformacionEmpresaIngles() {
//        return $this->procesoData->retornarInformacionEmpresaIngles();
//    }
//
//    //actualizar empresa ingles
//    public function actualizarEmpresaIngles($historia, $produccion, $vision, $mision, $responsabilidad) {
//        return $this->procesoData->actualizarEmpresaIngles($historia, $produccion, $vision, $mision, $responsabilidad);
//    }
//
//    //actualizar empresa
//    public function actualizarEmpresaEspanol($historia, $produccion, $vision, $mision, $responsabilidad) {
//        return $this->procesoData->actualizarEmpresaEspanol($historia, $produccion, $vision, $mision, $responsabilidad);
//    }
}
