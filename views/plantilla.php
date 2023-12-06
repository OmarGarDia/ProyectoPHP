<?php

require_once("views/modulos/header.php");

if (isset($_GET["ruta"])) {
    $rutas = array(
        "sign-in",
        "index",
        "olvidar-contrasena"
    );

    if (in_array($_GET['ruta'], $rutas)) {
        require_once("views/modulos/" . $_GET["ruta"] . ".php");
    } else {
        require_once("views/modulos/404.php");
    }
} else {

    require_once("views/modulos/login.php");
}

require_once("views/modulos/footer.php");
