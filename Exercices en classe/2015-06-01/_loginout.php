<?php
define('SESSION_USERNAME','session_username');
session_start();

function check_login(){
    $result=array_key_exists('session_username',$_SESSION);
    return $result;
}

function do_login($username){
$_SESSION['session_username']=$username;
    }

function do_logout(){
    unset($_SESSION['session_username']);
}

