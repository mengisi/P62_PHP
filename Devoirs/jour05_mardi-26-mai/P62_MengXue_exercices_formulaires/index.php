<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <!--<link rel="stylesheet" href="style/main.css"/>-->
    <style>
        form{
          margin: auto;
            width: 50%;
        }
        .g{
            float: left;
            clear: left;
            width: 30%;
        }
        input, label,select{
            margin: 5px 0;
        }
        h1{
            width: 50%;
            margin: auto;
        }

    </style>
</head>
<body>
<div id="main_wrapper">
    <h1>Formulaire Attestation</h1>
    <form action="attestation.php" method="post">
        <label class="g" for="nom">Nom: </label>
        <input class="d" type="text" id="nom" name="Nom">
        <label class="g">Categorie: </label>
        <div class="d" id="radio">
        <label><input type="radio" name="OpCat"> 1 </label>
        <label><input type="radio" name="OpCat"> 2 </label>
        <label><input type="radio" name="OpCat"> 3 </label>
        <label><input type="radio" name="OpCat"> 4 </label>
        </div>
        <label class="g" for="departement">Departement: </label>
        <select class="d" id="departement" name="ListeDep">
            <option>informatique</option>
            <option>bureau</option>
            <option>administration</option>
            <option>metier</option>
        </select>
        <br/>
        <label class="g" for="cadre">Cadre: </label>
        <select class="d" id="cadre" name="ListeCadre">
            <option>ingenieur</option>
            <option>menage</option>
            <option>nourriture</option>
            <option>breuvage</option>
        </select>
        <label class="g">Situation: </label>
        <div class="d" id="radio2">
            <label><input type="radio" name="OpSituation"> Permannant </label>
            <label><input type="radio" name="OpSituation"> Vacataire </label>
        </div>
        <label class="g" for="affectation">Annee Affectation: </label>
        <input class="d" type="text" id="affectation" name="Annee">
        <br/>
        <label class="g" for="origine">Ville Origine: </label>
        <input class="d" type="text" id="origine" name="Ville">
        <br/>
        <input id="button" type="submit" value="Envoyer">
    </form>

</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>