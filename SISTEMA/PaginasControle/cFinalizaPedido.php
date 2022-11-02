<?php 
include('../PaginasControle/conexao.php');
require_once '../vendor/autoload.php';

$enderecoRua = $_POST['enderecoRua'];
$enderecoNum = $_POST['enderecoNumero'];
$horaEvento = $_POST['horaEvento'];
$dataEvento = date('d/m/Y', strtotime($_POST['dataEvento']));
$formaPagamento = $_POST['formaPagamento'];
$login = $_POST['login'];
$valorTotal = $_POST['valorTotal'];

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


 ?>