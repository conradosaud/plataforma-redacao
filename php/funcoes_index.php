<?php

    if(isset($_POST['inputCadastrar'])){
        cadastrarUsuario();
    }
    
    if(isset($_POST['hiddenLogin'])){
        autenticarUsuario();
    }

    function autenticarUsuario(){
        include_once './controller/ControllerUsuario.php';
        $usuario = new ControllerUsuario();
        $usuario = $usuario->autenticarUsuario($_POST['acessarUsuario'], $_POST['acessarSenha']);
        
        if($usuario){
            $_SESSION['id'] = $usuario->getId();
            $_SESSION['usuario'] = $usuario->getUsuario();
            echo "<script type='text/javascript'>location.href = 'plataforma.php';</script>";
        }else{
            session_destroy();
            echo "<script type='text/javascript'>alert('Ocorreu um erro ao acessar a plataforma. Tente novamente.');</script>";
        }
    }
    
    function cadastrarUsuario(){
        include_once './controller/ControllerUsuario.php';
        $usuario = new ControllerUsuario();
        $usuario = $usuario->cadastrarUsuario($_POST['inputUsuario'], $_POST['inputSenha']);
        
        if($usuario){
            $_SESSION['id'] = $usuario->getId();
            $_SESSION['usuario'] = $usuario->getUsuario();
            echo "<script type='text/javascript'>location.href = 'plataforma.php';</script>";
        }else{
            session_destroy();
            echo "<script type='text/javascript'>alert('Ocorreu um erro ao cadastrar. Tente novamente.');</script>";
        }
    }