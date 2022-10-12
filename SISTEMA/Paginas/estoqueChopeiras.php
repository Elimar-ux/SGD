<div class="tabelas">
			<table width="600px" border="1">
				<thead>
				   <tr>
				       <th>Codigo da chopeira</th>
				       <th>Tipo de torneira</th>
				       <th>Em uso</th>
				       <th>Em higienização</th>
				       <th colspan="2">Ações</th>
				   </tr>
				   </thead>
				<?php while ($dado = mysqli_fetch_array($con)) { ?>
					<tr>
						<td><?php echo $dado['codigoChopeira']; ?></td>
						<td><?php echo $dado['tipoTorneira']; ?></td>
						<td><?php echo $dado['emUso']; ?></td>
						<td><?php echo $dado['emHigienizacao']; ?></td>
						<td><a href='EditarEstoqueChopeira.php?id=<?php echo $dado['idChopeira']; ?>'>Alterar</a></td>
						<td><a href='DelEstoqueChopeira.php?id=<?php echo $dado['idChopeira']; ?>'>Excluir</a></td>
					</tr>
				<?php
		            } if ($totalEstChopeiras == '0') {
		                echo "Não há registros!";
		            }
        		?>
			</table>
			
			</div>