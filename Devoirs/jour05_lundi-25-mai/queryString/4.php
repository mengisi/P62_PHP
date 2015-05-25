<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <link rel="stylesheet" href="style/main.css"/>
</head>
<body>
<div id="main_wrapper">
    <a href="?a=20&b=30&c=40&d=120"><h2>arry = ?</h2></a>
    <?php

    foreach ($_GET as $variable => $valeur) {
        echo $variable, ' = ', $valeur, '</br>';
    }
    ?>

</div>
<script src="js/main.js"></script>
</body>
</html>