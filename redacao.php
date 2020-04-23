<!DOCTYPE html>

<?php
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Redação</title>

        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/simple-sidebar.css"/>
        <link rel="stylesheet" href="css/plataforma.css"/>
        
        <script type="text/javascript" src="js/bootstrap/jquery.js" ></script>

    </head>
    <body>
        
        <?php
            include_once("./php/funcoes_plataforma.php");
        ?>
        
        <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <i class="fa fa-plus-circle"></i> <strong>Novo</strong>
                    </a>
                </li>
                <li>
                    <a href="plataforma.php"><i class="fa fa-home"></i> Painel do usuário</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-info-circle"></i> Dicas de estudo</a>
                </li>
                <li>
                    <a href="corrigidos.php"><i class="fa fa-clipboard-check"></i> Ver correções</a>
                </li>
                <li>
                    <a href="rascunhos.php"><i class="fa fa-pencil-ruler"></i> Rascunhos</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-coins"></i> Planos</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-question-circle"></i> Contatos e dúvidas</a>
                </li>
                <li>
                    <small><a href="?desconectar"><i class="fa fa-power-off"></i> Desconectar</a></small>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <a style="margin-top: 25px; margin-left: -5px;" href="#menu-toggle" class="btn btn-dark" id="menu-toggle"><i class="fa fa-exchange-alt"></i></a>
        
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>Nova redação</h1>
                        <p>Dúvidas para escrever sua redação? <a href="#">Clique aqui</a> para ver nossas dicas!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button form="formTexto" type="submit" name="btnEnviar" class="btn btn-success"><i class="fa fa-check"></i> Terminar e enviar</button>
                    </div>
                    <div class="col">
                        <div class="btn-rascunho">
                            <button type="submit" name="btnRascunho" form="formTexto" class="btn btn-info"><i class="fa fa-pencil-ruler"></i> Salvar rascunho</button>
                            <a href="plataforma.php" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-12">
                        <form id="formTexto" method="POST">
                            <div class="form-group">
                                <label for="inputTitulo">Insira o título da sua redação</label>
                                <input name="inputTitulo" id="inputTitulo" type="text" class="form-control" placeholder="Título">
                            </div>
                            <div class="form-group">
                                <label for="inputTexto">Insira o conteúdo do texto</label>
                                <textarea name="inputTexto" id="inputTexto" rows="5" type="text" class="form-control input-redacao" placeholder="Digite aqui o texto..."></textarea>
                            </div>
                            <input name="hiddenTexto" id="hiddenTexto" type="hidden">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Menu Toggle Script -->

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

        
        
         <script type="text/javascript" src="js/bootstrap/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/bootstrap/bootstrap.bundle.min.js" ></script>
        
        <!-- tamanho automatico dos campos de digitação -->
        <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
        
        <script type="text/javascript" src="js/plataforma.js" ></script>
        
    </body>
</html>
