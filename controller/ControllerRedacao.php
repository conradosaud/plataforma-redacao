<?php

include_once("./model/Redacao.php");

class ControllerRedacao{
    
    private $redacao;
    
    public function __construct() {
        $this->redacao = new Redacao();
    }
    
    function novaRedacao($id_usuario, $titulo, $texto, $status) {
        return $this->redacao->inserir($id_usuario, $titulo, $texto, $status);
    }
    
    function alterarStatus($id, $status) {
        return $this->redacao->alterarStatus($id, $status);
    }
    
    function buscar($id) {
        return $this->redacao->busca($id);
    }
    
    function buscarStatus($id, $status) {
        return $this->redacao->buscarStatus($id, $status);
    }
    
    function buscarNovasCorrecoes(){
        return $this->redacao->buscarNovasCorrecoes();
    }
    
    function buscarCorrecao($id){
        return $this->redacao->buscarCorrecao($id);
    }
    
}