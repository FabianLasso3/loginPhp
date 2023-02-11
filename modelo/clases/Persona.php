<?php

class Persona{
    private $usuario;
    private $clave;

    public function __construct($campo, $valor){
        if($campo != null){
            if(!is_array($campo)){
                $cadenaSQL = "select usuario, clave where $campo = $valor";
                $campo = ConectorBD::ejecutarQuery($cadenaSQL);
            }
        }
        $this->usuario = $campo['usuario'];
        $this->clave   = $campo['clave'];
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function getClave(){
        return $this->clave;
    }

    public function setUsuario($usuario): void{
        $this->usuario = $usuario;
    }

    public function setClave($clave): void{
        $this->clave = $clave;
    }

    public static function getLista($filtro, $orden)
    {
        if ($filtro == null || $filtro == '') $filtro = '';
        else $filtro = "where $filtro";
        if ($orden == null || $orden == '') $orden = '';
        else $orden = "order by $orden";
        $cadenaSQL = "select usuario, clave from persona $filtro $orden";
        return ConectorBD::ejecutarQuery($cadenaSQL);
    }
    public static function getLIstaEnObjetos($filtro, $orden)
    {
        $resultado = Persona::getLista($filtro, $orden);
        $lista = array();
        for ($i = 0; $i < count($resultado); $i++) {
            $usuarios = new Persona($resultado[$i], null);
            $lista[$i] = $usuarios;
        }
        return $lista;
    }
    public static function validar($persona, $clave)
    {
        $resultado = Persona::getListaEnObjetos("usuario='$persona' and clave=md5('$clave')", null);
        $usuario = null;
        if (count($resultado) > 0) $usuario = $resultado[0];
        return $usuario;
    }
}