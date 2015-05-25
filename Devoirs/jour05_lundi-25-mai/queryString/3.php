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
    <a href="?n=5"><h2>n = ?</h2></a>
    <?php

    $n = $_GET;
    if (array_key_exists('n',$_GET)) {
        $nb_n=$_GET['n'];        //此处注意1：是一个array, 2：array的key 不是 0， 而是 'n' 。

    echo '<table>';
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td>$i * $nb_n = ". $i*$nb_n. '</td></tr>';
    }
    echo '</table>';
    }
    ?>

</div>
<script src="js/main.js"></script>
</body>
</html>