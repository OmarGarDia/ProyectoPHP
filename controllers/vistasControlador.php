<?php

require_once "./models/vistasModelo.php";

class vistasControlador extends vistasModelo
{
    /*-------------- Controlador obtener plantilla ----------------*/
    public function obtener_plantilla_controlador()
    {
        return require "./views/plantilla.php";
    }

    /*-------------- Controlador obtener vistas ----------------*/

    public function obtener_vistas_controlador()
    {
        if (isset($_GET['url'])) {
            $ruta = explode("/", $_GET['url']);
            $respuesta =  vistasModelo::obtener_vistas_modelo($ruta[0]);
        } else {
            $respuesta = "login";
        }
        return $respuesta;
    }
}
