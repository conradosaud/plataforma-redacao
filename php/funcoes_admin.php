<?php

if(isset($_GET['corrigir'])){
    corrigir();
}

function corrigir(){
    include_once './controller/ControllerRedacao.php';
    $correcao = new ControllerRedacao();
    $correcao = $correcao->alterarStatus($_GET['corrigir'], "corrigido");

    if($correcao){
        echo "<script type='text/javascript'>alert('Correção realizada com sucesso!'); location.href = 'novas_correcoes.php';</script>";
    }else{
        echo "<script type='text/javascript'>alert('Ocorreu um erro ao corrigir esta redação. Tente novamente.'); location.href = 'novas_correcoes.php';</script>";
    }
}

function buscarAlunos(){
    include_once './controller/ControllerUsuario.php';
    $usuarios = new ControllerUsuario();
    $usuarios = $usuarios->buscarTodos();
    
    return $usuarios;
}

function buscarCorrecoes(){
    include_once './controller/ControllerRedacao.php';
    
    $correcoes = new ControllerRedacao();
    $correcoes = $correcoes->buscarNovasCorrecoes();

    return $correcoes;
}

function buscarCorrecao(){
    include_once './controller/ControllerRedacao.php';
    
    $correcao = new ControllerRedacao();
    $correcao = $correcao->buscarCorrecao($_GET['id']);

    return $correcao;
}

