<?php defined('BASE_PATH') OR exit('Acesso Negado!'); ?>
<?php foreach($search as $keys){?>
	<form class="container" id="form_add_cliente">
		<div class="form-row">
			<div class="form-group col-md-3">
				<label>Placa do Veículo</label>
				<input type="text" class="form-control text-uppercase" placeholder="Placa" name="cli_placa" value="<?php echo $keys['cli_placa'];?>" required onblur="search_register(this);">
			</div>
			<div class="form-group col-md-9">
				<label for="inputEmail4">Nome Completo</label>
				<input type="text" class="form-control" placeholder="Nome Completo" name="cli_nome" value="<?php echo $keys['cli_nome'];?>" required>
			</div>
			<div class="form-group col-md-6">
				<label for="inputPassword4">CPF</label>
				<input type="text" class="form-control" placeholder="Password" name="cli_cpf" value="<?php echo $keys['cli_cpf'];?>" required>
			</div>
			<div class="form-group col-md-6">
				<label for="inputAddress">Endereço</label>
				<input type="text" class="form-control" placeholder="1234 Main St" name="cli_endereco" value="<?php echo $keys['cli_endereco'];?>" required>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-8">
				<label>Modelo</label>
				<input type="text" class="form-control" placeholder="Modelo" name="cli_modelo" value="<?php echo $keys['cli_modelo'];?>" required>
			</div>
			<div class="form-group col-md-4">
				<label>Telefone</label>
				<input type="text" class="form-control" placeholder="Modelo" name="cli_phone" value="<?php echo $keys['cli_phone'];?>" required>
			</div>
		</div>
		<hr>
		<?php };?>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label>Data</label>
				<input type="date" class="form-control" placeholder="Data" name="orc_data_reg" required>
			</div>
			<div class="form-group col-md-4">
				<label>Valor do serviço</label>
				<input type="text" class="form-control" placeholder="Taxa do Serviço" name="orc_servico_preco"  required>
			</div>
			<div class="form-group col-md-5">
				<label>Valor Peças</label>
				<input type="text" class="form-control" placeholder="Preço dos items" name="orc_pecas_preco"  required>
			</div>
		</div>
		<div class="form-row">
			<label>Descrição</label>
			<textarea name="orc_descricao" class="form-control"></textarea>
		</div>
		<div class="form-row">
			<div class="form-group"></div>
		</div>

