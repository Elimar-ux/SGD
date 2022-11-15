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
<link rel="stylesheet"  type="text/css" href="../css/styleNovo.css">
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
<form action="FinalizaPedido.php" method="POST">
<section>
  <div class="tabelasChopp">
    <div class="tabelasChoppTeste">
      <div class="tabelaChopp1">
        <table class="testeTabela">
          <tr>
            <th style="width: 300px;">Chopps</th>
          </tr>
          <tr>
            <td>Chopp Capital</td>
          </tr>
            <td>Chopp Brasília</td>
          <tr>
            <td>Chopp DLSR</td>
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
              <td>
                <input name="30lCapital" class="range1" type="range" min="0" max="5" list="tickmarks" value="0">
                <datalist id="tickmarks">
                <option value="0">0
                <option value="1">1
                <option value="2">2
                <option value="3">3
                <option value="4">4
                <option value="5">5
                </datalist>
              </td>
            </tr>   
            <tr>
              <td>
                <input name="30lBrasilia" class="range2" type="range" min="0" max="5" list="tickmarks" value="0">
                <datalist id="tickmarks">
                <option value="0">0
                <option value="1">1
                <option value="2">2
                <option value="3">3
                <option value="4">4
                <option value="5">5
                </datalist></td>
            </tr>   
            <tr>
              <td>
                <input name="30lDslr" class="range3" type="range" min="0" max="5" list="tickmarks" value="0">
                <datalist id="tickmarks">
                <option value="0">0
                <option value="1">1
                <option value="2">2
                <option value="3">3
                <option value="4">4
                <option value="5">5
                </datalist></td>
            </tr>    
            <tr>
              <td>
                <input name="30lJk" class="range4" type="range" min="0" max="5" list="tickmarks" value="0">
                <datalist id="tickmarks">
                <option value="0">0
                <option value="1">1
                <option value="2">2
                <option value="3">3
                <option value="4">4
                <option value="5">5
                </datalist></td>
            </tr>
            <tr>
              <td>
                <input name="30lMonumental" class="range5" type="range" min="0" max="5" list="tickmarks" value="0">
                <datalist id="tickmarks">
                <option value="0">0
                <option value="1">1
                <option value="2">2
                <option value="3">3
                <option value="4">4
                <option value="5">5
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
            <td><input name="50lCapital" class="range50L1" type="range" min="0" max="5" list="tickmarks" value="0">
              <datalist id="tickmarks">
              <option value="0">0
              <option value="1">1
              <option value="2">2
              <option value="3">3
              <option value="4">4
              <option value="5">5
              </datalist>
            </td>
          </tr>
          <tr>
            <td>
              <input name="50lBrasilia" class="range50L2" type="range" min="0" max="5" list="tickmarks" value="0">
              <datalist id="tickmarks">
              <option value="0">0
              <option value="1">1
              <option value="2">2
              <option value="3">3
              <option value="4">4
              <option value="5">5
              </datalist></td>
          </tr>
          <tr>
            <td>
              <input name="50lDlsr" class="range50L3" type="range" min="0" max="5" list="tickmarks" value="0">
              <datalist id="tickmarks">
              <option value="0">0
              <option value="1">1
              <option value="2">2
              <option value="3">3
              <option value="4">4
              <option value="5">5
              </datalist>
            </td>
          </tr>
          <tr>
            <td><input name="50lJk" class="range50L4" type="range" min="0" max="5" list="tickmarks" value="0">
              <datalist id="tickmarks">
              <option value="0">0
              <option value="1">1
              <option value="2">2
              <option value="3">3
              <option value="4">4
              <option value="5">5
              </datalist></td>
          </tr>
          <tr>
            <td>
              <input name="50lMonumental" class="range50L5" type="range" min="0" max="5" list="tickmarks" value="0">
              <datalist id="tickmarks">
              <option value="0">0
              <option value="1">1
              <option value="2">2
              <option value="3">3
              <option value="4">4
              <option value="5">5
              </datalist>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>
