<?php
include_once '../entidad/empleadoEntidad.php';
include_once '../modelo/empleadoModelo.php';

$numero_documento = $_POST['numero_documento'];
$contrasena = $_POST['contrasena'];

$empleadoE = new \entidad\empleadoEntidad();
$empleadoE->setNumero_documento($numero_documento);
$empleadoE->setContrasena($contrasena);

$empleadoM = new \modelo\empleadoModelo($empleadoE);
$respuesta = $empleadoM->crearIngreso();
echo json_encode($respuesta);

unset($empleadoE);
unset($empleadoM);


?>