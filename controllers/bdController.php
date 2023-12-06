<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/Models/modBD.php");
class bdController
{

    public $tabla;

    public function __construct($tabla = null)
    {
        $this->tabla = $tabla;
    }

    // public function ctrMostrarRegistros($campo = null, $valor = null)
    // {
    //     $tabla = $this->tabla;
    //     $respuesta = modINTRANET::mdlMostrarRegistros($tabla, $campo, $valor);

    //     return $respuesta;
    // }
}
