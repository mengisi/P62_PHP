<?php
define('HOME_PAGE','accueil.php');
require_once '_loginout.php';
if(!check_login()){
    header('Location:'.HOME_PAGE);
}



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
    <?php

    ?>
</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>