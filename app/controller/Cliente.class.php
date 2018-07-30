<?php
/**
 * Controller cliente
 *
 * @author  Vitor Santos
 * @link    https://vsantosweb.com
 */

/**
 * Arquivo que controla o CRUD da instancia Cliente
 */
namespace controller;

defined('BASE_PATH') OR exit('Acesso Negado!');

use  model\Cliente_model;

class Cliente extends Cliente_model{

	public $data;
	public $page_title = "Clientes";
	public $title;
	public function launcher()
	{
		$data['title'] = 'CLIENTES';

		extract($data);

		include 'views/clientes/index.php';
	}

	public function list(){

		$this->title = 'Meus clientes';
		$data['page']  =  (!empty($_GET['_page'])) ? $_GET['_page'] : 1 ;
		$data['list_row']  =  $this->read();
		$data['reg_page'] = 4;
		extract($data);

		$num_pages = ceil(count($list_row) / $reg_page);

		$inicio = ($reg_page * $page) - $reg_page;

		$teste = $this->db->query("SELECT * FROM ms_clientes ORDER BY cli_nome asc LIMIT $inicio, $reg_page");

		$list = $teste->fetchAll();

		include 'views/clientes/listar-cliente.php';

	}

	public function add(){

		$this->title = 'Cadastrar Cliente';
		include 'views/clientes/add-cliente.php';
	}
	public function save()
	{
		switch($_GET['method'])
		{
			case 'add':

			echo $this->create($_POST);

			break;

			case 'alter':

			$this->update($_POST);

			break;

			default:

			die('Operação inválida');
		}
		
	}

	public function del(){
		
		$this->delete($_POST['del']);
	}
	public function alter()
	{	$data['title'] = 'Alterar do dados cliente';
		
		if(!isset($_POST['alter']))
		{
			die('otario');
		}
		$data['id'] = $_POST['alter'];
		extract($data);
		echo $id;
		$sql = $this->db->query("SELECT * FROM ms_clientes WHERE id='$id'");

		$alter_data = $sql->fetchAll();
		extract($alter_data);
		
		include 'views/clientes/alterar-cliente.php';
		
	}

}