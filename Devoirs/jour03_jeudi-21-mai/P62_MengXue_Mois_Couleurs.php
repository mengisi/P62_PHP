<?php
$mois = array(1 => "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
$couleurs = array(1 => "blue", "white", "Red", "Yellow", "Grey", "Lime", "lightblue", "fuchsia", "lightgrey", "olive", "pink", "purple");



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <link rel="stylesheet" href="style/main.css"/>
    <style>
        table {
            border-collapse: collapse;
            display: inline-block;
            margin-left: 5px;
        }

        td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div id="main_wrapper">

    <?php
    echo '<table id="table1">';
    for ($i = 1; $i <= 12; $i++) {
        echo "<tr><td style='background-color: $couleurs[$i]'>$i</td><td>$mois[$i]</td></tr>";
    }
    echo '</table>';
    ?>

    <?php
    echo '<table id="table2">';
    for ($i = 1; $i <= 10; $i = $i + 3) {
        echo '<tr>';
        for ($I = $i; $I < $i + 3; $I++) {
            echo "<td style='background-color: $couleurs[$I]'>$I</td><td>$mois[$I]</td>";   //注意此处为 I 而非 i
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>

    <?php
    echo '<table id="table3">';
    echo '<tr>';
    for ($i = 1; $i <= 12; $i++) {
        echo "<td style='background-color: $couleurs[$i]'>$i</td>";
    }
    echo '</tr>';
    echo '<tr>';
    for ($i = 1; $i <= 12; $i++) {
        echo "<td>$mois[$i]</td>";
    }
    echo '</tr>';
    echo '</table>';
    ?>

</div>
<script src="js/main.js"></script>
</body>
</html>