<?php

$contador = 0;

foreach ($datos as $key => $value) {
    $contador++;

    echo '<tr>';
    echo '<th>'. $contador. '</th>';
    echo '<td>'. $value['nombre']. '</td>';
    echo '<td>'. $value['clasificacion']. '</td>';
    echo '<td>'. $value['duracion']. '</td>';
    echo '<td class="text-right"><a href="#modal-editar-pelicula"><button class="btn" type="submit" id="'. $value['IDPelicula']. '" onClick="editar_click(this.id)" value="'. $value['nombre'] .'"><i class="fa-solid fa-pen-to-square"></i></button></a></td>';
    echo '<td class="text-left"><a href="#modal-borrar-pelicula"><button class="btn" type="submit" id="'. $value['IDPelicula']. '" onClick="reply_click(this.id)" value="'. $value['nombre'] .'"><i class="fa-solid fa-trash"></i></button></a></td>';
    // echo '<td><a href="#modal-1" class="btn btn-primary" role="button">Open modal</a></td>';
    echo '</tr>';                         
                        
}



?>
   
