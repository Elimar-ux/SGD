<?php
session_start();
include('conexao.php');
// 1. RECUPERAR OS DADOS DO FORMULÁRIO(HTML)
	$codigoChopeira = $_POST['codigo'];
	$tipoChopeira = $_POST['tipoChopeira'];
	$emUso = "nao";
	$emHigienizacao = "nao";

		
// 2. VALIDAR OS DADOS ENVIADOS PELO FORMULÁRIO(VALIDAÇÕES)
	// 2.1. VERIFICAR SE OS CAMPOS OBRIGATORIOS ESTÃO PRREENCHIDO
	if(empty($codigoChopeira) OR  $tipoChopeira == "default"){
		$m = "Campos obrigatorio não preenchido!";
	    header("Location: ../Paginas/cadEstChopeira.php?m=$m");
	    exit();
	}
	
// 6. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO SERVIDOR DE BD
	$sql = "INSERT INTO estoque_chopeiras (codigoChopeira, tipoTorneira, emUso, emHigienizacao)";
	$sql .= " VALUES ('$codigoChopeira', '$tipoChopeira', '$emUso', '$emHigienizacao')";
	
// 7. EXECUTAR SCRIPT SQL
	
	$resultado = mysqli_query($conexao, $sql);
		
	
// 9. REALIZAR OS PROCESSAMENTOS NECESSÁRIOS (...)
if($resultado){ //atualizado
	$msg = "Dados cadastrados com sucesso";
	header ("Location: ../paginas/cadEstChopeira.php?m=$msg");
	exit();
}else{  //quando não for atualizado
	$msg = "Erro ao cadastrar os dados";
	header ("Location: ../paginas/cadEstChopeira.php?m=$msg");
	exit();
}
	
?>