<!DOCTYPE html>
<html>

<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="css/style-login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="container-registro">
		<div class="login-content">
			<form method="POST" action="cadastrar-artista.php">
				<img src="img/avatar.svg">
				<h2 class="title">Registro</h2>
				<div class="input-div email">
					<div class="i">
						<i class="far fa-envelope"></i>
					</div>
					<div class="div">
						<h5>Email:</h5>
						<input type="text" name="emailartist" class="input">
					</div>
				</div>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Nome:</h5>
						<input type="text" name="nomeartist" class="input">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Senha</h5>
						<input type="password" class="input" name="passwordartist" id="password">
						<button type="button" onclick="mostrarSenha()" id="btn-show"><i class="far fa-eye"></i></button>
					</div>
				</div>
				<input type="submit" class="btn" value="Registrar">
				<a href="login.php"><input class="btn-logar" value="Logar-se"></a>
				<a href="index.php" class="voltar"><i class="fas fa-arrow-left"></i></a>
			</form>
		</div>

		<div class="img-registro">
			<img src="img/bg-registro.svg">
		</div>
	</div>
	<img class="wave-registro" src="img/wave-registro.png">


	<script type="text/javascript" src="js/main-login.js"></script>
	<script type="text/javascript">
		function mostrarSenha() {
			var btnShow = document.getElementById('btn-show')

			let password = document.getElementById('password')

			if (password.type == "password") {
				password.type = "text"
				this.style.opacity = "1"

			} else {
				password.type = "password"
				this.style.opacity = ".4"
			}
		}
	</script>
</body>

</html>