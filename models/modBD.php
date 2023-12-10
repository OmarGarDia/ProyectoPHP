<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "ProyectoPHP/models/Conexion.php");

class modINTRANET
{
    public static function mdlGetLoginUsuarios($correo, $password)
    {

        $sentenciaMYSQL = " SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$password'";
        // var_dump($sentenciaMYSQL);

        try {
            $sentencia = Conexion::conectarBD()->prepare($sentenciaMYSQL);
            $sentencia->execute();
            $registros = $sentencia->fetch(PDO::FETCH_ASSOC);
            return $registros;
        } catch (PDOException $e) {
            $error = $e->getMessage(); // Obtenemos el mensaje del error
            // Luego, puedes hacer lo que necesites con el error, como guardar el log o mostrar un mensaje al usuario.
            // Por ejemplo, puedes llamar a la función logError($error) que definimos anteriormente:
            FuncionesController::ctrLogError($error);
            return $registros = array();
        }
    }
}
