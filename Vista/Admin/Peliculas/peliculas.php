<?php

include __DIR__ . '../../public/navbar-sidebar.html';

?>
<!-- Aquiiii -->

<div class="container-fluid">
    <div class="row row-eq-spacing-lg">
        <div class="col-lg-9">
            <div class="content">
                <h1 class="content-title">
                    Sinopsis
                </h1>
                <div class="fake-content"></div>
                <div class="fake-content"></div>
            </div>
            <div class="card">
                <h2 class="card-title">
                    Estrenos
                </h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="col-3">ID</th>
                            <th class="col-3">Nombre</th>
                            <th class="col-3">Clasificacion</th>
                            <th class="col-3">Duracion</th>
                            <!-- <th class="text-right">Age</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once '../../../Controlador/controladorPelicula.php';
                        ?>
                        <!-- <tr>
                            <th>1</th>
                            <td>John</td>
                            <td>Doe</td>
                            <td>10:00</td>
                            <td class="text-right"><button class="btn" type="submit"><i class="fa-solid fa-pen-to-square"></i></button></td>
                            <td class="text-left"><button class="btn" type="submit"><i class="fa-solid fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Jane</td>
                            <td>Violet</td>
                            <td class="text-right">27</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Jack</td>
                            <td>Gates</td>
                            <td class="text-right">33</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <div class="content">
                <hr>
                <!-- <div class="fake-content"></div>
                <div class="fake-content w-150"></div> -->
                <form action="#" method="get" class="w-800 mw-full">

                    <div class="row">
                        <div class="col">
                            <!-- Input Nombre -->
                            <div class="form-group">
                                <label for="nombre" class="required">Nombre</label>
                                <input type="movie" class="form-control" id="nombre" placeholder="Pelicula" required="required">
                            </div>

                            <!-- Radio Clasificacion -->
                            <div class="form-group">
                                <label for="clasificacion-male" class="required">Clasificación</label>
                                <div class="custom-radio">
                                    <input type="radio" name="clasificacion" id="clasificacion-male" value="male" required="required">
                                    <label for="clasificacion-male">G <span>(+3)</span></label>
                                </div>
                                <div class="custom-radio">
                                    <input type="radio" name="clasificacion" id="clasificacion-female" value="female" required="required">
                                    <label for="clasificacion-female">PG <span>(+10)</span></label>
                                </div>
                                <div class="custom-radio">
                                    <input type="radio" name="clasificacion" id="clasificacion-other" value="other" required="required">
                                    <label for="clasificacion-other">PG-13 <span>(+13)</span></label>
                                </div>
                                <div class="custom-radio">
                                    <input type="radio" name="clasificacion" id="clasificacion-other" value="other" required="required">
                                    <label for="clasificacion-other">R <span>(+17)</span></label>
                                </div>
                            </div>
                        </div>

                        <div class="col offset-1">
                            <!-- Textarea Sinopsis-->
                            <div class="form-group">
                                <label for="description" class="required">Sinopsis</label>
                                <textarea class="form-control" id="description" placeholder="Escribe una descripcion de la película" required="required"></textarea>
                            </div>
                            <div class="row">
                                <!-- Input Nombre -->
                                <div class="form-group">
                                    <label for="duracion" class="required">Duración</label>
                                    <input type="time" class="form-control" id="duracion" placeholder="00:00" required="required">
                                </div>
                                <!-- Multi-file input -->
                                <div class="custom-file offset-1">
                                    <input type="file" id="multi-file-input-1" multiple="multiple" accept=".jpg,.png,.gif" required="required">
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
                <div class="fake-content"></div>
                <div class="fake-content"></div>
                <div class="fake-content"></div>
                <div class="fake-content"></div>
                <div class="fake-content"></div>
            </div>
        </div>
    </div>
</div>
<?php

include __DIR__ . '../../public/footer.html';

?>