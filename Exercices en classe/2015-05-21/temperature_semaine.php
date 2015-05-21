<?php
$temperatures = array(-4, -1, 8, 15, 8, 3, 2);  //当建立一个tableau时，变量名最好用复数，以示区别
$temperatures[]=-5;                               //增加一个数(在最后)
$temperatures[10]=25;                   //增加一个数(指定位置)
var_dump($temperatures);
print_r($temperatures);        //presentation du tableau de facon hierarchique
//exit;                             //Met fin a l'execution du script
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
    <h1>Tableau temperatures</h1>
    <?php
    echo '<p>il y a ', count($temperatures), ' temperatures.</p>';
    ?>
    <?php
    echo '<p>';

    //此处有一个位置是空的，所以用for会出错，应用for each
    // for ($i = 0; $i < count($temperatures); $i++) {
   //     echo $temperatures[$i], ' ';
  //  }

    foreach ($temperatures as $val){
        echo $val, ' ';
    }

    foreach ($temperatures as $clef => $val){
        echo "</p>temperature a la clef $clef est $val<p>";
    }

    echo '</p>';
    ?>

</div>
<script src="js/main.js"></script>
</body>
</html>