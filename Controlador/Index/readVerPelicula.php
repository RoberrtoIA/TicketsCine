<?php

require_once __DIR__ . '../../../Modelo/modeloIndex.php';

$objeto = new modeloIndex();
$registros = $objeto->Seleccionar();
$horarios = $objeto->SeleccionarHorario();

require_once __DIR__ . '../../../Vista/Cliente/Index/index_vista.php';

?>