<div class="tabelaOrcamento1">
        <table>
            <thead>
                <tr>
                    <th>Orçamento</th>
                </tr>
            </thead>
        </table>
        <table>
                <tr>
                    <td>                      
                      <p class="orcamento30L1"><span id="resultadoTempoReal" name="30L1"></span> Barris de 30L - chopp capital</p>
                      <p class="orcamento30L2"><span id="resultadoTempoReal2" name="30L2"></span> Barris de 30L - chopp brasília</p>
                      <p class="orcamento30L3"><span id="resultadoTempoReal3" name="30L3"></span> Barris de 30L - chopp DSLR</p>
                      <p class="orcamento30L4"><span id="resultadoTempoReal4" name="30L4"></span> Barris de 30L - chopp JK</p>
                      <p class="orcamento30L5"><span id="resultadoTempoReal5" name="30L5"></span> Barris de 30L - chopp Monumental</p>

                      <p class="orcamento50L1"><span id="resultadoTempoReal50L" name="50L1"></span> Barris de 50L - chopp capital</p>
                      <p class="orcamento50L2"><span id="resultadoTempoReal50L2" name="50L2"></span> Barris de 50L - chopp brasília</p>
                      <p class="orcamento50L3"><span id="resultadoTempoReal50L3" name="50L3"></span> Barris de 50L - chopp DSLR</p>
                      <p class="orcamento50L4"><span id="resultadoTempoReal50L4" name="50L4"></span> Barris de 50L - chopp JK</p>
                      <p class="orcamento50L5"><span id="resultadoTempoReal50L5" name="50L5"></span> Barris de 50L - chopp Monumental - R$ <span id="rtr50l5" name="valor50L5item"></span></p>
                    </td>
                </tr>
                <button class="btn-orcamento">Confirmar Orçamento</button>
</form>     
        </table>
    </div>
    <div class="tabelaResultado">
      <table>
          <tr>
                <td>
                  <p class="totalReais">TOTAL - R$: <span class="resultado"></span></p>
                </td>
              </tr>
        </table>
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


// Mostrar o resultado do slider de 30l chopp capital
var range1 = document.querySelector('.range1');
var linhaOrcamento = document.querySelector('.orcamento30L1');
var value1 = document.querySelector('#resultadoTempoReal');

range1.addEventListener('input', function() {
  if(range1.value == 0) {
      linhaOrcamento.style.display = 'none';
  } else {
      linhaOrcamento.style.display = 'block';
      value1.textContent = this.value;
  }
});

// Mostrar o resultado do slider de 30l chopp brasília
var range2 = document.querySelector('.range2');
var linhaOrcamento2 = document.querySelector('.orcamento30L2');
var value2 = document.querySelector('#resultadoTempoReal2');

range2.addEventListener('input', function() {
  if(range2.value == 0) {
      linhaOrcamento2.style.display = 'none';
  } else {
      linhaOrcamento2.style.display = 'block';
      value2.textContent = this.value;
  }
});

// Mostrar o resultado do slider de 30l chopp DSLR
var range3 = document.querySelector('.range3');
var linhaOrcamento3 = document.querySelector('.orcamento30L3');
var value3 = document.querySelector('#resultadoTempoReal3');

range3.addEventListener('input', function() {
  if(range3.value == 0) {
      linhaOrcamento3.style.display = 'none';
  } else {
      linhaOrcamento3.style.display = 'block';
      value3.textContent = this.value;
  }
});

// Mostrar o resultado do slider de 30l chopp JK
var range4 = document.querySelector('.range4');
var linhaOrcamento4 = document.querySelector('.orcamento30L4');
var value4 = document.querySelector('#resultadoTempoReal4');

range4.addEventListener('input', function() {
  if(range4.value == 0) {
      linhaOrcamento4.style.display = 'none';
  } else {
      linhaOrcamento4.style.display = 'block';
      value4.textContent = this.value;
  }
});

// Mostrar o resultado do slider de 30l chopp Monumental
var range5 = document.querySelector('.range5');
var linhaOrcamento5 = document.querySelector('.orcamento30L5');
var value5 = document.querySelector('#resultadoTempoReal5');

range5.addEventListener('input', function() {
  if(range5.value == 0) {
      linhaOrcamento5.style.display = 'none';
  } else {
      linhaOrcamento5.style.display = 'block';
      value5.textContent = this.value;
  }
});

