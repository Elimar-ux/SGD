<?php
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLogin.php');

$id_registro = $_GET['id'];


// 6. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO SERVIDOR DE BD
$sql = "SELECT * FROM estoque_chopeiras WHERE idChopeira = $id_registro";


// 7. EXECUTAR SCRIPT SQL
$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Editar registro da chopeira</title>
	<link rel="stylesheet" href="../css/estilo_cadastrarr.css">
</head>

<body>
	<!-- Menu -->
	 <a href="estoque.php">|VOLTAR|</a>
	<!-- Fim-Menu -->
	<div id="corpo-form-edit">

		<h3>Editar Chopeira</h3>
		<form method="POST" enctype="multipart/form-data" action="../PaginasControle/cEditarChopeiras.php">
			<!-- editar_control.php  -->
			<input type="hidden" name="idChopeira" value="<?php echo $arResultado['idChopeira'] ?>">
			<!-- Fim editar_control.php  -->

			Código da chopeira: <input type="text" name="codigo" value="<?php echo $arResultado['codigoChopeira'] ?>"><br />
			Quantidade torneiras: <input type="text" name="tipo" value="<?php echo $arResultado['tipoTorneira'] ?>"><br />
			Em uso: 
			<select name="emUso">
						<option value="nada">--- TIPO ---</option>
						<option value="sim">Sim</option>
						<option value="não">Não</option>
			</select><br />
			Em Higienização: 
			<select name="emHigienizacao">
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