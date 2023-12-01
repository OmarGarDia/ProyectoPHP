<?php

class controller
{

    public function __construct()
    {
        $this->views = new views();
        $this->cargaModel();
    }
    public function cargarModel()
    {
        $model = get_class($this) . "model";
        $ruta = "models/" . $model . ".php";

        if (file_exists($ruta)) {
            require_once $ruta;
            $this->model = new $model();
        }
    }
}
