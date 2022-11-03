<?php
session_start();
include('conexao.php');
// 1. RECUPERAR OS DADOS DO FORMULÁRIO(HTML)
	$codigoCilindro = $_POST['codigoCilindro'];
	$pesoCilindro = $_POST['pesoCilindro'];
	$kg_co2 = $_POST['kg_co2'];
	$emUso = "nao";

		
// 2. VALIDAR OS DADOS ENVIADOS PELO FORMULÁRIO(VALIDAÇÕES)
	// 2.1. VERIFICAR SE OS CAMPOS OBRIGATORIOS ESTÃO PRREENCHIDO
	if(empty($codigoCilindro) OR  empty($pesoCilindro) OR empty($kg_co2)){
		$m = "Campos obrigatorio não preenchido!";
	    header("Location: ../Paginas/cadEstCilindro.php?m=$m");
	    exit();
	}	
	
// 6. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO SERVIDOR DE BD
	$sql = "INSERT INTO estoque_cilindros (codigoCilindro, pesoCilindro, emUso, kg_co2)";
	$sql .= " VALUES ('$codigoCilindro', '$pesoCilindro', '$emUso', '$kg_co2')";

	
// 7. EXECUTAR SCRIPT SQL
	
	$resultado = mysqli_query($conexao, $sql);
		
	
// 9. REALIZAR OS PROCESSAMENTOS NECESSÁRIOS (...)
if($resultado){ //atualizado
	$msg = "Dados cadastrados com sucesso";
	header ("Location: ../paginas/estoque.php?m=$msg");
	exit();
}else{  //quando não for atualizado
	$msg = "Erro ao cadastrar os dados";
	header ("Location: ../paginas/cadEstCilindro.php?m=$msg");
	exit();
}
	
?>