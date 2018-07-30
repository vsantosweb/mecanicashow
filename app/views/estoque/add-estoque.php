<?php defined('BASE_PATH') OR exit('Acesso Negado!'); ?>

<form class="container" id="form_add_peca">
	<div class="form-row">
		<div class="form-group col-md-12">
			<label for="inputEmail4">Nome</label>
			<input type="text" class="form-control" placeholder="Nome da Peça" name="pca_nome" value="teste" required>
		</div>
		<div class="form-group col-md-4">
			<label for="inputPassword4">Fornecedor</label>
			<input type="text" class="form-control" placeholder="Fornecedor" name="pca_fornecedor" value="teste" required>
		</div>
		<div class="form-group col-md-2">
			<label for="inputAddress">Tipo de Peça</label>
			<input type="text" class="form-control" placeholder="Tipo" name="pca_tipo" value="teste" required>
		</div>
		<div class="form-group col-md-4">
			<label for="inputPassword4">Marca</label>
			<input type="text" class="form-control" placeholder="Fornecedor" name="pca_marca" value="teste" required>
		</div>
		<div class="form-group col-md-2">
			<label for="inputAddress">Estado</label>
			<input type="text" class="form-control" placeholder="Estado" name="pca_estado" value="teste" required>
		</div>
	</div>

	<div class="form-row">
		<div class="form-group col-md-2">
			<label for="inputCity">Qtd</label>
			<input type="text" class="form-control" placeholder="Qtd" name="pca_qtd" value="23" required>
		</div>
		<div class="form-group col-md-4">
			<label for="inputCity">Valor Uni.</label>
			<input type="text" class="form-control" placeholder="Codigo" name="pca_preco" value="teste" required>
		</div>
		<div class="form-group col-md-6">
			<label for="inputCity">Codigo</label>
			<input type="text" class="form-control" placeholder="Codigo" name="pca_codigo" value="teste" required>
		</div>
	</div>
</form>
