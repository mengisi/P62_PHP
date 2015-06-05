<?php
session_start();
$admins = array(
	"martin"=>"123", 	
	"marie"=>"abc", 	
	"charles"=>"xyz",	
	);
if(isset($_POST['auth'])){
	$login=$_POST['login'];
	$pass=$_POST['pwd'];

	setcookie("login", $login, time()+24*3600);
	setcookie("pass", $pass, time()+24*3600);
	foreach($admins as $k=>$v){

		if (($login == $k) && ($pass == $v))
		{
			$_SESSION['login'] = $k;
			$_SESSION['pwd'] = $v;
			header('location:admin.php');
			exit();
		}
		else
		{
			// une erreur de saisie ...?
			header('location:erreur.php');

		}
	}



}
		