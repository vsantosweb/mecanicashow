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

use model\Funcionario_model;

class Login_model extends Funcionario_model
{
	private $auth_data;
	public function __construct()
	{
		parent::__construct();
	}

	public function validate($post_data)
	{
		/**
		* Faz uma query, onde verifica se o usuario e senha estão corretos e verifica qual tipo de permissão o usuário tem.
		*/
		extract($post_data);
		$result = $this->db->query("SELECT id, usuario, password, cargo_nome FROM ms_users INNER JOIN ms_cargos ON (cargo_id = cargo_id_funcionario) WHERE usuario='$username' AND password='$passwd'");

		if($result->rowCount() > 0)
		{
			return $result->fetchAll();
		}else{

			return false and exit('Dados Inválidos');
		}
	}

}
