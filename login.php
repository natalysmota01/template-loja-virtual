<?php 
	$title = "The Nat Company | Login - Nova Conta";

	include "header.php";
?>

	<div class="contentLogin">
		<div class="banner">
			<h1>Identificação</h1>
		</div>

		<div class="loginUsuario">
			<h2>Login</h2>

			<form action="#" name="loginUsuario" method="POST">
				<label for="emailUsuario">Endereço de email</label>
				<input type="email" id="emailUsuario" name="emailUsuario" required="true">

				<label for="senhaUsuario">Senha</label>
				<input type="password" id="senhaUsuario" name="senhaUsuario" required="true">

				<button id="btnLogin">Login</button>
			</form>
		</div>

		<div class="novaContaUsuario">
			<h2>Criar nova conta</h2>

			<form action="#" name="criarConta" method="POST">
				<label for="nomeCompleto">Nome Completo</label>
				<input type="text" id="nomeCompleto" name="nomeCompleto" required="true">

				<label for="novoEmail">Email</label>
				<input type="email" id="novoEmail" name="novoEmail" required="true">

				<label for="confirmaEmail">Confirme o Email</label>
				<input type="email" id="confirmaEmail" name="confirmaEmail" required="true">

				<label for="novaSenha">Senha</label>
				<input type="password" id="novaSenha" name="novaSenha" required="true">

				<input type="checkbox" id="aceitarTermos" name="aceitarTermos" required="true">
				<label for="aceitarTermos">
					<span>Li e aceito os termos e condições</span>
				</label>

				<button class="btnCriarConta">Criar conta</button>
			</form>
		</div>

		<?php
			include "footer.php";
		?>