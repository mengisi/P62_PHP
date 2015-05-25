<?php
require_once 'lib_temperature.php';
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

    afficher_temperatures($date_temperature);

    unset($date_temperature['2015-05-25']);
    unset($date_temperature['2015-05-28']);

    afficher_temperatures($date_temperature);
    ?>
</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>