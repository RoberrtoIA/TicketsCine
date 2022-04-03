<?php

$contador = 0;

foreach ($datos as $key => $value) {
    $contador++;

    echo '<tr>';
    echo '<th>'. $value['IDFuncion']. '</th>';
    echo '<td>'. $value['Fecha']. '</td>';
    echo '<td>'. $value['Horario']. '</td>';
    echo '<td>'. $value['Pelicula']. '</td>';
    echo '<td>'. $value['Sala']. '</td>';
    echo '<td class="text-left"><a href="#"><button class="btn" type="submit" id="'. $value['IDFuncion']. '" onclick="borrarFuncion(this.id)" value="'. $value['IDFuncion'] .'"><i class="fa-solid fa-trash-can"></i></button></a></td>';
    echo '</tr>';                         
                        
}



?>
   
