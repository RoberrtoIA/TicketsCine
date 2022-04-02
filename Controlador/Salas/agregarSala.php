<?php

if (isset($_POST['sala'])) {

    require_once __DIR__ . '../../../Modelo/modeloSala.php';

    $objeto = new modeloSala();
    $objeto->agregarSala($_POST['sala']);
    header('Location: /Vista/Admin/Salas/salas.php');
}



?>