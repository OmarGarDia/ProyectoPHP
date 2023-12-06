<?php
class Conexion
{

    public static function conectarBD()
    {
        // session_start();
        $servidor = "localhost\cine"; // Servidor donde se encuentra MySQL
        $bd   = "everythinghere"; // Nombre de la base de datos
        $usuario = "root"; // Usuario de conexión a MySQL
        $password = ""; // Contraseña del usuario

        $conexion_pdo = new PDO("sqlsrv:Server=$servidor;Database=$bd", $usuario, $password);

        if (!$conexion_pdo) {
            echo "Error, no se pudo hacer la conexi�n...";
            exit;
        } else {
            // echo "conexion exitosa";
        }
        return $conexion_pdo;
    }
}
