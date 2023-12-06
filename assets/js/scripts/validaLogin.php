<?php
require_once("../../../models/Conexion.php");
$resultado = 0;

$email = $_POST["email"];
$password = $_POST["password"];

$sentenciaMYSQL = "
    SELECT *
    FROM usuarios u 
    WHERE correo = '$email' AND contrasena = '$password'";
$sentenciaMYSQL = Conexion::conectarBD()()->prepare($sentenciaMYSQL);
$sentenciaMYSQL->execute();
$registros_sql = $sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);


if (sizeof($registros_sql) == 0) {
    $resultado += 1;
}

// echo var_dump($registros_sql);
echo $resultado;
