<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div class="container">
		<div class="login">
			<form action="./PaginasControle/login.php" method="POST">
				<h2>LOGIN</h2>
				<input type="text" name="login" placeholder="Login">
				<input type="password" name="senha" placeholder="Senha">
				<div class="botoes">
					<button id="botao" name="btnSenha">Fazer Login</button>
			</form>
					<form action="cadastrar.php" method="POST">
						<input type="submit" name="novaConta" id="botao" value="Criar nova conta">
					</form>
				<span>
					<?php
						if(isset($_GET['m'])){
							echo $_GET['m'];
						}	
					?>
				</span>
				</div>
		</div>
		<br><br>
		<a href="esqueciSenha.php">Esqueci minha senha!</a>
	</div>
</body>
</html>