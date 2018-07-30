<?php include ('../autoload.php'); 

session_start();

unset($_SESSION['login']);
unset($_SESSION['passwd']);
unset($_SESSION['cargo']);

if(!isset($_SESSION['login']) and (!isset($_SESSION['passwd']))){

	unset($_SESSION['login']);
	unset($_SESSION['passwd']);
	unset($_SESSION['cargo']);
	header('location:../login/index.php');
}
session_destroy();