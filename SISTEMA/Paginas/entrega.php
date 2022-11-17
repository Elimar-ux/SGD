<?php 
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLogin.php');
include('../PaginasControle/verificaPerfil.php');

$login = $_SESSION['login'];

$idPedidos = $_GET['idP'];

//Conexoes com o banco de dados e informaçoes
$sql = "SELECT * FROM pedidos WHERE idPedidos = $idPedidos";
$con = mysqli_query($conexao, $sql);
$dado = mysqli_fetch_assoc($con);

$nome = $dado['nomeCliente'];


 ?>
<!DOCTYPE html>
<html>
<head lang="PT-BR">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  type="text/css" href="../css/styleTeste.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Entrega</title>
</head>
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
  <div class="container-center">
    <span style="color: red">
        <?php
            if(isset($_GET['m'])){
                echo $_GET['m'];
            }   
        ?>
    </span>
    <form method="POST" action="../PaginasControle/cEntrega.php">
      <h2>O chopp foi entregue ao cliente, <?php echo $nome ?>?</h2>
      <input type="hidden" name="idPedidos" value="<?php echo $idPedidos?>">
      <label>Código da chopeira utilizada:</label>
      <input type="text" name="codChopeira" placeholder="Código da chopeira">
      <label>Código do cilindro</label>
      <button>SIM</button>
    </form>
    <form action="dashboard.php">
    <button>NÃO</button>
    </form>
  </div>
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