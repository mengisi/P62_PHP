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

    <?php
    for ($I = 1; $I <= 9; $I++) {
        for ($i = 1; $i <= $I; $i++) {
            echo $i . ' * ' . $I . ' = ' . $i * $I . '&nbsp&nbsp&nbsp&nbsp';
        }
        echo '<br/>';
    }
    ?>

</div>
<script src="js/main.js"></script>
</body>
</html>