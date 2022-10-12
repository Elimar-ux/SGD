<?php 
include('../PaginasControle/conexao.php');

$login = $_POST['login'];

$sql = "SELECT * FROM usuario WHERE login = '$login'";

$con = mysqli_query($conexao, $sql);
$dado = mysqli_fetch_assoc($con);
?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trocar de senha</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
		<form action="../PaginasControle/cAlterarSenha.php?id=<?php echo $dado['id_login']; ?>" method="POST">
			ID: <?php echo $dado['id_login']; ?><br>
			Usuário: <?php echo "$login"; ?><br>
			<p>Digite a nova senha:</p>
			<input type="password" name="senha" placeholder="Digite a senha">
			<input type="password" name="senhaConfirm" placeholder="Confirme a senha">
			<p>Deseja mesmo alterar a senha?</p>
			<button id="botao">SIM</button>
		</form>
		<form action="../index.php"><button id="botao">NÃO</button></form>
	</div>
</body>
</html>