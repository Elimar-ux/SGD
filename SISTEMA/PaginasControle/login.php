<?php
session_start();
include('conexao.php');

$login = $_POST['login'];
$senha = md5($_POST['senha']);

$sql = " SELECT login, senha, tipoUsuario FROM cliente WHERE login = '$login' UNION SELECT login, senha, tipoUsuario FROM administrador WHERE login = '$login';";

$con = mysqli_query($conexao, $sql);
$dado = mysqli_fetch_assoc($con);


if(empty($login) || empty($senha)) {
	$m = "Usuário ou senha não preenchido!";
	header("Location: ../index.php?m=$m");
	exit();
}

if ($dado['tipoUsuario'] == '1') {
	$tipoUser = 'adm';
	$query = "select idAdministrador, login from administrador where login = '{$login}' and senha = '{$senha}'";
}elseif ($dado['tipoUsuario'] == '0') {
	$tipoUser = 'cliente';
	$query = "select idCliente, login from cliente where login = '{$login}' and senha = '{$senha}'";
}
if ($dado['login'] !== $login OR $dado['senha'] !== $senha) {
	$m = "Usuário ou senha incorretos!";
	header("Location: ../Paginas/login.php?m=$m");
	exit();
}

if ($dado['funcao'] == '0') {
	$funcao = 'gerente';
	$_SESSION['funcao'] = $funcao;
}else{
	$funcao = 'funcionario';
	$_SESSION['funcao'] = $funcao;
}


$login = mysqli_real_escape_string($conexao, $login);
$senha = mysqli_real_escape_string($conexao, $senha);


$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['login'] = $login;
		if ($tipoUser == 'adm') {
			$_SESSION['perfil'] = 'adm';
			header('Location: ../Paginas/estoque.php');
			exit();
		}else{
			$_SESSION['perfil'] = 'cliente';
			header("Location: ../Paginas/orcamento.php?login=$login");
			exit();
		}
	
}else{
	$m = "Erro ao acessar a conta!";
	header("Location: ../Paginas/login.php?m=$m");
	exit();
}

?>