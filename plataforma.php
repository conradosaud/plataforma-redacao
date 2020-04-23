<!DOCTYPE html>

<?php session_start(); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Plataforma</title>

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
                    <a href="redacao.php">
                        <i class="fa fa-plus-circle"></i> <strong>Novo</strong>
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-home"></i> Painel do usuário</a>
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
                <h1>Painel do usuário</h1>
                <p>Bem-vindo de volta, <strong class="text-primary"><?php echo $_SESSION['usuario']; ?></strong>.</p>
                <p>
                    Este é o painel do usuário. Esta é a página inicial da plataforma, onde o usuário será levado após
                    efetuar login. Aqui o mesmo encontra as mesmas opções do menu à esquerda, porém em formato de atalhos
                    e com informações resumidas. É possível também inserir imagens, outros paineis, botões e gráficos.
                </p>
                
                <a class="btn btn-primary" href="redacao.php"><i class="fa fa-plus-circle"></i> Nova redação</a>
                
                <div class="row">
                    <div class="col-lg-4 d-flex mt-3">
                        <div class="card card-click">
                            <div class="card-body">
                                <h5 class="card-title">Veja nossas dicas</h5>
                                <p class="card-text">Dúvidas na hora de escrever sua redação? Temos ótimas dicas para você!</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex mt-3">
                        <div class="card card-click">
                            <div class="card-body">
                                <h5 class="card-title">Conheça nossos planos</h5>
                                <p class="card-text">Melhore sua experiência na plataforma, conheça o que preparamos para você.</p>   
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex mt-3">
                        <div class="card card-click">
                            <div class="card-body">
                                <h5 class="card-title">Entre em contato conosco</h5>
                                <p class="card-text">Está tendo dificuldade em algum ponto específico? Entre em contato com nossos professores.</p>
                            </div>

                        </div>
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
        
        <script type="text/javascript" src="js/plataforma.js" ></script>
        
    </body>
</html>
