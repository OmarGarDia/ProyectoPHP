<?php

$peticionAjax = true;
require_once "../config/APP.php";
echo ("aqui");
if (isset($_POST["dni"])) {

    /* ----- Instancia al controlador ----- */
    require_once "../controllers/usuarioControlador.php";
    $ins_usuario = new usuarioControlador();

    if (isset($_POST["dni"]) && isset($_POST["name"])) {
        echo $ins_usuario->agregar_usuario_controlador();
    }
} else {
    session_start(['name' => 'SPM']);
    session_unset();
    session_destroy();
    require_once "../views/modulos/header.php";
    header("Location: " . SERVERURL);
    exit();
}
