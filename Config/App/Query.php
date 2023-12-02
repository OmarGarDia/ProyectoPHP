<?php
class Query extends Conexion
{
    private $pdo, $con, $sql;

    public function __construct()
    {
        $this->pdo = new Conexion();
        $this->con = $this->pdo->conexion();

        if (!$this->con) {
            // Manejar el error de conexión
            die("Error de conexión a la base de datos");
        }
    }

    public function select(string $sql)
    {
        $this->sql = $sql;

        try {
            // Verificar si la conexión está establecida
            if (!$this->con) {
                // Manejar el error de conexión
                die("Error de conexión a la base de datos");
            }

            $result = $this->con->prepare($this->sql);

            if ($result) {
                $result->execute();
                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            } else {
                // Manejar el error de la consulta
                die("Error en la consulta: " . $this->sql);
            }
        } catch (PDOException $e) {
            // Manejar otras excepciones
            die("Error en la consulta: " . $e->getMessage());
        }
    }
}
