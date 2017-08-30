<?php

class Organization {
    
    //atributos
    public $idorganization;
    public $mission;
    public $vission;
    public $production;
    public $socialresponsability;
    public $history;
    public $facebook;
    public $email;
    public $language;
    
    function __construct($idorganization, $mission, $vission, $production, $socialresponsability, $history, $facebook, $email, $language) {
        $this->idorganization = $idorganization;
        $this->mission = $mission;
        $this->vission = $vission;
        $this->production = $production;
        $this->socialresponsability = $socialresponsability;
        $this->history = $history;
        $this->facebook = $facebook;
        $this->email = $email;
        $this->language = $language;
    }

}
