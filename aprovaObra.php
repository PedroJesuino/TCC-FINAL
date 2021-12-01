<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Administração</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <link href="assets/css/aprovaObra.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>

    <?php

    if (!isset($_SESSION['admin_name']) && !isset($_SESSION['admin_name']) && !isset($_SESSION['admin_name'])) {
        header("Location: loginAdmin.php");
    }


    require 'global.php';

    $obra = new Obra();
    if (isset($_GET['id'])) {
        $listaObra = $obra->listarObraAdminDois($_GET['id']);
    }
    $lista = $obra->listarObraAdmin();



    ?>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:;" class="simple-text">
                        Spotlight ADM
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home-admin.php">
                            <i class="nc-icon nc-icon nc-paper-2"></i>
                            <p> Tela Inicial </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro-categoria-admin.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p> Cadastrar Categoria </p>
                        </a>
                    </li>


                    <li class="nav-item active">
                        <a class="nav-link" href="aprovaObra.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p> Aprovar Obras </p>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="aprovaArtista.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Aprovar Artista</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"></a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon"><?php echo $_SESSION['admin_name'] ?></span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <br>
                                    <a href="sairAdmin.php"><span class="no-icon">Sair</span></a>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">

                    <div class="div-aprova ">
                        <h3>Relatorio da Obra</h3>
                        <?php if (isset($_GET['id'])) {
                            foreach ($listaObra as $row) {
                            } ?>
                            <form method="POST" action="obraaprova.php">
                                <input type="hidden" value="<?php echo @$_GET['idus']; ?>" name="idus">
                                <input type="hidden" value="<?php echo @$_GET['id']; ?>" name="id">
                                <div>
                                    <div>
                                        <label for="">Nome Obra: </label>
                                        <p><?php if (isset($row['nomeObra'])) {
                                                echo $row['nomeObra'];
                                            } ?></p>
                                    </div>
                                    <div>
                                        <label for="">Artista: </label>
                                        <p><?php if (isset($row['nomeUsuario'])) {
                                                echo $row['nomeUsuario'];
                                            } ?></p>
                                    </div>
                                    <div>
                                        <label for="">Descricão: </label>
                                        <p><?php if (isset($row['nomeObra'])) {
                                                echo $row['descObra'];
                                            } ?></p>


                                    </div>
                                    <div class="div-img">
                                        <?php echo "<img src=' $row[urlImagemObra] ' alt=''>" ?>
                                    </div>
                                    <div>
                                        <button id="aprova" name="aprova" onclick="swal('Obra Aprovada com Sucesso.');" type="submit">Aprovar</button>
                                        <button name="reprova" onclick="swal('Obra não Aprovada.');" type="submit">Não Aprovar</button>
                                    </div>
                                    <div>

                            </form>
                        <?php } ?>

                    </div>

                    <div class="section">


                        <div>
                            <h3>Ultimos Cadastros</h3>
                            <input type="text" id="search" placeholder="Pesquisar">

                        </div>
                        <br>
                        <div class="table-responsive table-full-width">
                            <table id="table" class="table table-hover table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome Artista</th>
                                        <th scope="col">Obra</th>
                                        <th scope="col">visualizar</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($lista as $dados) { ?>
                                        <tr>
                                            <td><?php echo $dados['idObra']; ?></td>
                                            <td><?php echo $dados['nomeUsuario']; ?></td>
                                            <td><?php echo $dados['nomeObra']; ?></td>
                                            <td><?php echo "<a href='?id=$dados[idObra]&image=$dados[urlImagemObra]&desc=$dados[descObra]&nomeObra=$dados[nomeObra]&artista=$dados[nomeUsuario]&idus=$dados[idUsuario]' ><input  type='button' class='aprov-click' value='visualizar'></input></a>" ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">Tecnomoon</a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>

    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>

            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Style</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger">
                        <p>Background Image</p>
                        <label class="switch">
                            <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                        </label>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <p>Filters</p>
                        <div class="pull-right">
                            <span class="badge filter badge-black" data-color="black"></span>
                            <span class="badge filter badge-azure" data-color="azure"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-orange" data-color="orange"></span>
                            <span class="badge filter badge-red" data-color="red"></span>
                            <span class="badge filter badge-purple active" data-color="purple"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Sidebar Images</li>

                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-1.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-3.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="..//assets/img/sidebar-4.jpg" alt="" />
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="../assets/img/sidebar-5.jpg" alt="" />
                    </a>
                </li>

                <li class="button-container">
                    <div class="">
                        <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                    </div>
                </li>

                <li class="header-title pro-title text-center">Want more components?</li>

                <li class="button-container">
                    <div class="">
                        <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                    </div>
                </li>

                <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

                <li class="button-container">
                    <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                    <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
                </li>
            </ul>
        </div>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(".aprov-click").click(function() {
        $("#hidden").css("display", "block");
    });

    var $rows = $('#table tbody tr');

    $('#search').keyup(function() {

        var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
            reg = RegExp(val, 'i'),
            text;

        $rows.show().filter(function() {
            text = $(this).text().replace(/\s+/g, ' ');
            return !reg.test(text);
        }).hide();
    });

    document.getElementById('#aprova').onclick = function mostrarAlert() {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        })
    };
</script>