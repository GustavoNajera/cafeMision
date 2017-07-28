<?php

class Empresa {
    
    //atributos
    public $historia;
    public $produccion;
    public $vision;
    public $mision;
    public $responsabilidad;
    
    public $historiaIn;
    public $produccionIn;
    public $visionIn;
    public $misionIn;
    public $responsabilidadIn;
    //constructor
    function Empresa($historia_, $produccion_, $vision_, $mision_, $responsabilidad_, $historiaIn_, $produccionIn_, $visionIn_, $misionIn_, $responsabilidadIn_) {
        $this->historia = $historia_;
        $this->produccion = $produccion_;
        $this->vision = $vision_;
        $this->mision = $mision_;
        $this->responsabilidad = $responsabilidad_;
        $this->historiaIn = $historiaIn_;
        $this->produccionIn = $produccionIn_;
        $this->visionIn = $visionIn_;
        $this->misionIn = $misionIn_;
        $this->responsabilidadIn = $responsabilidadIn_;
    }

}
