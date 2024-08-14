<?php
namespace modelo;
include_once "./entorno/conexion.php";
USE PDO;
class Empleado {
    private $numero_documento;
    private $contrasena;
    public $con;

    public function __construct(\entidad\Empleado $empleadoE)
    {
        $this->numero_documento = $empleadoE->getNumero_documento();
        $this->contrasena = $empleadoE->getContrasena();
        $this->con = new \Conexion();
    }

    public function crearIngreso(){
        $sql = "SELECT * FROM tbl_empleado te WHERE numero_documento=:numero_documento AND contrasena=:contrasena";
        $resultado = $this->con->conexion->prepare($sql);
        $resultado->bindParam('numero_documento', $this->numero_documento);
        $resultado->bindParam('contrasena', $this->contrasena);
        $resultado->execute();
        
        $resultExit = $resultado->fetchAll(PDO::FETCH_ASSOC);
        if(isset($resultExit) && !empty ($resultExit)){
            session_start();
            $_SESSION['numero_documento'] = $resultExit[0] ['numero_documento'];
            $_SESSION['id'] = $resultExit[0] ['id'];
        }
        else{
            return $resultExit;
        }

    }
}


?>