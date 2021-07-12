<?php 
	$title = "The Nat Company | Meu Carrinho";

	include "header.php";
?>

	<div class="contentMeuCarrinho">
		<div class="meuCarrinho">
			<h2>Meu Carrinho</h2>

			<div class="botaoVoltar">
				<a href="#" class="btnVoltarLoja">Continue na Loja</a>
			</div>

			<form class="formMeuCarrinho" action="#" name="formMeuCarrinho" method="POST">
				<fieldset>
					<table class="tblMeuCarrinho">
						<thead>
							<tr>
								<th>Produto</th>
								<th>Remover</th>
								<th>Qtde.</th>
								<th>Preço</th>
								<th>Preço Total</th>
							</tr>
						</thead>

						<tbody class="itemMeuCarrinho">
							<tr>
								<td class="itemCarrinho">
									<a href="produto">
										<img src="images/look1.jpg">
										<div class="nomeProduto">Nome do Produto aqui</div>
									</a>
									<div class="detalhes">
										<span class="codigoProduto">Cód. Produto: 01364769</span>
										<span class="corProduto">Cor: Preto</span>
										<span class="tamanhoProduto">Tamanho: P</span>
									</div>
								</td>

								<td class="removerItem">
									<button class="btnRemoverItem">
										<img src="images/lixeira.png">
									</button>
								</td>

								<td class="quantidadeItens">
									<input type="number" class="quantidadeItens" name="quantidadeItens" min="1">
								</td>

								<td class="precoItem">
									<span>R$ 500,00</span>
								</td>

								<td class="total">
									<span>R$ 500,00</span>
								</td>
							</tr>
						</tbody>
					</table>

					<div class="valorTotalCompra">
						<span class="lblTotal">Total à pagar:</span><br/>
						<span class="valorTotal">R$ 500,00</span>
						<a href="#" class="btnFinalizaPedido">Finalizar Compra</a>
					</div>
				</fieldset>
			</form>
		</div>

		<?php
			include "footer.php";
		?>