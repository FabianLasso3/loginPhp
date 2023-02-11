<!DOCTYPE html>

<?php
session_start();
session_unset();
session_destroy();
$mensaje = '';
if (isset($_REQUEST['mensaje'])) $mensaje = $_REQUEST['mensaje'];
?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="./vista/css/estilos.css"> 
    <title>Login</title>
</head>
<body>
    <div class="contenedor">
        <div class="contenido">
            <div class="formulario">
            <h3 class="titulo">Iniciar Sesión</h3>
            <form action="./controlador/validar.php" method="post">
                <div>
                <span id="usuario"><img src="vista/img/usuario.png"></span>
                <input type="text" placeholder="Usuario" name="usuario">
                </div>
                <div>
                <span id="clave"><img src="vista/img/clave.png"></span>
                <input type="password"placeholder="Clave" name="clave">
                </div>
                <button type="submit" value="Acceder">Acceder</button>
                <p>
                <font color='red'><?= $mensaje ?></font>
                </p>  
            </form>  
        </div>
        </div>
    </div>
</body>
</html>