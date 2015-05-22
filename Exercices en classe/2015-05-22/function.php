<?php

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
    <h2>Utilisation des fonctions</h2>
    <?php
    require_once 'utils.php';
    br();
    p('你好！');
    p('Ça va ?');

    liste(array('a', 'b', 'c', 'd', 'e',));  //此处需要创建array

    $noms = array('e', 'd', 'c', 'b', 'a',);
    liste($noms);
    ?>

</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>