<center>
	<h1> Agenda de contatos - pesquisa</h1></center>


	<!-- Agenda de contatos desenvolvida por Alexandre Pina - alexandrepina25@yahoo.co.uk -->


	<font size="verdana">
		<!-- Agenda de contatos desenvolvida por Alexandre Pina - alexandrepina25@yahoo.co.uk -->

		<?php
		include "config.php";
		?>


		<?php

		$inicial= $_REQUEST['contato'];


		$busca = mysqli_query($con, "select * from agenda where nome like '%$inicial%' or cod_contato = '$inicial'" ) or trigger_error('Erro ao executar consutla. Detalhes = ' . mysqli_error());

   if (mysqli_num_rows($busca)==0) { //Se nao achar nada, lança essa mensagem
   	echo "<h3 align='center'>";
   	
   	echo "Nenhum registro encontrado.";

   	
   	echo "</h3>";
   }else{

   	?>

   	<table class="table table-striped table-hover" align='center' style="width:800px;">
   		<tr>
   			<td>Código</td>
   			<td>Nome</td>
   			<td align='center'>Ações</td>
   		</tr>
   		<?php 
   		while ($dados = mysqli_fetch_array($busca)) {
   			?>

   			<tr>
   				<td><?php echo $dados['cod_contato']; ?></td>
   				<td><a href="index.php?page=exibir_contato&contato=<?php echo $dados['cod_contato']; ?>"><?php echo $dados['nome']; ?></td>
   					<td align='center'>
   						<div class="btn-group btn-group-sm" role="group" aria-label="Ações para os Contatos!">
   							<a href="index.php?page=exibir_contato&contato=<?php echo $dados['cod_contato']; ?>" type="button" class="btn btn-default btn-info" aria-label="Exibir Contato">
   								<span class="glyphicon glyphicon-user"></span>
   							</a>
   							<a href="index.php?page=editar_contato&contato=<?php echo $dados['cod_contato']; ?>"  type="button" class="btn btn-default btn-primary" aria-label="Editar Contato">
   								<span class="glyphicon glyphicon-edit"></span>
   							</a>
   							<a href="dao/del_contato.php?contato=<?php echo $dados['cod_contato']; ?>" type="button" class="btn btn-default btn-danger" aria-label="Excluir Contato">
   								<span class="glyphicon glyphicon-remove"></span>
   							</a>
   						</div>
   					</td>
   				</tr>
   				<?php
   			}
   			?>
   		</table>
   		<?php
   	}
   	?>
