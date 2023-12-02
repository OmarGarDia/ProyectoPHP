<?php

class UsuariosModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getUsuario(string $email, string $pass)
    {
        $sql = "SELECT * from usuarios where correo = '$email' AND contrasena='$pass'";
        $data = $this->select($sql);
        //var_dump($data);
        return $data;
    }
}
