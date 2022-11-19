<?php 
session_start();
include('../PaginasControle/conexao.php');
include_once('../PaginasControle/verificaLoginCliente.php');
require_once '../vendor/autoload.php';

$login = $_SESSION['login'];
$enderecoRua = $_POST['enderecoRua'];
$enderecoNum = $_POST['enderecoNumero'];
$horaEvento = $_POST['horaEvento'];
$dataEvento = date('d/m/Y', strtotime($_POST['dataEvento']));
$formaPagamento = $_POST['formaPagamento'];
$login = $_POST['login'];
$valorTotal = $_POST['valorTotal'];
$litrosBarril30L1 = $_POST['litrosBarril30L1'];
$litrosBarril30L2 = $_POST['litrosBarril30L2'];
$litrosBarril30L3 = $_POST['litrosBarril30L3'];
$litrosBarril30L4 = $_POST['litrosBarril30L4'];
$litrosBarril30L5 = $_POST['litrosBarril30L5'];
$litrosBarril50L1 = $_POST['litrosBarril50L1'];
$litrosBarril50L2 = $_POST['litrosBarril50L2'];
$litrosBarril50L3 = $_POST['litrosBarril50L3'];
$litrosBarril50L4 = $_POST['litrosBarril50L4'];
$litrosBarril50L5 = $_POST['litrosBarril50L5'];

$sqlChopeiras = "SELECT * FROM estoque_chopeiras";
$con2 = mysqli_query($conexao, $sqlChopeiras);
$numChopeiras = mysqli_num_rows($con2);

$sqlVerifcPedidos = "SELECT * FROM pedidos WHERE dataEvento = '$dataEvento'";
$con3 = mysqli_query($conexao, $sqlVerifcPedidos);
$numPedidos = mysqli_num_rows($con3);

if ($numPedidos >= $numChopeiras) {
	$msg = "Nenhuma chopeira disponível para o dia selecionado!";
	header("Location: ../Paginas/orcamento.php?m=$msg");
	exit();
}

$sql = "SELECT * FROM cliente WHERE login = '$login'";
$con = mysqli_query($conexao, $sql);
$dado = mysqli_fetch_assoc($con);

$sql2 = "SELECT * FROM pedidos";
$con2 = mysqli_query($conexao, $sql2);
$numPedidos = mysqli_num_rows($con2);

$nome = $dado['nome'];
$cpf = $dado['cpf'];
$tel = $dado['numeroTelefone'];
$numeros = $numPedidos + 1;
$enderecoRuaCliente = $dado['enderecoRua'];
$enderecoNumCliente = $dado['enderecoNum'];
$enderecoCepCliente = $dado['enderecoCep'];
$enderecoRegiaoCliente = $dado['enderecoRegiao'];


$templateProcessor = new \PhpOffice\PhpWord\templateProcessor('../contratos/contratoTemplate.docx');

$templateProcessor->setValues(
	[
		'nome' => "$nome",
		'enderecoRuaEvento' => "$enderecoRua",
		'enderecoNumEvento' => "$enderecoNum",
		'dataEvento' => "$dataEvento",
		'numerocpf' => "$cpf",
		'enderecoRuaCliente' => "$enderecoRuaCliente",
		'enderecoNumeroCliente' => "$enderecoNumCliente",
		'enderecoRegiaoCliente' => "$enderecoRegiaoCliente",
		'enderecoCepCliente' => "$enderecoCepCliente",
		'valor' => "$valorTotal"
	]
);



	$pathToSave = "../contratos/contrato($nome-$numeros).docx";
	$templateProcessor->saveAs($pathToSave);


$sqlPedido = "INSERT INTO pedidos (nomeCliente, qtdBarris30lCapital, qtdBarris30lBrasilia, qtdBarris30lDLSR, qtdBarris30lJK, qtdBarris30lMonumental, qtdBarris50lCapital, qtdBarris50lBrasilia, qtdBarris50lDLSR, qtdBarris50lJK, qtdBarris50lMonumental, enderecoRua, enderecoNum, horarioEvento, dataEvento, tipoPagamento, loginCliente, situacao, numeroCliente) VALUES ('$nome', '$litrosBarril30L1', '$litrosBarril30L2', '$litrosBarril30L3', '$litrosBarril30L4', '$litrosBarril30L5', '$litrosBarril50L1', '$litrosBarril50L2', '$litrosBarril50L3', '$litrosBarril50L4', '$litrosBarril50L5', '$enderecoRua', '$enderecoNum', '$horaEvento', '$dataEvento', '$formaPagamento', '$login', 'entrega pendente', '$tel')";

$resultado = mysqli_query($conexao, $sqlPedido);



 ?>
<!DOCTYPE html>
<html>
<head lang="PT-BR">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  type="text/css" href="../css/styleTeste.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Relatar problema</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Success Confirmation Popup</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="../css/style_Pedido_sucesso.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
	<a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Confirm Modal</a>
</div>

<!-- Modal HTML -->
<div>
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">Ótimo!</h4>	
			</div>
			
		</div>
	</div>
</div>  
<body>
<!-- Navbar (sit on top) -->
<nav>
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="../index.php" class="w3-bar-item w3-button w3-wide"><img src="../images/logo.png" height="30" width="30"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="javascript:void(0)" class="menuLateral" onclick="w3_open()"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-button w3-right menuLateral" onclick="w3_open()">
      <i class="fa fa-bars fa-2x"></i>
    </a>
  </div>
</nav>

<!-- Sidebar when clicking the menu icon -->
<nav class="overlay w3-bar-block w3-black w3-card w3-animate-right" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Fechar ×</a>
  <a class="w3-bar-item"><i class="fa fa-user"></i> <?php echo $_SESSION['login'];?></a>
  <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Contato</a>
  <a href="estoque.php" onclick="w3_close()" class="w3-bar-item w3-button">Estoque</a>
  <a href="../PaginasControle/logout.php" onclick="w3_close()" class="w3-bar-item w3-button">Sair</a>
</nav>


<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    	<?php 
		if ($resultado){ ?>
			<div class="modal-body">
				
				<h4>Pedido finalizado com sucesso!</h4>
			<p>
				<p class="text-center">O contrato será enviado por whatsapp, fique atento.</p>
			</div>
			<div class="modal-footer">
				<form action="../Paginas/perfilCliente.php">
				<button class="btn btn-success btn-block" data-dismiss="modal">VEJA SEU PEDIDO</button>
				</form>
			</div>
	<?php
		}else{ ?>
			<h2>Falha ao finalizar o pedido!</h2>
		<?php 
		} ?>
</header>
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Voltar ao topo</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <a href="https://www.instagram.com/choppdrivejp/" class="fa fa-instagram w3-hover-opacity"></a>

  </div>
  <p>Design da pagina por <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}

</script>

</body>
</html>