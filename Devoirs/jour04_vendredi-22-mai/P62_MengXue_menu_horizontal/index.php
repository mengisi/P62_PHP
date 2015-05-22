<?php
require_once 'menu.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <link rel="stylesheet" href="main.css"/>
    <style>
        a:nth-of-type(1){
            background-color: hotpink;
        }
    </style>
</head>
<body>
<div id="main_wrapper">
    <?php
    do_menu();
    ?>
</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>