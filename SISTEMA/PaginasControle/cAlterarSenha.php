<?php 
include("conexao.php");

$id = $_GET['id'];

// consulta no banco de dados
$sql = "SELECT * FROM usuario";
$sql .= " WHERE id_login = " . $id;

$con = mysqli_query($conexao, $sql);

// 
$dado = mysqli_fetch_assoc($con);

$senha = md5($_POST['senha']);
$senhaConfirm = md5($_POST['senhaConfirm']);


if(empty($senha) OR empty($senhaConfirm)){
	echo "Verifique se os campos estão preenchidos!";
}


if ($senha != $senhaConfirm) {
	echo "As senhas não combinam, confirme e tente novamente!";
}


//altera a senha
$altera = "UPDATE usuario SET senha = '$senha'";
$altera .= " WHERE id_login = " . $id;

$resultado = mysqli_query($conexao, $altera);

if ($resultado) {
	header('Location: ../index.php');
	exit();
}else{
	echo "<br> erro!";
}

?>