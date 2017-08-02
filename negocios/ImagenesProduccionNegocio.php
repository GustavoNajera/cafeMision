<?php

include '../datos/ImagenesProduccionDatos.php';

class ImagenesProduccionNegocio {

    public $imagenesProcesoData;

    //construtor
    public function ImagenesProduccionNegocio() {
        $this->imagenesProcesoData = new ImagenesProduccionDatos();
    }

    public function ingresarImagen($id, $nombre, $ruta) {
       return $this->imagenesProcesoData->ingresarImagen($id, $nombre, $ruta);
    }

//    //retorna los datos de la empresa, en ambos idiomas
//    public function retornarInformacionEmpresa() {
//        return $this->imagenesProcesoData->retornarInformacionEmpresa();
//    }
//
//    //retorna los datos de la empresa, en ambos espanol
//    public function retornarInformacionEmpresaEspañol() {
//        return $this->imagenesProcesoData->retornarInformacionEmpresaEspañol();
//    }
//
//    //retorna los datos de la empresa, en ambos ingles
//    public function retornarInformacionEmpresaIngles() {
//        return $this->imagenesProcesoData->retornarInformacionEmpresaIngles();
//    }
//
//    //actualizar empresa ingles
//    public function actualizarEmpresaIngles($historia, $produccion, $vision, $mision, $responsabilidad) {
//        return $this->imagenesProcesoData->actualizarEmpresaIngles($historia, $produccion, $vision, $mision, $responsabilidad);
//    }
//
//    //actualizar empresa
//    public function actualizarEmpresaEspanol($historia, $produccion, $vision, $mision, $responsabilidad) {
//        return $this->imagenesProcesoData->actualizarEmpresaEspanol($historia, $produccion, $vision, $mision, $responsabilidad);
//    }
}
