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
		echo "<br>Campos obrigatorio não preenchido";
	}else{
		echo "<br>Campos preenchido";
	}	

	
//3. CONECTAR NO SERVIDOR DE BANCO DE DADOS

	if($conexao){
		echo "<p>Conexão realizad com sucesso";
	}else{
		echo "<p>Falha na conexão com o BD";
	}
	
	
// 6. CRIAR SCRIPT SQL QUE SERÁ EXECUTADO NO SERVIDOR DE BD
	$sql = "INSERT INTO estoque_cilindros (codigoCilindro, pesoCilindro, emUso, kg_co2)";
	$sql .= " VALUES ('$codigoCilindro', '$pesoCilindro', '$emUso', '$kg_co2')";
	
	echo "<p>SQL: " . $sql;
	
// 7. EXECUTAR SCRIPT SQL
	
	$resultado = mysqli_query($conexao, $sql);
		
	
// 9. REALIZAR OS PROCESSAMENTOS NECESSÁRIOS (...)
if($resultado){ //atualizado
	$msg = "Dados cadastrados com sucesso";
	header ('Location: ../paginas/estoque.php?m=$msg');
}else{  //quando não for atualizado
	$msg = "Erro ao cadastrar os dados";
	header ('Location: ../paginas/cadEstCilindro.php?m=$msg');
}
	
?>