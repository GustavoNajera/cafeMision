<?php

class ImagenesProduccion {

    //atributos
    public $id;
    public $idproceso;
    public $nombre;
    public $ruta;

    //constructor
    function ImagenesProduccion($id_, $idproceso_, $nombre_, $ruta_) {
        $this->id = $id_;
        $this->idproceso = $idproceso_;
        $this->nombre = $nombre_;
        $this->ruta = $ruta_;
    }

}
