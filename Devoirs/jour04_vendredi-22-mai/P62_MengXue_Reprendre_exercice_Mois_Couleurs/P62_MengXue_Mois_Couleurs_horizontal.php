<?php
require_once 'mois_data.php';
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
    echo '<table>';

    $count=1;
    echo '<tr>';
    foreach ($color_month as $color => $month){
        echo "<td style='background-color: $color'>$count</td>";
        $count++ ;
    }
    echo '</tr>';

    echo '<tr>';
    foreach ($color_month as $month){
        echo "<td>$month</td>";
    }
    echo '</tr>';

    echo '</table>';

    ?>
</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>