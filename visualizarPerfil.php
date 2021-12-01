<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style-perfil.css" />
</head>

<body>
    <?php
    require_once "global.php";

    $usuario = new EnviarPerfil();

    $listarUsuario = $usuario->listarUsuario();

    $listarLocalizacaoUsuario = $usuario->listarLocalizacaoUsuario();

    $listarFoneArtista = $usuario->listarFoneArtista();

    $listarRedesUsuario = $usuario->listarRedesUsuario();

    $listarObra = $usuario->listarObraArtista();

    $maxObra = $usuario->maxObra();

    ?>
    <main>

        <?php foreach ($listarUsuario as $row) { ?>
            <header id="header">
                <div class="overlay overlay-lg">
                    <img src="./img/shapes/square.png" class="shape square" alt="" />
                    <img src="./img/shapes/circle.png" class="shape circle" alt="" />
                    <img src="./img/shapes/half-circle.png" class="shape half-circle1" alt="" />
                    <img src="./img/shapes/half-circle.png" class="shape half-circle2" alt="" />
                    <img src="./img/shapes/x.png" class="shape xshape" alt="" />
                    <img src="./img/shapes/wave.png" class="shape wave wave1" alt="" />
                    <img src="./img/shapes/wave.png" class="shape wave wave2" alt="" />
                    <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
                    <img src="./img/shapes/letters.png" class="letters" alt="" />
                    <img src="./img/shapes/points1.png" class="points points1" alt="" />
                </div>

                <nav>
                    <div class="container">
                        <div class="logo">
                            <a href="index.php"><img src="img/logosit.png" alt="" /></a>
                        </div>

                        <div class="links">
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="#portfolio">Obra</a>
                                </li>
                                <li>
                                    <a href="#contact">Contato</a>
                                </li>
                            </ul>
                        </div>

                        <div class="hamburger-menu">
                            <div class="bar"></div>
                        </div>
                    </div>
                </nav>

                <div class="header-content">
                    <div class="container grid-2">
                        <div class="column-1">
                            <h1 class="header-title"><?php echo $row['nomeArtista'] ?></h1>
                            <p class="text">
                                <?php echo $row['descPerfil'] ?>
                            </p>
                        </div>

                        <div class="column-2 image">
                            <img src="./img/shapes/points2.png" class="points points2" alt="" />

                            <?php echo "<img src='{$row['fotoUsuario']}' class='img-element z-index' alt='' />" ?>
                        </div>
                    </div>
                </div>
            </header>
        <?php } ?>

        <section class="portfolio section" id="portfolio">
            <div class="background-bg">
                <div class="overlay overlay-sm">
                    <img src="./img/shapes/half-circle.png" class="shape half-circle1" alt="" />
                    <img src="./img/shapes/half-circle.png" class="shape half-circle2" alt="" />
                    <img src="./img/shapes/square.png" class="shape square" alt="" />
                    <img src="./img/shapes/wave.png" class="shape wave" alt="" />
                    <img src="./img/shapes/circle.png" class="shape circle" alt="" />
                    <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
                    <img src="./img/shapes/x.png" class="shape xshape" alt="" />
                </div>
            </div>

            <div class="container">
                <div class="section-header">
                    <h3 class="title" data-title="Meus trabalhos">Obras</h3>
                </div>

                <div class="section-body">
                    <div class="filter">
                        <button class="filter-btn active" data-filter="*">Todas</button>
                    </div>

                    <div class="grid">
                        <?php foreach ($listarObra as $row) { ?>
                            <div class="grid-item logo-design">
                                <div class="gallery-image">
                                    <?php echo "<img src='{$row['urlImagemObra']}' alt='' /> " ?>
                                    <div class="img-overlay">
                                        <div class="img-description">
                                            <h3><?php echo $row['nomeObra'] ?></h3>
                                            <h5><?php echo $row['nomeObra'] ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="records">
            <div class="overlay overlay-sm">
                <img src="./img/shapes/square.png" alt="" class="shape square1" />
                <img src="./img/shapes/square.png" alt="" class="shape square2" />
                <img src="./img/shapes/circle.png" alt="" class="shape circle" />
                <img src="./img/shapes/half-circle.png" alt="" class="shape half-circle" />
                <img src="./img/shapes/wave.png" alt="" class="shape wave wave1" />
                <img src="./img/shapes/wave.png" alt="" class="shape wave wave2" />
                <img src="./img/shapes/x.png" alt="" class="shape xshape" />
                <img src="./img/shapes/triangle.png" alt="" class="shape triangle" />
            </div>

            <div class="container">
                <?php foreach ($maxObra as $row) { ?>
                    <div class="wrap">
                        <div class="record-circle">
                            <h2 class="number" data-num=""><?php echo $row['qtdObraArtista'] ?></h2>
                            <h4 class="sub-title">Projetos</h4>
                        </div>
                    </div>

                    <div class="wrap">
                        <div class="record-circle">
                            <h2 class="number" data-num="">0</h2>
                            <h4 class="sub-title">Prêmios</h4>
                        </div>
                    </div>
                <?php } ?>
        </section>

        <section class="contact" id="contact">

            <div class="container">
                <div class="contact-box">
                    <div class="contact-info">
                        <h3 class="title">Entrar em contato</h3>
                        <p class="text">
                            Aqui tem informações de contato sobre o artista, onde você pode visita-lo ou visitar uma exposição física do mesmo, ou apenas entrar em contato virtual com ele.
                        </p>
                        <div class="information-wrap">
                            <?php foreach ($listarLocalizacaoUsuario as $row) { ?>
                                <div class="information">
                                    <div class="contact-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <p class="info-text"><?php echo $row['paisArtista'] ?>, <?php echo $row['cepArtista'] ?>, <?php echo $row['logArtista'] ?></p>
                                </div>
                            <?php } ?>

                            <?php foreach ($listarUsuario as $row) { ?>
                                <div class="information">
                                    <div class="contact-icon">
                                        <i class="fas fa-paper-plane"></i>
                                    </div>
                                    <p class="info-text"><?php echo $row['emailContato'] ?></p>
                                </div>
                            <?php } ?>

                            <?php foreach ($listarFoneArtista as $row) { ?>
                                <div class="information">
                                    <div class="contact-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <p class="info-text"><?php echo $row['descFoneArtista'] ?></p>
                                </div>
                            <?php } ?>

                            <?php foreach ($listarRedesUsuario as $row) { ?>
                                <div class="information">
                                    <div class="contact-icon">
                                        <?php echo " <a href='{$row['linkFacebook']}'><i class='fab fa-facebook-f'></i></a> " ?>
                                    </div>
                                    <div class="contact-icon">
                                        <?php echo " <a href='{$row['linkIntagram']}'><i class='fab fa-instagram'></i></a> " ?>
                                    </div>
                                    <div class="contact-icon">
                                        <?php echo " <a href='{$row['linkTwitter']}'><i class='fab fa-twitter'></i></a> " ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <form method="POST" action="enviar-emailArtista.php?clicked=<?php echo $row['idUsuario'] ?>">
                        <div class="contact-form">
                            <h3 class="title">Mensagem</h3>
                            <div class="row">
                                <input type="text" class="contact-input" placeholder="Primeiro Nome" id="txNome1" name="txNome1" />
                                <input type="text" class="contact-input" placeholder="Ultimo Nome" id="txNome2" name="txNome2" />
                            </div>

                            <div class="row">
                                <input type="text" class="contact-input" placeholder="Telefone" id="txTelefone" name="txTelefone" />
                                <input type="email" class="contact-input" placeholder="Email" id="txEmail" name="txEmail" />
                            </div>

                            <div class="row">
                                <textarea class="contact-input textarea" placeholder="Mensagem" id="txMensagem" name="txMensagem"></textarea>
                            </div>
                            <button class="btn">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="container">




            <div class="footer-input-wrap">
                <input type="email" class="footer-input" placeholder="Email" />
                <a href="#" class="input-arrow">
                    <i class="fas fa-angle-right"></i>
                </a>
            </div>


            <div class="bottom-footer">
                <div class="copyright">
                    <p class="text">
                        Copyright&copy;2021 Todos os direitos reservados | Feito por
                        <span>TecnoMoon</span>
                    </p>
                </div>

                <div class="followme-wrap">
                    <div class="followme">
                        <h3>Sigam-me</h3>
                        <span class="footer-line"></span>
                        <div class="social-media">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>

                    <div class="back-btn-wrap">
                        <a href="#" class="back-btn">
                            <i class="fas fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>