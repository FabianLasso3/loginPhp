<!DOCTYPE html>

<?php
require_once 'modelo/logica/ConectorBD.php';
require_once 'modelo/clases/Persona.php';


date_default_timezone_set('America/Bogota');
session_start();
if (!isset($_SESSION['usuario'])) header('location: index.php?mensaje=Acceso no autorizado');
$USUARIO = unserialize($_SESSION['usuario']);
$filtro = '';
foreach ($_POST as $key => $value)
    ${$key} = $value;
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>

</head>

<body>
   <h1>Bienvenido</h1>

</body>

</html>