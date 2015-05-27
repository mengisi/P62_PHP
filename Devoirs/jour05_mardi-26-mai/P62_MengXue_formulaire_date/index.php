<?php
require_once 'data.php';
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
    <form action="reception.php" method="post">
    <label for="jour">Jour: </label>
    <select id="jour" name="jour">
        <?php
        for ($i = 1; $i <= 31; $i++) {
            echo "<option>$i</option>";
        }
        ?>
    </select>

    <label for="mois">Mois: </label>
    <select id="mois" name="mois">
        <?php
        foreach($tb_mois as $key=>$valeur){
            echo "<option value='$key'>$valeur</option>";
        }
        ?>
    </select>

    <label for="annee">Annee: </label>
    <select id="annee" name="annee">
        <?php
        for ($i = 1990; $i <= 2020; $i++) {
            echo "<option>$i</option>";
        }
        ?>
    </select>
<input type="submit" value="OK">
    </form>
</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>