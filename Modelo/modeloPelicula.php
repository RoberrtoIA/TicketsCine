<?php

require_once __DIR__ . '/Entidades/peliculas.php';
require_once __DIR__ . '/Interfaces/modelo.php';
require 'Interfaces/crud.php';

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

    public function agregarPelicula($nombre, $clasificacion, $duracion, $sinopsis, $img)
    {
        try {
            $this->stmt = $this->db->prepare("SELECT PeliculaExiste(:nombre, :img);");
            $this->stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
            $this->stmt->bindParam(":img", $img, PDO::PARAM_STR);
            if ($this->stmt->execute() == 1) {
                $this->stmt = $this->db->prepare("CALL AgregarPelicula(:nombre, :clasificacion, :duracion, :sinopsis, :img);");
                $this->stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
                $this->stmt->bindParam(":clasificacion", $clasificacion, PDO::PARAM_STR);
                $this->stmt->bindParam(":duracion", $duracion, PDO::PARAM_STR);
                $this->stmt->bindParam(":sinopsis", $sinopsis, PDO::PARAM_STR);
                $this->stmt->bindParam(":img", $img, PDO::PARAM_STR);
                $this->stmt->execute();
                return true;
            } else {
                // print_r(Conexion::Conexion()->errorInfo());
                
            }
            $this->stmt = null;
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
            return false;
        }
        $this->stmt = null;
    }

    // public function agregarPelicula(Pelicula $pelicula)
    // {
    //     try {
    //         $this->stmt = $this->db->prepare("SELECT PeliculaExiste(:nombre, :img);");
    //         $this->stmt->bindParam(":nombre", $pelicula->getNombre(), PDO::PARAM_STR);
    //         $this->stmt->bindParam(":img", $pelicula->getImg(), PDO::PARAM_STR);
    //         if ($this->stmt->execute() == 1) {
    //             $this->stmt = $this->db->prepare("CALL AgregarPelicula(:nombre, :clasificacion, :duracion, :sinopsis, :img);");
    //             $this->stmt->bindParam(":nombre", $pelicula->getNombre(), PDO::PARAM_STR);
    //             $this->stmt->bindParam(":clasificacion", $pelicula->getClasificacion(), PDO::PARAM_STR);
    //             $this->stmt->bindParam(":duracion", $pelicula->getDuracion(), PDO::PARAM_STR);
    //             $this->stmt->bindParam(":sinopsis", $pelicula->getSinopsis(), PDO::PARAM_STR);
    //             $this->stmt->bindParam(":img", $pelicula->getImg(), PDO::PARAM_STR);
    //             $this->stmt->execute();
    //             return true;
    //         } else {
    //             // print_r(Conexion::Conexion()->errorInfo());
                
    //         }
    //         $this->stmt = null;
    //     } catch (PDOException $e) {
    //         echo  $e->getMessage();
    //         die();
    //         return false;
    //     }
    //     $this->stmt = null;
    // }

    public function borrarPelicula($pelicula)
    {
        try {
            $this->stmt = $this->db->prepare("DELETE FROM peliculas WHERE nombre = :nombre;");
            $this->stmt->bindParam(":nombre", $pelicula, PDO::PARAM_STR);
            $this->stmt->execute();
            $this->stmt = null;
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function editarPelicula(Pelicula $pelicula)
    {
        try {
            $this->stmt = $this->db->prepare("UPDATE Peliculas
            SET nombre = :nombre,
                clasificacion = :clasificacion,
                duracion = :duracion,
                sinopsis = :sinopsis,
                img = :img
            WHERE IDPelicula = :IDPelicula;");
            $this->stmt->bindParam(":nombre", $pelicula->getNombre(), PDO::PARAM_STR);
            $this->stmt->bindParam(":clasificacion", $pelicula->getClasificacion(), PDO::PARAM_STR);
            $this->stmt->bindParam(":duracion", $pelicula->getDuracion(), PDO::PARAM_STR);
            $this->stmt->bindParam(":sinopsis", $pelicula->getSinopsis(), PDO::PARAM_STR);
            $this->stmt->bindParam(":img", $pelicula->getImg(), PDO::PARAM_STR);
            $this->stmt->bindParam(":IDPelicula", $pelicula->getId(), PDO::PARAM_INT);
            $this->stmt->execute();
            // echo '!!!!!';
            // die();
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
