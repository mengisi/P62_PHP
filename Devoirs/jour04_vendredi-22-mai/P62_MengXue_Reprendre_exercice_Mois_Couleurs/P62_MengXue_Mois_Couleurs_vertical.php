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
    foreach ($color_month as $color => $month){
    echo "<tr><td style='background-color: $color'>$count</td><td>$month</td></tr>";
        $count++ ;
    }
    echo '</table>';

    ?>
</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>