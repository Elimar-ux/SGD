<!DOCTYPE html>
<html lang="pt-br">

 <head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="content-language" content="pt-br" />
    <meta name="robots" content="index, follow"/>
      
    <link rel="icon" type="image/png" href="../images/logo.png">   
	<link rel="stylesheet" type="text/css" href="../css/login/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/login/style.css">
    <link rel="stylesheet" type="text/css" href="../css/login/fonts-icones.css">
	<title>Login</title>

 
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

                    <h1 class="title_login"><i class="icon icon-key-1"></i> Login</h1>
                    <span style="color: white">
                        <?php
                            if(isset($_GET['m'])){
                                echo $_GET['m'];
                            }   
                        ?>
                    </span>

                    <form action="../PaginasControle/login.php" method="post" class="form login">
                        <!-- action="../PaginasControle/login.php" -->

                        <div class="form_field">
                        
                            <label for="login__username">
                                <i class="icon icon-user-1"></i>
                                <span class="hidden">E-mail</span>
                            </label>
                            
                            <input autocomplete="off" id="login_username" type="text" name="login" class="form_input" placeholder="Usuário" required>

                        </div>

                        <div class="form_field">
                        
                            <label for="login_password">

                                <i class="icon icon-lock"></i>
                                <span class="hidden">Senha</span>
                            
                            </label>
                        
                            <input id="login_password" type="password" name="senha" class="form_input" placeholder="Senha" required>
                      
                        </div>

                        <div class="form_field">
                            <input type="submit" value="Entrar">
                            
                        </div>
                        
                    </form>

                </div>



            </div>
            <div class="links">
                <a class="linkss" href="../Paginas/cadastrar.php">Cadastrar</a> 
                <a class="linkss" href="../Paginas/esqueciSenha.php">Esqueci a senha </a>
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