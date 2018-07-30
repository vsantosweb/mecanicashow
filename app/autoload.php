<?php

include_once('config/config.php');

function autoload($file_name) {

	 $file_name = BASE_PATH . '/app/' . str_replace('\\', '/', $file_name) . '.class.php';

	 if(!file_exists($file_name))
	 {
	 	return false;
	 	
	 }

	 include_once($file_name);
}

spl_autoload_register('autoload');

 defined('BASE_PATH') OR exit('Acesso Negado!'); 