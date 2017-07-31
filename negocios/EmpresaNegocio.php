<?php


include '../datos/EmpresaDatos.php';

class EmpresaNegocio {

    public $procesoData;

    //construtor
    public function EmpresaNegocio() {
        $this->empresaData = new EmpresaData();
    }

    //retorna los datos de la empresa, en ambos idiomas
    public function retornarInformacionEmpresa() {
        return $this->empresaData->retornarInformacionEmpresa();
    }

    //retorna los datos de la empresa, en ambos espanol
    public function retornarInformacionEmpresaEspañol() {
        return $this->empresaData->retornarInformacionEmpresaEspañol();
    }

    //retorna los datos de la empresa, en ambos ingles
    public function retornarInformacionEmpresaIngles() {
        return $this->empresaData->retornarInformacionEmpresaIngles();
    }

    //actualizar empresa ingles
    public function actualizarEmpresaIngles($historia, $produccion, $vision, $mision, $responsabilidad) {
        return $this->empresaData->actualizarEmpresaIngles($historia, $produccion, $vision, $mision, $responsabilidad);
    }

    //actualizar empresa
    public function actualizarEmpresaEspanol($historia, $produccion, $vision, $mision, $responsabilidad) {
        return $this->empresaData->actualizarEmpresaEspanol($historia, $produccion, $vision, $mision, $responsabilidad);
    }

}
