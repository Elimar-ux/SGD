<?php 
session_start();
include('conexao.php');
include('verificaLogin.php');

// 1. RECUPERAR OS DADOS DO FORMULÁRIO(HTML)
    $idChopeira = $_POST['idChopeira'];
    $codigo = $_POST['codigo'];
    $tipo = $_POST['tipo'];
    $emUso = $_POST['emUso'];
    $emHigienizacao = $_POST['emHigienizacao'];

    $sql = "SELECT * FROM estoque_chopeiras WHERE idChopeira = $idChopeira";
    $resultado = mysqli_query($conexao, $sql);
    $arResultado = mysqli_fetch_assoc($resultado);


    $sql = "UPDATE estoque_chopeiras SET ";
    $sql .= " idChopeira = '$idChopeira', ";
    $sql .= " codigoChopeira = '$codigo',";
    $sql .= " tipoTorneira = '$tipo',";
    $sql .= " emUso = '$emUso',";
    $sql .= " emHigienizacao = '$emHigienizacao'";
    
    $sql .= " WHERE idChopeira = $idChopeira;";
    
// 4. EXECUTAR SCRIPT SQL
    $resultado = mysqli_query($conexao, $sql);
// 5. TRATAR DADOS RECUPERADOS DO BANCO DE DADOS

    if($resultado){ //atualizado
        $msg = "Registro atualizado com sucesso";
        header ('Location: ../paginas/estoque.php?m=$msg');
    }else{  //quando não for atualizado
        $msg = "Erro ao atualizar os dados";
        header ('Location: ../paginas/EditarEstoqueChopeira.php?m=$msg');
    }
?>
