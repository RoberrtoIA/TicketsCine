<?php

if (isset($_GET['id'])) { 
    require_once __DIR__ . '../../../Modelo/modeloFuncion.php';

    $objeto = new modeloFuncion();
    $objeto->borrarFuncion($_GET['id']);
}

header('Location: /TicketsCine/Vista/Admin/Funciones/funciones_crud.php');

?>