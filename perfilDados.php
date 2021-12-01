<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Configuração Perfil</title>

  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


  <link rel="stylesheet" href="css/style-configPerfil.css">
</head>

<body>
  <header id="header">
    <nav>
      <div class="container">
        <div class="logo">
          <a href="index.php"><img src="./img/logosit.png" alt="" /></a>
        </div>

        <div class="links">
          <ul>
            <li>
              <a href="index.php">Home</a>
            </li>
            <div class="dropdown">
              <li><a>Categorias˅</a></li>
              <div class="dropcontent">
                <a href="categoriaLiteratura.php">Literatura</a>
                <a href="categoriaArtes.php">Artes plásticas</a>
              </div>
            </div>
            <li>
              <a href="perfil.php" class="active">Perfil</a>
            </li>
          </ul>
        </div>

        <div class="hamburger-menu">
          <div class="bar"></div>
        </div>
      </div>
    </nav>
  </header>

  <?php

  session_start();
  require_once "global.php";


  $obra = new Obra();

  $listarObra = $obra->listarObraArtista();

  $usuario = new Usuario();

  $listarUsuario = $usuario->listarUsuario();

  $listarLocalizacaoUsuario = $usuario->listarLocalizacaoUsuario();

  $listarFoneArtista = $usuario->listarFoneArtista();

  $listarRedesUsuario = $usuario->listarRedesUsuario();

  ?>

  <div class="container-config">


    <?php foreach ($listarUsuario as $row) { ?>
      <form method="POST" name="form-perfil" action="alterar-perfil.php" enctype="multipart/form-data">
        <div class="leftbox">
          <nav class="menu-container">
            <a onclick="tabs(0)" class="tab active"><i class="far fa-address-card"></i></a>
            <a onclick="tabs(1)" class="tab"><i class="fas fa-map-marked-alt"></i></a>
            <a onclick="tabs(2)" class="tab"><i class="far fa-comment"></i></a>
            <a onclick="tabs(3)" class="tab"><i class="fas fa-link"></i></a>
          </nav>
        </div>
        <div class="rightbox">
          <div class="profile tabShow">
            <h1>Perfil artista</h1>
            <div class="form-file">
              <input type="file" class="inputfile" name="your_picture" id="your_picture" onclick="FotoArtista()" />
              <label for="your_picture">
                <figure>
                  <img src="img/your-picture.png" alt="" class="your_picture_image" id="fotoArtista">
                </figure>
                <span class="file-button">Foto do artista</span>
              </label>
            </div>
            <div class="form-group-flex">
              <div class="form-group">
                <h3>Nome Artista</h3>
                <input type="text" class="input" name="nomeArtista" placeholder="Nome do artista: " value="<?php echo $row['nomeArtista'] ?>" />
              </div>
              <div class="form-group">
                <h3>Descrição Perfil</h3>
                <input type="text" class="input" name="descPerfil" placeholder="Descrição do perfil:" value="<?php echo $row['descPerfil'] ?>" />
              </div>
            </div>

            <button class="btn-update-1" type="submit">Confirmar</button>
          </div>
        <?php } ?>

        <?php foreach ($listarLocalizacaoUsuario as $row) { ?>
          <div class="lugar tabShow">
            <h1>localização artista</h1>
            <div class="form-group-flex">
              <div class="form-group">
                <h3>País</h3>
                <input type="text" class="input" name="pais" placeholder="Nome do país: " value="<?php echo $row['paisArtista'] ?>" />
              </div>
              <div class="form-group">
                <h3>CEP</h3>
                <input type="text" class="input" name="cep" placeholder="CEP: " value="<?php echo $row['cepArtista'] ?>" />
              </div>
              <div class="form-group">
                <h3>Rua e número de contato</h3>
                <input type="text" class="input" name="log" placeholder="Nome da rua e número: " value="<?php echo $row['logArtista'] ?>" />
              </div>
            </div>

            <button class="btn-update" type="submit">Confirmar</button>
          </div>
        <?php } ?>

        <?php foreach ($listarFoneArtista as $row) { ?>
          <div class="contato tabShow">
            <h1>Contato artista</h1>
            <div class="form-group-flex">
              <div class="form-group">
                <h3>Número de contato</h3>
                <input type="text" class="input" name="numContato" placeholder="Número de contato: " value="<?php echo $row['descFoneArtista'] ?>" />
              </div>
              <div class="form-group">
                <h3>Número pessoal do artista</h3>
                <input type="text" class="input" name="numPessoal" placeholder="Número pessoal do artista: " value="<?php echo $row['descCelArtista'] ?>" />
              </div>
            <?php } ?>

            <?php foreach ($listarUsuario as $row) { ?>
              <div class="form-group">
                <h3>Email de contato do artista</h3>
                <input type="text" class="input" name="emailContato" placeholder="Email de contato artista: " value="<?php echo $row['emailContato'] ?>" />
              </div>
            </div>

            <button class="btn-update" type="submit">Confirmar</button>
          </div>
        <?php } ?>

        <?php foreach ($listarRedesUsuario as $row) { ?>
          <div class="rede tabShow">
            <h1>Rede social artista</h1>
            <div class="form-group-flex">
              <div class="form-group">
                <h3>Instagram do artista</h3>
                <input type="text" class="input" name="linkInsta" placeholder="Link perfil Instagram: " value="<?php echo $row['linkIntagram'] ?>" />
              </div>
              <div class="form-group">
                <h3>Facebook do artista</h3>
                <input type="text" class="input" name="linkFacebook" placeholder="Link perfil Facebook: " value="<?php echo $row['linkFacebook'] ?>" />
              </div>
              <div class="form-group">
                <h3>Twitter do artista</h3>
                <input type="text" class="input" name="linkTwitter" placeholder="Link perfil Twitter: " value="<?php echo $row['linkTwitter'] ?>" />
              </div>
            </div>

            <button class="btn-update" type="submit">Confirmar</button>
          <?php } ?>
          </div>
        </div>
      </form>
  </div>


  <footer class="footer">
    <div class="container">

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

  <script src="jquery/jquery.js"></script>
  <script>
    const tabBtn = document.querySelectorAll(".tab");
    const tab = document.querySelectorAll(".tabShow");

    function tabs(panelIndex) {
      tab.forEach(function(node) {
        node.style.display = "none";

      });
      tab[panelIndex].style.display = "block";
    }
    tabs(0);
  </script>
  <script>
    $(".tab").click(function() {
      $(this).addClass("active").siblings().removeClass("active");
    })
  </script>

  <script src="js/perfil.js"></script>
</body>

</html>