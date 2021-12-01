<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <link href="assets/css/main-categoria.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />

    <link href="assets/css/demo.css" rel="stylesheet" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


</head>

<body>

    <?php

    if (!isset($_SESSION['admin_name']) && !isset($_SESSION['admin_name']) && !isset($_SESSION['admin_name'])) {
        header("Location: loginAdmin.php");
    }


    require 'global.php';

    $user = new Usuario();
    $obra = new Obra();
    $lista = $user->ListarTodoUsuario();

    $listaqtdCategoria = $obra->QtdCategoriaObra();


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
                    <li class="nav-item active">
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


                    <li class="nav-item">
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


            <!-- Navbar    -->
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

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Pesquisar</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon"><?php echo $_SESSION['admin_name'] ?></span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">


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

                    <div class="section">

                        <div>
                            <h3>Ultimos Cadastros</h3>
                            <input type="text" id="search" placeholder="Pesquisar">
                            <input class="btn btn-secondary" type="submit"></input>
                        </div>
                        <br>
                        <table id="table" class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Banir</th>
                                    <th scope="col">Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lista as $dados) { ?>
                                    <tr>
                                        <td><?php echo $dados['idUsuario']; ?></td>
                                        <td><?php echo $dados['nomeUsuario']; ?></td>
                                        <td><?php echo $dados['emailUsuario']; ?></td>

                                        <td><a href="">Excluir</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">

                                </a>
                            </li>
                            <li>
                                <a href="#">

                                </a>
                            </li>
                            <li>
                                <a href="#">

                                </a>
                            </li>
                            <li>
                                <a href="#">

                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">Tecnomoon</a>,
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
<script src='https://www.gstatic.com/charts/loader.js'></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
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
</script>
<script>
    google.charts.load('upcoming', {
        'packages': ['vegachart']
    }).then(drawChart);

    function drawChart() {
        const dataTable = new google.visualization.DataTable();
        dataTable.addColumn({
            type: 'string',
            'id': 'category'
        });
        dataTable.addColumn({
            type: 'number',
            'id': 'amount'
        });
        dataTable.addRows([
            ['A', 28],
            ['B', 55],
            ['C', 43],
            ['D', 91],
            ['E', 81],
            ['F', 53],
            ['G', 19],
            ['H', 87],
        ]);

        const options = {
            "vega": {
                "$schema": "https://vega.github.io/schema/vega/v4.json",
                "width": 500,
                "height": 200,
                "padding": 5,

                'data': [{
                    'name': 'table',
                    'source': 'datatable'
                }],

                "signals": [{
                    "name": "tooltip",
                    "value": {},
                    "on": [{
                            "events": "rect:mouseover",
                            "update": "datum"
                        },
                        {
                            "events": "rect:mouseout",
                            "update": "{}"
                        }
                    ]
                }],

                "scales": [{
                        "name": "xscale",
                        "type": "band",
                        "domain": {
                            "data": "table",
                            "field": "category"
                        },
                        "range": "width",
                        "padding": 0.05,
                        "round": true
                    },
                    {
                        "name": "yscale",
                        "domain": {
                            "data": "table",
                            "field": "amount"
                        },
                        "nice": true,
                        "range": "height"
                    }
                ],

                "axes": [{
                        "orient": "bottom",
                        "scale": "xscale"
                    },
                    {
                        "orient": "left",
                        "scale": "yscale"
                    }
                ],

                "marks": [{
                        "type": "rect",
                        "from": {
                            "data": "table"
                        },
                        "encode": {
                            "enter": {
                                "x": {
                                    "scale": "xscale",
                                    "field": "category"
                                },
                                "width": {
                                    "scale": "xscale",
                                    "band": 1
                                },
                                "y": {
                                    "scale": "yscale",
                                    "field": "amount"
                                },
                                "y2": {
                                    "scale": "yscale",
                                    "value": 0
                                }
                            },
                            "update": {
                                "fill": {
                                    "value": "steelblue"
                                }
                            },
                            "hover": {
                                "fill": {
                                    "value": "red"
                                }
                            }
                        }
                    },
                    {
                        "type": "text",
                        "encode": {
                            "enter": {
                                "align": {
                                    "value": "center"
                                },
                                "baseline": {
                                    "value": "bottom"
                                },
                                "fill": {
                                    "value": "#333"
                                }
                            },
                            "update": {
                                "x": {
                                    "scale": "xscale",
                                    "signal": "tooltip.category",
                                    "band": 0.5
                                },
                                "y": {
                                    "scale": "yscale",
                                    "signal": "tooltip.amount",
                                    "offset": -2
                                },
                                "text": {
                                    "signal": "tooltip.amount"
                                },
                                "fillOpacity": [{
                                        "test": "datum === tooltip",
                                        "value": 0
                                    },
                                    {
                                        "value": 1
                                    }
                                ]
                            }
                        }
                    }
                ]
            }
        };

        const chart = new google.visualization.VegaChart(document.getElementById('chart-div'));
        chart.draw(dataTable, options);
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Categorias', 'quantidade de obras'],

            <?php foreach ($listaqtdCategoria as $row) {

                $nomeCategoria = $row['descCategoria'];
                $qtdObraCategoria = $row['tbCategoriaObra.idObra'];

            ?>['categoria', 1],
                ['<?php echo $nomeCategoria ?>', <?php echo $qtdObraCategoria ?>]
            <?php } ?>
        ]);

        var options = {
            title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>

<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>