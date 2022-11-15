<?php 
include('../PaginasControle/conexao.php');
require_once '../vendor/autoload.php';

$login = $_SESSION['login'];
$enderecoRua = $_POST['enderecoRua'];
$enderecoNum = $_POST['enderecoNumero'];
$horaEvento = $_POST['horaEvento'];
$dataEvento = date('d/m/Y', strtotime($_POST['dataEvento']));
$formaPagamento = $_POST['formaPagamento'];
$login = $_POST['login'];
$valorTotal = $_POST['valorTotal'];
$litrosBarril30L1 = $_POST['litrosBarril30L1'];
$litrosBarril30L2 = $_POST['litrosBarril30L2'];
$litrosBarril30L3 = $_POST['litrosBarril30L3'];
$litrosBarril30L4 = $_POST['litrosBarril30L4'];
$litrosBarril30L5 = $_POST['litrosBarril30L5'];
$litrosBarril50L1 = $_POST['litrosBarril50L1'];
$litrosBarril50L2 = $_POST['litrosBarril50L2'];
$litrosBarril50L3 = $_POST['litrosBarril50L3'];
$litrosBarril50L4 = $_POST['litrosBarril50L4'];
$litrosBarril50L5 = $_POST['litrosBarril50L5'];

$sql = "SELECT * FROM cliente WHERE login = '$login'";

$con = mysqli_query($conexao, $sql);
$dado = mysqli_fetch_assoc($con);

$nome = $dado['nome'];
$cpf = $dado['cpf'];
$enderecoRuaCliente = $dado['enderecoRua'];
$enderecoNumCliente = $dado['enderecoNum'];
$enderecoCepCliente = $dado['enderecoCep'];
$enderecoRegiaoCliente = $dado['enderecoRegiao'];


$templateProcessor = new \PhpOffice\PhpWord\templateProcessor('../contratos/contratoTemplate.docx');

$templateProcessor->setValues(
	[
		'nome' => "$nome",
		'enderecoRuaEvento' => "$enderecoRua",
		'enderecoNumEvento' => "$enderecoNum",
		'dataEvento' => "$dataEvento",
		'numerocpf' => "$cpf",
		'enderecoRuaCliente' => "$enderecoRuaCliente",
		'enderecoNumeroCliente' => "$enderecoNumCliente",
		'enderecoRegiaoCliente' => "$enderecoRegiaoCliente",
		'enderecoCepCliente' => "$enderecoCepCliente",
		'valor' => "$valorTotal"
	]
);



	$pathToSave = "../contratos/contrato($nome).docx";
	$templateProcessor->saveAs($pathToSave);


$sqlPedido = "INSERT INTO pedidos (nomeCliente, qtdBarris30lCapital, qtdBarris30lBrasilia, qtdBarris30lDLSR, qtdBarris30lJK, qtdBarris30lMonumental, qtdBarris50lCapital, qtdBarris50lBrasilia, qtdBarris50lDLSR, qtdBarris50lJK, qtdBarris50lMonumental, enderecoRua, enderecoNum, horarioEvento, dataEvento, tipoPagamento, loginCliente, situacao) VALUES ('$nome', '$litrosBarril30L1', '$litrosBarril30L2', '$litrosBarril30L3', '$litrosBarril30L4', '$litrosBarril30L5', '$litrosBarril50L1', '$litrosBarril50L2', '$litrosBarril50L3', '$litrosBarril50L4', '$litrosBarril50L5', '$enderecoRua', '$enderecoNum', '$horaEvento', '$dataEvento', '$formaPagamento', '$login', 'entrega pendente')";

$resultado = mysqli_query($conexao, $sqlPedido);

 ?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pedido</title>
</head>
<body>
	<?php 
		if ($resultado){ ?>
			<h2>Pedido finalizado com sucesso!</h2>
			<p>O contrato será enviado por whatsapp, fique atento.</p>
	<?php
		}else{ ?>
			<h2>Falha ao finalizar o pedido!</h2>
		<?php 
		} ?>
</body>
</html>