<?php
namespace modelo;
USE PDO;
USE PDOException;
include_once "../entorno/conexion.php";

class empleadoModelo {
    private $id_empleado;
    private $numero_documento;
    private $contrasena;
    public $con;

    public function __construct(\entidad\empleadoEntidad $empleadoE)
    {
        $this->id_empleado = $empleadoE->getId_empleado();
        $this->numero_documento = $empleadoE->getNumero_documento();
        $this->contrasena = $empleadoE->getContrasena();
        $this->con = new \Conexion();
        $this->con->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function crearIngreso(){
       try{
        $sql = "SELECT * FROM tbl_empleado te WHERE numero_documento=:numero_documento AND contrasena=:contrasena";
        $result = $this->con->conexion->prepare($sql);
        $result->bindParam('numero_documento', $this->numero_documento);
        $result->bindParam('contrasena', $this->contrasena);
        $result->execute();
        
        $resultado = $result->fetchAll(PDO::FETCH_ASSOC);
        if(isset($resultado) && !empty ($resultado)){
            session_start();
            $_SESSION['numero_documento'] = $resultado[0] ['numero_documento'];
            $_SESSION['id_empleado'] = $resultado[0] ['id_empleado'];
        }
        else{
           $resultado = 0;  // si el resultado es 0, significa que el usuario no existe.
        }
        return $resultado;
       }
       catch(PDOException $e){
           return 'Error: ' . $e;
       }
       
    }
    
}


?>