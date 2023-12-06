<?php
// Pagina desarollada por Julian
// Estos son los controladores de las tablas que necesitaremos aunque al ser consultas complejas con JOIN net
require_once("controllers/Logs_sessionsController.php");
require_once("controllers/Logs_sincroController.php");

$usuarios_logueados = $logs_sessions_model->ctrUsuariosLogueados();

// $sincronizaciones = $logs_sincro_model->ctrLogsSincronizacionBBDD();

include("views/partials/inicio.view.php");
