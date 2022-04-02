<?php

if (isset($_POST['Borrar'])) { // Nombre
    require_once __DIR__ . '../../../Modelo/modeloSala.php';
    // echo $_POST['Borrar'];
    // die();

    $objeto = new modeloSala();
    $objeto->borrarSala($_POST['Borrar']);
}

header('Location: /Vista/Admin/Salas/salas.php');

?>