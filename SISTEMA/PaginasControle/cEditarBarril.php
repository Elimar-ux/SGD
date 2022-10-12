<?php 
session_start();
include('conexao.php');
include('verificaLogin.php');

// 1. RECUPERAR OS DADOS DO FORMULÁRIO(HTML)
    $idBarril = $_POST['idBarril'];
    $nomeChopp = $_POST['nomeChopp'];
    $tipoChopp = $_POST['tipoChopp'];
    $emUso = $_POST['emUso'];
    $litros = $_POST['litros'];
    $custo = $_POST['custo'];

    $sql = "SELECT * FROM estoque_chopeiras WHERE idBarril = $idBarril";
    $resultado = mysqli_query($conexao, $sql);
    $arResultado = mysqli_fetch_assoc($resultado);


    $sql = "UPDATE estoque_barris SET ";
    $sql .= " idBarril = '$idBarril', ";
    $sql .= " nomeChopp = '$nomeChopp',";
    $sql .= " tipoChopp = '$tipoChopp',";
    $sql .= " emUso = '$emUso',";
    $sql .= " litros = '$litros',";
    $sql .= " custo = '$custo'";
    
    $sql .= " WHERE idBarril = $idBarril;";
    
// 4. EXECUTAR SCRIPT SQL
    $resultado = mysqli_query($conexao, $sql);
// 5. TRATAR DADOS RECUPERADOS DO BANCO DE DADOS

    if($resultado){ //atualizado
        $msg = "Registro atualizado com sucesso";
        header ('Location: ../paginas/estoque.php?m=$msg');
    }else{  //quando não for atualizado
        $msg = "Erro ao atualizar os dados";
        header ('Location: ../paginas/EditarEstoqueBarril.php?m=$msg');
    }
?>
