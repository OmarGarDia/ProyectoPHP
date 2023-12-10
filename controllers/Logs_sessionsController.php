<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/ProyectoPHP/models/modLogs_sessions.php");
class Logs_sessionsController
{

    public $tabla;

    public function __construct()
    {
        $this->tabla = 'logs_sessions';
    }

    public function ctrMostrarRegistros($campo = null, $valor = null)
    {
        $tabla = $this->tabla;
        $respuesta = modLogs_sessions::mdlMostrarRegistros($tabla, $campo, $valor);

        return $respuesta;
    }

    public function ctrMostrarRegistro($campo_filtrar, $valor)
    {
        $tabla = $this->tabla;
        $respuesta = modLogs_sessions::mdlMostrarRegistro($tabla, $campo_filtrar, $valor);

        return $respuesta;
    }

    public function ctrMostrarCampo($campo_devolver, $campo_filtrar, $valor)
    {
        $tabla = $this->tabla;
        $respuesta = modLogs_sessions::mdlMostrarCampo($tabla, $campo_devolver, $campo_filtrar, $valor);

        return $respuesta;
    }

    public function ctrMostrarRegistrosPaginados($pagina_actual, $registros_por_pagina, $campo = null, $valor = null)
    {
        $tabla = $this->tabla;
        $respuesta = modLogs_sessions::mdlMostrarRegistrosPaginados($tabla, $pagina_actual, $registros_por_pagina, $campo, $valor);

        return $respuesta;
    }

    public function ctrInsertarRegistros($datos)
    {
        $tabla = $this->tabla;
        $respuesta = modLogs_sessions::mdlInsertarRegistros($tabla, $datos);

        return $respuesta;
    }

    public function ctrInsertarConImagen($datos)
    {
        $tabla = $this->tabla;
        $respuesta = modLogs_sessions::mdlInsertarConImagen($tabla, $datos);

        return $respuesta;
    }

    public function ctrEditarRegistros($datos, $campo, $valor)
    {
        $tabla = $this->tabla;
        $respuesta = modLogs_sessions::mdlEditarRegistros($tabla, $datos, $campo, $valor);

        return $respuesta;
    }

    public function ctrBorrarRegistros($campo_filtrar, $valores_eliminar)
    {
        $tabla = $this->tabla;
        $respuesta = modLogs_sessions::mdlBorrarRegistros($tabla, $campo_filtrar, $valores_eliminar);

        return $respuesta;
    }

    public function ctrBorrarRegistrosConImagen($campo_filtrar, $valores_eliminar)
    {
        $tabla = $this->tabla;
        $respuesta = modLogs_sessions::mdlBorrarRegistrosConImagen($tabla, $campo_filtrar, $valores_eliminar);

        return $respuesta;
    }


    public function ctrConsulta($consulta)
    {
        $respuesta = modLogs_sessions::mdlConsulta($consulta);

        return $respuesta;
    }

    // Controladores especificos para agromartin
    public function ctrUsuariosLogueados($fecha = 30)
    {
        $tabla = $this->tabla;
        $respuesta = modLogs_sessions::mdlUsuariosLogueados($tabla, $fecha);

        return $respuesta;
    }
}
