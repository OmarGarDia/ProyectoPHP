<?php

require_once("controllers/UsuariosController.php");
require_once("controllers/Logs_sessionsController.php");

$usuarios_model = new UsuariosController();
$logs_sessions_model = new Logs_sessionsController();



include("views/partials/login.view.php");
