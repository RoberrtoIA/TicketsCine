<?php

require_once __DIR__ . '../../../Modelo/modeloFuncion.php';

$objeto = new modeloFuncion();
$datos = $objeto->Seleccionar();

require_once __DIR__ . '../../../Vista/Admin/Funciones/funciones_vista.php';

?>