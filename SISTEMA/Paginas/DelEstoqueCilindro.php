<?php
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLogin.php');

$id = $_GET['id'];

// consulta no banco de dados
$sql = "SELECT * FROM estoque_cilindros";
$sql .= " WHERE idCilindro = " . $id;

$con = mysqli_query($conexao, $sql);

// 
$dado = mysqli_fetch_assoc($con);



?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Excluir cilindro</title>
</head>
<body>
	<div class="container">
		<div class="altertarUser">
			<form action="../PaginasControle/cDelEstoqueCilindro.php" method="POST">
				ID: <?php echo $dado['idCilindro']; ?>
				<input type="hidden" name="id" value="<?php echo $dado['idCilindro']; ?>"><br/>
				<label>Codigo do cilindro: </label>
				<?php echo $dado['codigoCilindro']; ?><br>
				<label>Tamanho do cilindro: </label>
				<?php echo $dado['pesoCilindro']; ?> Kg<br>								
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
