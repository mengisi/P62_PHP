<?php
$tab = array(
    1 => 'f',     //此处的clef是整数，不是字符串
    3 => 'c',
    5 => 'b',
    7 => 'e',
    8 => 'a',
    9 => 'd',
);
var_dump($tab);
//exit;           //Met fin a l'execution du script
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
    <h3>Nouveau Tableau</h3>
    <?php
    echo '<h4>il y a ', count($tab), ' :</h4>';
    ?>

    <?php
    foreach ($tab as $indice => $val) {
        echo "<p>Indice $indice est $val</p>";
    }
    ?>

</div>
<script src="js/main.js"></script>
</body>
</html>