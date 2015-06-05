<?php
session_start();
unset($_SESSION['user_exist']);
$_SESSION['favorite_color'] = 'blue';

//session_destroy();
//$_SESSION = array();
$params = session_get_cookie_params();
var_dump($params);
var_dump(session_name());
//setcookie(session_name(), '', time() - 42000, '/');

/*setcookie(session_name(), '', time() - 42000,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]
);*/
//session_destroy();
