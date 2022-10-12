<?php
session_start();
include_once('../PaginasControle/verificaLogin.php');
?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Estoque</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
		<div class="login">
			<form action="../PaginasControle/cadEstoqueSQL.php" method="POST">
				<h2>Adcicionar Produtos:</h2>
				<input type="text" name="codProduto" placeholder="Código do produto">
				<input type="text" name="nome" placeholder="Nome">
				<input type="text" name="preco" placeholder="Preço unitario">
				<input type="text" name="qtd" placeholder="Quantidade">
				<div class="botoes">
					<button id="botao" name="confirmar">Add Produto</button>
			</form>
			<button id="botao" name="voltar" formaction="estoque.php">Voltar</button>



			<?php
				if(isset($_SESSION['vazio'])):
				?>
				<div class="erro">
					<p>Verifique se os campos estão preenchidos!</p>
				</div>
				<?php
				endif;
				unset($_SESSION['vazio']);
				?>
			</div>
		</div>
	</div>
</body>
</html>