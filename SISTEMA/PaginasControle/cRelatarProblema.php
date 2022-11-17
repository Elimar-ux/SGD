<?php 
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLogin.php');
include('../PaginasControle/verificaPerfil.php');

$idPedidos = $_POST['idPedidos'];
$mensagem = $_POST['relato'];

/* Enviar o dados para o DB*/
$sql = "UPDATE pedidos SET situacao = '$mensagem' WHERE idPedidos = '$idPedidos'";

/* Executar */
$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
	header('Location: ../Paginas/dashboard.php');
	exit();
} else {
    $m = "Erro ao enviar informações ao banco de dados, Tente novamente!";
    header("Location: ../Paginas/relatarProblema.php?m=$m");
    exit();
}





 ?>