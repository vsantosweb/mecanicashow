<?php defined('BASE_PATH') OR exit('Acesso Negado!'); ?>
<form class="container" id="form_add_cliente">
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputEmail4">Nome Completo</label>
			<input type="text" class="form-control" placeholder="Nome Completo" name="cli_nome" value="teste" required>
		</div>
		<div class="form-group col-md-2">
			<label for="inputAddress">Telefone</label>
			<input type="text" class="form-control" placeholder="Telefone/Celular" name="cli_phone" value="teste" required>
		</div>
		<div class="form-group col-md-4">
			<label for="inputPassword4">CPF</label>
			<input type="text" class="form-control" placeholder="CPF do cliente" name="cli_cpf" value="teste" required>
		</div>
		<div class="form-group col-md-6">
			<label for="inputAddress">Endereço</label>
			<input type="text" class="form-control" placeholder="Endereço" name="cli_endereco" value="teste" required>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="inputCity">Placa do Veículo</label>
			<input type="text" class="form-control" placeholder="Placa" name="cli_placa" value="teste" required>
		</div>
		<div class="form-group col-md-8	">
			<label for="inputCity">Modelo</label>
			<input type="text" class="form-control" placeholder="Modelo" name="cli_modelo" value="teste" required>
		</div>
	</div>
</form>
