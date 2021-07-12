<?php 
	$title = "The Nat Company | Meus Dados";

	include "header.php";
?>

	<div class="contentDados">
		<div class="contaPerfil">
			<h2>Nataly Soares - Meus Dados</h2>
			<p>Os campos marcados com (<span>*</span>) são obrigatórios.</p>

			<form action="#" name="contaPerfil" method="POST">
				<legend>Dados Pessoais</legend>		
				<div class="dadosUsuario">
					<label for="nomeCompleto">
						<span>*</span> Nome Completo:
					</label>
					<input type="text" name="nomeCompleto" id="nomeCompleto" required="true">

					<br/>

					<label for="dataNascimento">
						<span>*</span> Data de Nascimento:
					</label>
					<input type="date" name="dataNascimento" id="dataNascimento" style="width: 90px" required="true" placeholder="dd/mm/aaaa">

					<br/>

					<label for="sexo">Sexo:</label>
					<select id="sexo" name="sexo">
						<option checked disabled>Selecione</option>
						<option value="feminino">Feminino</option>
						<option value="masculino">Masculino</option>
					</select>
				</div>

				<legend>Endereço</legend>
				<div class="dadosUsuario">
					<label for="cep">
						<span>*</span> CEP:
					</label>
					<input type="text" name="cep" id="cep" required="true">

					<br/>

					<label for="endereco">
						<span>*</span> Endereço:
					</label>
					<input type="text" name="endereco" id="endereco" required="true">

					<br/>

					<label for="numero">
						<span>*</span> Número:
					</label>
					<input type="text" name="numero" id="numero" required="true" style="width: 80px">

					<br/>

					<label for="complemento">Complemento:</label>
					<input type="text" name="complemento" id="complemento" placeholder="apartamento, bloco...">

					<br/>

					<label for="bairro">
						<span>*</span> Bairro:
					</label>
					<input type="text" name="bairro" id="bairro" required="true">

					<br/>

					<label for="cidade">
						<span>*</span> Cidade:
					</label>
					<input type="text" name="cidade" id="cidade" required="true">

					<br/>

					<label for="estado">
						<span>*</span> Estado:
					</label>
					<select name="estado" id="estado" style="width: 180px">
						<option selected disabled>Selecione o estado</option>
						<option value="AC">AC- Acre</option>
						<option value="AL">AL - Alagoas</option>
						<option value="AP">AP - Amapá</option>
						<option value="AM">AM - Amazonas</option>
						<option value="BA">BA - Bahia</option>
						<option value="CE">CE - Ceará</option>
						<option value="DF">DF - Distrito Federal</option>
						<option value="ES">ES - Espírito Santo</option>
						<option value="GO">GO - Goiás</option>
						<option value="MA">MA - Maranhão</option>
						<option value="MT">MT - Mato Grosso</option>
						<option value="MS">MS - Mato Grosso do Sul</option>
						<option value="MG">MG - Minas Gerais</option>
						<option value="PA">PA - Pará</option>
						<option value="PB">PB - Paraíba</option>
						<option value="PR">PR - Paraná</option>
						<option value="PE">PE - Pernambuco</option>
						<option value="PI">PI - Piauí</option>
						<option value="RJ">RJ - Rio de Janeiro</option>
						<option value="RN">RN - Rio Grande do Norte</option>
						<option value="RS">RS - Rio Grande do Sul</option>
						<option value="RO">RO - Rondônia</option>
						<option value="RR">RR - Roraima</option>
						<option value="SC">SC - Santa Catarina</option>
						<option value="SP">SP - São Paulo</option>
						<option value="SE">SE - Sergipe</option>
						<option value="TO">TO - Tocantins</option>
					</select>
				</div>

				<legend>Contato</legend>
				<div class="dadosUsuario">
					<label for="telefone">
						<span>*</span> Telefone:
					</label>
					<input type="text" name="telefone" id="telefone" required="true" placeholder="(00) 0 0000-0000">

					<br/>

					<label for="celular">Celular:</label>
					<input type="text" name="celular" id="celular" required="true" placeholder="(00) 0 0000-0000">
				</div>

				<legend>Acesso</legend>
				<div class="dadosUsuario">
					<label for="email">
						<span>*</span> Email:
					</label>
					<input type="text" name="email" id="email" required="true">

					<br/>

					<label for="confirmarEmail">
						<span>*</span> Confirme seu email:
					</label>
					<input type="text" name="confirmarEmail" id="confirmarEmail" required="true">

					<br/>

					<label for="senha">
						<span>*</span> Nova senha:
					</label>
					<input type="password" name="senha" id="senha" required="true">

					<br/>

					<label for="confirmarSenha">
						<span>*</span> Nova senha:
					</label>
					<input type="password" name="confirmarSenha" id="confirmarSenha" required="true">

					<button class="btnCadastrar">Cadastrar</button>
				</div>
			</form>
		</div>

		<?php
			include "footer.php";
		?>