<?php

require_once __DIR__ . '/Interfaces/modelo.php';
require 'Interfaces/modelo.php';

class modeloIndex 
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

    public function SeleccionarHorario()
    {
        try {
            $this->stmt = $this->db->prepare("SELECT p.nombre, f.horario AS horario, f.fecha, s.nombre AS sala FROM peliculas p
            INNER JOIN funciones f ON p.IDPelicula = f.IDPelicula
            INNER JOIN salas s ON f.IDSala = s.IDSala;");
            $this->stmt->execute();
            return $this->stmt->fetchAll();
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