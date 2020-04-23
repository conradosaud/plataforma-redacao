<!DOCTYPE html>

<?php
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Admin</title>

        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/simple-sidebar.css"/>
        <link rel="stylesheet" href="css/plataforma.css"/>
        
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
         <script type="text/javascript" src="js/charts.js"></script>
        
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
                    <a href="#"><i class="fa fa-home"></i> Painel do administrador</a>
                </li>
                <li>
                    <a href="alunos.php"><i class="fa fa-grin"></i> Ver alunos</a>
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
                        <h1>Painel do administrador</h1>
                        <p>
                            Este é o painel do administrador. Nesta página é possível visualizar os novos envios de redações
                            realizados pelos usuários, mensagens e também gráficos informativos sobre novos usuários,
                            correções, entre outros.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 d-flex mt-3">
                        <div class="card card-click">
                            <div class="card-body">
                                <p><i class="fa fa-pen-nib"></i> São <strong>11</strong> novos textos a corrigir</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 d-flex mt-3">
                        <div class="card card-click">
                            <div class="card-body">
                                <p><i class="fa fa-envelope"></i> Há <strong>32</strong> mensagens não visualizadas</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 d-flex mt-3">
                        <div class="card card-click">
                            <div class="card-body">
                                <p><i class="fa fa-info-circle"></i> Adicione dicas de estudo aos alunos</p> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="d-md-none text-center">
                        <p class="text-muted">Talvez possa ser difícil visualizar os gráficos abaixo no celular</p>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Novas redações enviadas</h3>
                            </div>
                            <div class="card-body card-chart">
                                <div id="chart_div" style="width:100%; height:500px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h3>Novos usuários cadastrados</h3>
                            </div>
                            <div class="card-body">
                                <div id="chart_div2" style="width:100%; height:500px"></div>
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
