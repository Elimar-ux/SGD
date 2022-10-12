<?php
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLogin.php');

$id_registro = $_GET['id'];


// 6. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO SERVIDOR DE BD
$sql = "SELECT * FROM estoque_barris WHERE idBarril = $id_registro";


// 7. EXECUTAR SCRIPT SQL
$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Editar registro do barril</title>
	<link rel="stylesheet" href="../css/estilo_cadastrarr.css">
</head>

<body>
	<!-- Menu -->
	 <a href="estoque.php">|VOLTAR|</a>
	<!-- Fim-Menu -->
	<div id="corpo-form-edit">

		<h3>Editar Chopeira</h3>
		<form method="POST" enctype="multipart/form-data" action="../PaginasControle/cEditarBarril.php">
			<!-- editar_control.php  -->
			<input type="hidden" name="idBarril" value="<?php echo $arResultado['idBarril'] ?>">
			<!-- Fim editar_control.php  -->

			Código do barril: <input type="text" name="numeroBarril" value="<?php echo $arResultado['codigoChopeira'] ?>"><br />
			Nome do chopp: <input type="text" name="nomeChopp" value="<?php echo $arResultado['nomeChopp'] ?>"><br />
			Tipo do chopp: <input type="text" name="tipoChopp" value="<?php echo $arResultado['tipoChopp'] ?>"><br />
			Litragem do barril: <input type="text" name="litros" value="<?php echo $arResultado['litros'] ?>"><br />
			Custo do barril: <input type="text" name="custo" value="<?php echo $arResultado['custo'] ?>"><br />
			Em uso: 
			<select name="emUso">
						<option value="nada">--- TIPO ---</option>
						<option value="sim">Sim</option>
						<option value="não">Não</option>
			</select><br />
			<p>
				<input type="submit" nome="btn_enviar" value="ALTERAR">
			</p>
		</form>
	</div>
</body>

</html>