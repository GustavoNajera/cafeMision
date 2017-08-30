<?php

include_once './domain/Organization.php';
include_once './data/Connection.php';

class OrganizationData {
    
    public $connection;
    function __construct() {
        $this->connection = new Connection();
    }

    /*
     * retorna los datos de la empresa, en ambos idiomas
     */
    public function getOrganizationData($language) {
        $condition = "language = '" . $language . "'";
        
        $result = $this->connection->findOne("*", "organization",$condition);
        
        $organization = new Organization($result["idorganization"],$result["mission"],
                $result["vission"],$result["production"],$result["socialresponsability"],
                $result["history"],$result["facebook"],$result["email"],$result["language"]);
        
        return $organization;
    }
    
    /*
     * retorna todos los registros
     */
    
    
}