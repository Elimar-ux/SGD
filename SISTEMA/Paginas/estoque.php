<?php
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLogin.php');

// consulta no banco de dados
$consulta ="SELECT * FROM estoque_chopeiras";
$con = mysqli_query($conexao, $consulta);

//Contador de livros
$totalEstChopeiras = mysqli_num_rows($con);

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
	<div class="containerEstoque">
		<div class="login">
			<h2>Estoque</h2>
			<div class="tabelas">
			<table width="600px" border="1">
				<thead>
				   <tr>
				       <th>Codigo da chopeira</th>
				       <th>Tipo de torneira</th>
				       <th>Em uso</th>
				       <th>Em higienização</th>
				       <th colspan="2">Ações</th>
				   </tr>
				   </thead>
				<?php while ($dado = mysqli_fetch_array($con)) { ?>
					<tr>
						<td><?php echo $dado['codigoChopeira']; ?></td>
						<td><?php echo $dado['tipoTorneira']; ?></td>
						<td><?php echo $dado['emUso']; ?></td>
						<td><?php echo $dado['emHigienizacao']; ?></td>
						<td><a href='EditarEstoque.php?id=<?php echo $dado['idChopeira']; ?>'>Alterar</a></td>
						<td><a href='DelEstoqueChopeira.php?id=<?php echo $dado['idChopeira']; ?>'>Excluir</a></td>
					</tr>
				<?php
		            } if ($totalEstChopeiras == '0') {
		                echo "Não há registros!";
		            }
        		?>
			</table>
			
			</div>
			<div class="btnEstoque">
				<form action="cadEstChopeira.php">
					<button id="botao">Add</button>
				</form>
				<form action="homeAdm.php">
					<button id="botao">Voltar</button>
				</form>
				<form action="../PaginasControle/logout.php">
					<button id="botao" name="logout">Sair</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>