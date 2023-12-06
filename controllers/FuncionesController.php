<?php
class FuncionesController
{
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
