<?php

require_once __DIR__ . '../../../Modelo/modeloSala.php';

$objeto = new modeloSala();
$datos = $objeto->Seleccionar();

require_once __DIR__ . '../../../Vista/Admin/Salas/salas_vista.php';

?>