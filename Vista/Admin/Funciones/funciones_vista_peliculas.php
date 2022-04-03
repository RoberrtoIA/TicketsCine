<?php

$contador = 0;

foreach ($datos as $key => $value) {
    $contador++;

    echo '<tr>';
    echo '<th>'. $value['IDPelicula']. '</th>';
    echo '<td>'. $value['nombre']. '</td>';
    echo '<td>'. $value['clasificacion']. '</td>';
    echo '<td>'. $value['duracion']. '</td>';
    echo '<td class="text-left"><a href="#"><button class="btn" type="submit" id="'. $value['IDPelicula']. '" value="'. $value['nombre'] .'" onclick="obtenerPelicula(this.id)"><i class="fa-solid fa-check"></i></button></a></td>';
    echo '</tr>';                         
                        
}



?>
   
