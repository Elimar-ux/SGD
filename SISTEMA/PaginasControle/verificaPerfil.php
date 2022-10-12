<?php
if(!$_SESSION['perfil'] == 'adm') {
	header('Location: ../index.php');
	exit();
}
?>