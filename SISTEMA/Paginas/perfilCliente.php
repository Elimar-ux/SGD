<?php 
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLoginCliente.php');
$login = $_SESSION['login'];

//Conexoes com o banco de dados e informaçoes
$sql = "SELECT * FROM pedidos WHERE loginCliente = '$login'";
$dado = mysqli_query($conexao, $sql);

//Contador de pedidos
$totalPedidos = mysqli_num_rows($dado);

 ?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
<title>Área do cliente</title>
<meta charset="UTF-8">
<link rel="icon" type="image/png" href="../images/logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  type="text/css" href="../css/styleTeste.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTATO</a>
  <a href="perfilCliente.php" onclick="w3_close()" class="w3-bar-item w3-button">Seu Perfil</a>
  <a href="../PaginasControle/logout.php" onclick="w3_close()" class="w3-bar-item w3-button">Sair</a>
</nav>


<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
<div>
  <h3>Historico de pedidos</h3>
  <div class="tbl-header">
    <table cellpadding="7" cellspacing="0" border="0">
      <thead>
      <tr>
        <td>CHOPP</td>
        <td>ENDEREÇO DO EVENTO</td>
        <td>HORA DA ENTREGA</td>
        <td>DATA DA ENTREGA</td>
        <td>TIPO DE PAGAMENTO</td>
        <td>SITUAÇÃO</td>
      </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
  <?php
            while ($row_pedidos = mysqli_fetch_assoc($dado)){
        ?>
  <table cellpadding="0" cellspacing="0" border="0">
    <tbody>
    <tr>
      <td>
        <!-- Barris de 30L  -->
        <?php 
                if ($row_pedidos['qtdBarris30lCapital'] > 0){
              ?>
                <p><?php echo $row_pedidos['qtdBarris30lCapital'] * 30;?> litros de chopp capital(barril de 30L)</p>
        <?php
          }
        ?>

        <?php 
                if ($row_pedidos['qtdBarris30lBrasilia'] > 0){
              ?>
                <p><?php echo $row_pedidos['qtdBarris30lBrasilia'] * 30;?> litros de chopp brasília(barril de 30L)</p>
        <?php
          }
        ?>

        <?php 
                if ($row_pedidos['qtdBarris30lDLSR'] > 0){
              ?>
                <p><?php echo $row_pedidos['qtdBarris30lDLSR'] * 30;?> litros de chopp DLSR(barril de 30L)</p>
        <?php
          }
        ?>

        <?php 
                if ($row_pedidos['qtdBarris30lJK'] > 0){
              ?>
                <p><?php echo $row_pedidos['qtdBarris30lJK'] * 30;?> litros de chopp JK(barril de 30L)</p>
        <?php
          }
        ?>

        <?php 
                if ($row_pedidos['qtdBarris30lMonumental'] > 0){
              ?>
                <p><?php echo $row_pedidos['qtdBarris30lMonumental'] * 30;?> litros de chopp monumental(barril de 30L)</p>
        <?php
          }
        ?>

        <!-- Barris de 50L  -->
        <?php 
                if ($row_pedidos['qtdBarris50lCapital'] > 0){
              ?>
                <p><?php echo $row_pedidos['qtdBarris50lCapital'] * 50;?> litros de chopp capital(barril de 50L)</p>
        <?php
          }
        ?>

        <?php 
                if ($row_pedidos['qtdBarris50lBrasilia'] > 0){
              ?>
                <p><?php echo $row_pedidos['qtdBarris50lBrasilia'] * 50;?> litros de chopp brasília(barril de 50L)</p>
        <?php
          }
        ?>

        <?php 
                if ($row_pedidos['qtdBarris50lDLSR'] > 0){
              ?>
                <p><?php echo $row_pedidos['qtdBarris50lDSLR'] * 50;?> litros de chopp DLSR(barril de 50L)</p>
        <?php
          }
        ?>

        <?php 
                if ($row_pedidos['qtdBarris30lJK'] > 0){
              ?>
                <p><?php echo $row_pedidos['qtdBarris30lJK'] * 50;?> litros de chopp JK(barril de 50L)</p>
        <?php
          }
        ?>

        <?php 
                if ($row_pedidos['qtdBarris50lMonumental'] > 0){
              ?>
                <p><?php echo $row_pedidos['qtdBarris50lMonumental'] * 50;?> litros de chopp monumental(barril de 50L)</p>
        <?php
          }
        ?>
      </td>
      <td><?php echo $row_pedidos['enderecoRua']. ', n° '. $row_pedidos['enderecoNum']?></td>
      <td><?php echo date('H:II', strtotime($row_pedidos['horarioEvento']))?></td>
      <td><?php echo $row_pedidos['dataEvento']?></td>
      <td><?php echo $row_pedidos['tipoPagamento']?></td>
      <td><?php echo $row_pedidos['situacao']?></td>

    </tr>
  </tbody>
  </table>

  <?php
    } if ($totalPedidos == '0') {
        echo "Não há pedidos!";
    }
    ?>
  </div>
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