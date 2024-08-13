<?php
require_once  './entorno/config.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo LOGO_APP; ?>" type="image/x-icon">
    <title><?php echo TITULO_APP ?></title>
    <link rel="stylesheet" href="<?php echo CSS_URL; ?>">
    <script src="<?php echo JS_URL; ?>"></script>
</head>

<body>
    <div class="justify-content-center text-center">
        <h1>Sistema de Control de Empleados</h1>

        <div class="text-center mb-3">
            <label for="usuario" class="label-form">Usuario:</label>
            <input type="number" id="usuario" name="usuario" placeholder="Ingrese el numero de documento">
        </div>

        <div class="text-center mb-2">
            <label for="contrasena" class="label-form">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" placeholder="Ingrese la contraseña">
        </div>

        <div class=" text-center">
            <button id="btnIngresar" name="btnIngresar">Ingresar</button>
        </div>
    </div>


</body>

</html>