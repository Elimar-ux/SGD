<?php
session_start();
include('../PaginasControle/conexao.php');
include('../PaginasControle/verificaLoginCliente.php');

$login	= $_SESSION['login'];

$sql = "SELECT valor_Litro FROM tabela_precos WHERE litros_barril = '30'";
$con = mysqli_query($conexao, $sql);
$dado = mysqli_fetch_assoc($con);

$sql2 = "SELECT valor_Litro FROM tabela_precos WHERE litros_barril = '50'";
$con2 = mysqli_query($conexao, $sql2);
$dado2 = mysqli_fetch_assoc($con2);


// Barris de 30litros 
$barril30L1 = $_POST['30lCapital'];
$barril30L2 = $_POST['30lBrasilia'];
$barril30L3 = $_POST['30lDslr'];
$barril30L4 = $_POST['30lJk'];
$barril30L5 = $_POST['30lMonumental'];

$litrosBarril30L1 = $barril30L1 * 30;
$litrosBarril30L2 = $barril30L2 * 30;
$litrosBarril30L3 = $barril30L3 * 30;
$litrosBarril30L4 = $barril30L4 * 30;
$litrosBarril30L5 = $barril30L5 * 30;


$valorBarril30L1 = number_format(round($barril30L1 * $dado['valor_Litro']), 2, ',', '');
$valorBarril30L2 = number_format(round($barril30L2 * $dado['valor_Litro']), 2, ',', '');
$valorBarril30L3 = number_format(round($barril30L3 * $dado['valor_Litro']), 2, ',', '');
$valorBarril30L4 = number_format(round($barril30L4 * $dado['valor_Litro']), 2, ',', '');
$valorBarril30L5 = number_format(round($barril30L5 * $dado['valor_Litro']), 2, ',', '');


// Barris de 50litros
$barril50L1 = $_POST['50lCapital'];
$barril50L2 = $_POST['50lBrasilia'];
$barril50L3 = $_POST['50lDlsr'];
$barril50L4 = $_POST['50lJk'];
$barril50L5 = $_POST['50lMonumental'];

$litrosBarril50L1 = $barril50L1 * 50;
$litrosBarril50L2 = $barril50L2 * 50;
$litrosBarril50L3 = $barril50L3 * 50;
$litrosBarril50L4 = $barril50L4 * 50;
$litrosBarril50L5 = $barril50L5 * 50;

$valorBarril50L1 = number_format(round($barril50L1 * $dado2['valor_Litro']), 2, ',', '');
$valorBarril50L2 = number_format(round($barril50L2 * $dado2['valor_Litro']), 2, ',', '');
$valorBarril50L3 = number_format(round($barril50L3 * $dado2['valor_Litro']), 2, ',', '');
$valorBarril50L4 = number_format(round($barril50L4 * $dado2['valor_Litro']), 2, ',', '');
$valorBarril50L5 = number_format(round($barril50L5 * $dado2['valor_Litro']), 2, ',', '');

// Soma do total de litros
$somaLitrosTotal = $litrosBarril30L1 + $litrosBarril30L2 + $litrosBarril30L3 + $litrosBarril30L4 + $litrosBarril30L5 + $litrosBarril50L1 + $litrosBarril50L2 + $litrosBarril50L3 + $litrosBarril50L4 + $litrosBarril50L5;

