<?php

include __DIR__ . '../../public/title.html';
include __DIR__ . '../../public/modal-documentacion.html';
include __DIR__ . '../../public/navbar-sidebar.html';

?>
<!-- Aquiiii -->

<div class="container-fluid">
    <div class="row row-eq-spacing-lg">
        <div class="col-lg-12">
            <div class="content">
                <h1 class="content-title">
                    Crear Sala
                    <form action="#" method="get" class="w-400 mw-full">
                        <!-- w-400 = width: 40rem (400px), mw-full = max-width: 100% -->
                        <div class="row">
                            <div class="col">
                                <!-- Input -->
                        <div class="form-group">
                            <input type="sala" class="form-control" id="sala" placeholder="Sala" required="required">
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
                    Salas
                </h2>
                <div class="row">
                    <div class="col-4">
                        <div class="alert alert-primary sala" role="alert">
                            <h4 class="alert-heading text-center">Sala 1</h4>
                            <!-- This is a primary alert with some content and <a href="#" class="alert-link">a link</a>. -->
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="alert alert-success sala" role="alert">
                            <h4 class="alert-heading text-center">Sala 2</h4>
                            <!-- This is a primary alert with some content and <a href="#" class="alert-link">a link</a>. -->
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="alert alert-secondary sala" role="alert">
                            <h4 class="alert-heading text-center">Sala 3</h4>
                            <!-- This is a primary alert with some content and <a href="#" class="alert-link">a link</a>. -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="fake-content"></div>
                <div class="fake-content w-150"></div>
            </div>
        </div>
        <!-- <div class="col-lg-3 d-none d-lg-block">
            <div class="content">
                <h2 class="content-title font-size-20">
                    On this page
                </h2>
                <div class="fake-content"></div>
                <div class="fake-content"></div>
                <div class="fake-content"></div>
                <div class="fake-content"></div>
                <div class="fake-content"></div>
            </div>
        </div> -->
    </div>
</div>

<?php

include __DIR__ . '../../public/footer.html';

?>