// Mostrar o resultado do slider de 50l chopp capital
var range50L1 = document.querySelector('.range50L1');
var linhaOrcamento50L = document.querySelector('.orcamento50L1');
var value50L1 = document.querySelector('#resultadoTempoReal50L');

range50L1.addEventListener('input', function() {
  if(range50L1.value == 0) {
      linhaOrcamento50L.style.display = 'none';
  } else {
      linhaOrcamento50L.style.display = 'block';
      value50L1.textContent = this.value;
  }
});

// Mostrar o resultado do slider de 50l chopp brasília
var range50L2 = document.querySelector('.range50L2');
var linhaOrcamento50L2 = document.querySelector('.orcamento50L2');
var value50L2 = document.querySelector('#resultadoTempoReal50L2');

range50L2.addEventListener('input', function() {
  if(range50L2.value == 0) {
      linhaOrcamento50L2.style.display = 'none';
  } else {
      linhaOrcamento50L2.style.display = 'block';
      value50L2.textContent = this.value;
  }
});

// Mostrar o resultado do slider de 50l chopp DSLR
var range50L3 = document.querySelector('.range50L3');
var linhaOrcamento50L3 = document.querySelector('.orcamento50L3');
var value50L3 = document.querySelector('#resultadoTempoReal50L3');

range50L3.addEventListener('input', function() {
  if(range50L3.value == 0) {
      linhaOrcamento50L3.style.display = 'none';
  } else {
      linhaOrcamento50L3.style.display = 'block';
      value50L3.textContent = this.value;
  }
});

// Mostrar o resultado do slider de 50l chopp JK
var range50L4 = document.querySelector('.range50L4');
var linhaOrcamento50L4 = document.querySelector('.orcamento50L4');
var value50L4 = document.querySelector('#resultadoTempoReal50L4');

range50L4.addEventListener('input', function() {
  if(range50L4.value == 0) {
      linhaOrcamento50L4.style.display = 'none';
  } else {
      linhaOrcamento50L4.style.display = 'block';
      value50L4.textContent = this.value;
  }
});

// Mostrar o resultado do slider de 50l chopp Monumental
var somaItem50L5 = 0;
var range50L5 = document.querySelector('.range50L5');
var linhaOrcamento50L5 = document.querySelector('.orcamento50L5');
var value50L5 = document.querySelector('#resultadoTempoReal50L5');

var valor50L5item = document.querySelector('#resultadoTempoReal50L5item');
var tRTR = document.querySelector('#totalReaisTempoReal');

range50L5.addEventListener('input', function() {
  if(range50L5.value == 0) {
      linhaOrcamento50L5.style.display = 'none';
  } else {
      linhaOrcamento50L5.style.display = 'block';
      value50L5.textContent = this.value;
    // Item
    somaItem50L5 = value50L5.textContent * 12; // valor do item
    valor50L5item.textContent = somaItem50L5;
    alert("Item: " + somaItem50L5);
    // Atualizar orçamento total:
    orcamentoTotal();
  }
});

var linhaTotal = document.querySelector('.totalReais');
var range1 = document.querySelector('.range1');
var range2 = document.querySelector('.range2');
var range3 = document.querySelector('.range3');
var range4 = document.querySelector('.range4');
var range5 = document.querySelector('.range5');
var range50L1 = document.querySelector('.range50L1');
var range50L2 = document.querySelector('.range50L2');
var range50L3 = document.querySelector('.range50L3');
var range50L4 = document.querySelector('.range50L4');
var range50L5 = document.querySelector('.range50L5');

var resultado = parseInt(range1) + parseInt(range2) + parseInt(range3) + parseInt(range4) + parseInt(range5) + parseInt(range50L1) + parseInt(range50L2) + parseInt(range50L3) + parseInt(range50L4) + parseInt(range50L5);

function orcamentoFinal(){
  var orcamentoTotal = somaItem50L5 + somaItem50L4;
  tRTR.textContent = orcamentoFinal;
}

document.querySelector(".resultado").innerHTML = resultado;
 


</script>

</body>
</html>