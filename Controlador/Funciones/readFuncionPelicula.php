<?php

require_once __DIR__ . '../../../Modelo/modeloPelicula.php';

$objeto = new modeloPelicula();
$datos = $objeto->Seleccionar();

require_once __DIR__ . '../../../Vista/Admin/Funciones/funciones_vista_peliculas.php';

?>