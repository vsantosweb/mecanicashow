<?php include('../config/config.php'); ?>
<?php defined('BASE_PATH') OR exit('Acesso Negado!'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mecarshow - Login</title>
	<?php include('../template/head.php'); ?>
</head>
<body>
	<div class="login_wrapper">
		<div class="login_container">
		<h1 class="text-center logo_brand">MECANICASHOW</h1>
		<form id="form_login">
			<div class="form-group">
				<label class="label-light">Login</label>
				<input name="username" type="text" class="form-control" placeholder="Login" value="admin">
				<small id="emailHelp" class="helper-text"></small>
			</div>
			<div class="form-group">
				<label class="label-light">Password</label>
				<input name="passwd" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="admin">
				<small id="emailHelp" class="helper-text"></small>
			</div>
			<button type="submit" class="btn btn-block btn-succ">Acessar</button>
		</form>
	</div>
	</div>
	<?php include('../template/footer.php'); ?>
</body>
</html>