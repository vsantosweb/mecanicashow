<?php defined('BASE_PATH') OR exit('Acesso Negado!');
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once('template/head.php'); ?>
</head>
<body>
	<?php include_once('template/nav.php'); ?>
	<?php include_once('template/header.php'); ?>
	
	<?php $this->read(); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="relat-stats">
				<div class="row">
					<div class="col-6 col-md-3">
						<div class="stat_card">
							<div class="stat_card_hd">
								<h6 class="text-center">Total de Peças</h6>
							</div>
							<div class="stat_card_bd">
								<h1 class="text-center stat_number"><?php echo count($list_row);?><h1>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-3">
							<div class="stat_card">
								<a href="#" onclick="__TASK('add', null, this, '<?php echo $_GET['task'];?>', 'add')" href="#" class="dropdown-item" data-toggle="modal">
									<div class="stat_card_hd">
										<h6 class="text-center">Cadastrar Peça</h6>
									</div>
									<div class="stat_card_bd">
										<h1 class="text-center stat_number"><i class="fa fa-plus"></i><h1>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php foreach($list as $rows){?>
						<div class="row table_list_container" id="<?php echo $rows['id'];?>">
							<div class="fa fa-cube list_icon table_list_item hidden-sm-down col-md-1  p-0">
							</div>
							<div class="table_list_item col-md-3 col-6 p-0 m-0">
								<ul>
									<li class="list_title"><?php echo $rows['pca_nome']?></li>
									<li class="list_md_text"><?php echo $rows['pca_marca']?></li>
									<li class="list_sm_text"><td><?php echo $rows['pca_fornecedor']?></td></li>
								</ul>
							</div>
							<div class="table_list_item col-md-4 col-5 p-0 m-0">
								<ul>
									<li class="list_title"><i class="fa fa-cubes"></i> <?php echo $rows['pca_qtd']?> Uni.</li>
									<li class="list_md_text"><?php echo $rows['pca_codigo']?></li>
									<li class="list_sm_text"><td><?php echo $rows['pca_estado']?></td></li>
									<li class="list_sm_text"><td><?php echo $rows['pca_tipo']?></td></li>
								</ul>
							</div>
							<div class="table_list_item hidden-mob col-md-3  col-sm-3 col-6 p-0 m-0">
								<ul>
									<li class="list_title">R$ <?php echo $rows['pca_preco']?></li>
									<li class="list_sm_text"><td><?php echo $rows['pca_data_reg']?></td></li>
								</ul>
							</div>
							<div class="table_list_item col-md-1 col-1 p-0 btn-group">
								<button type="button" class="btn-out-sample-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-gear"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<a onclick="__TASK('alter', '<?php echo $rows['id']; ?>', this, '<?php echo $_GET['task'];?>', 'update')" href="#" class="dropdown-item" data-toggle="modal"><i class="fa fa-edit"></i> Alterar </a>
									<a onclick="__TASK('alter', '<?php echo $rows['id']; ?>', this, '<?php echo $_GET['task'];?>', 'change', 'input')" href="#" class="dropdown-item" data-toggle="modal"><i class="fa fa-plus"></i> Entrada</a>
									<a onclick="__TASK('alter', '<?php echo $rows['id']; ?>', this, '<?php echo $_GET['task'];?>', 'change', 'output')" href="#" class="dropdown-item" data-toggle="modal"><i class="fa fa-minus"></i> Saída</a>
									<a onclick="__TASK('del', '<?php echo $rows['id']; ?>', this, '<?php echo $_GET['task'];?>', '<?php echo $_GET['_action'];?>')" href="#" class="dropdown-item" data-toggle="modal"><i class="fa fa-trash"></i> Exluir</a>
								</div>
							</div>
						</div>
						<?php }?>
						<nav aria-label="Page navigation example">
							<ul class="pagination">
								<?php 
								for($i = 1; $i <= $num_pages; $i++){

									echo '<li class="page-item"><a class="page-link" href=?task=estoque&_action=launcher&_page='.$i.'>'.$i.'</a></li>';
								}
								?>

							</ul>
						</nav>
					</div>

				</div>
				<?php include_once('template/footer.php'); ?>
			</body>
			</html>
			
