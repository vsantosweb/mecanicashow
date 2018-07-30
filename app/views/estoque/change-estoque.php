<?php defined('BASE_PATH') OR exit('Acesso Negado!'); ?>
<h4><?php echo $this->title; ?></h4>
<?php foreach($alter_data as $keys){?>
<form class="container" id="form_add_peca">
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputCity">Qtd</label>
			<input type="text" hidden="true" name="id" value="<?php echo $keys['id']?>" required>
			<input type="number" class="form-control" placeholder="Estado" name="pca_qtd" value="<?php echo $keys['pca_qtd']?>" required>
		</div>
	</div>
</form>
<?php }; ?>