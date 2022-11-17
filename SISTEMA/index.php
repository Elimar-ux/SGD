<!DOCTYPE html>
<html>
<head>
<title>ChoppDrive</title>
 <link rel="icon" type="image/png" href="/images/logo.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
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
  background-image: url("images/chopp.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">

    <a href="#home" class="w3-bar-item w3-button w3-wide"><img src="images/logo.png" height="30" width="30"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTATO</a>
      <a href="Paginas/login.php" class="w3-bar-item w3-button"></i> LOGIN</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTATO</a>
  <a href="/paginas/login.php" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <p><a href="Paginas/orcamento.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Fazer um orçamento</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <a href="https://www.instagram.com/choppdrivejp/" class="fa fa-instagram w3-hover-opacity"></a>
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


<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding: 65px 341px" id="contact">

  <h3 class="w3-center" style="text-shadow:1px 0px 0 #9444" >CONTATO</h3>
  <p class="w3-center w3-large">Fale conosco, envie sua mensagem:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Brasília, DF</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Whatsapp: (61) 98315-5678</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    <br>
    <form action="PaginasControle/cEMAIL.php" method="POST">
      <p><input class="w3-input w3-border" type="text" placeholder="Nome" required name="Nome"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Assunto" required name="Assunto"></p>
      <p><textarea name="msg" cols="16" rows="5" style="width: 100%;"></textarea></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> Enviar
        </button>
      </p>
    </form>
    <!-- Image of location/map -->
    <p>Localização: </p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10858.493078336573!2d-47.87110198666806!3d-15.800945849262124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3b38bf6375b9%3A0x5b6cafaacd19f3f!2sCongresso%20Nacional!5e0!3m2!1spt-BR!2sbr!4v1665578918575!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
</body>
</html>