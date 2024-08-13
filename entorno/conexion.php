<?php
require_once  'config.php';


class Conexion
{
    public $conexion;
    public $mensaje;

    public function __construct()
    {


        try {
            $this->conexion = new PDO('pgsql:host=' . DB_HOST . ';dbname=' . DB_NOMBRE, DB_USUARIO, DB_CONTRASENA);
            $this->mensaje = 'Conexión exitosa a la base de datos "BD' . '"';
        } catch (PDOException $e) {
            $this->mensaje = 'Error al conectar a la base de datos: ' . $e->getMessage();
            // Registrar el error en un archivo de log (opcional)
            error_log('Error de conexión: ' . $e->getMessage());
        }
    }

    public function getMessage()
    {
        return $this->mensaje;
    }
}

// Crear un objeto de la clase Conexion
$conexion = new Conexion();

// Mostrar el mensaje en el servidor
echo $conexion->getMessage();
