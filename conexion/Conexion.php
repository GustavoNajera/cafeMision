<?php

class Conexion {

    private $server;
    private $user;
    private $password;
    private $db;
    private $conn;
    //constructor
    public function __construct() {
        $this->server = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->db = 'cafemisiondb';
    }
    //abre conexion
    public function connect() {
        $this->conn = mysqli_connect($this->server, $this->user, $this->password, $this->db); //default port 3306  
    }
    //cierra conexion
    public function closeConn() {
        mysqli_close($this->conn);
    }
    //gestor de consultas
    public function exeQuery($query) {
        $this->connect();
        $result = mysqli_query($this->conn, $query);
        $this->closeConn();
        return $result;
    }
}
