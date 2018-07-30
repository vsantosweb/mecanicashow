
<?php foreach($alter_data as $keys){ ?>
	<h6>Alterar dados do cliente</h6>
	<form class="container" id="form_alter_cliente">
		<div class="form-row">
			<div class="form-group col-md-12">
				<input autocomplete="false" type="text" class="form-control" hidden="true" placeholder="Nome Completo" name="id" value="<?php echo $keys['id'];?>" required>
				<label class="col-form-label" for="input autocomplete="false"Email4">Nome Completo</label>
				<input autocomplete="false" type="text" class="form-control" placeholder="Nome Completo" name="cli_nome" value="<?php echo $keys['cli_nome'];?>" required>
			</div>
			<div class="form-group col-md-2">
				<label for="input autocomplete="false"Address">Telefone</label>
				<input autocomplete="false" type="text" class="form-control" placeholder="Telefone/Celular" name="cli_phone" value="<?php echo $keys['cli_phone'];?>" required>
			</div>
			<div class="form-group col-md-4">
				<label for="input autocomplete="false"Password4">CPF</label>
				<input autocomplete="false" type="text" class="form-control" placeholder="CPF do cliente" name="cli_cpf" value="<?php echo $keys['cli_cpf'];?>" required>
			</div>
			<div class="form-group col-md-6">
				<label for="input autocomplete="false"Address">Endereço</label>
				<input autocomplete="false" type="text" class="form-control" placeholder="Endereço" name="cli_endereco" value="<?php echo $keys['cli_endereco'];?>" required>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="input autocomplete="false"City">Placa do Veículo</label>
				<input autocomplete="false" type="text" class="form-control" placeholder="Placa" name="cli_placa" value="<?php echo $keys['cli_placa'];?>" required>
			</div>
			<div class="form-group col-md-8	">
				<label for="input autocomplete="false"City">Modelo</label>
				<input autocomplete="false" type="text" class="form-control" placeholder="Modelo" name="cli_modelo" value="<?php echo $keys['cli_modelo'];?>" required>
			</div>
		</div>
		<button type="submit" class="btn btn-succ">Cadastrar</button>
	</form>
	<?php };