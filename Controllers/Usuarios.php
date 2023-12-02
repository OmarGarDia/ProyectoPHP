<?php
class Usuarios extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }
    public function index()
    {
        $this->views->getView($this, "index");
    }

    public function validar()
    {
        if (empty($_POST['loginEmail']) || empty($_POST['loginPassword'])) {
            $msg = "Los campos estan vacíos";
        } else {
            $email = $_POST['loginEmail'];
            $pass = $_POST['loginPassword'];
            $data = $this->model->getUsuario($email, $pass);
            echo $data;
            if ($data) {
                $_SESSION['id'] = $data['id_usuario'];
                $_SESSION['nombre'] = $data['nombre'];
                $msg = "ok";
            } else {
                $msg = "Usuario o contraseña incorrectos";
            }
        }

        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
}
