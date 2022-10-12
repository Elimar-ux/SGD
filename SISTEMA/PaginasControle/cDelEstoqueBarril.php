<?php
session_start();
include('conexao.php');

//recupera dados
$id = $_POST['id'];



//alterar as informações
$deleta = "DELETE FROM estoque_barris WHERE idBarril = ". $id;

//Envia as informações
$resultado = mysqli_query($conexao, $deleta);

if ($resultado) {
	header('Location: ../Paginas/estoque.php');
	exit();
}else{
	echo "<br> erro!";
}
?>