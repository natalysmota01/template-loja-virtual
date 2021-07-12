<?php 
	 $title = "The Nat Company | Produto";

	 include "header.php";
?>

	<div class="contentProduto">
		<div class="detalhesProduto">
			<aside class="imagensProduto">
				<div class="imagemProduto fade">
					<img src="images/look1.jpg">
				</div>

				<div class="imagemProduto fade">
					<img src="images/look2.jpg">
				</div>

				<div class="imagemProduto fade">
					<img src="images/look3.jpg">
				</div>

				<div class="imagemProduto fade">
					<img src="images/look4.jpg">
				</div>

				<a class="btnAntes" onclick="plusImagens(-1)">&#10094;</a>
				<a class="btnDepois" onclick="plusImagens(1)">&#10095;</a>
			</aside>

			<aside class="formProduto">
				<form name="enviaInfoProduto" action="#" method="POST">
					<h4>Calça jeans e jaqueta</h4>
					<h6>Ref.: 29482536</h6>
					<h5>R$ 75,94</h5>

					<div class="opcoesCoreProduto">
						<h6>Cor:</h6>
						<input type="radio" name="corEscolhida" id="opcaoCor1" checked="checked">
						<label for="opcaoCor1">Azul</label>
						<input type="radio" name="corEscolhida" id="opcaoCor2">
						<label for="opcaoCor2">Rosa</label>
					</div>

					<div class="quantidadeProduto">
						<label for="quantidadeProduto">Quantidade:</label><br/>
						<input type="number" id="quantidadeProduto" name="quantidadeProduto" min="1">
					</div>

					<div class="opcoesTamanhosProduto">
						<label for="tamanhoProduto">Tamanhos:</label><br/>
						 <select name="tamanhoProduto">
							<option disabled checked>Selecione o tamanho</option>
							<option value="pequeno">Pequeno</option>
							<option value="medio">Médio</option>
							<option value="grande">Grande</option>
						</select>
					</div>

					<input type="submit" name="enviarForm" value="ADD AO CARRINHO">
				</form>

				<div class="descricaoProduto">
					<h6>Descrição</h6>
					<p>Parte externa com bordado e metal nas bordas. Parte interna com forro têxtil. Fechamento por zíper.</p>
				</div>
			</aside>
		</div>

		<?php
			include "footer.php";
		?>

		<script>
			var imagemIndex = 1;
			showImagens(imagemIndex);

			function plusImagens(n) {
				showImagens(imagemIndex += n);
			}

			function showImagens(n) {
				var i;
				var imagens = document.getElementsByClassName("imagemProduto");

				if (n > imagens.length) { imagemIndex = 1}
				if (n < 1) {imagemIndex = imagens.length}

				for (i = 0; i < imagens.length; i++) {
					imagens[i].style.display = "none";
				}

				imagens[imagemIndex-1].style.display = "block";
			}
		</script>