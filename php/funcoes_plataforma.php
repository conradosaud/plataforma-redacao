<?php

if(!isset($_SESSION['id'])){
    session_destroy();
    echo "<script type='text/javascript'>location.href = 'index.php';</script>";
}

if(isset($_GET['desconectar'])){
    unset($_SESSION['id']);
    unset($_SESSION['usuario']);
    session_destroy();
    echo "<script type='text/javascript'>location.href = 'index.php';</script>";
}

if(isset($_POST['hiddenTexto'])){
    if(isset($_POST['btnEnviar'])){
        salvarRedacao();
    }else{
        salvarRascunho();
    }
}

function salvarRedacao(){
    include_once './controller/ControllerRedacao.php';
    $redacao = new ControllerRedacao();
    $redacao = $redacao->novaRedacao($_SESSION['id'], $_POST['inputTitulo'], $_POST['inputTexto'], "ativo");

    if($redacao){
        echo "<script type='text/javascript'>alert('Redação enviada com sucesso!');location.href = 'plataforma.php';</script>";
    }else{
        echo "<script type='text/javascript'>alert('Ocorreu um erro ao enviar sua redação. Tente novamente.');</script>";
    }
}

function salvarRascunho(){
    include_once './controller/ControllerRedacao.php';
    $redacao = new ControllerRedacao();
    $redacao = $redacao->novaRedacao($_SESSION['id'], $_POST['inputTitulo'], $_POST['inputTexto'], "rascunho");

    if($redacao){
        echo "<script type='text/javascript'>alert('Rascunho salvo com sucesso!');location.href = 'rascunhos.php';</script>";
    }else{
        echo "<script type='text/javascript'>alert('Ocorreu um erro ao salvar rascunho. Tente novamente.');</script>";
    }
}

function buscarRascunhos(){
    include_once './controller/ControllerRedacao.php';
    $redacao = new ControllerRedacao();
    $redacao = $redacao->buscarStatus($_SESSION['id'], "rascunho");
  
    return $redacao;
}

function buscarCorrigidos(){
    include_once './controller/ControllerRedacao.php';
    $corrigidos = new ControllerRedacao();
    $corrigidos = $corrigidos->buscarStatus($_SESSION['id'], "corrigido");
    
    return $corrigidos;
}
