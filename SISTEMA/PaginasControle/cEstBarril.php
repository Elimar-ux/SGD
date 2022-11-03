<?php
session_start();
include('conexao.php');
// 1. RECUPERAR OS DADOS DO FORMULÁRIO(HTML)
	$numeroBarril = $_POST['numeroBarril'];
	$nomeChopp = $_POST['nomeChopp'];
	$tipoChopp = $_POST['tipoChopp'];
	$litros = $_POST['litros'];
	$emUso = "nao";
		
// 2. VALIDAR OS DADOS ENVIADOS PELO FORMULÁRIO(VALIDAÇÕES)
	// 2.1. VERIFICAR SE OS CAMPOS OBRIGATORIOS ESTÃO PRREENCHIDO
	if(empty($numeroBarril) OR  empty($nomeChopp) OR empty($tipoChopp) OR empty($litros)){
		$m = "Campos obrigatorio não preenchido!";
	    header("Location: ../Paginas/cadEstBarril.php?m=$m");
	    exit();
	}
	
	
// 6. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO SERVIDOR DE BD
	$sql = "INSERT INTO estoque_barris (numeroBarril, nomeChopp, emUso, tipoChopp, litros)";
	$sql .= " VALUES ('$numeroBarril', '$nomeChopp', '$emUso', '$tipoChopp', '$litros')";
	
// 7. EXECUTAR SCRIPT SQL
	
	$resultado = mysqli_query($conexao, $sql);
		
	
// 9. REALIZAR OS PROCESSAMENTOS NECESSÁRIOS (...)
if($resultado){ //atualizado
	$msg = "Dados cadastrados com sucesso";
	header ("Location: ../paginas/cadEstBarril.php?m=$msg");
	exit();
}else{  //quando não for atualizado
	$msg = "Erro ao cadastrar os dados";
	header ("Location: ../paginas/cadEstBarril.php?m=$msg");
	exit();
}
	
?>