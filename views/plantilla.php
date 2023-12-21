<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <?php
    $peticionAjax = false;
    include "./views/modulos/header.php";

    require_once "./controllers/vistasControlador.php";
    $IV = new vistasControlador();
    $vistas = $IV->obtener_vistas_controlador();

    $vistasPermitidas = ["login", "404", "sign-up", "recuperar-contrasena"];

    if (in_array($vistas, $vistasPermitidas)) {
        require_once "./views/modulos/" . $vistas . ".php";
    } else {
        // Solo incluir el nav-superior y nav-lateral para las vistas distintas de "login" y "sign-up"
        if ($vistas != "login" && $vistas != "sign-up") {
            include "./views/modulos/nav-superior.php";
            include "./views/modulos/nav-lateral.php";
        }

        // Asegúrate de que la vista exista antes de incluirla
        $vistaPath = "./views/modulos/" . $vistas . ".php";
        if (file_exists($vistaPath)) {
            include $vistaPath;
        } else {
            echo "Error: La vista '$vistas' no existe.";
        }
    }
    include "./views/modulos/footer.php";

    ?>
</body>

</html>