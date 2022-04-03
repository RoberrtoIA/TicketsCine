<?php

if (isset($_POST['login'])) {
    require_once __DIR__ . '../../../Modelo/modeloLogin.php';
    require_once __DIR__ . '../../../Modelo/Entidades/administrador.php';

    $objeto = new modeloLogin();
    $datos = $objeto->Verificar($_POST['email'], $_POST['pass']);

    // var_dump($datos);

    $id;
    $email;
    $pass;
    $nombre;
    $apellido;

    foreach ($datos as $key => $value) {
        $id = $value['@id'];
        $email = $value['@email'];
        $pass = $value['@pass'];
        $nombre = $value['@nombre'];
        $apellido = $value['@apellido'];

        // echo $value['@id'];
        // echo $value['@email'];
        // echo $value['@pass'];
        // echo $value['@nombre'];
        // echo $value['@apellido'];
        // var_dump($value);
    }

    if ($nombre == null) {
        // echo 'f';
        header('Location: /Vista/Login/login.html?error=noexiste');
    } else {
        // echo 'yei';

        $gerente = new Gerente($id, $email, $pass, $nombre, $apellido);

        session_start();
        $_SESSION["admin"] = $gerente;
        header('Location: /Vista/Admin/Peliculas/peliculas.php');
        // die();
    }

}


