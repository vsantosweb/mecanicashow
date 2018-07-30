<?php defined('BASE_PATH') OR exit('Acesso Negado!'); ?>
<?php foreach ($data as $keys){?>
<div class="row">
	<div class="col-6">
		<h3>Total R$ <?php echo $keys['orc_valor_total']; ?></h3>
	</div>
	<div class="col-6">
		<h5 class="text-right">ORC00<?php echo $keys['orc_id']; ?></h5>
	</div>
</div>
<form class="container" id="form_add_cliente">
	<div class="form-row">
		<div class="form-group col-md-3">
			<label for="inputEmail4">Placa</label>
			<input type="text" class="form-control" placeholder="R$ VALOR" name="cli_placa" value="<?php echo $keys['cli_placa']; ?>" required>
		</div>
		<div class="form-group col-md-9">
			<label for="inputEmail4">Nome</label>
			<input type="text" class="form-control" placeholder="R$ VALOR" name="cli_nome" value="<?php echo $keys['cli_nome']; ?>" required>
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-9">
			<label for="inputEmail4">Valor</label>
			<input type="text" class="form-control" placeholder="R$ VALOR" name="orc_valor_total" value="<?php echo $keys['orc_valor_total']; ?>" required>
			<input hidden name="orc_id" value="<?php echo $keys['orc_id'];?>">
		</div>
	</div>
</form>
<?php }?>