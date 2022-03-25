<?php

class Persona
{

    protected $nombre;
    protected $apellido;

    // Constructor
    function __construct($nombre, $apelido)
    {
        $this->nombre = $nombre;
        $this->apelido = $apelido;
    }
}
