<?php
//var_dump($_POST);
//var_dump($_POST['Nom']);

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
    echo '<h3>L\'employé '. $_POST['Nom']. ', originaire de la ville de '. $_POST['Ville']. ', est affecté au département '. $_POST['ListeDep']. ' depuis '. $_POST['Annee'].
    '. Il appartient à la catégorie '. $_POST['OpCat']. ' et exerce en tant que '. $_POST['ListeCadre']. $_POST['OpSituation']. '.</h3>';
    ?>
</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>