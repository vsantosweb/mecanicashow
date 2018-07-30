<?php 

namespace model;

defined('BASE_PATH') OR exit('Acesso Negado!');

/**
 * Modelo de classe Funcionario
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

class Funcionario_model extends Database
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

		if(!$this->check_user_exists($data['usuario'])) {
			if(strlen($data['usuario']) < 10)
				
			{
				$sql = $this->db->query("INSERT INTO ms_users($colunas)VALUES('$values')");

			}else {

				die('Tamanho maximo é de 10 Caracter'); 
			}

			return true;
		}
		else{

			return false;
		}				

	}
	public function read($data = null)
	{

		if($data == null)
		{
			$result = $this->db->query("SELECT * FROM ms_users");
			return $result->fetchAll();
		}else
		{
			$result = $this->db->query("SELECT $data FROM ms_users");
			return $result->fetchAll();
		}

	}
	public function check_user_exists($user)
	{
		/**
		*Retorna true caso o funcionario exista
		*@return boolean 
		*/

		$result = $this->db->query("SELECT usuario FROM ms_users WHERE usuario='$user'");
		if($result->rowCount() > 0)
		{
			return true;
		}

	}
	public function update($data)
	{

	}
	public function delete($data)
	{

	}
	public function modules()
	{
		echo 'cargo!!';
	}

}


