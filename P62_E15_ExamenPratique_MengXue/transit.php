<?php
//votre code ici ....
$pages = array(1 => "campus.php", "programmes.php", "admission.php", "services.php", "profs.php");
if (array_key_exists('p', $_GET) && array_key_exists($_GET['p'], $pages)) {
    require_once "{$pages[$_GET['p']]}";
} else {
    require_once 'index2.php';
}