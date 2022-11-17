<?php 
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLoginCliente.php');
$login = $_SESSION['login'];

$sql = "SELECT * FROM clientes";
$dado = mysqli_query($conexao, $sql);

$nome = $dado['nome'];
$tel = $dado['numeroTelefone'];




 ?>