<?php
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLogin.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Adicionar novo cilindro</title>
	<link rel="stylesheet" href="../css/style.css">

</head>

<body>
	<!-- Menu -->
	<!--  -->
	| <a href="estoque.php">VOLTAR</a>|
	<!-- Fim-Menu -->
	<div id="corpo-form-cad">
		<h1>Adicionar cilindro</h1>
		<form method="POST" enctype="multipart/form-data" action="../PaginasControle/cEstCilindro.php">
			<input type="text" name="codigoCilindro" placeholder="Código do cilindro">
			<input type="text" name="pesoCilindro" placeholder="Peso do cilindro vazio">
			<input type="text" name="kg_co2" placeholder="Quantidade de co2">
			<input type="submit" value="CADASTRAR">
		</form>
	</div>

</body>

</html>
<br>
<br>