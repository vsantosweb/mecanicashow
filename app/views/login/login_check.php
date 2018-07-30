<?php include ('../autoload.php'); 

use model\Login_model;

$login = new Login_model($_POST['username'],$_POST['passwd']);

$login->session_init();




?>