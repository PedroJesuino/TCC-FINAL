<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="css/style-categoria.css">
</head>
<body>

  <?php

    require 'global.php';
    $obra = new Obra();

    $listarObra = $obra->listarObra();
  
  ?>
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
              <a href="cadastrar.php" class="active">Postar</a>
            </li>
          </ul>
        </div>

        <div class="hamburger-menu">
          <div class="bar"></div>
        </div>
      </div>
    </nav>
  </header>

    <main>
            <ul class="cards">
                
                <li>
                  <div class="card">
                    <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt="" />
                    <div class="card__overlay">
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                        <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
                        <div class="card__header-text">
                          <h3 class="card__title">kim Cattrall</h3>
                          <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span> 
                        </div>          
                      </div>
                      <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                </li>    
                <li>
                  <div class="card">
                    <img src="img/Gabi.png" class="card__image" alt="" />
                    <div class="card__overlay">
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                        <img class="card__thumb" src="img/Gabi.png" alt="" />
                        <div class="card__header-text">
                          <h3 class="card__title">Jessica Parker</h3>      
                          <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span>       
                        </div>
                      </div>
                      <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>      
                </li>
                <li>
                  <div class="card">
                    <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt="" />
                    <div class="card__overlay">        
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                        <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
                        <div class="card__header-text">
                          <h3 class="card__title">kim Cattrall</h3>
                          <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span> 
                        </div>
                      </div>
                      <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                </li>
                <li>
                  <div class="card">
                    <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="" />
                    <div class="card__overlay">
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                        <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
                        <div class="card__header-text">
                          <h3 class="card__title">Jessica Parker</h3>
                          <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span>            
                        </div>
                      </div>
                      <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                </li>
                <li>
                  <div class="card">
                    <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt="" />
                    <div class="card__overlay">
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                        <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
                        <div class="card__header-text">
                          <h3 class="card__title">kim Cattrall</h3>
                          <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span> 
                        </div>          
                      </div>
                      <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                </li>   
                <li>
                  <div class="card">
                    <img src="img/Gabi.png" class="card__image" alt="" />
                    <div class="card__overlay">
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                        <img class="card__thumb" src="img/Gabi.png" alt="" />
                        <div class="card__header-text">
                          <h3 class="card__title">Jessica Parker</h3>      
                          <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span>       
                        </div>
                      </div>
                      <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>      
                </li>
                <li>
                  <div class="card">
                    <img src="https://i.imgur.com/2DhmtJ4.jpg" class="card__image" alt="" />
                    <div class="card__overlay">        
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                        <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
                        <div class="card__header-text">
                          <h3 class="card__title">kim Cattrall</h3>
                          <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span> 
                        </div>
                      </div>
                      <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                </li>
                <li>
                  <div class="card">
                    <img src="https://i.imgur.com/oYiTqum.jpg" class="card__image" alt="" />
                    <div class="card__overlay">
                      <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
                        <img class="card__thumb" src="https://i.imgur.com/7D7I6dI.png" alt="" />
                        <div class="card__header-text">
                          <h3 class="card__title">Jessica Parker</h3>
                          <span class="card__tagline">Lorem ipsum dolor sit amet consectetur</span>            
                        </div>
                      </div>
                      <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                </li>
                <?php foreach($listarObra as $row) {?>
                    
                        <li>
                          <div class="card">
                          <?php echo "<img class='card__image' src='{$row['urlImagemObra']}' /> "?>
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
                                <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />
                                <div class="card__header-text">
                                  <h3 class="card__title">kim Cattrall</h3>
                                  <span class="card__tagline"><?php echo $row['nomeObra'] ?></span> 
                                </div>          
                              </div>
                              <p class="card__description"><?php echo $row['descObra'] ?></p>
                              <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                              <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                              <a class="btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        </li>   
                <?php }?>
              </ul>
    </main>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/app-categoria.js"></script>
</body>

</html>