<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <link rel="stylesheet" href="style/main.css"/>
</head>
<body>
<div id="main_wrapper">
    <h2><a href="?prenom=Meng&nom=Xue">Nom et Prénom</a></h2>

    <h2>Bonjour, <?php
        if (!array_key_exists('nom', $_GET) && !array_key_exists('prenom', $_GET)) {
            echo 'Inconnu !';
        }
        echo array_key_exists('prenom', $_GET) ? $_GET['prenom'] . ' ' : '';
        echo array_key_exists('nom', $_GET) ? $_GET['nom'] : '';
        ?></h2>


</div>
<script src="js/main.js"></script>
</body>
</html>