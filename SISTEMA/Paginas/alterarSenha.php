<?php 
include('../PaginasControle/conexao.php');

$login = $_POST['login'];

$sql = " SELECT idCliente, login, senha FROM cliente WHERE login = '$login' UNION SELECT idAdministrador, login, senha FROM administrador WHERE login = '$login';";

$sql2 = "SELECT login FROM cliente WHERE login = '$login' UNION SELECT login FROM administrador WHERE login = '$login';";

$con = mysqli_query($conexao, $sql);
$con2 = mysqli_query($conexao, $sql2);
$dado = mysqli_fetch_assoc($con);
$dado2 = mysqli_fetch_assoc($con2);

if (is_null($dado2['login'])) {
	$m = "Este usuário não existe!";
	header("Location: esqueciSenha.php?m=$m");
	exit();
}

$idLogin = $dado['idCliente'] OR $dado['idAdministrador'];
?>
<!DOCTYPE html>
<html lang="pt-br">

 <head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta http-equiv="content-language" content="pt-br" />
    <meta name="robots" content="index, follow"/>
      
    <link rel="icon" type="image/png" href="../images/logo.png">   
	<link rel="stylesheet" type="text/css" href="../css/login/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/login/style.css">
    <link rel="stylesheet" type="text/css" href="../css/login/fonts-icones.css">
	<title>Alterar Senha</title>
 
 </head>

<body>
    
<header class="main_header container">        
    <div class="content">
    
        <div class="main_header_logo">
            <img src="../images/logo.png" title="ChoppDrive"/>
            
        </div>
    
    </div>
</header>

<main class="main_content container">
        
    <section class="section-seu-codigo container">
        
        <div class="content">
                        
            <div class="box-artigo">
                
                <div class="box-login">

                    <h1 class="title_login"><i class="icon icon-key-1"></i> Recuperar senha de <?php echo "$login"; ?></h1>
                    <span style="color: white">
                        <?php
                            if(isset($_GET['m'])){
                                echo $_GET['m'];
                            }   
                        ?>
                    </span>

                    <form action="../PaginasControle/cAlterarSenha.php?id=<?php echo $idLogin; ?>" method="post" class="form login">
                        <!-- action="../PaginasControle/login.php" -->

                        <div class="form_field">                       
                            <label>
                                <i class="icon icon-lock"></i>
                                <span class="hidden">Digite a nova senha:</span>
                            </label>
                            
	                            <input type="password" name="senha" placeholder="Digite a senha" required>

                        </div>

                        <div class="form_field">                        
                            <label>
                                <i class="icon icon-lock"></i>
                                <span class="hidden">Confirmar senha:</span>
                            </label>
                            
								<input type="password" name="senhaConfirm" placeholder="Confirme a senha" required>

                        </div>

                        <div class="form_field">
                            <input type="submit" value="Entrar">
                            
                        </div>
                        
                    </form>

                    <form action="esqueciSenha.php" method="post" class="form login">
	                    <div class="btn_voltar">
	        				<input type="submit" value="Voltar">
	                            
						</div>
					</form>

                </div>

            </div>

        <div class="clear"></div>
        </div>
    </section>


    

</main>

<footer class="main_footer container">
    <div class="main_footer_copy">

        <p class="m-b-footer"> SGD - 2022, todos os direitos reservados.</p> 
        <p class="by"><i class="icon icon-heart-3"></i> Desenvolvido por: @Elimar.oliveiraa/ @lucas...</p>
    
    </div>
</footer>

<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>