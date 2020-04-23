<?php

include_once("./model/Usuario.php");

class ControllerUsuario{
    
    private $usuario;
    
    public function __construct() {
        $this->usuario = new Usuario();
    }
    
    function buscarTodos(){
        return $this->usuario->buscarTodos();
    }
    
    function cadastrarUsuario($usuario, $senha) {
        return $this->usuario->inserir($usuario, $senha);
    }
    
    function autenticarUsuario($usuario, $senha) {
        return $this->usuario->autenticar($usuario, $senha);
    }
    
}