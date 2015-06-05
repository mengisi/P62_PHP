<?php
$login_status='';
require_once '_loginout.php';
if (array_key_exists('connect', $_POST)) {
    require_once('_authentification.php');
    if (authenticate($_POST['username'], $_POST['password'])) {
        do_login($_POST['username']);
    } elseif (array_key_exists('disconnect', $_POST)) {
        do_logout();
    }
}


?>