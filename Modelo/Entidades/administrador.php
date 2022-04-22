<?php

include_once 'persona.php';

class Gerente extends Persona
{
    private $id;
    private $email;
    private $pass;

    function __construct($id, $email, $pass, $nombre, $apellido)
    {
        parent::__construct($nombre, $apellido);
        $this->id = $id;
        $this->email = $email;
        $this->pass = $pass;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }
}
