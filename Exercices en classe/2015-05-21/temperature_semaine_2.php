<?php
$temperatures = array(
    'lundi 18 mai' => -4,
    'mardi 19 mai' => -1,
    'mercredi 20 mai' => 8,
    'jeudi 21 mai' => 15,
    'vendredi 22 mai' => 8,
    'samedi 23 mai' => 3,
    'dimanche 24 mai' => 2
);
$temperatures['vendredi 30 mai'] = 50;                               //增加一个数
var_dump($temperatures);
print_r($temperatures);        //presentation du tableau de facon hierarchique
//exit;                             //Met fin a l'execution du script
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <style>
        .jour {
            color: blue;
        }

        .temp {
            color: red;
        }
    </style>
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
    foreach ($temperatures as $jour => $val) {
        echo "<p>temperature a la date <span class='jour'> $jour </span>est <span class='temp'> $val</span></p>";
    }
    ?>

</div>
<script src="js/main.js"></script>
</body>
</html>