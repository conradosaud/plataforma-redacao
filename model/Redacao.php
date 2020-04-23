<?php

include_once("Dao.php");
include_once("Usuario.php");

class Redacao{
    
    private $id;
    private $id_usuario;
    private $titulo;
    private $texto;
    private $status;
    private $data;
    
    private $db;
    public function __construct(){
        $db = new Dao();
        $this->db = $db->instance();
    }
    
    public function inserir($id_usuario, $titulo, $texto, $status){
        try{

            $query = $this->db->prepare("INSERT INTO redacao (id_usuario, titulo, texto, status, data) VALUES (:id_usuario, :titulo, :texto, :status, :data);");
            $query->bindValue(":id_usuario", $id_usuario, PDO::PARAM_STR);
            $query->bindValue(":titulo", $titulo, PDO::PARAM_STR);
            $query->bindValue(":texto", $texto, PDO::PARAM_STR);
            $query->bindValue(":status", $status, PDO::PARAM_STR);
            $query->bindValue(":data", $this->dataAgora(true), PDO::PARAM_STR);
            $query->execute();
            
            if($query->rowCount() == 1){
                
                $last_id = $this->db->lastInsertId();
                $redacao = $this->busca($last_id);
                
                return $redacao;
            }else{
                return null;
            }
            
        }catch(Exception $e){
            print($e);
        }
    }
    
    public function alterarStatus($id, $status){
        try{

            $query = $this->db->prepare("UPDATE redacao SET status = :status WHERE id = :id;");
            $query->bindValue(":id", $id, PDO::PARAM_STR);
            $query->bindValue(":status", $status, PDO::PARAM_STR);
            $query->execute();
            
            if($query->rowCount() == 1){
                return true;
            }else{
                return false;
            }
            
        }catch(Exception $e){
            print($e);
        }
    }
    
    public function busca($id){
        
        try{
            
            $query = $this->db->prepare("SELECT * FROM redacao WHERE id = :id;");
            $query->bindValue(":id", $id, PDO::PARAM_STR);
            $query->execute();
            
            if($query->rowCount() > 0){
                
                $dados = $query->fetchAll(PDO::FETCH_ASSOC);
                
                $redacao = new Redacao();
                
                foreach($dados as $listado){
                    $redacao->setId($listado["id"]);
                    $redacao->setId_usuario($listado["id_usuario"]);
                    $redacao->setTexto($listado["texto"]);
                    $redacao->setTitulo($listado["titulo"]);
                    $redacao->setStatus($listado["status"]);
                    $redacao->setData($listado["data"]);
                }
                
                return $redacao;
            }else{
                return null;
            }
            
        }catch(Exception $e){
            print($e);
        }
        
    }
    
    public function buscarStatus($id_usuario, $status){
        
        try{
            
            $query = $this->db->prepare("SELECT * FROM redacao WHERE id_usuario = :id_usuario AND status = :status ORDER BY data desc;");
            $query->bindValue(":id_usuario", $id_usuario, PDO::PARAM_STR);
            $query->bindValue(":status", $status, PDO::PARAM_STR);
            $query->execute();
            
            if($query->rowCount() > 0){
                
                $dados = $query->fetchAll(PDO::FETCH_ASSOC);
                
                $redacoes = [];
                
                foreach($dados as $listado){
                    $redacao = new Redacao();
                    $redacao->setId($listado["id"]);
                    $redacao->setId_usuario($listado["id_usuario"]);
                    $redacao->setTexto($listado["texto"]);
                    $redacao->setTitulo($listado["titulo"]);
                    $redacao->setStatus($listado["status"]);
                    $redacao->setData($listado["data"]);
                    $redacoes[] = $redacao;
                }
                
                return $redacoes;
            }else{
                return null;
            }
            
        }catch(Exception $e){
            print($e);
        }
        
    }
    
    public function buscarNovasCorrecoes(){
        
        try{
            
            $query = $this->db->prepare("SELECT
                redacao.*,
                usuarios.usuario
             FROM
                redacao
             INNER JOIN
                     usuarios ON redacao.id_usuario = usuarios.id
             WHERE
                     redacao.status = 'ativo'
             ");
            $query->execute();
            
            if($query->rowCount() <= 0){
                return null;
            }
                
            $dados = $query->fetchAll(PDO::FETCH_ASSOC);

            $redacoes = [];
            $usuarios = [];

            foreach($dados as $listado){
                $redacao = new Redacao();
                
                $redacao->setId($listado["id"]);
                $redacao->setTitulo($listado["titulo"]);
                $redacao->setData($listado["data"]);
                $redacoes[] = $redacao;
                
                $usuario = new Usuario();
                $usuario->setUsuario($listado["usuario"]);
                $usuarios[] = $usuario;
            }
            
            $correcoes = array($redacoes, $usuarios);

            return $correcoes;
            
        }catch(Exception $e){
            print($e);
        }
        
    }
    
    public function buscarCorrecao($id){
        
        try{
            
            $query = $this->db->prepare("SELECT
                redacao.*,
                usuarios.usuario
             FROM
                redacao
             INNER JOIN
                     usuarios ON redacao.id_usuario = usuarios.id
             WHERE
                     redacao.id = :id
             ");
            $query->bindValue(":id", $id, PDO::PARAM_STR);
            $query->execute();
            
            if($query->rowCount() <= 0){
                return null;
            }
                
            $dados = $query->fetchAll(PDO::FETCH_ASSOC);

            $redacao = new Redacao();
            $usuarios = [];
            $usuario = new Usuario();

            foreach($dados as $listado){
                $redacao->setId($listado["id"]);
                $redacao->setTitulo($listado["titulo"]);
                $redacao->setTexto($listado["texto"]);
                
                $usuario->setUsuario($listado["usuario"]);
            }
            
            $correcao = array($redacao, $usuario);

            return $correcao;
            
        }catch(Exception $e){
            print($e);
        }
        
    }
    
    private function dataAgora($horas){
        date_default_timezone_set('America/Sao_Paulo');
        $data = "";
        if($horas){
            $data = date("Y-m-d H:i:s");
        }else{
            $data = date("Y-m-d");
        }
        return $data;
    }
    
    
    // Getters e Setters
    
    function getId() {
        return $this->id;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getTexto() {
        return $this->texto;
    }

    function getData() {
        return $this->data;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }
    
    function setData($data) {
        $this->data = $data;
    }

    function getStatus() {
        return $this->status;
    }

    function setStatus($status) {
        $this->status = $status;
    }


    
}

