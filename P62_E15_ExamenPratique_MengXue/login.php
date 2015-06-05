<?php
$admins = array(
    "martin" => "123",
    "marie" => "abc",
    "charles" => "xyz",
);

$is_authentificating = false;
$is_authentificating = array_key_exists('login', $_POST);
$is_authentificating = array_key_exists('pwd', $_POST);
$is_authentificating = array_key_exists('auth', $_POST);

function authentification_ok($username, $password, $comptes_admin)
{
    $ok = false;
    foreach ($comptes_admin as $key => $valeur) {
        if (array_key_exists($username, $comptes_admin) && ($comptes_admin[$username] == $password)) {
            $ok = true;
            break;
        }
    }
    return $ok;
}

if ($is_authentificating) {
    $result = authentification_ok($_POST['login'], $_POST['pwd'], $admins);
}

if ($result) {
    session_start();

    $_SESSION['user_exist'] = true;
    $_COOKIE['username'] = $_POST['login'];
    $_COOKIE['password'] = $_POST['pwd'];
    setcookie('username', $_POST['login'], time() + 60 * 60 * 24);
    setcookie('password', $_POST['pwd'], time() + 60 * 60 * 24);
    require_once 'admin.php';
} else {
    require_once 'erreur.php';
}
