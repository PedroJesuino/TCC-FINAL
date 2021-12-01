<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contato</title>
    <!--Google Font-->

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/css bootstrap/bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <!--Stylesheet-->
    <link rel="stylesheet" href="css/styleContato.css">
</head>

<body>
    <header id="header">
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
                            <a href="contato.php">Contato</a>
                        </li>
                        <?php if (isset($_SESSION['usuario_id'])) { ?>
                            <li>
                                <a href="perfil.php" class="active">Perfil</a>
                            </li>

                        <?php } else { ?>
                            <li>
                                <a href="login.php" class="active">Login</a>
                            </li>
                            <li>
                                <a href="registro.php" class="active">Cadastre-se</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </nav>
    </header>


    <div class="container-contato">
        <h1>Contato</h1>
        <p>Caso você tenha uma sugestão, uma denúncia ou até mesmo um pedido, entre em contato conosco.</p>
        <form action="enviarEmailEmpresa.php" method="POST">
            <div class="row">
                <div class="column">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" placeholder="Seu nome:">
                </div>
                <div class="column">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Seu email:">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="subject">Assunto</label>
                    <input type="text" name="subject" id="subject" placeholder="Assunto:">
                </div>
                <div class="column">
                    <label for="contact">Número de contato</label>
                    <input type="tel" name="contact" id="contact" placeholder="Seu número de telefone:">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="issue">Mensagem que gostaria de enviar</label>
                    <textarea id="issue" name="text" placeholder="Destalhes do texto aqui." rows="3"></textarea>
                </div>
            </div>
            <button>Enviar</button>
        </form>
    </div>

    <footer class="footer">
        <div class="container-footer">




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
</body>

</html>