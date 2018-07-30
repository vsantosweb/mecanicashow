<!DOCTYPE html>
<html>
<head>
	<?php include_once('template/head.php'); ?>
</head>
<body>
	<?php include_once('template/nav.php'); ?>
	<?php include_once('template/header.php'); ?>
	
	<div class="main_wrapper">
		<div class="wrapper_content">
			<div class="row">
				<div class="col-12 col-md-2 p-0">
					<div class="stat_card">
						<a href="#" onclick="budget(this)" class="dropdown-item" data-toggle="modal">
							<div class="stat_card_hd">
								<h6 class="text-center">Novo Orçamento</h6>
							</div>
							<div class="stat_card_bd">
								<h1 class="text-center stat_number"><i class="fa fa-plus"></i></h1>
								</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-md-2 p-0	">
						<div class="stat_card">
							<div class="stat_card_hd">
								<h6 class="text-center">Total</h6>
							</div>
							<div class="stat_card_bd">
								<h1 class="text-center stat_number"><?php echo $this->get_relat_status('total')?><h1>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-2 p-0	">
							<div class="stat_card">
								<div class="stat_card_hd">
									<h6 class="text-center">Pendentes</h6>
								</div>
								<div class="stat_card_bd">
									<h1 class="text-center stat_number"><?php echo $this->get_relat_status('pendente')?><h1>
									</div>
								</div>
							</div>
							<div class="col-6 col-md-2 p-0">
								<div class="stat_card">
									<div class="stat_card_hd">
										<h6 class="text-center">Em Andamento</h6>
									</div>
									<div class="stat_card_bd">
										<h1 class="text-center stat_number"><?php echo $this->get_relat_status('processando')?><h1>
										</div>
									</div>
								</div>
								<div class="col-6 col-md-2 p-0">
									<div class="stat_card">
										<div class="stat_card_hd">
											<h6 class="text-center">Finalizados</h6>
										</div>
										<div class="stat_card_bd">
											<h1 class="text-center stat_number"><?php echo $this->get_relat_status('finalizado')?><h1>
											</div>
										</div>
									</div>
									<div class="col-6 col-md-2 p-0">
										<div class="stat_card">
											<div class="stat_card_hd">
												<h6 class="text-center">Cancelados</h6>
											</div>
											<div class="stat_card_bd">
												<h1 class="text-center stat_number"><?php echo $this->get_relat_status('cancelado')?><h1>
												</div>
											</div>
										</div>
									</div>
									<?php 

									foreach($list as $keys){?>
										<div class="row table_list_container" id="<?php echo $keys['orc_id']?>">
											<div class="fa fa-clipboard list_icon table_list_item hidden-sm-down col-md-1  p-0">
											</div>
											<div class="table_list_item col-md-3 col-6 p-0 m-0">
												<ul>
													<li class="list_title"><?php echo $keys['cli_nome']?></li>
													<li class="list_md_text"><?php echo $keys['cli_cpf']?></li>
													<li class="list_sm_text"><?php echo $keys['cli_endereco']?></li>
												</ul>
											</div>
											<div class="table_list_item col-md-4 col-5 p-0 m-0">
												<ul>
													<li class="list_title"><span id="status_<?php echo $keys['orc_status']?>" class="status"><i class="fa fa-clock-o"></i> <?php echo $keys['orc_status']?> </span></li>
													<li class="list_md_text">ORC00<?php echo $keys['orc_id']?></li>
													<li class="list_sm_text"><td><?php echo $keys['orc_data_reg']?></td></li>
													<li class="list_sm_text"><?php echo $keys['cli_modelo']?></li>
												</ul>
											</div>
											<div class="table_list_item hidden-mob col-md-3  col-sm-3 col-6 p-0 m-0">
												<ul>
													<li class="list_title">Total R$ <?php echo $keys['orc_valor_total']?></li>
													<li class="list_sm_text">Taxa Serviço: <?php echo $keys['orc_servico_preco']?></li>
													<li class="list_sm_text">Peças: <?php echo $keys['orc_pecas_preco']?></li>
													<li class="list_sm_text"><?php echo $keys['orc_descricao']?></li>
												</ul>
											</div>
											<?php //if(this->navgation_os('$keys['orc_status']')){}?>
											<div class="table_list_item col-md-1 col-1 p-0 btn-group">
												<button type="button" class="btn-out-sample-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
													<i class="fa fa-gear"></i>
												</button>
												<div class="dropdown-menu dropdown-menu-right">
													<?php $this->get_actions_status($keys['orc_status'], $keys['orc_id']);?>
												</div>
											</div>
										</div>
										<?php }?>
										<nav aria-label="Page navigation example">
											<ul class="pagination">
												<?php 
												for($i = 1; $i <= $num_pages; $i++){

													echo '<li class="page-item"><a class="page-link" href=?task=servico&_action=start&_page='.$i.'>'.$i.'</a></li>';
												}
												?>

											</ul>
										</nav>
									</div>
								</div>
								<?php include_once('template/footer.php'); ?>
							</body>
							</html>
