<?php
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLogin.php');

// consulta no banco de dados
$consulta1 ="SELECT * FROM estoque_chopeiras";
$consulta2 ="SELECT * FROM estoque_cilindros";
$consulta3 ="SELECT * FROM estoque_barris";
$con1 = mysqli_query($conexao, $consulta1);
$con2 = mysqli_query($conexao, $consulta2);
$con3 = mysqli_query($conexao, $consulta3);

//Contador de produtos
$totalEstChopeiras = mysqli_num_rows($con1);
$totalEstCilindros = mysqli_num_rows($con2);
$totalEstBarris = mysqli_num_rows($con3);



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
	<!-- Menu -->
    | <a href="../PaginasControle/logout.php">Sair da seção - <?php echo $_SESSION['login'];?></a>
    <a href="homeAdm.php"> - Voltar</a>|
    <!-- Fim-Menu -->
	<section>
		<div class="containerEstoque">
			<div class="login">
				<h2>Estoques</h2>
				<div id="tabelas">
					<div id="tabela1">
						<div id="tbl-header">
							<table cellpadding="2" cellspacing="0" border="0">
								<thead>
								   <tr>
								       <th>Codigo da chopeira</th>
								       <th>Tipo de torneira</th>
								       <th>Em uso</th>
								       <th>Em higienização</th>
								       <th colspan="2">Ações</th>
								   </tr>
								   </thead>
							</table>
						</div>
						<div class="tbl-content">
							<?php while ($dado = mysqli_fetch_array($con1)) { ?>
								<table  border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td><?php echo $dado['codigoChopeira']; ?></td>
											<td><?php echo $dado['tipoTorneira']; ?></td>
											<td><?php echo $dado['emUso']; ?></td>
											<td><?php echo $dado['emHigienizacao']; ?></td>
											<td><a href='EditarEstoqueChopeira.php?id=<?php echo $dado['idChopeira']; ?>'>Alterar</a></td>
											<td><a href='DelEstoqueChopeira.php?id=<?php echo $dado['idChopeira']; ?>'>Excluir</a></td>
										</tr>
									<?php
							            } if ($totalEstChopeiras == '0') {
							                echo "Não há registros!";
							            }
					        		?>
			        			</table>
			        	</div>
					</div>
					<div id="tabela2">
						<div id="tbl-header">
							<table cellpadding="2" cellspacing="0" border="0">
								<thead>
								   <tr>
								       <th>Codigo do cilindro</th>
								       <th>Quantidade de Co2</th>
								       <th>Peso do cilindro</th>
								       <th>em Uso</th>
								       <th colspan="2">Ações</th>
								   </tr>
								   </thead>
							</table>
						</div>
						<div class="tbl-content">
							<?php while ($dado = mysqli_fetch_array($con2)) { ?>
								<table cellpadding="0" cellspacing="0" border="0">
										<tr>
											<td><?php echo $dado['codigoCilindro']; ?></td>
											<td><?php echo $dado['kg_co2']; ?> kg</td>
											<td><?php echo $dado['pesoCilindro']; ?> kg</td>
											<td><?php echo $dado['emUso']; ?></td>
											<td><a href='EditarEstoqueCilindro.php?id=<?php echo $dado['idCilindro']; ?>'>Alterar</a></td>
											<td><a href='DelEstoqueCilindro.php?id=<?php echo $dado['idCilindro']; ?>'>Excluir</a></td>
										</tr>
									<?php
							            } if ($totalEstCilindros == '0') {
							                echo "Não há registros!";
							            }
					        		?>
								</table>
						</div>
					</div>
					<div id="tabela3">
						<div id="tbl-header">
							<table cellpadding="2" cellspacing="0" border="0">
								<thead>
								   <tr>
								       <th>Codigo do barril</th>
								       <th>Nome do chopp</th>
								       <th>Tipo do chopp</th>
								       <th>Litros</th>
								       <th>Custo</th>
								       <th>Em uso</th>
								       <th colspan="2">Ações</th>
								   </tr>
								   </thead>
							</table>
						</div>
						<div class="tbl-content">
							<?php while ($dado = mysqli_fetch_array($con3)) { ?>
								<table cellpadding="0" cellspacing="0" border="0">
										<tr>
											<td><?php echo $dado['numeroBarril']; ?></td>
											<td><?php echo $dado['nomeChopp']; ?></td>
											<td><?php echo $dado['tipoChopp']; ?></td>
											<td><?php echo $dado['litros']; ?> L</td>
											<td><?php echo $dado['custo']; ?></td>
											<td><?php echo $dado['emUso']; ?></td>
											<td><a href='EditarEstoqueBarril.php?id=<?php echo $dado['idBarril']; ?>'>Alterar</a></td>
											<td><a href='DelEstoqueBarril.php?id=<?php echo $dado['idBarril']; ?>'>Excluir</a></td>
										</tr>
									<?php
							            } if ($totalEstBarris == '0') {
							                echo "Não há registros!";
							            }
					        		?>
								</table>
						</div>
					</div>
				</div>
			</div>
			<div class="btnTabelasteste">
				<div class="btnTabela1">
					<form action="cadEstChopeira.php">
						<button id="botao">Inserir</button>
					</form>
					<form action="homeAdm.php">
						<button id="botao">Voltar</button>
					</form>
					<form action="../PaginasControle/logout.php">
						<button id="botao" name="logout">Sair</button>
					</form>
				</div>

				<div class="btnTabela2">
					<form action="cadEstCilindro.php">
						<button id="botao">Inserir</button>
					</form>
					<form action="homeAdm.php">
						<button id="botao">Voltar</button>
					</form>
					<form action="../PaginasControle/logout.php">
						<button id="botao" name="logout">Sair</button>
					</form>
				</div>

				<div class="btnTabela3">
					<form action="cadEstBarril.php">
						<button id="botao">Inserir</button>
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
	</section>	
</body>
</html>