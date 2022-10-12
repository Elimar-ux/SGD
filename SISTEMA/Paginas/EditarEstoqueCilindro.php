<?php
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLogin.php');

$id_registro = $_GET['id'];


// 6. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO SERVIDOR DE BD
$sql = "SELECT * FROM estoque_cilindros WHERE idCilindro = $id_registro";


// 7. EXECUTAR SCRIPT SQL
$resultado = mysqli_query($conexao, $sql);
$arResultado = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Editar registro do cilindro</title>
	<link rel="stylesheet" href="../css/estilo_cadastrarr.css">
</head>

<body>
	<!-- Menu -->
	 <a href="estoque.php">|VOLTAR|</a>
	<!-- Fim-Menu -->
	<div id="corpo-form-edit">

		<h3>Editar Chopeira</h3>
		<form method="POST" enctype="multipart/form-data" action="../PaginasControle/cEditarCilindro.php">
			<!-- editar_control.php  -->
			<input type="hidden" name="idCilindro" value="<?php echo $arResultado['idCilindro'] ?>">
			<!-- Fim editar_control.php  -->

			Código do cilindro: <input type="text" name="codigoCilindro" value="<?php echo $arResultado['codigoCilindro'] ?>"><br />
			Quantidade de co2: <input type="text" name="kg_co2" value="<?php echo $arResultado['kg_co2'] ?>"><br />
			Peso do cilindro: <input type="text" name="pesoCilindro" value="<?php echo $arResultado['pesoCilindro'] ?>"><br />
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