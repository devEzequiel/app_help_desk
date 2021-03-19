<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Help Desk - Entrar</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<form class="form" action="scripts/valida_login.php" method="POST">
		<div class="container">
			<div class="container-t">
				<h2 class="title">Help Desk</h2>
				<p>LOGIN</p>

			</div>
			<div class="container-login">
				
				<input type="email" name="email" placeholder="Digite seu Email" required>

			</div>
			<div class="container-login">
				
				<input type="password" name="senha" placeholder="Digite sua senha" minlength="3" required>
			</div>

			<?php
			 	if (isset($_GET['login']) && $_GET['login'] == 'error') {	
			?>
				<div style="color:red"> email ou senha inválido(s)</div>

			<?php 
				}
			?>


			<?php
			 	if (isset($_GET['autenticado']) && $_GET['autenticado'] == 'nao') {	
			?>
				<div style="color:red"> Página indisponível. Por favor, faça o login.</div>

			<?php 
				}
			?>

			<div class="container-login btn">
				<button style="margin-top:40px;" type="submit">ACESSAR</button>
				
			</div>

		</div>
	</form>
	<footer id="roda">By PAYM A TECH Ltda.</footer>

</body>

</html>