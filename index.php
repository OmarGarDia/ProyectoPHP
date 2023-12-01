<?php

$ruta = !empty($_GET['url']) ? $_GET['url'] : "home/index";

$array = explode("/", $ruta);
$controllers = $array[0];
$metodo = "index";
$parametro = "";

if (!empty($aray[1])) {
    if (!empty($array[1] != "")) {
        $metodo = $array[1];
    }
}

if (!empty($array[2])) {
    if (!empty($array[2] != "")) {
        for ($i = 2; $i < count($array); $i++) {
            $parametro .= $array[$i] . ",";
        }

        $parametro = trim($parametro, ",");
    }
}
require_once "config/autoload.php";
$dirControllers = "controllers/" . $controllers . "php";

if (file_exists($controllers)) {
    require_once $controllers;
    $controllers = new $controllers();

    if (method_exists($controllers, $metodo)) {
        $controller->$metodo($parametro);
    } else {
        echo "No existe el metodo";
    }
} else {
    echo "No existe el controlador";
}
