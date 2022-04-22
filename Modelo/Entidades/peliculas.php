<?php

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

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    
}

?>