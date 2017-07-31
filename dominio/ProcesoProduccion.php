<?php

class Empresa {

    //atributos
    public $id;
    public $nombre;
    public $descripcion;
    public $nombrein;
    public $descripcionin;
    public $responsabilidadIn;

    //constructor
    function Empresa($id_, $nombre_, $descripcion_, $nombrein_, $descripcionin_) {
        $this->id = $id_;
        $this->nombre = $nombre_;
        $this->descripcion = $descripcion_;
        $this->nombrein = $nombrein_;
        $this->descripcionin = $descripcionin_;
    }

}
