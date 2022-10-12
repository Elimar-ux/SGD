<?php
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLogin.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Adicionar nova chopeira</title>
	<link rel="stylesheet" href="../css/style.css">

</head>

<body>
	<!-- Menu -->
	<!--  -->
	| <a href="estoque.php">VOLTAR</a>|
	<!-- Fim-Menu -->
	<div id="corpo-form-cad">
		<h1>Cadastra-Livro</h1>
		<form method="POST" enctype="multipart/form-data" action="../PaginasControle/cEstChopeira.php">
			<input type="text" name="codigo" placeholder="Código da chopeira">
			<select name="tipoChopeira">
						<option value="default">--- TIPO ---</option>
						<option value="Uma torneira">Uma torneira</option>
						<option value="Duas torneiras">Duas torneiras</option>
					</select>
			<input type="submit" value="CADASTRAR">
		</form>
	</div>

</body>

</html>
<br>
<br>