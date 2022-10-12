<?php
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLogin.php');

$id = $_GET['id'];

// consulta no banco de dados
$sql = "SELECT * FROM estoque_barris";
$sql .= " WHERE idBarril = " . $id;

$con = mysqli_query($conexao, $sql);

// 
$dado = mysqli_fetch_assoc($con);



?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Excluir barril</title>
</head>
<body>
	<div class="container">
		<div class="altertarUser">
			<form action="../PaginasControle/cDelEstoqueBarril.php" method="POST">
				ID: <?php echo $dado['idBarril']; ?>
				<input type="hidden" name="id" value="<?php echo $dado['idBarril']; ?>"><br/>
				<label>Codigo do barril: </label>
				<?php echo $dado['numeroBarril']; ?><br>
				<label>Nome do chopp: </label>
				<?php echo $dado['nomeChopp']; ?><br>
				<label>Litragem do barril: </label>
				<?php echo $dado['litros']; ?> L<br>								
				<a>Deseja realmente excluir este produto?</a>
				<div class="btnAlter">
					<button id="botao" name="deletar">SIM</button>	
				</div>	
			</form>
				<form action="estoque.php">
					<button id="botao" name="voltar">NÃO</button>
				</form>
		</div>
	</div>
</body>
</html>
