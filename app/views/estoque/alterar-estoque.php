<?php defined('BASE_PATH') OR exit('Acesso Negado!'); ?>
<h4>Alterar dados do produto</h4>
<?php foreach($alter_data as $keys){?>
<form class="container" id="form_add_peca">
	<div class="form-row">
		<div class="form-group col-md-12">
			<input type="text" hidden="true" name="id" value="<?php echo $keys['id']?>" required>
			<label for="inputEmail4">Nome</label>
			<input type="text" class="form-control" placeholder="Nome da Peça" name="pca_nome" value="<?php echo $keys['pca_nome']?>" required>
		</div>
		<div class="form-group col-md-4">
			<label for="inputPassword4">Fornecedor</label>
			<input type="text" class="form-control" placeholder="Fornecedor" name="pca_fornecedor" value="<?php echo $keys['pca_fornecedor']?>" required>
		</div>
		<div class="form-group col-md-2">
			<label for="inputAddress">Tipo de Peça</label>
			<input type="text" class="form-control" placeholder="Tipo" name="pca_tipo" value="<?php echo $keys['pca_tipo']?>" required>
		</div>
		<div class="form-group col-md-4">
			<label for="inputPassword4">Marca</label>
			<input type="text" class="form-control" placeholder="Fornecedor" name="pca_marca" value="<?php echo $keys['pca_marca']?>" required>
		</div>
		<div class="form-group col-md-2">
			<label for="inputAddress">Estado</label>
			<input type="text" class="form-control" placeholder="Codigo" name="pca_estado" value="<?php echo $keys['pca_estado']?>" required>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="inputCity">Preco Uni.</label>
			<input type="text" class="form-control" placeholder="Estado" name="pca_preco" value="<?php echo $keys['pca_preco']?>" required>
		</div>
		<div class="form-group col-md-6">
			<label for="inputCity">Codigo</label>
			<input type="text" class="form-control" placeholder="Estado" name="pca_codigo" value="<?php echo $keys['pca_codigo']?>" required>
		</div>
	</div>
</form>
<?php }; ?>
