<?php
require_once 'data.php';
//  var_dump($_POST);
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
    $date = checkdate($_POST['mois'], $_POST['jour'], $_POST['annee']);
    if ($date) {
        echo '<h2>Vous avez choisi de vous inscrire au ', $_POST['jour'], ' du mois de ', $tb_mois[$_POST['mois']], ' de l’année ', $_POST['annee'], '.</h2>';
    } else {
        echo '<h2>Date non valide !</h2>';
    }
    ?>
</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>