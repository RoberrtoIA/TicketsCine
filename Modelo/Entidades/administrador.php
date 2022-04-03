<?php

include_once 'persona.php';
include_once 'arraylist.php';

class Gerente extends Persona
{
    private $id;
    private $email;
    private $pass;
    // private $listaPeliculas;

    function __construct($id, $email, $pass, $nombre, $apellido)
    {
        parent::__construct($nombre, $apellido);
        $this->id = $id;
        $this->email = $email;
        $this->pass = $pass;
        // $this->listaPeliculas = new ArrayList();
    }

    // function agregarPelicula(Pelicula $pelicula) {
    //     $this->listaPeliculas->Add($pelicula);
    // }

    // function borrarPelicula() {

    // }

    // function editarPelicula() {
        
    // }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of pass
     */
    public function getPass()
    {
        return $this->pass;
    }
    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
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
