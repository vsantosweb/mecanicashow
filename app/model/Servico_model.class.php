<?php
namespace model;

defined('BASE_PATH') OR exit('Acesso Negado!');
/**
 * Modelo de classe de gerenciamento de serviços
 *
 * @category 	Funcionario 
 * @author  Vitor Santos
 * @link    https://vsantosweb.com
 */

use config\Database;
class Servico_model extends Database
{
	/**
	* @var $data recebe dados que serão inseridos no banco
	* @var $resp utilizado para confirmação de uma ação dentro do modelo
	* @var $status recebe o status atual de cada serviço
	*/
	
	public $forma_pagamento;
	public static $default_status ='pendente';

	public function check_exists($data)
	{

		$result = $this->db->query("SELECT * FROM ms_clientes WHERE cli_placa='$data'");
		if($result->rowCount() > 0)
		{
			return $result->fetchAll();
		}
	}
	public function create($data)
	{
		$data['orc_valor_total'] = $data['orc_pecas_preco'] + $data['orc_servico_preco'];
		$data['orc_status'] = self::$default_status;
		print_r($data);
		$colunas = array_keys($data);
		$values = array_values($data);
		$values = implode("','", $values);
		$colunas = implode(",", $colunas);

		$sql = $this->db->query("INSERT INTO ms_orcamentos($colunas)VALUES('$values')");
		
	}
	public function load_orcs()
	{
		$result = $this->db->query("SELECT * FROM ms_orcamentos");
		return $result->fetchAll();
	}
	public function get_actions_status($status, $id)
	{
		if($status == 'pendente')
		{	
			echo '<button onclick="budget.start('.$id.')"class="dropdown-item" data-toggle="modal"><i class="fa fa-play"></i> Iniciar </button>';
			echo '<button onclick="budget.remove('.$id.')" class="dropdown-item" data-toggle="modal"><i class="fa fa-trash"></i> Descartar</button>';
			return;
		}elseif($status == 'processando')
		{
			echo '<button onclick="budget.finish('.$id.')" class="dropdown-item" data-toggle="modal"><i class="fa fa-check"></i> FInalizar </button>';
			echo '<button onclick="budget.cancel('.$id.')" class="dropdown-item" data-toggle="modal"><i class="fa fa-close"></i> Cancelar</button>';
			return;
		}elseif($status == 'finalizado')
		{
			echo '<button onclick="budget.closure('.$id.')" class="dropdown-item" data-toggle="modal"><i class="fa fa-money"></i> Fechamento </button>';
		}
	}
	public function initialize($id)
	{
		$sql = $this->db->query("UPDATE ms_orcamentos SET orc_status = 'processando' WHERE orc_id = '$id'");
	}
	public function remove($id, $resp)
	{
		if($resp == 1)
		{
			$result = $this->db->query("DELETE FROM ms_orcamentos WHERE orc_id = '$id'");
		}
		$result = $this->db->query("SELECT * FROM ms_orcamentos WHERE orc_id = '$id'");
		return $result->fetchAll();
	}
	public function cancel($id, $resp)
	{
		if($resp == 1)
		{
			$sql = $this->db->query("UPDATE ms_orcamentos SET orc_status = 'cancelado' WHERE orc_id = '$id'");
		}
		$result = $this->db->query("SELECT * FROM ms_orcamentos WHERE orc_id = '$id'");
		return $result->fetchAll();
	}
	public function finish($id, $resp)
	{
		if($resp == 1)
		{
			$sql = $this->db->query("UPDATE ms_orcamentos SET orc_status = 'finalizado' WHERE orc_id = '$id'");
		}
		$result = $this->db->query("SELECT * FROM ms_orcamentos WHERE orc_id = '$id'");
		return $result->fetchAll();
	}
	public function closure($data)
	{
		$id = $data['id'];
		if($data['resp'] == 1)
		{	
			$this->set_reg_pgto($data);
		}
		$result = $this->db->query("SELECT * FROM ms_orcamentos WHERE orc_id = '$id'");
		return $result->fetchAll();
	}
	public function set_reg_pgto($data)
	{	
		unset($data['id']);
		unset($data['resp']);
		$data['reg_valor_pgto'] = $data['orc_valor_total'];
		unset($data['orc_valor_total']);
		print_r($data);
		$colunas = array_keys($data);
		$values = array_values($data);
		$values = implode("','", $values);
		$colunas = implode(",", $colunas);

		$orc_id = $data['orc_id'];
		$sql = $this->db->query("INSERT INTO ms_reg_pgto($colunas)VALUES('$values')");	

		$sql= $this->db->query("DELETE FROM ms_orcamentos WHERE orc_id='$orc_id'");
	}
	public function get_reg_pgto()
	{
		$sql = $this->db->query("SELECT * FROM ms_reg_pgto");
		return $sql->fetchAll();
	}
	public function get_relat_status($status)
	{
		if($status == 'total')
		{
			$sql = $this->db->query("SELECT * FROM ms_orcamentos");
			return $sql->rowCount();
		}
		if($status == 'pendente')
		{
			$sql = $this->db->query("SELECT * FROM ms_orcamentos WHERE orc_status = '$status'");
			return $sql->rowCount();
		}
		if($status == 'processando')
		{
			$sql = $this->db->query("SELECT * FROM ms_orcamentos WHERE orc_status = '$status'");
			return $sql->rowCount();
		}
		if($status == 'finalizado')
		{
			$sql = $this->db->query("SELECT * FROM ms_orcamentos WHERE orc_status = '$status'");
			return $sql->rowCount();
		}
		if($status == 'cancelado')
		{
			$sql = $this->db->query("SELECT * FROM ms_orcamentos WHERE orc_status = '$status'");
			return $sql->rowCount();
		}
	}
}

