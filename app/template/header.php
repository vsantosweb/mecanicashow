<?php defined('BASE_PATH') OR exit('Acesso Negado!'); ?>
<?php

if(empty($_SESSION['usuario']))
		{
			header('location:http://'.BASE_URL.'/mecanicashow/app/login/');
			
		}
?>
<header class="main_header">
	<div class="top_header">
		<button class="toggle_nav"><i class="fa fa-navicon"></i></button>
		<span class="nav_brand">
			<?php echo $this->page_title; ?> 
		</span>
		<div class="user_options_content">
			<div class="user_nav">
				
			</div>
			<div class="btn-group">
				<button type="button" class="btn-out-sample-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php echo ($_SESSION['usuario']);
					 ?>
				</button>
				<div class="dropdown-menu dropdown-menu-right">
					<a href="?task=login&_action=logout" class="dropdown-item" >Sair</a>
				</div>
			</div>
		</div>
	</div>
	<div class="notify_container" role="alert">
	</div>
	<div class="header_view">
		<h4 class="page_title"><?php echo $this->title; ?></h4>
	</div>
</header>
<?php include 'modals.php'; ?>
