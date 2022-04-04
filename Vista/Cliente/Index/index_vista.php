<?php

$contador = 0;

foreach ($registros as $key => $value) {
    $contador++;

    echo '<div class="card">';
    echo '<h2 class="card-title">';
    echo $value['nombre'];
    echo '</h2>';
    echo '<div class="row">';
    echo '<div class="col"> <img src="' . '../../movies/' . $value['img'] . '" width="45%" alt="' . $value['nombre'] . '-Cartelera"> </div>';
    echo '<div class="col">';
    echo '<div class="row">';
    echo '<div class="col-12">';
    echo '<span class="badge badge-pelicula">' . $value['clasificacion'] . '</span>';
    echo '<span class="badge badge-pelicula bg-dark text-white">' . $value['duracion'] . '</span>';
    echo '<a href="#" class="badge badge-pelicula badge-primary">Ver trailer</a>';
    echo '</div>';
    echo '</div>';
    echo '<br>';
    echo '<hr>';
    echo '<br>';
    echo '<div class="row">';
    foreach ($horarios as $horario) {
        if ($horario['nombre'] == $value['nombre']) {
            echo '<div class="col-4">';
            echo '<a href="../Boleto/boleto.php?pelicula=' . $value['nombre'] . '&funcion=' . $horario['horario'] . '&fecha=' . $horario['fecha'] . '&img=' . $value['img'] . '
            &duracion=' . $value['duracion'] . '&sala=' . $horario['sala'] . '"
         class="badge">' . $horario['horario'] . ' (' . $horario['fecha'] . ')</a>';
            echo '</div>';
        }
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
