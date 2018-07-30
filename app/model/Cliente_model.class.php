<?php 

namespace model;

defined('BASE_PATH') OR exit('Acesso Negado!');
/**
 * Modelo de classe Cliente
 *
 * @category 	Funcionario 
 * @author  Vitor Santos
 * @link    https://vsantosweb.com
 */

/**
 * Possui as regras de inserção do banco de dados
 * recebe @var $data como parametro em todos os methodos que vem do 
 * seu controller primário.
 */

use config\Database;

class Cliente_model extends Database
{
	/**
	* @method $data recebe um array de dados;
	*/

	private $data;

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

		if(!$this->check_user_exists($data['cli_nome'])) {
			if(strlen($data['cli_nome']) < 60)
				
			{
				$sql = $this->db->query("INSERT INTO ms_clientes($colunas)VALUES('$values')");

			}else {

				return true and die('Tamanho maximo é de 10 Caracter'); 
			}

			exit("Usuário cadastrado com sucesso!");
		}
		else{

			exit("O usuário não pode ser cadastrado");
		}				

	}
	public function read($data = null)
	{

		if($data == null)
		{
			$result = $this->db->query("SELECT * FROM ms_clientes");
			return $result->fetchAll();
		}else
		{
			$result = $this->db->query("SELECT $data FROM ms_clientes");
			return $result->fetchAll();
		}

	}
	public function check_user_exists($user)
	{
		/**
		*Retorna true caso o funcionario exista
		*@return boolean 
		*/

		$result = $this->db->query("SELECT cli_nome FROM ms_clientes WHERE cli_nome='$user'");
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
			$sql = $this->db->query("UPDATE ms_clientes SET $colunas='$values' WHERE id='$this_id' ");
		}
		print 'Dados Alterados com sucesso';
	}
	public function delete($data)
	{
		$sql = $this->db->query("DELETE FROM ms_clientes WHERE id='$data'");
		print "Cliente removido!";
	}
	public function modules()
	{
		echo 'cargo!!';
	}

}

