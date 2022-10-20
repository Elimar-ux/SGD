<?php 
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLoginCliente.php');
$login = $_GET['login'];
 ?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
<title>ChoppDrive</title>
<meta charset="UTF-8">
<link rel="icon" type="image/png" href="../images/logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"  type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
.tabelasChopp{
  display: flex;
  height: 350px;
}
.tabelaOrcamento1{
  border: solid 1px rgba(0, 0, 0, 0.55);
}
.tabelasChoppTeste{
  border: solid 1px rgba(0, 0, 0, 0.55);
  display: flex;
  height: 350px;
}
.overlay {
  height: 100%;
  width: 200px;
  background-color: #fff;
  position: fixed!important;
  z-index: 1;
  position: fixed;
  top: 1;
  right: 0;
}

</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="../index.php" class="w3-bar-item w3-button w3-wide"><img src="../images/logo.png" height="30" width="30"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right" onclick="w3_open()"><i class="fa fa-bars fa-2x"></i></a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

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
<section>
  <div class="tabelasChopp">
    <div class="tabelasChoppTeste">
      <div class="tabelaChopp1">
        <table>
          <tr>
            <th>Chopps</th>
          </tr>
          <tr>
            <td>Chopp Capital</td>
          </tr>
            <td>Chopp Brasília</td>
          <tr>
            <td>Chopp DLRS</td>
          </tr>
            <td>Chopp JK</td>
          <tr>
            <td>Chopp Monumental</td>
          </tr>
        </table>
      </div>
      <div class="tabelaChopp2">
        <table>
          <tr>
            <th>Quantidade de barris 30 Litros</th>
          </tr>
          <tr>
            <td><input name="30lCapital" type="range" min="0" max="5" list="tickmarks" value="0" oninput="display.value=value" onchange="display.value=value">
              <datalist id="tickmarks">
              <option value="0">
              <option value="1">
              <option value="2">
              <option value="3">
              <option value="4">
              <option value="5">
              </datalist></td>
          </tr>
          <tr>
            <td><input name="30lCapital" type="range" min="0" max="5" list="tickmarks" value="0">
              <datalist id="tickmarks">
              <option value="0">
              <option value="1">
              <option value="2">
              <option value="3">
              <option value="4">
              <option value="5">
              </datalist></td>
          </tr>
          <tr>
            <td><input name="30lCapital" type="range" min="0" max="5" list="tickmarks" value="0">
              <datalist id="tickmarks">
              <option value="0">
              <option value="1">
              <option value="2">
              <option value="3">
              <option value="4">
              <option value="5">
              </datalist></td>
          </tr>
          <tr>
            <td><input name="30lCapital" type="range" min="0" max="5" list="tickmarks" value="0">
              <datalist id="tickmarks">
              <option value="0">
              <option value="1">
              <option value="2">
              <option value="3">
              <option value="4">
              <option value="5">
              </datalist></td>
          </tr>
          <tr>
            <td><input name="30lCapital" type="range" min="0" max="5" list="tickmarks" value="0">
              <datalist id="tickmarks">
              <option value="0">
              <option value="1">
              <option value="2">
              <option value="3">
              <option value="4">
              <option value="5">
              </datalist></td>
          </tr>
        </table>
      </div>
      <div class="tabelaChopp3">
        <table>
          <tr>
            <th>Quantidade de barris 50 Litros</th>
          </tr>
          <tr>
            <td><input name="50lCapital" type="range" min="0" max="5" list="tickmarks" value="0">
              <datalist id="tickmarks">
              <option value="0">
              <option value="1">
              <option value="2">
              <option value="3">
              <option value="4">
              <option value="5">
              </datalist>
            </td>
          </tr>
          <tr>
            <td><input name="50lCapital" type="range" min="0" max="5" list="tickmarks" value="0">
              <datalist id="tickmarks">
              <option value="0">
              <option value="1">
              <option value="2">
              <option value="3">
              <option value="4">
              <option value="5">
              </datalist></td>
          </tr>
          <tr>
            <td><input name="50lCapital" type="range" min="0" max="5" list="tickmarks" value="0">
              <datalist id="tickmarks">
              <option value="0">
              <option value="1">
              <option value="2">
              <option value="3">
              <option value="4">
              <option value="5">
              </datalist></td>
          </tr>
          <tr>
            <td><input name="50lCapital" type="range" min="0" max="5" list="tickmarks" value="0">
              <datalist id="tickmarks">
              <option value="0">
              <option value="1">
              <option value="2">
              <option value="3">
              <option value="4">
              <option value="5">
              </datalist></td>
          </tr>
          <tr>
            <td><input name="50lCapital" type="range" min="0" max="5" list="tickmarks" value="0">
              <datalist id="tickmarks">
              <option value="0">
              <option value="1">
              <option value="2">
              <option value="3">
              <option value="4">
              <option value="5">
              </datalist></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="tabelaOrcamento1">
        <table>
            <thead>
                <tr>
                    <th>Orçamento</th>
                </tr>
            </thead>
        </table>
        <table>
            <tbody>
                <tr>
                    <td><input type="text" id="display" value="0"
                          oninput="vol.value=value" onchange="vol.value=value">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>
</section>
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