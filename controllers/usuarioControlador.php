<?php

if ($peticionAjax) {
    require_once "../modelos/usuarioModelo.php";
} else {
    require_once "./mainModel.php";
}

class usuarioControlador extends usuarioModelo
{
}
