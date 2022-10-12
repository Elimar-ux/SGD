<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div class="container">
		<div class="cadastro">
			<form action="../PaginasControle/cCadastrar.php" method="POST">
				<h2>CADASTRO</h2>
				<div class="barras">
					<input type="text" name="nome" placeholder="Nome">
					<input type="text" name="login" placeholder="Login">
					<input type="tel" name="phoneString" placeholder="Telefone para contato">
					<input type="password" name="senha" placeholder="Senha">
					<input type="password" name="senhaConfirm" id="inputConfirma" placeholder="Confirmar Senha">
				</div>
				<span>
					<?php
						if(isset($_GET['m'])){
							echo $_GET['m'];
						}	
					?>
				</span>
				<div class="botoesCadastro">
					<button id="botao" name="btnCadastro">Cadastrar</button>
			</form>
					<button id="botao" name="btnVoltar" formaction="login.php">Voltar</button>
				</div>
		</div>
	</div>
</body>
</html>