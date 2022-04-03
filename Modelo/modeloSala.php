<?php

class modeloSala
{
    private $stmt;
    private $db;

    public function Seleccionar()
    {
        try {
            $this->stmt = $this->db->prepare("SELECT IDSala, nombre as nombreSala FROM Salas;");
            $this->stmt->execute();
            return $this->stmt->fetchAll();
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function agregarSala($sala)
    {
        try {
            $this->stmt = $this->db->prepare("SELECT AgregarSala(:nombre);");
            $this->stmt->bindParam(":nombre", $sala, PDO::PARAM_STR);
            $this->stmt->execute();
            return $this->stmt->fetchAll();
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function borrarSala($sala)
    {
        try {
            $this->stmt = $this->db->prepare("DELETE FROM Salas WHERE nombre = :nombre;");
            $this->stmt->bindParam(":nombre", $sala, PDO::PARAM_STR);
            $this->stmt->execute();
            $this->stmt = null;
        } catch (PDOException $e) {
            echo  $e->getMessage();
            die();
        }
        $this->stmt = null;
    }

    public function editarSala($sala, $id)
    {
        try {
            $this->stmt = $this->db->prepare("UPDATE Salas
            SET nombre = :nombre
            WHERE IDSala = :id;");
            $this->stmt->bindParam(":nombre", $sala, PDO::PARAM_STR);
            $this->stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $this->stmt->execute();
            $this->stmt = null;
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