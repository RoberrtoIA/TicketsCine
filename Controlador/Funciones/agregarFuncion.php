<?php

if (isset($_POST['CrearSala'])) {

    require_once __DIR__ . '../../../Modelo/modeloFuncion.php';

    $objeto = new modeloFuncion();
    $objeto->agregarFuncion($_POST['FechaSeleccion'], $_POST['HoraSeleccion'], $_POST['PeliculaSeleccion'], $_POST['SalaSeleccion']);
    header('Location: /TicketsCine/Vista/Admin/Funciones/funciones_crud.php');
}



?>