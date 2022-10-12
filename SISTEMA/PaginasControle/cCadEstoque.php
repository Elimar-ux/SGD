<?php
session_start();
include('conexao.php');
include_once('verificaLogin.php');

/* Recuperar Form */
$codProduto = $_POST['codProduto'];
$nomeP = $_POST['nome'];
$preco = $_POST['preco'];
$qtd = $_POST['qtd'];

/* Verificar campos em branco */
if(empty($_POST['codProduto']) OR empty($_POST['nome']) OR empty($_POST['preco']) OR empty($_POST['qtd'])){
	$_SESSION['vazio'] = true;
	header('Location: ../Paginas/home.php');
	exit();
}
/* Enviar o dados para o DB*/
$sql = "INSERT INTO estoque (codProduto, nome, preco, quantidade) VALUES ('$codProduto', '$nomeP', '$preco', '$qtd')";

/* Executar */
$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
	header('Location: ../Paginas/estoque.php');
	exit();
}else{
	echo "<br> erro!";
}
?>