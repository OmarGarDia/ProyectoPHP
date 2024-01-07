<?php

require_once "mainModel.php";

class usuarioModelo extends mainModel
{

    /* MODELO PARA AGREGAR USUARIOS */

    protected static function agregar_usuario_modelo($datos)
    {
        $sentenciaSQL = "INSERT INTO everythinghere (nombre, correo, contrasena, id_rango) VALUES (:nombre, :correo, :contrasena, :id_rango)";
        $sql = mainModel::conectar()->prepare($sentenciaSQL);
        $sql->bindParam(":nombre", $datos["DNI"]);
        $sql->bindParam(":correo", $datos["Nombre"]);
        $sql->bindParam(":contrasena", $datos["contrasena"]);
        $sql->bindParam(":id_rango", $datos["id_rango"]);
        $sql->execute();
    }
}
