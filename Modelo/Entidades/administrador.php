<?php

include_once 'persona.php';
include_once 'arraylist.php';

class Gerente extends Persona
{
    private $email;
    private $listaPeliculas;

    function __construct($email, $nombre, $apellido)
    {
        parent::__construct($nombre, $apellido);
        $this->email = $email;
        $this->listaPeliculas = new ArrayList();
    }

    function agregarPelicula(Pelicula $pelicula) {
        $this->listaPeliculas->Add($pelicula);
    }

    function borrarPelicula() {

    }

    function editarPelicula() {
        
    }
}

class Pelicula {

    private $idPelicula;
    private $nombre;
    private $duracion;
    private $clasificacion;

    function __construct($idPelicula, $nombre, $duracion, $clasificacion)
    {
        $this->idPelicula = $idPelicula;
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->clasificacion = $clasificacion;
    }
}
