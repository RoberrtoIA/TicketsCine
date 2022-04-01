<?php

if (isset($_POST['Borrar'])) { // Nombre
    // echo $_POST['Borrar'];
    // echo $_POST['Borrar'];
    // die();
    require_once __DIR__ . '../../../Modelo/modeloPelicula.php';

    $objeto = new modeloPelicula();

    $objeto->borrarPelicula($_POST['Borrar']);
    // echo $_POST['Borrar'];
    // die();
    // unlink('../../Vista/movies/');
}

header('Location: /Vista/Admin/Peliculas/peliculas.php');

?>