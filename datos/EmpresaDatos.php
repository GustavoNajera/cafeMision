<?php

require_once '../conexion/Conexion.php';
include_once '../dominio/Empresa.php';

class EmpresaDatos extends Conexion {

    //retorna los datos de la empresa, en ambos idiomas
    public function retornarInformacionEmpresa() {
        $result = $this->exeQuery("select * from cf_empresa");
        $resultFetch = mysqli_fetch_array($result);
//        var_dump( new Empresa($resultFetch['cf_historia'], $resultFetch['cf_produccion'], $resultFetch['cf_mision'], $resultFetch['cf_vision'], $resultFetch['cf_responsabilidad_social'], $resultFetch['cf_historia_in'], $resultFetch['cf_produccion_in'], $resultFetch['cf_mision_in'], $resultFetch['cf_vision_in'], $resultFetch['cf_responsabilidad_social_in']));
//        exit;
        return new Empresa($resultFetch['cf_historia'], $resultFetch['cf_produccion'], $resultFetch['cf_mision'], $resultFetch['cf_vision'], $resultFetch['cf_responsabilidad_social'], $resultFetch['cf_historia_in'], $resultFetch['cf_produccion_in'], $resultFetch['cf_mision_in'], $resultFetch['cf_vision_in'], $resultFetch['cf_responsabilidad_social_in']);
    }

    //retorna los datos de la empresa, en ambos espanol
    public function retornarInformacionEmpresaEspañol() {
        $result = $this->exeQuery("call obtenerInformacion");
        $resultFetch = mysqli_fetch_array($result);
        return new Empresa($resultFetch['cf_historia'], $resultFetch['cf_produccion'], $resultFetch['cf_mision'], $resultFetch['cf_vision'], $resultFetch['cf_responsabilidad_social'], "", "", "", "", "");
    }

    //retorna los datos de la empresa, en ambos ingles
    public function retornarInformacionEmpresaIngles() {
        $result = $this->exeQuery("call obtenerInformacionIngles");
        $resultFetch = mysqli_fetch_array($result);
        return new Empresa("", "", "", "", "", $resultFetch['cf_historia_in'], $resultFetch['cf_produccion_in'], $resultFetch['cf_mision_in'], $resultFetch['cf_vision_in'], $resultFetch['cf_responsabilidad_social_in']);
    }

    //actualizar empresa ingles
    public function actualizarEmpresaEspanol($historia, $produccion, $vision, $mision, $responsabilidad) {
        $this->exeQuery("call actualizarInformacion('" . $historia . "','" . $produccion . "','" . $vision . "','" . $mision . "','" . $responsabilidad . "')");
    }

    //actualizar empresa
    public function actualizarEmpresaIngles($historia, $produccion, $vision, $mision, $responsabilidad) {
        $this->exeQuery("call actualizarInformacionIngles('" . $historia . "','" . $produccion . "','" . $vision . "','" . $mision . "','" . $responsabilidad . "')");
    }

}

//$conexion = new EmpresaData();
//$conexion->actualizarEmpresaIngles("12323", "12312312", "323123", "3123123", "3123123");
//$conexion->actualizarEmpresaEspanol("12323", "#12312312", "323123", "3123123", "3123123");
//
//var_dump($conexion->retornarInformacionEmpresa());
//var_dump($conexion->retornarInformacionEmpresaEspañol());
//var_dump($conexion->retornarInformacionEmpresaIngles());
