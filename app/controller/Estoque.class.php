<?php
/**
 * Controller Estoque
 *
 * @author  Vitor Santos
 * @link    https://vsantosweb.com
 */

/**
 * Arquivo que controla o CRUD da instancia Estoque
 */
namespace controller;

defined('BASE_PATH') OR exit('Acesso Negado!');

use  model\Estoque_model;

class Estoque extends Estoque_model{

	public $data;
	public $page_title = 'Estoque';
	public $title = 'Meu Estoque';

	public function launcher()
	{		
		include 'views/estoque/index.php';
	}

	public function list(){
		
		$data['page']  =  (!empty($_GET['_page'])) ? $_GET['_page'] : 1 ;
		$data['list_row']  =  $this->read();
		$data['reg_page'] = 4;
		extract($data);

		$num_pages = ceil(count($list_row) / $reg_page);

		$inicio = ($reg_page * $page) - $reg_page;

		$teste = $this->db->query("SELECT * FROM ms_estoque ORDER BY pca_nome asc LIMIT $inicio, $reg_page");

		$list = $teste->fetchAll();

		$this->title = 'Meu Estoque';
		include 'views/estoque/listar-estoque.php';

	}

	public function add(){

		$this->title = 'Cadastrar Peça';
		include 'views/estoque/add-estoque.php';
	}

	public function save()
	{
		switch($_GET['method'])
		{
			case 'add':
			echo $this->create($_POST);

			break;

			case 'alter':
			if(array_key_exists('update', $_GET))
			{
				$this->update($_POST);
			}
			if(array_key_exists( 'change', $_GET))
			{
				if($_GET['change'] == 'input')
				{
					$this->change($_POST, $_GET['change']);
				}
				elseif($_GET['change'] == 'output')
				{
					$this->change($_POST, $_GET['change']);
				}
			}

			break;

			default:

			exit('Operação inválida');
		}
	}

	public function del(){
		
		$this->delete($_POST['del']);
	}

	public function alter()
	{	
		if(!isset($_POST['alter']))
		{
			die('..');

		}

		$data['id'] = $_POST['alter'];
		extract($data);
		$sql = $this->db->query("SELECT * FROM ms_estoque WHERE id='$id'");
		$alter_data = $sql->fetchAll();

		if(array_key_exists( 'update', $_POST))
		{	
			include 'views/estoque/alterar-estoque.php';
		}

		if(array_key_exists( 'change', $_POST))
		{
			if($_POST['change'] == 'input')
			{
				$this->title = 'Entrada de Materiais';
				include 'views/estoque/change-estoque.php';
			}
			elseif($_POST['change'] == 'output')
			{
				$this->title = 'Retirada de Material';
				include 'views/estoque/change-estoque.php';
			}

		}



	}

	public function estq_change($type)
	{
		if(!isset($_POST['alter']))
		{
			die('..');
		}
		
		$entrada = $this->db->query("SELECT pca_qtd FROM ms_estoque WHERE id = $data");
		include 'views/estoque/estoque-change.php';
	}

}