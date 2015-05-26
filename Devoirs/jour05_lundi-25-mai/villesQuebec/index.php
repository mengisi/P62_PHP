<?php
require_once 'data.php';
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
    <form action="form_reception.php" method="post">
        <label>Nom de ville: <input type="text" name='choix' list="villes"/></label>
        <datalist  id="villes">
            <?php
            foreach ($villes as $key =>$nom_ville) {
                echo '<option value=',$key,'>', ucfirst($nom_ville), '</option>';
            }
            ?>
        </datalist>
<br/>

<!--        重要：在name后加上[]， 可自动生成一个array-->

<!--        否则的话，如果name相同，后一个会将前一个覆盖-->


        nom: <input name="nom" type="text">
        mot de passe: <input name="mdp" type="password">
        sex: <input type="radio" value="value" name="sex">
<input type="submit" name="submitMeng" value="soumettre">
    </form>
</div>
<script src="js/main.js"></script>
</body>
</html>