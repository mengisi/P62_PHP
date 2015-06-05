<?php
require_once('login.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title></title>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<body>
<div id="loginForm">
	<h1>Authentification</h1>

	<form method="post" action="login.php">
		<p>Vous essayez d'accéder à un espace protégé, veuillez vous authentifier.</p>
		<table>
			<tr>
				<th>Login</th>
				<td><input type="text" name="login" class="textbox" value="<?php echo $_COOKIE['login'];?>" /></td>
			</tr>
			<tr>
				<th>Mot de passe</th>
				<td><input type="password" name="pwd" class="textbox" value="<?php echo $_COOKIE['pass'];?>" /></td>
			</tr>
			<tr>
				<td></td>
				<td><label><input type="checkbox" name="autologin" />Connexion automatique</label></td>
			</tr>
			<tr>
				<td colspan="2" class="button"><input type="submit" name="auth" value="Connexion" /></td>
			</tr>
		</table>
	</form>
</div>
	</body>
</html>