// Soma valor total
$somaValorTotal = number_format(round(($barril30L1 * $dado['valor_Litro']) + ($barril30L2 * $dado['valor_Litro']) + ($barril30L3 * $dado['valor_Litro']) + ($barril30L4 * $dado['valor_Litro']) + ($barril30L5 * $dado['valor_Litro']) + ($barril50L1 * $dado2['valor_Litro']) + ($barril50L2 * $dado2['valor_Litro']) + ($barril50L3 * $dado2['valor_Litro']) + ($barril50L4 * $dado2['valor_Litro']) + ($barril50L5 * $dado2['valor_Litro'])), 2, ',', '');

 ?>

 <!DOCTYPE html>
 <html>
 <head lang="pt-br">
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet"  type="text/css" href="../css/style_finPedido.css">
 	<title>Finalizar pedido</title>
 </head>
 <body>
 <div class="container-finPedido">
 	<div class="tebela-confirm">
 		<table border="1">
 			<tr>
            <th>Chopps</th>
            <th>Valor</th>
          </tr>
          <tr>
          	<td>
				<!-- Barris de 30L  -->
          		<?php 
          			if ($barril30L1 > 0){
          		?>
          			<p><?php echo "$litrosBarril30L1";?> litros de chopp capital(barril de 30L)</p>
				<?php
					}
				?>

				<?php 
          			if ($barril30L2 > 0){
          		?>
          			<p><?php echo "$litrosBarril30L2";?> litros de chopp brasília(barril de 30L)</p>
				<?php
					}
				?>

				<?php 
          			if ($barril30L3 > 0){
          		?>
          			<p><?php echo "$litrosBarril30L3";?> litros de chopp DLSR(barril de 30L)</p>
				<?php
					}
				?>

				<?php 
          			if ($barril30L4 > 0){
          		?>
          			<p><?php echo "$litrosBarril30L4";?> litros de chopp JK(barril de 30L)</p>
				<?php
					}
				?>

				<?php 
          			if ($barril30L5 > 0){
          		?>
          			<p><?php echo "$litrosBarril30L5";?> litros de chopp monumental(barril de 30L)</p>
				<?php
					}
				?>

				<!-- Barris de 50L  -->
				<?php 
          			if ($barril50L1 > 0){
          		?>
          			<p><?php echo "$litrosBarril50L1";?> litros de chopp capital(barril de 50L)</p>
				<?php
					}
				?>

				<?php 
          			if ($barril50L2 > 0){
          		?>
          			<p><?php echo "$litrosBarril50L2";?> litros de chopp brasília(barril de 50L)</p>
				<?php
					}
				?>

				<?php 
          			if ($barril50L3 > 0){
          		?>
          			<p><?php echo "$litrosBarril50L3";?> litros de chopp DLSR(barril de 50L)</p>
				<?php
					}
				?>

				<?php 
          			if ($barril50L4 > 0){
          		?>
          			<p><?php echo "$litrosBarril50L4";?> litros de chopp JK(barril de 50L)</p>
				<?php
					}
				?>

				<?php 
          			if ($barril50L5 > 0){
          		?>
          			<p><?php echo "$litrosBarril50L5";?> litros de chopp monumental(barril de 50L)</p>
				<?php
					}
				?>
          	</td>
          	<td>
          		<!-- Valor dos barris de 30L  -->
          		<?php 
          			if ($barril30L1 > 0){
          		?>
          			<p>R$ <?php echo "$valorBarril30L1";?></p>
          			<input type="hidden" name="valorBarril30L1" value="<?php echo "$valorBarril30L1";?>">
				<?php
					}
				?>

				<?php 
          			if ($barril30L2 > 0){
          		?>
          			<p>R$ <?php echo "$valorBarril30L2";?></p>
          			<input type="hidden" name="valorBarril30L2" value="<?php echo "$valorBarril30L2";?>">
				<?php
					}
				?>

				<?php 
          			if ($barril30L3 > 0){
          		?>
          			<p>R$ <?php echo "$valorBarril30L3";?></p>
          			<input type="hidden" name="valorBarril30L3" value="<?php echo "$valorBarril30L3";?>">
				<?php
					}
				?>

				<?php 
          			if ($barril30L4 > 0){
          		?>
          			<p>R$ <?php echo "$valorBarril30L4";?></p>
          			<input type="hidden" name="valorBarril30L4" value="<?php echo "$valorBarril30L4";?>">
				<?php
					}
				?>

				<?php 
          			if ($barril30L5 > 0){
          		?>
          			<p>R$ <?php echo "$valorBarril30L5";?></p>
          			<input type="hidden" name="valorBarril30L5" value="<?php echo "$valorBarril30L5";?>">
				<?php
					}
				?>

				<!-- Valor dos barris de 50L  -->
				<?php 
          			if ($barril50L1 > 0){
          		?>
          			<p>R$ <?php echo "$valorBarril50L1";?></p>
          			<input type="hidden" name="valorBarril50L1" value="<?php echo "$valorBarril50L1";?>">
				<?php
					}
				?>

				<?php 
          			if ($barril50L2 > 0){
          		?>
          			<p>R$ <?php echo "$valorBarril50L2";?></p>
          			<input type="hidden" name="valorBarril50L2" value="<?php echo "$valorBarril50L2";?>">
				<?php
					}
				?>

				<?php 
          			if ($barril50L3 > 0){
          		?>
          			<p>R$ <?php echo "$valorBarril50L3";?></p>
          			<input type="hidden" name="valorBarril50L3" value="<?php echo "$valorBarril50L3";?>">
				<?php
					}
				?>

				<?php 
          			if ($barril50L4 > 0){
          		?>
          			<p>R$ <?php echo "$valorBarril50L4";?></p>
          			<input type="hidden" name="valorBarril50L4" value="<?php echo "$valorBarril50L4";?>">
				<?php
					}
				?>

				<?php 
          			if ($barril50L5 > 0){
          		?>
          			<p>R$ <?php echo "$valorBarril50L5";?></p>
          			<input type="hidden" name="valorBarril50L5" value="<?php echo "$valorBarril50L5";?>">
				<?php
					}
				?>
          	</td>
          </tr>
          <tr>
          	<td>
          		<p>LITROS: <?php echo "$somaLitrosTotal";?></p>
          	</td>
          	<td>
          		<p>VALOR TOTAL: <?php echo "$somaValorTotal";?></p>
          	</td>
          </tr>
 		</table>
 	</div>
 	<form action="../PaginasControle/cFinalizaPedido.php" method="POST">
 	<div class="form-box">
 		<input type="hidden" name="litrosBarril30L1" value="<?php echo "$barril30L1";?>">
 		<input type="hidden" name="litrosBarril30L2" value="<?php echo "$barril30L2";?>">
 		<input type="hidden" name="litrosBarril30L3" value="<?php echo "$barril30L3";?>">
 		<input type="hidden" name="litrosBarril30L4" value="<?php echo "$barril30L4";?>">
 		<input type="hidden" name="litrosBarril30L5" value="<?php echo "$barril30L5";?>">
 		<input type="hidden" name="litrosBarril50L1" value="<?php echo "$barril50L1";?>">
 		<input type="hidden" name="litrosBarril50L2" value="<?php echo "$barril50L2";?>">
 		<input type="hidden" name="litrosBarril50L3" value="<?php echo "$barril50L3";?>">
 		<input type="hidden" name="litrosBarril50L4" value="<?php echo "$barril50L4";?>">
 		<input type="hidden" name="litrosBarril50L5" value="<?php echo "$barril50L5";?>">
 		<input type="hidden" name="login" value="<?php echo "$login";?>">
 		<input type="hidden" name="valorTotal" value="<?php echo "$somaValorTotal";?>">
	 	<label>Digite o endereço do evento:</label>
	 	<input type="text" name="enderecoRua" placeholder="Rua">
	 	<input type="text" name="enderecoNumero" placeholder="N°">
	 	<label>Selecione a data do evento:</label>
	 	<input type="date" name="dataEvento">
	 	<label>Selecione o horario em que poderá ser instalado a chopeira:</label>
	 	<input type="time" name="horaEvento">
	 	<label>Forma de pagamento:</label>
	 	<select name="formaPagamento">
	 	  <option value="default" selected>--OPÇÕES--</option>
		  <option value="cartão">Cartão débito/crédito</option>
		  <option value="pix" >Pix</option>
		  <option value="ted">Depósito bancário</option>
		</select>
		<button class="btn-form-finPedido">Finaliar Pedido</button>
 	</div>
 	</form>
 </div>
 </body>
 </html>