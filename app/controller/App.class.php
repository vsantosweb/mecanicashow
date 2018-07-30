<?php

/**
 * Configuração do path principal do sistema
 *
 * @author  Vitor Santos
 * @link    https://vsantosweb.com
 */

/**
 * Arquivo usado para instanciar todas as classes do sistema apenas 1 vez
 * com este arquivo você poderá acessar qualquer método de uma classe 
 * utilizando QueryString, definimos 2 prefixos para controlar esse acesso:
 * task & _action, são responsáveis por controlar a navegação do sistema.
 */
namespace controller;

defined('BASE_PATH') OR exit('Acesso Negado!');

class App
{

	public function __construct()
	{	
		session_start();
		$this->init();
		
	}
	public  function init()
	{	
		$app['login'] = new Login();
		$app['dashboard'] = new Dashboard();
		$app['cliente'] = new Cliente();
		$app['estoque'] = new Estoque();
		$app['servico'] = new Servico();
		extract($app);
		
		/** Este escopo cria atributos com a chave de cada item do array $app.
		*	Cada item possui a instnacia de um objeto e sendo possivel acessar seus metodos
		*/

		foreach ($app as $object => $value) {
			$this->$object = $$object;
		}

		$controller = $_GET['task'];
		
		$method = $_GET['_action'];

		if(empty($_GET))
		{
			header('location:?task=servico&_action=start');
		}

		if(class_exists('controller\\'.$controller))
		{
			if(!method_exists('controller\\'.$controller, $method))
			{
				header('location:http://'.BASE_URL.'/mecanicashow/app/');

			}else{

				/**
				* @param $this define o controller passado pela URL através do GET
				* @return instancia da classe.
				*/
				
				sha1($this->$controller->$method());
			}
		}else{
			die("BAD REQUEST");
		}
	}

}