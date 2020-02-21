<?php

class Database
{

    /**
     * Atributos de la clase.
     */
    private $server = 'localhost';
    private $db = 'libreria3';
    private $user = 'root';
    private $pass = '';
    private $conn;

    /**
     * Función para conectarnos a nuestra base de datos.
     * return conn.
     */
    function conectarse()
    {
        $this->conn = mysqli_connect($this->server, $this->user, $this->pass, $this->db);
        if (mysqli_connect_error()) {
            echo " Error: " . mysqli_connect();
        }
        return $this->conn;
    }
}