<?php


if (isset($_POST['pelicula'])) {
    // echo var_dump($_POST);
    // die();
    $img_name = $_FILES['img']['name'];
    $tmp_img_name = $_FILES['img']['tmp_name'];
    $folder = '../../Vista/movies/';
    move_uploaded_file($tmp_img_name, $folder . $img_name);

    require_once __DIR__ . '../../../Modelo/modeloPelicula.php';

    $objeto = new modeloPelicula();

    $duracion = $_POST['horas'] . ':' . $_POST['minutos'];
    $pelicula = new Pelicula($_POST['pelicula'], $duracion, $_POST['clasificacion'], $_POST['sinopsis'], $img_name);

    $objeto->agregarPelicula($pelicula);
}

header('Location: /TicketsCine/Vista/Admin/Peliculas/peliculas.php');
// var_dump($_POST);
