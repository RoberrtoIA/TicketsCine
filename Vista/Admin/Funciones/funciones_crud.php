<?php

include __DIR__ . '../../public/title.html';
include __DIR__ . '../../public/modal-documentacion.html';
include __DIR__ . '../../public/navbar-sidebar.html';

?>
<!-- Aquiiii -->

<div class="container-fluid">
    <div class="row row-eq-spacing-lg">
        <div class="col-lg-12">
            <div class="card">
                <h2 class="content-title font-size-20">
                    Funciones
                </h2>
                <table class="table table-hover unselectable table-funciones" id="table3">
                    <thead>
                        <tr>
                            <th class="col-1">IDFuncion</th>
                            <th class="col-3">Fecha</th>
                            <th class="col-3">Horario</th>
                            <th class="col-3">Pelicula</th>
                            <th class="col">Sala</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once __DIR__ . '../../../../Controlador/Funciones/readFuncion.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php

include __DIR__ . '../../public/footer.html';

?>