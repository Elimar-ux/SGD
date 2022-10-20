<?php 
include("conexao.php");

$id = $_GET['id'];

// consulta no banco de dados
$sql = " SELECT senha, tipoUsuario FROM cliente WHERE idCliente = '$id' UNION SELECT senha, tipoUsuario FROM administrador WHERE idAdministrador = '$id';";

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
if ($dado['tipoUsuario'] == 0) {
	$altera = "UPDATE cliente SET senha = '$senha'";
	$altera .= " WHERE idCliente = " . $id;
}elseif ($dado['tipoUsuario'] == 1) {
	$altera = "UPDATE administrador SET senha = '$senha'";
	$altera .= " WHERE idAdministrador = " . $id;
}


$resultado = mysqli_query($conexao, $altera);

if ($resultado) {
	header('Location: ../index.php');
	exit();
}else{
	echo "<br> erro!";
}

?>