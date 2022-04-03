<?php

if (isset($_GET['id'])) { 
    require_once __DIR__ . '../../../Modelo/modeloFuncion.php';
    // echo $_GET['id'];
    // die();

    $objeto = new modeloFuncion();
    $objeto->borrarFuncion($_GET['id']);
}

header('Location: /Vista/Admin/Funciones/funciones_crud.php');

?>