<?php

include __DIR__ . '../../public/verificar-sesion.php';
include __DIR__ . '../../public/title.html';
include __DIR__ . '../../public/modal-documentacion.html';
include __DIR__ . '../../public/modal-configuracion-sala.html';
include __DIR__ . '../../public/modal-borrar-sala.html';
include __DIR__ . '../../public/modal-editar-sala.html';
include __DIR__ . '../../public/navbar-sidebar.html';

?>
<!-- Aquiiii -->

<div class="container-fluid">
    <div class="row row-eq-spacing-lg">
        <div class="col-lg-12">
            <div class="content">
                <h1 class="content-title">
                    Crear Sala
                    <form action="../../../Controlador/Salas/agregarSala.php" method="POST" class="w-400 mw-full">
                        <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
                        <div class="row">
                            <div class="col">
                                <!-- Input -->
                                <div class="form-group">
                                    <input type="sala" class="form-control" id="sala" placeholder="Sala" name="sala" required="required">
                                </div>

                            </div>
                            <div class="col">
                                <!-- Submit button -->
                                <input class="btn btn-default" id="crear-sala" type="submit" value="Crear">
                            </div>
                        </div>
                    </form>
                </h1>
                <!-- <div class="fake-content"></div>
                <div class="fake-content"></div> -->
            </div>
            <div class="card unselectable">
                <h2 class="card-title">
                    Teatros
                </h2>
                <?php
                require_once __DIR__ . '../../../../Controlador/Salas/readSala.php';
                ?>
                <!-- <div class="row">
                    <div class="col-4">
                        <div class="alert alert-primary sala" role="alert">
                            <h4 class="alert-heading text-center">Sala 1</h4>
                            <a href="#modal-configuracion-sala">
                                <button class="btn btn-configurar" data-toggle="tooltip" data-title="Configuración" data-placement="top" type="button">
                                    <i class="fa-solid fa-gear"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="alert alert-success sala" role="alert">
                            <h4 class="alert-heading text-center">Sala 2</h4>
                            <button class="btn btn-configurar" type="button"><i class="fa-solid fa-gear"></i></button>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="alert alert-secondary sala" role="alert">
                            <h4 class="alert-heading text-center">Sala 3</h4>
                            <button class="btn btn-configurar" type="button"><i class="fa-solid fa-gear"></i></button>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function obtener_id_borrar_sala(id_borrar_sala) {
        document.getElementById('borrarSala').innerHTML = document.getElementById(id_borrar_sala).value;
        document.getElementById('editarSala').value = document.getElementById(id_borrar_sala).value;
        document.getElementById('borrarSalaId').value = document.getElementById(id_borrar_sala).value;
        document.getElementById('editarSalaId').value = id_borrar_sala;
    }

    function obtener_id_editar_sala(id_editar_sala) {
        document.getElementById('editarSala').value = document.getElementById(id_editar_sala).value;
    }
</script>
<?php

include __DIR__ . '../../public/footer.html';

?>