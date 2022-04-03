<?php

class modeloFuncion
{
    private $stmt;
    private $db;

    public function Seleccionar()
    {
        try {
            $this->stmt = $this->db->prepare("SELECT f.IDFuncion AS IDFuncion, f.fecha AS Fecha, f.horario AS Horario, p.nombre AS Pelicula, s.nombre AS Sala
            FROM funciones f
            INNER JOIN peliculas p ON f.IDPelicula = p.IDPelicula
            INNER JOIN salas s ON f.IDSala = s.IDSala;");
            $this->stmt->execute();
            return $this->stmt->fetchAll();
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function agregarFuncion()
    {
        try {
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function borrarSala()
    {
        try {
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function editarSala()
    {
        try {
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

?>