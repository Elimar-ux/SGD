<?php
session_start();
include('../PaginasControle/conexao.php');

$id = $_GET['id'];

// consulta no banco de dados
$sql = "SELECT * FROM estoque_chopeiras";
$sql .= " WHERE idChopeira = " . $id;

$con = mysqli_query($conexao, $sql);

// 
$dado = mysqli_fetch_assoc($con);



?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Excluir chopeira</title>
</head>
<body>
	<div class="container">
		<div class="altertarUser">
			<form action="../PaginasControle/cDelEstoqueChopeira.php" method="POST">
				ID: <?php echo $dado['idChopeira']; ?>
				<input type="hidden" name="id" value="<?php echo $dado['idChopeira']; ?>"><br/>
				<label>Codigo da chopeira: </label>
				<?php echo $dado['codigoChopeira']; ?><br>
				<label>Tipo da chopeira: </label>
				<?php echo $dado['tipoTorneira']; ?><br>								
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
