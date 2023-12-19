<?php

class vistasModelo
{
    /*-------------- Modelo obtener vistas ----------------*/
    protected static function obtener_vistas_modelo($vistas)
    {
        $listaBlanca = ["sign-up", "inicio", "profile"];
        if (in_array($vistas, $listaBlanca)) {
            if (is_file("./views/modulos/" . $vistas . ".php")) {
                $contenido = "./views/modulos/" . $vistas . ".php";
            } else {
                $contenido = "404";
            }
        } elseif ($vistas == 'login' || $vistas == "inicio") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }

        return $contenido;
    }
}
