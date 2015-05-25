<?php
$name=array_key_exists('name',$_GET)? $_GET['name'] : null;
$nom_famille=array_key_exists('lastname',$_GET)? $_GET['lastname'] : null;
//var_dump($_GET['name']);
var_dump($_GET);
echo (!is_null($name))? $name:'';
echo '<br/>';
echo (!is_null($nom_famille))? $nom_famille:'';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <!--<link rel="stylesheet" href="style/main.css"/>-->
</head>
<body>
<div id="main_wrapper">
    <ul>
        <li><a href="?name=gilles&lastname=aaaa">Gilles</a> </li>
        <li><a href="?name=meng&lastname=bbbb">Meng</a> </li>
        <li><a href="?name=jorel&lastname=cccc">Jorel</a> </li>
        <li><a href="?">Rien</a> </li>
    </ul>

</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>