<?php
session_start();
// Destruction de session
$_SESSION = array(); // on réécrit le tableau
session_destroy(); // on détruit le tableau réécrit
header('location:index2.php');
