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
	
	<div class="main_wrapper">
		<?php $this->read(); ?>
		<div class="wrapper_content">
			<div class="row">
				<div class="col-md-12">
					<div class="relat-stats">
						<div class="row">
							<div class="col-6 col-md-3">
								<div class="stat_card">
									<a href="#" onclick="__TASK('add', null, this, '<?php echo $_GET['task'];?>', 'add')" href="#" class="dropdown-item" data-toggle="modal">
										<div class="stat_card_hd">
											<h6 class="text-center">Adicionar novo</h6>
										</div>
										<div class="stat_card_bd">
											<h1 class="text-center stat_number"><i class="fa fa-user-plus"></i><h1>
											</div>
										</a>
									</div>
								</div>
								<div class="col-6 col-md-3">
									<div class="stat_card">
										<div class="stat_card_hd">
											<h6 class="text-center">Total</h6>
										</div>
										<div class="stat_card_bd">
											<h1 class="text-center stat_number"><?php echo count($list_row);?><h1>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php foreach($list as $rows){?>
								<div class="row table_list_container" id="<?php echo $rows['id'];?>">
									<div class="fa fa-user list_icon table_list_item hidden-sm-down col-md-1  p-0">
									</div>
									<div class="table_list_item col-md-3 col-11 p-0 m-0">
										<ul>
											<li class="list_title"><?php echo $rows['cli_nome']?></li>
											<li class="list_md_text"><?php echo $rows['cli_cpf']?></li>
											<li class="list_sm_text"><td><?php echo $rows['cli_phone']?></td></li>
										</ul>
									</div>
									<div class="table_list_item hidden-mob col-md-4 col-5 p-0 m-0">
										<ul>
											<li class="list_title"><?php echo $rows['cli_modelo']?></li>
											<li class="list_md_text"><?php echo $rows['cli_placa']?></li>
											<li class="list_sm_text"><td><?php echo $rows['cli_endereco']?></td></li>
											<li class="list_sm_text"><td><?php echo $rows['cli_data_reg']?></td></li>
										</ul>
									</div>
									<div class="table_list_item col-md-3 hidden-mob col-sm-3 col-6 p-0 m-0">
										<ul>
											<li class="list_title">Data Reg</li>
											<li class="list_md_text"><td><?php echo $rows['cli_data_reg']?></td></li>
										</ul>
									</div>
									<div class="table_list_item col-md-1 col-1 p-0 btn-group">
										<button type="button" class="btn-out-sample-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-gear"></i>
										</button>
										<div class="dropdown-menu dropdown-menu-right">
											<a onclick="__TASK('alter', '<?php echo $rows['id']; ?>', this, '<?php echo $_GET['task'];?>', '<?php echo $_GET['_action'];?>')" href="#" class="dropdown-item" data-toggle="modal"><i class="fa fa-user" data-toggle="modal"></i> Alterar Dados</a>
											<a onclick="__TASK('del', '<?php echo $rows['id']; ?>', this, '<?php echo $_GET['task'];?>', '<?php echo $_GET['_action'];?>')" href="#" class="dropdown-item" data-toggle="modal"><i class="fa fa-trash"></i> Exluir</a>
										</div>
									</div>
								</div>
								<?php }?>
								<nav aria-label="Page navigation example">
									<ul class="pagination">
										<?php 
										for($i = 1; $i <= $num_pages; $i++){

											echo '<li class="page-item"><a class="page-link" href=?task=cliente&_action=list&_page='.$i.'>'.$i.'</a></li>';
										}
										?>

									</ul>
								</nav>
							</div>

						</div>
					</div>
				</div>
				<?php include_once('template/footer.php'); ?>
			</body>
			</html>
