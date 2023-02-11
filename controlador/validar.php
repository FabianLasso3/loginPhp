<?php
    require_once '../modelo/logica/ConectorBD.php';
    require_once '../modelo/clases/Persona.php';

    $persona = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];

    $persona = Persona::validar($persona, $clave);
    if($persona == null) header('location: ../index.php?mensaje=Usuario o clave no valida');
    else {
        session_start();
        $_SESSION['usuario'] = serialize($usuario);
        header('location: ../principal.php?CONTENIDO=inicio.php');
    }
?>