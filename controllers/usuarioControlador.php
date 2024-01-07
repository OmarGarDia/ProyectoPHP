<?php

if ($peticionAjax) {
    require_once "../modelos/usuarioModelo.php";
} else {
    require_once "../modelos/usuarioModelo.php";
}

class usuarioControlador extends usuarioModelo
{
    public function agregar_usuario_controlador()
    {
        $nombre = mainModel::limpiar_cadena($_POST["name"]);
        $apellidos = mainModel::limpiar_cadena($_POST["surname"]);
        $dni = mainModel::limpiar_cadena($_POST["dni"]);
        $password = mainModel::limpiar_cadena($_POST["password"]);
        $cpassword = mainModel::limpiar_cadena($_POST["cpassword"]);
        $email = mainModel::limpiar_cadena($_POST["email"]);

        /* Comprobar campos vacios */

        if (empty($nombre) || empty($apellidos) || empty($dni) || empty($password) || empty($cpassword) || empty($email)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrió un error inesperado",
                "Texto" => "No has llenado todos los campos obligatorios del formulario",
                "Tipo" => "error"
            ];

            echo json_encode($alerta);
            exit();
        }
    }
}
