<?php

if (isset($_POST['Editar'])) { // img

    $img_name = $_FILES['img']['name'];
    $tmp_img_name = $_FILES['img']['tmp_name'];
    $folder = '../../Vista/movies/';
    move_uploaded_file($tmp_img_name, $folder . $img_name);

    
    if ($img_name == null) {
        $img_name = $_POST['Editar'];
    }
    $duracion = $_POST['horas'] . ':' . $_POST['minutos'];

    require_once __DIR__ . '../../../Modelo/modeloPelicula.php';

    $objeto = new modeloPelicula();

    $pelicula = new Pelicula($_POST['nombre'], $duracion, $_POST['clasificacion'], $_POST['sinopsis'], $img_name);
    $pelicula->setId($_POST['idEditar']);


    $objeto->editarPelicula($pelicula);
}

header('Location: /TicketsCine/Vista/Admin/Peliculas/peliculas.php');

?>