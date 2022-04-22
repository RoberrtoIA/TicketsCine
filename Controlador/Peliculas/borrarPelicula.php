<?php

if (isset($_POST['Borrar'])) { // Nombre

    require_once __DIR__ . '../../../Modelo/modeloPelicula.php';

    $objeto = new modeloPelicula();

    $objeto->borrarPelicula($_POST['Borrar']);

}

header('Location: /Vista/Admin/Peliculas/peliculas.php');

?>