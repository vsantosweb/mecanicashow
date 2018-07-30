<?php
/**
 * Configuração do path principal do sistema
 *
 * @category    Config
 * @author  Vitor Santos
 * @link    https://vsantosweb.com
 */

/**
 * Este arquivo define as 2 url principais do sistema
 * Aqui definimos @var BASE_PATH onde ela será implementada em todo o sistema
 * impedindo o acesso direto aos arquivos
 */

define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']. '/mecanicashow/');
define('BASE_URL',$_SERVER['SERVER_NAME']);
defined('TRUE') OR exit('Acesso Negado!');
