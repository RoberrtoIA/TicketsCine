<?php

include __DIR__ . '../../public/title.html';
include __DIR__ . '../../public/modal-documentacion.html';
include __DIR__ . '../../public/navbar-sidebar.html';

?>
<!-- Aquiiii -->

<div class="container-fluid">
    <div class="row row-eq-spacing-lg">
        <div class="col-lg-8">
            <div class="card">
                <h2 class="card-title">
                    Peliculas
                </h2>
                <table class="table table-hover unselectable table-peliculas-vista" id="table">
                    <thead>
                        <tr>
                            <th class="col-3">ID</th>
                            <th class="col-3">Nombre</th>
                            <th class="col-3">Clasificacion</th>
                            <th class="col-3">Duracion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once __DIR__ . '../../../../Controlador/Funciones/readFuncionPelicula.php';
                        ?>
                    </tbody>
                </table>

            </div>
            <div class="card">
                <h2 class="card-title">
                    Salas
                </h2>
                <table class="table table-hover unselectable table-peliculas-vista" id="table2">
                    <thead>
                        <tr>
                            <th class="col-6">ID</th>
                            <th class="col">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once __DIR__ . '../../../../Controlador/Funciones/readFuncionSala.php';
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="content">
                <div class="fake-content"></div>
                <div class="fake-content w-150"></div>
            </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
            <div class="content">
                <form action="../../../Controlador/Funciones/agregarFuncion.php" method="post">
                    <h2 class="content-title font-size-20">
                        Crear Funciones
                    </h2>
                    <div class="input-group w-250">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Pelicula</span>
                        </div>
                        <input type="text" id="IdPeliculaSeleccion" name="PeliculaSeleccion" class="form-control" readonly>
                    </div>
                    <br>
                    <div class="input-group w-250">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Sala</span>
                        </div>
                        <input type="text" id="IdSalaSeleccion" name="SalaSeleccion" class="form-control" readonly>
                    </div>
                    <br>
                    <div class="row">
                        <div class="input-group w-200">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Fecha</span>
                            </div>
                            <input type="date" id="IdFechaSeleccion" name="FechaSeleccion" class="form-control" required>
                        </div>
                        <div class="input-group w-150 ml-20">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Hora</span>
                            </div>
                            <input type="time" id="IdHoraSeleccion" name="HoraSeleccion" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-block alt-dm" name="CrearSala" value="CrearSala" type="submit">Crear</button>
                </form>
            </div>
            <div class="content">
                <h2 class="content-title font-size-20">
                    Funciones
                </h2>
                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // Using PHP implode() function
    var passedArray =
        <?php echo json_encode($datos); ?>

    var table = document.getElementById("table2");
    var rows = table.getElementsByTagName("tr");
    for (i = 0; i < rows.length; i++) {
        var currentRow = table.rows[i];
        var createClickHandler = function(row) {
            return function() {
                var cell = row.getElementsByTagName("th")[0];
                var id = cell.innerHTML;
                document.getElementById("IdSalaSeleccion").value = passedArray[(id - 1)][1];
                // alert("id:" + id);
            };
        };
        currentRow.onclick = createClickHandler(currentRow);
    }
</script>

<?php

include __DIR__ . '../../public/footer.html';

?>