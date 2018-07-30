<?php
namespace config;

defined('BASE_PATH') OR exit('Acesso Negado!');
/**
 * Inicialização do banco de dados
 *
 * @category    Database
 * @author  Vitor Santos
 * @link    https://vsantosweb.com
 */

/**
 * Classe de conexão ao banco de dados usando PDO no padrão Singleton.
 * Modo de Usar:
 * require_once './Database.class.php';
 * use Extends para aderir os metodos da classe
 * $slq = $this->db->query(database_query)
 */
   
   class Database
    {   
        protected $db;
        protected $host = 'localhost';
        protected $dbname = 'mecanicashow';
        protected $dbuser = 'root';
        protected $dbpasswd = 'developer';

        public function __construct(){
            try 
            {
                //$this->db = new \PDO('mysql:'.$this->host.';dbname='.$this->dbname.';charset=utf8', $this->dbuser, $this->dbpasswd);
                $this->db = new \PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8', $this->dbuser, $this->dbpasswd);
                
            } 
            catch(PDOException $e)
            {
                echo 'ERROR: ' . $e->getMessage();
            }
        }

    }

