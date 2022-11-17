<?php
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLogin.php');
include('../PaginasControle/verificaPerfil.php');


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
	<link rel="icon" type="image/png" href="../images/logo.png">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<style>
	.overlay {
	  height: 100%;
	  width: 200px;
	  background-color: #fff;
	  position: fixed!important;
	  z-index: 1;
	  position: fixed;
	  top: 0;
	  left: 0;
	}

	</style>
    <!-- Navbar (sit on top) -->
	<div class="w3-top">
	  <div class="w3-bar w3-white w3-card" id="myNavbar"> 
	    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-wide" onclick="w3_open()"><i class="fa fa-bars fa-2x"></i></a>
	    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
	      <i class="fa fa-bars"></i>
	    </a>
	  </div>
	</div>

	<!-- menu lateral -->
	<nav class="overlay w3-bar-block w3-black w3-card w3-animate-right" style="display:none" id="mySidebar">
	  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Fechar ×</a>
	  <a class="w3-bar-item"><i class="fa fa-user"></i> <?php echo $_SESSION['login'];?></a>
	  <a href="dashboard.php" onclick="w3_close()" class="w3-bar-item w3-button">Dashboard</a>
	  <a href="../PaginasControle/logout.php" onclick="w3_close()" class="w3-bar-item w3-button">Sair</a>
	</nav>

    <!-- Fim-Menu -->
	<section>
		<div class="containerEstoque">
			<div class="login">
				<div class="nomesTabelas">
					<div>
						<h2>ESTOQUE DE CHOPEIRA</h2>
					</div>
					<div>
						<h2>ESTOQUE DE CILINDRO</h2>
					</div>
					<div>
						<h2>ESTOQUE DE BARRIL</h2>
					</div>
				</div>
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
				</div>

				<div class="btnTabela2">
					<form action="cadEstCilindro.php">
						<button id="botao">Inserir</button>
					</form>
				</div>
				<div class="btnTabela3">
					<form action="cadEstBarril.php">
						<button id="botao">Inserir</button>
					</form>
				</div>
			</div>
		</div>
	</section>
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>	
</body>
</html>