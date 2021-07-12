<?php 
	$title = "The Nat Company | Painel de Controle";

	include "header.php";
?>

	<div class="contentPainelControle">
		<div class="painelControle">
			<h2>Nataly Soares - Conta</h2>

			<main class="opcoesControle">
				<article class="opcaoControle">
					<h5>Meus dados</h5>
					<p>Mantenha suas informações sempre atualizadas.</p>
					<a href="meusDados">Editar dados</a>
				</article>

				<article class="opcaoControle">
					<h5>Meus Pedidos</h5>
					<p>Acompanhe o andamento e histórico dos seus pedidos.</p>
					
					<table class="meusPedidos">
						<tr>
							<th>Código</th>
							<th>Data</th>
							<th>Situação</th>
							<th>Valor Total</th>
						</tr>

						<tr>
							<td>Você não tem pedidos</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>

						<tr>
							<td>
								0123456
								<br/>
								<a href="#">Concluir pedido</a>
							</td>
							<td>12/02/2019</td>
							<td>Pagamento não finalizado</td>
							<td>R$ 140,00</td>
						</tr>

						<tr>
							<td>0123456</td>
							<td>12/02/2019</td>
							<td>Compra finalizada</td>
							<td>R$ 140,00</td>
						</tr>
					</table>
				</article>

				<article class="opcaoControle">
					<h5>Detalhes dos Pedidos</h5>
					<p>Veja os detalhes dos seus pedidos.</p>
					
					<table class="meusPedidos">						
						<tr>
							<th>Código</th>
							<th>Produto</th>
							<th>Entrega</th>
							<th>Situação</th>
						</tr>

						<tr>
							<td>Você não tem pedidos</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>

						<tr>
							<td>0123456</td>
							<td>1 Calça com Camisa</td>
							<td>Rua Odilon Almeida Barreto, nº 456, Queimadas-PB</td>
							<td>Pagamento não finalizado</td>
						</tr>

						<tr>
							<td>0123456</td>
							<td>1 Calça com Camisa</td>
							<td>Rua Odilon Almeida Barreto, nº 456, Queimadas-PB</td>
							<td>Pagamento finalizado</td>
						</tr>
					</table>
				</article>
			</main>
		</div>

		<?php
			include "footer.php";
		?>