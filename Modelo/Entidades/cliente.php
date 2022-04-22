<?php

include_once 'persona.php';

class Cliente extends Persona{

    private $correo;

    function __construct($correo)
    {
        $this->correo = $correo;
    }
    
    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo): self
    {
        $this->correo = $correo;

        return $this;
    }
}

?>