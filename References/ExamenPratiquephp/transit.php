<?php
require_once('_declare_pages.php');
define('PARAM','p');
$p=null;
if(array_key_exists(PARAM,$_GET)&& (is_numeric($_GET[PARAM]))&&($_GET[PARAM]>=1)&& ($_GET[PARAM]<=5)) {
    $p = $_GET[PARAM];
    foreach ($pages as $k => $v) {

            header("location:$v");
            exit();
    }
}else {
    header("location:index2.php");
}