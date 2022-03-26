<?php

class modeloPelicula
{

    private $stmt;
    private $db;

    public function Seleccionar()
    {
        try {
            $this->stmt = $this->db->prepare("SELECT IDPelicula, nombre, clasificacion, duracion, sinopsis, img FROM Peliculas;");
            $this->stmt->execute();
            return $this->stmt->fetchAll();
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function agregarPelicula()
    {
        try {
            //code...
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function Cerrar()
    {
        $this->db = null;
    }

    public function __construct()
    {
        require_once('conexion.php');
        $this->db = Conexion::Conexion();
    }
}
