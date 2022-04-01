<?php

include __DIR__ . '../../public/title.html';
include __DIR__ . '../../public/modal-editar-pelicula.html';
include __DIR__ . '../../public/modal-documentacion.html';
include __DIR__ . '../../public/modal-borrar-pelicula.html';
include __DIR__ . '../../public/navbar-sidebar.html';

?>
<!-- Aquiiii -->

<div class="container-fluid">
    <div class="row row-eq-spacing-lg">
        <div class="col-lg-9">
            <div class="content">
                <h1 class="content-title" id="titulo">
                    Sinopsis
                </h1>
                <div id="sinopsis">
                    <div class="fake-content"></div>
                    <div class="fake-content"></div>
                </div>
            </div>
            <div class="card">
                <h2 class="card-title">
                    Estrenos
                </h2>
                <table class="table table-hover unselectable" id="table">
                    <thead>
                        <tr>
                            <th class="col-3">#</th>
                            <th class="col-3">Nombre</th>
                            <th class="col-3">Clasificacion</th>
                            <th class="col-3">Duracion</th>
                            <!-- <th class="text-right">Age</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once __DIR__ . '../../../../Controlador/Peliculas/controladorPelicula.php';
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="content">
                <hr>
                <!-- <div class="fake-content"></div>
                <div class="fake-content w-150"></div> -->
                <form action="../../../Controlador/Peliculas/agregarPelicula.php" method="POST" class="w-800 mw-full" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col">
                            <!-- Input Nombre -->
                            <div class="form-group">
                                <label for="nombre" class="required">Nombre</label>
                                <input type="movie" class="form-control" id="nombre" placeholder="Pelicula" name="pelicula" required="required">
                            </div>

                            <!-- Radio Clasificacion -->
                            <div class="form-group">
                                <label for="clasificacion-male" class="required">Clasificación</label>
                                <div class="custom-radio">
                                    <input type="radio" name="clasificacion" id="clasificacion-male" value="G" required="required">
                                    <label for="clasificacion-male">G <span>(+3)</span></label>
                                </div>
                                <div class="custom-radio">
                                    <input type="radio" name="clasificacion" id="clasificacion-female" value="PG" required="required">
                                    <label for="clasificacion-female">PG <span>(+10)</span></label>
                                </div>
                                <div class="custom-radio">
                                    <input type="radio" name="clasificacion" id="clasificacion-other" value="PG-13" required="required">
                                    <label for="clasificacion-other">PG-13 <span>(+13)</span></label>
                                </div>
                                <div class="custom-radio">
                                    <input type="radio" name="clasificacion" id="clasificacion-other" value="R" required="required">
                                    <label for="clasificacion-other">R <span>(+17)</span></label>
                                </div>
                            </div>
                        </div>

                        <div class="col offset-1">
                            <!-- Textarea Sinopsis-->
                            <div class="form-group">
                                <label for="description" class="required">Sinopsis</label>
                                <textarea class="form-control" id="description" placeholder="Escribe una descripcion de la película" name="sinopsis" required="required"></textarea>
                            </div>
                            <div class="row">
                                <!-- Input Nombre -->
                                <div class="form-group">
                                    <label for="horas" class="required">Duracion</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <input type="number" id="horas" name="horas" class="form-control" placeholder="Horas" min="0" max="8" required>
                                        </div>
                                        <input type="number" id="minutos" name="minutos" class="form-control" placeholder="Minutos" min="0" max="60" required>
                                    </div>
                                </div>
                                <!-- Multi-file input -->
                                <div class="custom-file offset-1">
                                    <input type="file" id="multi-file-input-1" multiple="multiple" accept=".jpg,.png,.gif" name="img" required="required">
                                    <label for="multi-file-input-1" class="required">Subir imagen</label>
                                </div>
                                <!-- Button -->
                                <div class="form-group offset-1">
                                    <button class="btn agregar" type="submit">Agregar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- Required for the custom file input -->
                <script src="path/to/halfmoon.js"></script>
            </div>
        </div>
        <div class="col-lg-3 d-none d-lg-block">
            <div class="content">
                <h2 class="content-title font-size-20">
                    Cartelera
                </h2>
                <img src="../../assets/img/placeholder/placeholder-img.png" alt="Foto Pelicula" id="imagen" width="100%">
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    // Using PHP implode() function
    var passedArray =
        <?php echo json_encode($datos); ?>

    // Printing the passed array elements
    for (var i = 0; i < passedArray.length; i++) {
        // alert(passedArray[i][5]);
    }

    var table = document.getElementById("table");
    var rows = table.getElementsByTagName("tr");
    for (i = 0; i < rows.length; i++) {
        var currentRow = table.rows[i];
        var createClickHandler = function(row) {
            return function() {
                var cell = row.getElementsByTagName("th")[0];
                var id = cell.innerHTML;
                document.getElementById("imagen").src = "../../movies/" + passedArray[(id - 1)][5];
                document.getElementById("sinopsis").innerHTML = passedArray[(id - 1)][4];
                document.getElementById("titulo").innerHTML = passedArray[(id - 1)][1];
                // alert("id:" + id);
            };
        };
        currentRow.onclick = createClickHandler(currentRow);
    }
</script>
<?php

include __DIR__ . '../../public/footer.html';

?>