<?php

/**
 * Controller Serviços
 *
 * @author  Vitor Santos
 * @link    https://vsantosweb.com
 */

/**
 * Arquivo que controla o CRUD da instancia Serviço
 */
namespace controller;

defined('BASE_PATH') OR exit('Acesso Negado!');

use model\Servico_model;
use model\Estoque_model;

class Servico extends Servico_model
{
	public $title;
	public $page_title = 'Serviços';

	public function start()
	{
		
		$this->title = 'Serviços';
		$data['page'] = (!empty($_GET['_page'])) ? $_GET['_page']: 1;
		$data['orc_list'] = $this->load_orcs();
		$data ['reg_page'] = 6;
		extract($data);

		$num_pages = ceil(count($orc_list) / $reg_page);

		$inicio = ($reg_page * $page) - $reg_page;

		$orcamento_list = $this->load_orcs();

		$result = $this->db->query("SELECT * FROM ms_orcamentos ORDER BY orc_data_reg asc LIMIT $inicio, $reg_page");

		$list = $result->fetchAll();
		include 'views/servico/index.php';

	}
	public function add()
	{
		$this->title = 'Novo Serviço';

		$search = $this->check_exists($_POST['cli_placa']);
		include 'views/servico/add-servico.php';

	}
	public function search()
	{	
		$this->title = 'Novo Serviço';
		include 'views/servico/search-form.php';
	}

	public function query_search()
	{	
		$search = $this->check_exists($_POST['cli_placa']);
		if(!empty($search))
		{	
			include 'views/servico/add-servico.php';
			exit();
		}else
		{
			print 0;
			exit();
		}
	}
	public function create_orcamento()
	{
		print_r($_POST);
		$this->create($_POST);
	}
	public function service_start()
	{
		$this->initialize($_POST['id']);
	}
	public function service_remove()
	{	
		print_r($_POST);
		$data = $this->remove($_POST['id'],$_POST['resp']);
		
	}
	public function service_cancel()
	{	
		print_r($_POST);
		$data = $this->cancel($_POST['id'],$_POST['resp']);
		
	}
	public function service_finish()
	{	
		print_r($_POST);
		$data = $this->finish($_POST['id'],$_POST['resp']);
		
	}
	public function service_closure()
	{	
		$data = $this->closure($_POST);
		include 'views/servico/pgto.php';
		
	}
}