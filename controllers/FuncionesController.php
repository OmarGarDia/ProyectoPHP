<?php


class FuncionesController
{


    public static function ctrSanitizar($dato, $tipo_dato)
    {
        if ($tipo_dato == "cadena") {
            $dato = filter_var($dato, FILTER_SANITIZE_STRING);
            return $dato;
        }

        if ($tipo_dato == "email") {
            $dato = filter_var($dato, FILTER_SANITIZE_EMAIL);
            $dato = filter_var($dato, FILTER_VALIDATE_EMAIL);
            return $dato;
        }

        if ($tipo_dato == "entero") {
            $dato = filter_var($dato, FILTER_SANITIZE_NUMBER_INT);
            return $dato;
        }

        if ($tipo_dato == "flotante") {
            $dato = filter_var($dato, FILTER_SANITIZE_NUMBER_FLOAT);
            return $dato;
        }

        if ($tipo_dato == "password") {
            $dato = trim($dato);
            return $dato;
        }
    }

    public static function ctrCifrar($pass)
    {
        $pass = md5($pass);
        return $pass;
    }

    public static function ctrCerrarSesion()
    {
        unset($_SESSION["usuario"]);
        unset($_SESSION["tipo"]);
        echo " <script> window.location='inicio';</script>";
    }


    public static function  ctrLogError($error)
    {
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
        $caller = $backtrace[1];

        $functionName = $caller['function'] ?? 'Unknown Function';
        $className = $caller['class'] ?? 'Unknown Class';
        $date = date('Y-m-d');
        $time = date('H:i:s');
        $logMessage = "[$date $time] Error en la clase '$className', funcion '$functionName', archivo, '{$caller['file']}', linea, {$caller['line']}: $error\n";

        // Aquí definimos el nombre del archivo de log basado en el día actual
        $fileName = $className . '_' . $date . '_error.log';

        // Creamos la carpeta para la clase si no existe
        $classFolderPath = 'views/logs/' . $className;
        if (!file_exists($classFolderPath)) {
            mkdir($classFolderPath, 0755, true);
        }

        // Escribimos el mensaje de log en el archivo dentro de la carpeta de la clase
        file_put_contents($classFolderPath . '/' . $fileName, $logMessage, FILE_APPEND);
    }
}
