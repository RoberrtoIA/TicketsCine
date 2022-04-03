<?php

if (isset($_POST['CrearSala'])) {

    var_dump($_POST);
    die();
    // require_once __DIR__ . '../../../Modelo/modeloSala.php';

    // $objeto = new modeloSala();
    // $objeto->agregarSala($_POST['sala']);
    header('Location: /Vista/Admin/Funciones/funciones.php');
}



?>