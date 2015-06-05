<?php
header("Content-type: text/javascript");
header("Access-Control-Allow-Origin: *");
//response.__setitem__("Content-type", "application/json")

define('SESS_NB_BANANE', 'SESS_NB_BANANE');
define('SESS_NB_POMME', 'SESS_NB_POMME');
define('SESS_NB_POIRE', 'SESS_NB_POIRE');
session_start();
$_SESSION[SESS_NB_BANANE]++;

echo json_encode(array(
    SESS_NB_BANANE => $_SESSION[SESS_NB_BANANE],
    SESS_NB_POMME => $_SESSION[SESS_NB_POMME],
    SESS_NB_POIRE => $_SESSION[SESS_NB_POIRE],
));