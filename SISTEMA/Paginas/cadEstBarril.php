<?php
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLogin.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Adicionar novo barril</title>
	<link rel="stylesheet" href="../css/style.css">

</head>

<body>
	<!-- Menu -->
	<!--  -->
	| <a href="estoque.php">VOLTAR</a>|
	<!-- Fim-Menu -->
	<div id="corpo-form-cad">
		<h1>Adicionar barril</h1>
		<form method="POST" enctype="multipart/form-data" action="../PaginasControle/cEstBarril.php">
			<input type="text" name="numeroBarril" placeholder="Código do barril">
			<input type="text" name="nomeChopp" placeholder="Nome do chopp">
			<input type="text" name="tipoChopp" placeholder="Tipo do chopp">
			<input type="text" name="litros" placeholder="Litros">
			<input type="submit" value="CADASTRAR">
		</form>
	</div>

</body>

</html>
<br>
<br>