<?php
include('conexao.php');
/* Recuperar Form */
$nome = $_POST['nome'];
$login = $_POST['login'];
$telefone = $_POST['phoneString'];
$senha = md5($_POST['senha']);
$senhaConfirm = md5($_POST['senhaConfirm']);

$verifica = "SELECT login FROM cliente WHERE login = '$login' UNION SELECT login FROM administrador WHERE login = '$login';";
$con2 = mysqli_query($conexao, $verifica);
$dado2 = mysqli_fetch_assoc($con2);

if ($dado2['login'] == $login) {
    $m = "Este nome de usuário já existe!";
    header("Location: ../Paginas/cadastrar.php?m=$m");
    exit();
}





/* Verificar campos em branco */

if(empty($nome) OR empty($login) OR empty($senha) OR empty($senhaConfirm)){
    $m = "Verifique se os campos estão preenchidos!";
    header("Location: ../Paginas/cadastrar.php?m=$m");
    exit();
}

/* Confirmar Senhas*/

if ($senha != $senhaConfirm) {
    $m = "As senhas não combinam, confirme e tente novamente!";
    header("Location: ../Paginas/cadastrar.php?m=$m");
    exit();
}

/* Verifica se o numero de telefone é válido*/

function phoneValidate($telefone)
    {
        $regex = '/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/';

        if (preg_match($regex, $telefone) == false) {
            // O número não foi validado.
            return false;        
        } else {
            // Telefone válido.
            return true;
            
        }        
    }
if (phoneValidate($telefone) == false) {
    $m = "número de telefone inválido!";
    header("Location: ../Paginas/cadastrar.php?m=$m");
    exit();
}


/* Enviar o dados para o DB*/
$sql = "INSERT INTO cliente (nome, login, senha, numeroTelefone) VALUES ('$nome', '$login', '$senha', '$telefone')";

/* Executar */
$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    $_SESSION['login'] = $login;
	header('Location: ../index.php');
	exit();
} else {
	echo "Erro ao cadastrar, Tente novamente!";
}
?>