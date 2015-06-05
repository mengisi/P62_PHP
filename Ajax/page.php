<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Input avec datalist maj ajax</title>
    <!--<link rel="stylesheet" href="style/main.css"/>-->
</head>
<body>
<div id="main_wrapper">

    <h1>Input avec datalist maj ajax</h1>

    <form>
        <input type="text" id="ville" list="liste_villes" placeholder="Choisir une ville" name="ville">
        <datalist id="liste_villes"></datalist>
    </form>
</div>
<!--<script src="js/main.js"></script>-->
<script>
    var ajax_url = 'http://localhost/P62_disque_C/Ajax/_data_ville.php';
    var datalist = document.getElementById('liste_villes');
    var input = document.getElementById('ville');

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4) {   //Reponse arrive
            if (xmlhttp.status === 200) {
                var reponse = xmlhttp.responseText;       // ici les donnnee sont en json
                var jsonOptions = JSON.parse(reponse);
                console.log(reponse);
                console.log(jsonOptions);
                for (var i = 0; i < jsonOptions.length; i++) {
                    console.log(jsonOptions[i]);
                    var option = document.createElement('option');
                    option.value = jsonOptions[i];
                    datalist.appendChild(option);
                }
            }
        }
    };
    xmlhttp.open('GIT', ajax_url, true);
    xmlhttp.send();
</script>
</body>
</html>