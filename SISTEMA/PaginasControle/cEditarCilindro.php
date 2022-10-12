<?php 
session_start();
include('conexao.php');
include('verificaLogin.php');

// 1. RECUPERAR OS DADOS DO FORMULÁRIO(HTML)
    $idCilindro = $_POST['idCilindro'];
    $codigoCilindro = $_POST['codigoCilindro'];
    $kg_co2 = $_POST['kg_co2'];
    $pesoCilindro = $_POST['pesoCilindro'];
    $emUso = $_POST['emUso'];

    $sql = "SELECT * FROM estoque_chopeiras WHERE idCilindro = $idCilindro";
    $resultado = mysqli_query($conexao, $sql);
    $arResultado = mysqli_fetch_assoc($resultado);


    $sql = "UPDATE estoque_cilindros SET ";
    $sql .= " codigoCilindro = '$codigoCilindro', ";
    $sql .= " kg_co2 = '$kg_co2',";
    $sql .= " pesoCilindro = '$pesoCilindro',";
    $sql .= " emUso = '$emUso'";
    
    $sql .= " WHERE idCilindro = $idCilindro;";
    
// 4. EXECUTAR SCRIPT SQL
    $resultado = mysqli_query($conexao, $sql);
// 5. TRATAR DADOS RECUPERADOS DO BANCO DE DADOS

    if($resultado){ //atualizado
        $msg = "Registro atualizado com sucesso";
        header ('Location: ../paginas/estoque.php?m=$msg');
    }else{  //quando não for atualizado
        $msg = "Erro ao atualizar os dados";
        header ('Location: ../paginas/EditarEstoqueCilindro.php?m=$msg');
    }
?>
