<?php

$contador = 0;

foreach ($datos as $key => $value) {
    $contador++;

    echo '<tr>';
    echo '<th>'. $contador. '</th>';
    echo '<td>'. $value['nombreSala']. '</td>';
    echo '<td class="text-left"><a href="#"><button class="btn" type="submit" id="'. $value['IDSala']. '" onclick="obtenerSala(this.id)" value="'. $value['nombreSala'] .'"><i class="fa-solid fa-check"></i></button></a></td>';
    echo '</tr>';                         
                        
}



?>
   
