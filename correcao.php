<!DOCTYPE html>

<?php
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Correção</title>

        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/simple-sidebar.css"/>
        <link rel="stylesheet" href="css/plataforma.css"/>
        
        <script type="text/javascript" src="js/bootstrap/jquery.js" ></script>

    </head>
    <body>
        
        <?php
            include_once("./php/funcoes_admin.php");
            $correcao = buscarCorrecao();
        ?>
        
        <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <i class="fa fa-pen-nib"></i> <strong>Novas correções</strong>
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-home"></i> Painel do administrador</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-grin"></i> Ver alunos</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user-edit"></i> Revisões</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-envelope"></i> Caixa de entrada</a>
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
                        <h1>Correção</h1>
                        <p>Corrigindo redação de <strong class="text-primary"><?php echo $correcao[1]->getUsuario(); ?></strong>.</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col">
                        <a href="?corrigir=<?php echo $_GET['id']; ?>" class="btn btn-success"><i class="fa fa-check"></i> Terminar correção</a>
                    </div>
                    <div class="col">
                        <div class="btn-rascunho">
                            <a href="novas_correcoes.php" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Voltar</a>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">

                        <h3><?php echo $correcao[0]->getTitulo(); ?></h3>

                    </div>
                    <div class="col-12">

                        <p>
                            
                           <?php echo $correcao[0]->getTexto(); ?>
                            
                        </p> 
                            
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
