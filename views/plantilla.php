<?php
require_once "views/modulos/header.php";

// Validar la existencia de la variable y su formato
if (isset($_GET["url"]) && preg_match('/^[a-zA-Z0-9-]+$/', $_GET["url"])) {
    $allowedRoutes = [
        "olvidar-contrasena",
        "sign-up"
    ];

    $requestedRoute = $_GET["url"];
    // Validar que la ruta esté en la lista permitida
    if (in_array($requestedRoute, $allowedRoutes)) {

        $modulePath = "views/modulos/" . $requestedRoute . ".php";

        // Validar que el archivo exista antes de incluirlo
        if (file_exists($modulePath)) {
            require_once $modulePath;
        } else {
            // Manejo de errores si el archivo no existe
            require_once "views/modulos/404.php";
        }
    } else {
        // Manejo de errores para rutas no permitidas
        require_once "views/modulos/404.php";
    }
} else {
    // Manejo de errores si la variable ruta no está presente o tiene un formato incorrecto
    require_once "views/modulos/404.php";
}

require_once "views/modulos/footer.php";
