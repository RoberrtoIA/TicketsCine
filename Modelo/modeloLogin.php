<?php

class modeloLogin
{
    private $stmt;
    private $db;

    public function Verificar($email, $pass)
    {
        try {
            $this->stmt = $this->db->prepare("CALL Login(:email, :pass, @id ,@email ,@pass, @nombre, @apellido);");
            $this->stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $this->stmt->bindParam(":pass", $pass, PDO::PARAM_STR);
            $this->stmt->execute();
            $this->stmt = $this->db->prepare("SELECT @id ,@email ,@pass, @nombre, @apellido;");
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