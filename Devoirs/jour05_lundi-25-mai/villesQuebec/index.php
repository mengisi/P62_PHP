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
    <form action="#">
        <label>Nom de ville: <input type="text" list="villes"/></label>
        <datalist id="villes">
            <?php
            foreach ($villes as $nom_ville) {
                echo '<option>', ucfirst($nom_ville), '</option>';
            }
            ?>
        </datalist>


    </form>
</div>
<script src="js/main.js"></script>
</body>
</html>