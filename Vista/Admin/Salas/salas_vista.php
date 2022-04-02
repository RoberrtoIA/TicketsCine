<?php

$contador = 0;
$colores = array('alert-primary', 'alert-success', 'alert-secondary', 'alert-danger');

foreach ($datos as $key => $value) {
    

    if ($contador == 0) {
        echo '<div class="row">';
    }

    echo '<div class="col-4">'; 
    echo '<div class="alert '. $colores[rand(0, 3)] .' sala" role="alert">'; 
    echo '<h4 class="alert-heading text-center">'. $value['nombre'] . '</h4>'; 
    echo '<a href="#modal-configuracion-sala">'; 
    echo '<button class="btn btn-configurar" id="'. $value['IDSala']. '" onClick="obtener_id_borrar_sala(this.id)" value="'. $value['nombre']. '" data-toggle="tooltip" data-title="Configuración" data-placement="top" type="submit">'; 
    echo '<i class="fa-solid fa-gear"></i>'; 
    echo '</button>'; 
    echo '</a>'; 
    echo '</div>'; 
    echo '</div>'; 

    if ($contador == 2) {
        echo '</div>';
    }
    
    
    if ($contador == 2) {
        $contador = -1;
    }
    
    $contador++;
}



?>
   