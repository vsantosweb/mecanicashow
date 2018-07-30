<?php defined('BASE_PATH') OR exit('Acesso Negado!');?>
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
				<div class="col-md-12">
					<?php $this->list();?>
				</div>
				<?php include_once('template/footer.php'); ?>
			</body>
			</html>