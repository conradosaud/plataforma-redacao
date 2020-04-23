<!DOCTYPE html>

<?php session_start(); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Página inicial</title>

        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/the-big-picture.css"/>
        <link rel="stylesheet" href="css/home.css"/>
        
        <script type="text/javascript" src="js/bootstrap/jquery.js" ></script>

    </head>
    <body>
        
        <?php
            include_once 'php/funcoes_index.php';
        ?>
        
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
            <div class="container">
                <a class="navbar-brand" href="#">Nome empresa</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Início
                                <span class="sr-only">(atual)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mr-5 text-justify">
                        <h1 class="mt-5">Nome empresa</h1>
                        <p>
                            Este é um pequeno texto onde o administrador poderá escolher o que colocar. É recomendável que o texto chame a atenção do usuário para os benefícios do serviços que será oferecido.
                            <br>
                            É possível também inserir botões de ações.
                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAcessar">Acessar plataforma</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="box mt-5">
                        <h5 >Ainda não é usuário? Cadastre-se abaixo:</h5>
                            <form method="POST">
                                <div class="form-group">
                                    <label for="inputUsuario">Escolha um nome de usuário</label>
                                    <input name="inputUsuario" id="inputUsuario" type="text" class="form-control" placeholder="Digite seu usuário">
                                </div>
                                <div class="form-group">
                                    <label for="inputSenha">Escolha uma senha</label>
                                    <input name="inputSenha" id="inputSenha" type="password" class="form-control" placeholder="Digite sua senha">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-info" value="Cadastrar">
                                </div>
                                <input type="hidden" name="inputCadastrar" id="inputCadastrar" class="btn btn-info" value="Cadastrar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal de acesso -->
            <div class="modal fade" id="modalAcessar" tabindex="-1" role="dialog" aria-labelledby="modalAcessar" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Acesso à plataforma</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formLogin" method="POST">
                                <p class="text-muted">Entre com seu usuário e senha para acessar a plataforma.</p>
                                <div class="form-group">
                                    <label for="acessarUsuario">Insira seu usuário</label>
                                    <input name="acessarUsuario" id="acessarUsuario" type="text" class="form-control" placeholder="Usuário">
                                </div>
                                <div class="form-group">
                                    <label for="acessarSenha">Insira sua senha</label>
                                    <input name="acessarSenha" id="acessarSenha" type="password" class="form-control" placeholder="Senha">
                                </div>
                                <input name="hiddenLogin" id="hiddenLogin" type="hidden" class="form-control" placeholder="Senha">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button form="formLogin" type="submit" class="btn btn-primary">Acessar</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <script type="text/javascript" src="js/bootstrap/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/bootstrap/bootstrap.bundle.min.js" ></script>
        
        <script type="text/javascript" src="js/home.js" ></script>
    </body>
</html>
