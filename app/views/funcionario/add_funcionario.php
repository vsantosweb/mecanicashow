<?php
require('../../autoload.php');

$f = new model\Funcionario_model;



$data = array(
	"usuario"=>"teste",
	"password"=>"admin"
);
$f->create($data);
print_r($f->read());


$texto = "caralho";

echo strlen($texto);