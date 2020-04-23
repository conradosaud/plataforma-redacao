<?php

include_once("Dao.php");

class Usuario{
    
    private $id;
    private $usuario;
    private $senha;
    
    private $db;
    public function __construct(){
        $db = new Dao();
        $this->db = $db->instance();
    }
    
    public function inserir($usuario, $senha){
        try{
            
            $query = $this->db->prepare("INSERT INTO usuarios (usuario, senha) VALUES (:usuario, :senha);");
            $query->bindValue(":usuario", $usuario, PDO::PARAM_STR);
            $query->bindValue(":senha", $senha, PDO::PARAM_STR);
            $query->execute();
            
            if($query->rowCount() == 1){
                
                $last_id = $this->db->lastInsertId();
                $usuario = $this->busca($last_id);
                
                return $usuario;
            }else{
                return null;
            }
            
        }catch(Exception $e){
            print($e);
        }
    }
    
    public function busca($id){
        
        try{
            
            $query = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id;");
            $query->bindValue(":id", $id, PDO::PARAM_STR);
            $query->execute();
            
            if($query->rowCount() > 0){
                
                $dados = $query->fetchAll(PDO::FETCH_ASSOC);
                
                $usuario = new Usuario();
                
                foreach($dados as $listado){
                    $usuario->setId($listado["id"]);
                    $usuario->setUsuario($listado["usuario"]);
                    $usuario->setSenha($listado["senha"]);
                }
                
                return $usuario;
            }else{
                return null;
            }
            
        }catch(Exception $e){
            print($e);
        }
        
    }
    
    public function buscarTodos(){
        
        try{
            
            $query = $this->db->prepare("SELECT * FROM usuarios WHERE id IS NOT NULL ORDER BY id desc;");
            $query->execute();
            
            if($query->rowCount() > 0){
                
                $dados = $query->fetchAll(PDO::FETCH_ASSOC);
                
                $usuarios = [];
                
                foreach($dados as $listado){
                    $usuario = new Usuario();
                    $usuario->setId($listado["id"]);
                    $usuario->setUsuario($listado["usuario"]);
                    $usuarios[] = $usuario;
                }
                
                return $usuarios;
            }else{
                return null;
            }
            
        }catch(Exception $e){
            print($e);
        }
        
    }
    
    public function autenticar($usuario, $senha){
        
        try{
            
            $query = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha;");
            $query->bindValue(":usuario", $usuario, PDO::PARAM_STR);
            $query->bindValue(":senha", $senha, PDO::PARAM_STR);
            $query->execute();
            
            if($query->rowCount() > 0){
                
                $dados = $query->fetchAll(PDO::FETCH_ASSOC);
                
                $usuario = new Usuario();
                
                foreach($dados as $listado){
                    $usuario->setId($listado["id"]);
                    $usuario->setUsuario($listado["usuario"]);
                    $usuario->setSenha($listado["senha"]);
                }
                
                return $usuario;
            }else{
                return null;
            }
            
        }catch(Exception $e){
            print($e);
        }
        
    }
    
    
    // Getters e Setters
    
    function getId() {
        return $this->id;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }
    
}

