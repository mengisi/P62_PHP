
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
    $nb=rand(1,12);
    for($i=1;$i<13;$i++){
        echo '<p>', $i, '*', $nb, ' = ', $i*$nb, '</p>';
    }
    ?>


</div>
<script src="js/main.js"></script>
</body>
</html>