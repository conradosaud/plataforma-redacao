<!DOCTYPE html>

<?php
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Corrigidos</title>

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
                    <a href="plataforma.php"><i class="fa fa-home"></i> Painel do usuário</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-info-circle"></i> Dicas de estudo</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-clipboard-check"></i> Ver correções</a>
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
                        <h1>Correções</h1>
                        <p>Veja seus trabalhos corrigidos pelo professor.</p>
                        <a href="redacao.php" class="btn btn-primary mb-5"><i class="fa fa-question-circle"></i> Contatar professor</a>
                        
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">

                        <?php
                            $corrigidos = buscarCorrigidos();
                            if(!$corrigidos){
                        ?>
                        
                        <p class="text-muted">Você ainda não tem textos corrigidos. Aguarde, seu professor em breve enviará uma resposta.</p>
                        
                        <?php
                            }else{
                        ?>
                        
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                
                                <?php
                                    $n = 1;
                                    foreach($corrigidos as $corrigido){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $n; ?></th>
                                    <td><?php echo $corrigido->getTitulo(); ?></td>
                                    <td><?php echo $corrigido->getData(); ?></td>
                                    <td><a href="#"><i class="fa fa-eye"></i> Visualizar</a></td>
                                </tr>
                                
                                <?php 
                                        $n++;
                                    }
                                ?>
                            </tbody>
                        </table>
                        
                        <?php
                            }
                        ?>

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
