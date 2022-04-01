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

    private $id;
    private $nombre;
    private $duracion;
    private $clasificacion;
    private $sinopsis;
    private $img;

    function __construct($nombre, $duracion, $clasificacion, $sinopsis, $img)
    {
        $this->nombre = $nombre;
        $this->duracion = $duracion;
        $this->clasificacion = $clasificacion;
        $this->sinopsis = $sinopsis;
        $this->img = $img;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of duracion
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Get the value of clasificacion
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Get the value of sinopsis
     */
    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Get the value of img
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of img
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
}
