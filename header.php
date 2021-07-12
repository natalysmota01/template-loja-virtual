<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Nataly Soares">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Loja de roupas e acessórios da Nataly Soares, The Nat Company">
	<meta name="keywords" content="The Nat Company, Nat Company, Loja da Nataly Soares, Nataly Soares, Loja Virtual">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
	<header class="header">
		<button id="btn-menu">
			<img src="images/icon-menu.png">
		</button>

		<nav id="menu">
			<div id="topo-menu">
				<a href="index">
					<img src="images/logo.png">
				</a>

				<button id="btn-fechar-menu">X</button>
			</div>

			<ul>
				<li><a href="opcao-menu">Produto 1</a></li>
				<li><a href="opcao-menu">Produto 2</a></li>
				<li><a href="opcao-menu">Produto 3</a></li>
				<li><a href="opcao-menu">Produto 4</a></li>
			</ul>
		</nav>

		<div id="logotipo">
			<a href="index" id="logoPequena">
				<img src="images/logotipo.png">
			</a>
			<a href="index" id="logoGrande">
				<img src="images/logo.png">
			</a>
		</div>

		<div id="carrinho">
			<button id="btn-carrinho">
				<img src="images/icon-carrinho.png">
				<p>0</p>
			</button>
		</div>

		<div id="pesquisa">
			<form id="form-pesquisa" action="busca" method="GET">
				<input type="text" name="campo-busca" placeholder="O que você procura?">
				<input type="image" src="images/icon-busca.png" value="submit" class="icon-busca">
			</form>
		</div>

		<div id="itens-carrinho">
			<div id="topo-carrinho">
				<button id="btn-fechar-carrinho">X</button>
				<h6>Meu Carrinho</h6>
			</div>

			<div id="total-compra">
				<h6>Subtotal:</h6>
				<h5>R$ 48,75</h5>
			</div>

			<div id="checkout-login">
				<a href="login">Minha Conta</a>
				<a href="#">Checkout</a>
			</div>

			<div id="item-produto">
				<img src="images/look1.jpg">
				<h4>Calça Jeans com Blusa</h4>
				<h6>Cor: Rosa</h6>
				<h6>Tamanho: P</h6>
				<h6>Qtde: 1</h6>
				<h5>R$ 21,13</h5>

				<div id="botoes">
					<a href="produto">
						<button id="editar-item">Editar</button>
					</a>
					<button id="excluir-item">Remover</button>
				</div>
			</div>
		</div>

		<!-- JQUERY MENU-CARRINHO -->
		<script>
			$(document).mouseup(function (e) {
				var $menu = $("#menu"),
					$abreMenu = $("#btn-menu");
					$itensCarrinho = $('#itens-carrinho');
					$abreCarrinho = $('#btn-carrinho');

				if (!$menu.is(e.target) && $menu.has(e.target).length === 0) {

					if (!$abreMenu.is(e.target) && $abreMenu.has(e.target).length === 0) {

						if ($menu.is(':visible')) {
							$menu.toggle(300);
						}
					}
				}

				if (!$itensCarrinho.is(e.target) && $itensCarrinho.has(e.target).length === 0) {

					if (!$abreCarrinho.is(e.target) && $abreCarrinho.has(e.target).length === 0) {

						if ($itensCarrinho.is(':visible')) {
							$itensCarrinho.toggle(300);
						}
					}
				}
			});

			$('#btn-menu').on("click", function() {
				$('#menu').toggle(400);
			});

			$('#btn-fechar-menu').on("click", function() {
				$('#menu').toggle(400);
			});

			$('#btn-carrinho').on("click", function() {
				$('#itens-carrinho').toggle(400);
			});

			$('#btn-fechar-carrinho').on("click", function() {
				$('#itens-carrinho').toggle(400);
			});
		</script>
	</header>