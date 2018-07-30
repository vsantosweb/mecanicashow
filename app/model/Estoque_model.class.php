<?php 

namespace model;

defined('BASE_PATH') OR exit('Acesso Negado!');
/**
 * Modelo de classe Estoque
 *
 * @category 	Funcionario 
 * @author  Vitor Santos
 * @link    https://vsantosweb.com
 */

/**
 * Possui as regras de inserção do banco de dados
 * seu controller primário.
 */

use config\Database;

class Estoque_model extends Database
{
	/**
	* @method $data recebe um array de dados;
	*/

	private $data;
	private $modules;

	public function __construct()
	{
		parent::__construct();
	}
	public function create($data)
	{
		$this->data = $data;
		$colunas = array_keys($data);
		$values = array_values($data);
		$values = implode("','", $values);
		$colunas = implode(",", $colunas);

		if(!$this->check_exists($data['pca_codigo'])) {
			if(strlen($data['pca_nome']) < 60)
				
			{
				$sql = $this->db->query("INSERT INTO ms_estoque($colunas)VALUES('$values')");

				

			}else {

				return true and die('Tamanho maximo é de 10 Caracter'); 
			}

			exit("Peça Cadastrada com Sucesso!");
		}
		else{

			exit("O item não pode ser cadastrado");
		}				
	}
	public function read($data = null)
	{

		if($data == null)
		{
			$result = $this->db->query("SELECT * FROM ms_estoque");
			return $result->fetchAll();
		}else
		{
			$result = $this->db->query("SELECT * FROM $data");
			return $result->fetchAll();
		}

	}
	public function check_exists($data)
	{
		/**
		*Retorna true caso o funcionario exista
		*@return boolean 
		*/

		$result = $this->db->query("SELECT pca_codigo FROM ms_estoque WHERE pca_codigo='$data'");
		if($result->rowCount() > 0)
		{
			return true;
		}

	}
	public function update($data)
	{		
		$this_id = $data['id'];
		unset($data['id']);

		foreach($data as $colunas => $values)
		{
			$sql = $this->db->query("UPDATE ms_estoque SET $colunas='$values' WHERE id='$this_id' ");
		}		
		print 'Dados Alterados com sucesso';
	}
	public function delete($data)
	{
		$sql = $this->db->query("DELETE FROM ms_estoque WHERE id='$data'");
		print "Item Excluído!";
	}
	public function change($data, $input)
	{
		$this_id = $data['id'];
		$qtd_updates = $data['pca_qtd'];
		unset($data['id']);

		switch ($input) {
			case 'output':
			$result = $this->db->query("SELECT pca_qtd FROM ms_estoque WHERE id = $this_id");

			//$this->reg_log($qtd_update, $prod_id, 'entrada' , $usr_nome);

			foreach($result->fetchAll() as $key) {

				$current_value = $key['pca_qtd'];

				$total = $current_value - $qtd_updates;

				$sql = $this->db->query("UPDATE ms_estoque SET pca_qtd='$total' WHERE id='$this_id'");

				echo $total;
				break;
			}
			break;
			case 'input':
			$result = $this->db->query("SELECT pca_qtd FROM ms_estoque WHERE id = $this_id");


			//$this->reg_log($qtd_update, $prod_id, 'entrada' , $usr_nome);

			foreach($result->fetchAll() as $key) {

				$current_value = $key['pca_qtd'];

				$total = $current_value + $qtd_updates;

				$sql = $this->db->query("UPDATE ms_estoque SET pca_qtd='$total' WHERE id='$this_id'");

				echo $total;
				break;
			}
			default:
			break;
		}
	}

	public function save_records($data)
	{
		print_r($data);
	}

}

