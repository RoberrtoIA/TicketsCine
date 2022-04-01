<?php

if (isset($_POST['Editar'])) { // img

    $img_name = $_FILES['img']['name'];
    $tmp_img_name = $_FILES['img']['tmp_name'];
    $folder = '../../Vista/movies/';
    move_uploaded_file($tmp_img_name, $folder . $img_name);
    // echo "\n";
    // echo $tmp_img_name, $folder . $img_name;
    // echo var_dump($_POST);
    // die();
    
    if ($img_name == null) {
        $img_name = $_POST['Editar'];
    }
    $duracion = $_POST['horas'] . ':' . $_POST['minutos'];
    // echo 'Nombre '. $img_name;
    // die();
    require_once __DIR__ . '../../../Modelo/modeloPelicula.php';

    $objeto = new modeloPelicula();

    $pelicula = new Pelicula($_POST['nombre'], $duracion, $_POST['clasificacion'], $_POST['sinopsis'], $img_name);
    $pelicula->setId($_POST['idEditar']);

    // echo $pelicula->getNombre();
    // echo $pelicula->getClasificacion();
    // echo $pelicula->getDuracion();
    // echo $pelicula->getSinopsis();
    // echo $pelicula->getImg();
    // echo $pelicula->getId();
    // die();

    $objeto->editarPelicula($pelicula);
}

header('Location: /Vista/Admin/Peliculas/peliculas.php');

?>