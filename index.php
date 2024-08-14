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
   

    <link rel="stylesheet" href="./public/css/login.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Sistema de Control de Empleados</h2>
                <form id="formLogin">
                    <div class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"><path fill="#000000" d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2S7.5 4.019 7.5 6.5M20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1z"/></svg>
                    
                    <label for="usuario" class="form-label mb-3">Número de Documento:</label>
                        <input type="number" class="form-control" id="numero_documento" name="numero_documento" placeholder="Ingrese el numero de documento" required>
                    </div>
                    <div class="mb-3">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 512 512"><path d="M86.4 480h339.2c12.3 0 22.4-9.9 22.4-22.1V246c0-12.2-10-22-22.4-22H404v-30.9c0-41.5-16.2-87.6-42.6-115.4-26.3-27.8-64-45.7-105.3-45.7h-.1-.1c-41.3 0-79 17.9-105.3 45.6C124.2 105.4 108 151.5 108 193v31H86.4C74 224 64 233.9 64 246v211.9c0 12.2 10 22.1 22.4 22.1zM161 193.1c0-27.3 9.9-61.1 28.1-80.3v-.3C206.7 93.9 231 83 255.9 83h.2c24.9 0 49.2 10.9 66.8 29.5v.2l-.1.1c18.3 19.2 28.1 53 28.1 80.3V224H161v-30.9z" fill="currentColor"/></svg>

                        <label for="contrasena" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control"  
                            id="contrasena" name="contrasena" placeholder="Ingrese la contraseña" required>
                    </div>
                    <div class="text-center" id="divBotonIngresar">
                        <button id="btnIngresar" name="btnIngresar">Ingresar</button>  
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
<script src="<?php echo JQUERY_URL; ?>"></script>
<script src="./public/js/login.js"></script>
</html>