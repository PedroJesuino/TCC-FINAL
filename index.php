<!DOCTYPE html>

<head>
  <?php session_start(); ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Spotlight</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="css/css bootstrap/bootstrap.min.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">

  <!-- script -->


  <!-- Vendor css files -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="icon" href="im/iconlog.png">
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/style-home.css">
</head>

<body>

  <?php

  require 'global.php';
  $obra = new Obra();

  $listarObra = $obra->listarObra();

  $usuario = new Usuario();

  $listarUsuario = $usuario->listarArtista();

  ?>

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

  <div class="carousel">
    <div class="container-header">
      <h1>Para artista</h5>
        <h2>Se você é um artista, e quer uma forma de divulgar sua obra, mas não sabe como, venha descobrir sobre o nosso projeto. Clicando no botão abaixo.</h2>
        <a href="https://www.youtube.com/watch?v=sTfQ5eEq074" class="glightbox play-btn mb-4"></a>
    </div>
  </div>



  <section class="quem-somos">
    <div class="container--ASDASD">
      <div class="section-header">
        <h3 class="title" data-title="Quem">Somos?</h3>
      </div>

      <div class="container__sobre">
        <div class="card__sobre">
          <div class="icon__sobre">
            <ion-icon name="school-outline"></ion-icon>
          </div>
          <div class="content__sobre">
            <h2>Quem somos?</h2>
            <p>Nós somos estudantes e criamos uma plataforma web que é focada na arte afro-brasileira, com ênfase na
              divulgação e visibilidade dos artistas negros, que muitas vezes são esquecidos ou embranquecidos na
              sociedade atual.</p>
          </div>
        </div>
        <div class="card__sobre">
          <div class="icon__sobre">
            <ion-icon name="earth-outline"></ion-icon>
          </div>
          <div class="content__sobre">
            <h2>Nosso objetivo?</h2>
            <p>Nosso Objetivo é construir um espaço que possa de alguma forma auxiliar na divulgação dos artistas
              negros, para que eles possam expressar sua arte de alguma forma, seja elas literárias, pinturas ou
              qualquer tipo de arte.</p>
          </div>
        </div>
        <div class="card__sobre">
          <div class="icon__sobre">
            <ion-icon name="help-outline"></ion-icon>
          </div>
          <div class="content__sobre">
            <h2>Por quê?</h2>
            <p>O motivo por qual nós começamos e desenvolvemos essa ideia, vem de uma serie percepções que
              estudamos, que demonstra quanto os negros são invisíveis e esquecidos, então se você é um artista
              negro que se sente oprimido ou rejeitado <a href="">cadastra-se</a> e divulgue sua arte.</p>
          </div>
        </div>
      </div>
  </section>


  <section class="section-obras">


    <div class="container-asdasdasdasd">
      <div class="section-header">
        <h3 class="title" data-title="">Obras</h3>
        <p class="text">
          Todas as obras e artistas presentes na nossa plataforma.
        </p>
      </div>
      <div class="container_obras">
        <section class="section-cards">
          <div class="row-menu">
            <ul class="filter-list">
              <li class="filter active" data-attribute="all">Todos</li>
              <li class="filter" data-attribute="artes">Artes plásticas</li>
              <li class="filter" data-attribute="literatura">Literatura</li>
              <li class="filter" data-attribute="artista">Artista</li>
              <div class="search-box">
                <input type="text" class="search-txt" name="pesquisa" id="pesquisa" placeholder="Pesquisar artista">
                <a href="" class="filter search-btn" id="enviar">
                  <i class="fas fa-search"></i>
                </a>
              </div>
            </ul>
          </div>

          <ul class="cards__obras">
            <?php foreach ($listarObra as $row) { ?>
              <li class="<?php echo $row['descCategoria'] ?> <?php echo $row['nomeArtista'] ?> <?php echo $row['nomeObra'] ?>" onclick="window.location.href='visualizarPerfil.php?clicked=<?php echo $row['idUsuario'] ?>'">
                <div class="card__obras">
                  <img src="<?php echo $row['urlImagemObra'] ?>" class="card__image__obras" alt="" />
                  <div class="card__overlay__obras">
                    <div class="card__header__obras">
                      <svg class="card__arc__obras" xmlns="http://www.w3.org/2000/svg">
                        <path />
                      </svg>
                      <img class="card__thumb__obras" src="<?php echo $row['fotoUsuario'] ?>" alt="" />
                      <div class="card__header-text__obras">
                        <h3 class="card__title__obras"><A href="visualizarPerfil.php?clicked=<?php echo $row['idUsuario'] ?>"><?php echo $row['nomeArtista'] ?></a></h3>
                        <span class="card__tagline__obras"><?php echo $row['nomeObra'] ?></span>
                      </div>
                    </div>
                    <p class="card__description"><?php echo $row['descObra'] ?></p>
                    <a class="btn-dark__obras btn-social__obras mx-2__obras" href="<?php echo $row['linkTwitter'] ?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn-dark__obras btn-social__obras mx-2__obras" href="<?php echo $row['linkFacebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn-dark__obras btn-social__obras mx-2__obras" href="<?php echo $row['linkIntagram'] ?>"><i class="fab fa-instagram"></i></a>
                  </div>
                </div>
              </li>
            <?php } ?>
            <!-- teste para o card artista -->
            <?php foreach ($listarUsuario as $row) { ?>
              <li class="artista <?php echo $row['nomeArtista'] ?>" onclick="window.location.href='visualizarPerfil.php?clicked=<?php echo $row['idUsuario'] ?>'">
                <div class="card-artista">
                  <img class="imagem-Artista" src="<?php echo $row['fotoUsuario'] ?>" alt="">
                  <div class="content-obra-artista">
                    <div class="contentBx">
                      <h3><A href="visualizarPerfil.php?clicked=<?php echo $row['idUsuario'] ?>"><?php echo $row['nomeArtista'] ?><br><span><?php echo $row['descPerfil'] ?></span></h3>
                    </div>
                    <div class="sci">
                      <a class="btn-artista" href="<?php echo $row['linkTwitter'] ?>"><i class="fab fa-twitter"></i></a>
                      <a class="btn-artista" href="<?php echo $row['linkFacebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn-artista" href="<?php echo $row['linkIntagram'] ?>"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </li>
            <?php } ?>
            <!-- fim do teste -->
          </ul>
        </section>
      </div>

    </div>
  </section>

  <section class="Artistas__destaque">
    <div class="container--ASDASD">
      <div class="section-header">
        <h3 class="title" data-title="Artistas">Em destaque</h3>
        <p class="text">
          Alguns artistas que se destacaram na nossa plataforma.
        </p>
      </div>
      <div class="container-destaque">
        <div class="card-destaque" onclick="window.location.href='visualizarPerfil.php?clicked=19'">
          <img class="imagem-Artista" src="img/Edu.jfif" alt="">
          <div class="content-obra-artista">
            <div class="contentBx">
              <h3>Edu Ribeiro<br><span>Artista</span></h3>
            </div>
            <div class="sci">
              <a class="btn-artista" href="https://twitter.com/Arlesson_edu"><i class="fab fa-twitter"></i></a>
              <a class="btn-artista" href="#!"><i class="fab fa-facebook-f"></i></a>
              <a class="btn-artista" href="https://www.instagram.com/_eduribeiro21/?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="card-destaque" onclick="window.location.href='visualizarPerfil.php?clicked=26'">
          <img class="imagem-Artista" src="img/panCastro.jpg" alt="">
          <div class="content-obra-artista">
            <div class="contentBx">
              <h3>Panmela Castro<br><span>Artista visual</span></h3>
            </div>
            <div class="sci">
              <a class="btn-artista" href="https://twitter.com/panmelacastro"><i class="fab fa-twitter"></i></a>
              <a class="btn-artista" href="https://www.facebook.com/panmelacastro"><i class="fab fa-facebook-f"></i></a>
              <a class="btn-artista" href="https://www.instagram.com/panmelacastro/?hl=pt"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="card-destaque" onclick="window.location.href='visualizarPerfil.php?clicked=16'">
          <img class="imagem-Artista" src="img/djamila.jpg" alt="">
          <div class="content-obra-artista">
            <div class="contentBx">
              <h3>Djamila Ribeiro<br><span>Filósofa e escritora</span></h3>
            </div>
            <div class="sci">
              <a class="btn-artista" href="#!"><i class="fab fa-twitter"></i></a>
              <a class="btn-artista" href="https://www.facebook.com/djamila.ribeiro.1"><i class="fab fa-facebook-f"></i></a>
              <a class="btn-artista" href="https://www.instagram.com/djamilaribeiro1/?hl=pt-br"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="card-destaque" onclick="window.location.href='visualizarPerfil.php?clicked=15'">
          <img class="imagem-Artista" src="img/conceicao.jpg" alt="">
          <div class="content-obra-artista">
            <div class="contentBx">
              <h3>Conceição Evaristo<br><span>Escritora</span></h3>
            </div>
            <div class="sci">
              <a class="btn-artista" href="#!"><i class="fab fa-twitter"></i></a>
              <a class="btn-artista" href="https://www.facebook.com/ceicaoevaristo"><i class="fab fa-facebook-f"></i></a>
              <a class="btn-artista" href="https://www.instagram.com/conceicaoevaristooficial/?hl=pt-br"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="Obras__destaque">
    <div class="container--ASDASD">
      <div class="section-header">
        <h3 class="title" data-title="Obras">Em destaque</h3>
        <p class="text">
          Algumas obras em destaque de alguns artistas maravilhosos.
        </p>
      </div>
      <div class="container__destaque">
        <div class="options">
          <div class="option active-card" style='--optionBackground: url(https://i.imgur.com/4fMxfeA.jpg);'>
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <i class="fas fa-palette"></i>
              </div>
              <div class="info">
                <div class="main" onclick="window.location.href='visualizarPerfil.php?clicked=19'">Domingo de sol</div>
                <div class="sub" onclick="window.location.href='visualizarPerfil.php?clicked=19'">Edu Ribeiro </div>
              </div>
            </div>
          </div>
          <div class="option" style='--optionBackground:url(https://i.imgur.com/7rfpbV9.jpg);'>
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <i class="fas fa-palette"></i>
              </div>
              <div class="info">
                <div class="main" onclick="window.location.href='visualizarPerfil.php?clicked=19'">Costela, espada e lança</div>
                <div class="sub" onclick="window.location.href='visualizarPerfil.php?clicked=19'">Edu Ribeiro</div>
              </div>
            </div>
          </div>
          <div class="option" style='--optionBackground:url(https://i.imgur.com/5uvI5ER.jpg);'>
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <i class="fas fa-palette"></i>
              </div>
              <div class="info">
                <div class="main" onclick="window.location.href='visualizarPerfil.php?clicked=26'">Mulheres Em Fúria</div>
                <div class="sub" onclick="window.location.href='visualizarPerfil.php?clicked=26'">Panmela Castro</div>
              </div>
            </div>
          </div>
          <div class="option" style='--optionBackground:url(https://i.imgur.com/jb8O21Z.jpg);'>
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <div class="info">
                <div class="main" onclick="window.location.href='visualizarPerfil.php?clicked=16'">Lugar de Fala</div>
                <div class="sub" onclick="window.location.href='visualizarPerfil.php?clicked=16'">Djamila Ribeiro</div>
              </div>
            </div>
          </div>
          <div class="option" style='--optionBackground:url(https://i.imgur.com/zosr33I.jpg);'>
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
              <div class="info">
                <div class="main" onclick="window.location.href='visualizarPerfil.php?clicked=13'">Dom Casmurro</div>
                <div class="sub" onclick="window.location.href='visualizarPerfil.php?clicked=13'">Machado de Assis</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


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


  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="js/js bootstrap/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./js/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="./js/app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="./js/slick.min.js"></script>

  <script src="./js/mainindex.js"></script>
  <script src="./js/script.js"></script>
  <script src="./js/active.js"></script>

</body>

</html>
