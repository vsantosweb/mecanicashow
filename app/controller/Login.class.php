<?php
/**
 * Controller Login
 *
 * @author  Vitor Santos
 * @link    https://vsantosweb.com
 */

/**
 * Arquivo que controla o CRUD da instancia login
 */
namespace controller;

defined('BASE_PATH') OR exit('Acesso Negado!');

use  model\Login_model;

class Login extends Login_model
{

	public $data = null;
	public $page_title = "Dashboard";

	public function auth()
	{
		include_once 'views/login/index.php';

	}
	public function logout()
	{
		unset($_SESSION['id']);
		unset($_SESSION['usuario']);
		session_destroy();
		header('location:login');

	}
	public function auth_validation()
	{	
		$resp_auth = $this->validate($_POST);
		if(!empty($resp_auth))
		{	
			$_SESSION['id'] = $resp_auth[0]['id'];
			$_SESSION['usuario'] = $resp_auth[0]['usuario'];
			$_SESSION['cargo_nome'] = $resp_auth[0]['cargo_nome'];

			print '1';
		}
		else{

			return false;
		}
	}

}