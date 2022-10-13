<?php
if(!$_SESSION['login']) {
	$m = "Faça login primeiro, para realizar um orçamento.";
	header("Location: ../Paginas/login.php?m=$m");
	exit();
}
?>