<?php
require_once 'mois_data.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <!--<link rel="stylesheet" href="style/main.css"/>-->
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div id="main_wrapper">
    <?php
    echo '<table>';
    $count = 1;
    foreach ($color_month as $color => $month) {
        echo ($count % 3 == 1) ? '<tr>' : '';
        echo "<td style='background-color: $color'>$count</td><td>$month</td>";
        echo ($count % 3 == 0) ? '</tr>' : '';
        $count++;
    }
    echo '</table>';
    ?>
</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>