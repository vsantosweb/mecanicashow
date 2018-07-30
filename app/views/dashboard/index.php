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
				<div class="col-md-9">
					<?php 
					$soma_pgto = 0;
					$media_pgto = 0;
					foreach($list as $rows){?>
							<?php
							 $soma_pgto += $rows['reg_valor_pgto'];
							?>
						<div class="row table_list_container" id="<?php echo $rows['id'];?>">
							<div class="fa fa-money list_icon table_list_item hidden-sm-down col-md-1 p-0">
							</div>
							<div class="table_list_item col-md-3 col-6 p-0 m-0">
								<ul>
									<li class="list_md_text">ORC00<?php echo $rows['pg_id'];?></li>
								</ul>
							</div>
							<div class="table_list_item col-md-3 col-5 p-0 m-0">
								<ul>
									<li class="list_md_text"><i class="fa fa-user"></i> <?php echo $rows['cli_nome'];?></li>
								</ul>
							</div>
							<div class="table_list_item hidden-mob col-md-2 col-sm-3 col-6 p-0 m-0">
								<ul>
									<li class="list_md_text"><?php echo $rows['cli_placa'];?></li>
								</ul>
							</div>
							<div class="table_list_item hidden-mob col-md-2 col-sm-3 col-6 p-0 m-0">
								<ul>
									<li class="list_md_text"><?php echo $rows['reg_data_pgto'];?></li>
								</ul>
							</div>
							<div class="table_list_item hidden-mob col-md-1 col-sm-3 col-6 p-0 m-0">
								<ul>
									<li class="list_md_text">R$ <?php echo $rows['reg_valor_pgto'];?></li>
								</ul>
							</div>
						</div>
						<?php $total_recebido =  $soma_pgto;}?>
					</div>
					<div class="col-md-3">
						<div class="stat_card">
							<div class="stat_card_hd">
								<h6 class="text-center">Vendas</h6>
							</div>
							<div class="stat_card_bd">
								<h1 class="text-center stat_number">R$ <?php echo $total_recebido; ?><h1>
							</div>
						</div>
					</div>
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<?php 
							for($i = 1; $i <= $num_pages; $i++){
								echo '<li class="page-item"><a class="page-link" href=?task=dashboard&_action=launcher&_page='.$i.'>'.$i.'</a></li>';
							}
							?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<?php include_once('template/footer.php'); ?>
	</body>
	</html>
