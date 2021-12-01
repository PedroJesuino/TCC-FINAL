<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style-login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
				<img class="wave" src="img/wave.png">
				<div class="img">
					<img src="img/bg.svg">
				</div>
				<div class="login-content">
					<form method="POST" action="logarAdmin.php">
						<img src="img/avatar.svg">
						<h2 class="title">Login Admin</h2>
						<div class="input-div one">
						<div class="i">
								<i class="fas fa-user"></i>
						</div>
						<div class="div">
								<h5>E-mail</h5>
								<input type="email"  name="emailAdmin" class="input">
						</div>
						</div>
						<div class="input-div pass">
						<div class="i"> 
								<i class="fas fa-lock"></i>
						</div>
						<div class="div">

								<h5>Senha</h5>
								<input type="password" class="input" name="passwordAdmin" id="password">
								<button type="button" onclick="mostrarSenha()" id="btn-show"><i class="far fa-eye"></i></button>	
						</div>
						</div>
						<a href="#">Esqueceu a senha?</a>
						<input type="submit" class="btn" value="Login">
						
					</form>
				</div>
    </div>
    <script type="text/javascript" src="assets/js/main-login.js"></script>
	<script type="text/javascript">

        function mostrarSenha(){
        var btnShow = document.getElementById('btn-show')

            let password = document.getElementById('password')

            if(password.type == "password"){
                password.type = "text"
                this.style.opacity = "1"

            } else{
                password.type = "password"
                this.style.opacity = ".4"
            }
    }
    </script>
</body>
</html>
