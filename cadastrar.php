<!DOCTYPE html>
<html lang="pt-br">
<?php session_start(); ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="colorlib.com">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro obra</title>

  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php
  require 'global.php';

  $categoria = new Categoria();
  $listCat = $categoria->listarCategoria();
  $listCatDois = $categoria->listarCat();

  ?>
  <header id="header">
    <nav>
      <div class="container-menu">
        <div class="logo">
          <a href="index.php"><img src="./img/logosit.png" alt="" class="img-logo" /></a>
        </div>

        <div class="links">
          <ul>
            <li>
              <a href="index.php">Home</a>
            </li>
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


  <div class="main">

    <div class="container">
      <h2>Enviar sua obra</h2>
      <form method="POST" name="form-obra" action="cadastrar-obra.php" id="signup-form" class="signup-form" enctype="multipart/form-data">
        <h3>
          Categoria
        </h3>
        <fieldset>
          <div class="form-radio">
            <label for="job" class="label-radio">Qual a sua categoria?</label>
            <div class="form-flex">
              <?php foreach ($listCat as $dados) { ?>
                <div class="form-radio">
                  <?php echo "<input type='radio' name='categoria' value='{$dados['idCategoria']}' id='designer' />" ?>
                  <label for="designer">
                    <figure>
                      <img src="<?php echo $dados['imgCategoria']; ?>" alt="">
                    </figure>
                    <span><?php echo $dados['descCategoria']; ?></span>
                  </label>
                </div>
              <?php } ?>
              <div class="form-radio">

                <label for="coder">
                  <figure>
                  </figure>
                </label>
              </div>
              <?php foreach ($listCatDois as $dados) { ?>
                <div class="form-radio">
                  <?php echo "<input type='radio' name='categoria' value='{$dados['idCategoria']}' id='developer' />" ?>
                  <label for="developer">
                    <figure>
                      <img src="<?php echo $dados['imgCategoria'] ?>" alt="">
                    </figure>
                    <span><?php echo $dados['descCategoria'] ?></span>
                  </label>
                </div>
              <?php } ?>
            </div>
          </div>
        </fieldset>

        <h3>
          Obra
        </h3>
        <fieldset>
          <div class="form-row">
            <div class="form-file">
              <input type="file" class="inputfile" name="flImage" id="flImage" onclick="obraFoto()" />
              <label for="flImage">
                <figure>
                  <img src="img/obra-de-arte.png" alt="" id="flFoto">
                </figure>
                <span class="file-button">Escolher obra</span>
              </label>
            </div>
            <div class="container-card">
              <div class="card card_medium">
                <img src="img/branco.jpg" alt="" class="img-card" id="img_card">
              </div>
            </div>

          </div>
        </fieldset>


        <h3>
          Descrição
        </h3>
        <fieldset>
          <div class="form-row form-input-flex">
            <div class="form-group-nome">
              <input class="contact-input" type="text" name="nome_Obra" id="nome_Obra" placeholder="Nome da obra: " />
            </div>
            <div class="form-group">
              <textarea class="contact-input textarea" name="desc" id="desc" placeholder="Descrição da obra: " cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="div-enviar">
            <input type="submit" class="input-enviar" id="enviar" onclick="swal('Obra enviada para análise, ao fim da análise será enviado um email para você');" />
          </div>
        </fieldset>
      </form>
    </div>

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

  <!-- JS -->

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
  <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/app.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>

</html>