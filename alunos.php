<!DOCTYPE html>

<?php
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Alunos</title>

        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/simple-sidebar.css"/>
        <link rel="stylesheet" href="css/plataforma.css"/>
        
        <script type="text/javascript" src="js/bootstrap/jquery.js" ></script>

    </head>
    <body>
        
        <?php
            include_once("./php/funcoes_admin.php");
        ?>
        
        <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="novas_correcoes.php">
                        <i class="fa fa-pen-nib"></i> <strong>Novas correções</strong>
                    </a>
                </li>
                <li>
                    <a href="admin.php"><i class="fa fa-home"></i> Painel do administrador</a>
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
                        <h1>Alunos</h1>
                        <p>Veja quem são seus alunos e entre em contato.</p>
                        
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">

                        <?php
                            $alunos = buscarAlunos();
                            if(!$alunos){
                        ?>
                        
                        <p class="text-muted">Você não tem nenhum aluno no momento.</p>
                        
                        <?php
                            }else{
                        ?>
                        
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <!--<th scope="col">Enviados</th>-->
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                
                                <?php
                                    $n = 1;
                                    foreach($alunos as $aluno){
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $n; ?></th>
                                    <td><?php echo $aluno->getUsuario(); ?></td>
                                    
                                    <td><a href="#"><i class="fa fa-envelope"></i> Enviar mensagem</a></td>
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
