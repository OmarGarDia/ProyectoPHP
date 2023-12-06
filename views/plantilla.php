<?php

require_once("views/modulos/header.php");
var_dump($_GET);
if (isset($_GET["ruta"])) {
    $rutas = array(
        "olvidar-contrasena",
        "sign-up"
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
