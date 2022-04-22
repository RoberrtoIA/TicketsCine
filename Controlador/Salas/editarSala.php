<?php

if (isset($_POST['Editar'])) { // Nombre
    require_once __DIR__ . '../../../Modelo/modeloSala.php';
    // echo $_POST['ID'];
    // die();

    $objeto = new modeloSala();
    $objeto->editarSala($_POST['Editar'], $_POST['ID']);
}

header('Location: /TicketsCine/Vista/Admin/Salas/salas.php');

?>