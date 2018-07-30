<?php

/**
 * Controller Dashboard
 *
 * @author  Vitor Santos
 * @link    https://vsantosweb.com
 */

/**
 * Arquivo que controla o CRUD da instancia Dashboard
 */
namespace controller;

use model\Servico_model;

class Dashboard extends Servico_model{

	public $page_title = 'Dashboard';
	public $title;
	public function launcher()
	{

		$reg_pgto = $this->get_reg_pgto();
		
		$data['page'] = (!empty($_GET['_page'])) ? $_GET['_page'] : 1;
		$data['reg_page'] = 5;
		extract($data);
		$num_pages = ceil(count($reg_pgto) / $reg_page);
		$inicio = ($reg_page * $page) - $reg_page;
		$result = $this->db->query("SELECT * FROM ms_reg_pgto ORDER BY reg_data_pgto asc LIMIT $inicio, $reg_page");

		$list = $result->fetchAll();

		$this->title = 'Visão Geral de vendas';
		include 'views/dashboard/index.php';
	}
}