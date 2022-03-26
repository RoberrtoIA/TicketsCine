<?php

$contador = 0;

foreach ($datos as $key => $value) {
    $contador++;

    echo '<tr>';
    echo '<th>'. $contador. '</th>';
    echo '<td>'. $value['nombre']. '</td>';
    echo '<td>'. $value['clasificacion']. '</td>';
    echo '<td>'. $value['duracion']. '</td>';
    echo '<td class="text-right"><button class="btn" type="submit"><i class="fa-solid fa-pen-to-square"></i></button></td>';
    echo '<td class="text-left"><button class="btn" type="submit"><i class="fa-solid fa-trash"></i></button></td>';
    echo '</tr>';                         
                        
}



?>
   
