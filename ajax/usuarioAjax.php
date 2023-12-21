<?php

$peticionAjax = true;
require_once "../config/APP.php";

if (false) {

    /* ----- Instancia al controlador ----- */
    require_once "../controllers/usuarioControlador.php";
    $ins_usuario = new usuarioControlador();
} else {
    session_start(['name' => 'EVTH']);
    session_unset();
    session_destroy();
    require_once "../views/modulos/header.php";
    header("Location: " . SERVERURL);
    exit();
}
