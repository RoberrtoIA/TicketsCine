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

    public function agregarFuncion($fecha, $horario, $pelicula, $sala)
    {
        try {
            $this->stmt = $this->db->prepare("CALL AgregarFuncion(:fecha, :horario, :pelicula, :sala);");
            $this->stmt->bindParam(":fecha", $fecha, PDO::PARAM_STR);
            $this->stmt->bindParam(":horario", $horario, PDO::PARAM_STR);
            $this->stmt->bindParam(":pelicula", $pelicula, PDO::PARAM_STR);
            $this->stmt->bindParam(":sala", $sala, PDO::PARAM_STR);
            $this->stmt->execute();
            return $this->stmt->fetchAll();
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function borrarFuncion($id)
    {
        try {
            $this->stmt = $this->db->prepare("DELETE FROM Funciones WHERE IDFuncion = :id;");
            $this->stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $this->stmt->execute();
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function editarFuncion()
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